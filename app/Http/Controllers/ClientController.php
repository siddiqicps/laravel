<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;


class ClientController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            $client = new Client(['base_uri' => 'http://localhost:8000/api/v1/']);

            // Send a GET request to http:127.0.0.1/path/to/api/ 
            // and method name is apiName 
            // with api authentication (username and password)
            $key = session('api_key');
            $current_user = session('current_user');
            $headers = ['Authorization' => $key];
            $response = $client->request('GET', 'clients',  ['headers' => $headers]);
            $content = $response->getBody()->getContents();
            //echo '<pre>'; var_dump($content);
            $body = json_decode($content)->result;
            //dd($response);
            return view('client.clients',['clients' => $body,'user' => $current_user])->with(["page" => "client.clients"]);
        } catch (RequestException $e) {
            $request->session()->flash('error','Unauthorized access, your session has expired.');
            return view('auth.login')->with(['page'=>'auth.login']);
        }
    }

    public function createClient(Request $request)
    {
        $key = session('api_key');
        $current_user = session('current_user');
        if($request->isMethod('post')) {
            try{
                $client = new Client(['base_uri' => 'http://localhost:8000/api/v1/']);
                // Send a GET request to http:127.0.0.1/path/to/api/ 
                // and method name is apiName 
                // with api authentication (username and password)
                $headers = ['Authorization' => $key];
                $response = $client->request('GET', 'clients',  ['headers' => $headers]);
                $content = $response->getBody()->getContents();
                //echo '<pre>'; var_dump($content);
                $body = json_decode($content)->result;
                //dd($response);
                return view('clients',['clients' => $body,'user' => $current_user])->with(["page" => "clients"]);
            } catch (ClientException $e) {
                $request->session()->flash('error','');
            } catch(RequestException $e){
                if($e->getResponse()->getStatusCode() == ''){
                    $request->session()->flash('error','Unauthorized access.Your session has expired.');
                    return view('auth.login')->with(['page'=>'auth.login']);
                }
            }
        } 
        else {
            return view('client.add',['user'=>$current_user])->with(['page' => 'client.add']);
        }       
    }
}
