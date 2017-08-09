<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class HomeController extends Controller
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
        $client = new Client(['base_uri' => 'http://localhost:8000/api/v1/']);

        // Send a GET request to http:127.0.0.1/path/to/api/ 
        // and method name is apiName 
        // with api authentication (username and password)
        $key = session('api_key');
        $headers = ['Authorization' => $key];
        if (!($request->session()->has('current_user'))) {
            $response = $client->request('GET', 'authuser',  ['headers' => $headers]);
            $content = $response->getBody()->getContents();
            //echo '<pre>'; var_dump($content)
            $current_user = json_decode($content);
            session(['current_user' => $current_user]);
            if($response->getStatusCode() == '200') {
                $request->session()->flash('success', 'Hey! You have successfully Login');    
            }
        }
        else {
            $current_user = session('current_user');
        }    
        //dd($response);
        return view('home',['user' => $current_user])->with(["page" => "home"]);
    }
}
