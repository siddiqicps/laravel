<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class ContactController extends Controller
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
    public function index()
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/api/v1/']);

        // Send a GET request to http:127.0.0.1/path/to/api/ 
        // and method name is apiName 
        // with api authentication (username and password)
        $key = session('api_key');
        $current_user = session('current_user');
        $headers = ['Authorization' => $key];
        $response = $client->request('GET', 'contacts',  ['headers' => $headers]);
        $content = $response->getBody()->getContents();
        //echo '<pre>'; var_dump($content);
        $body = json_decode($content)->result;
        //dd($response);
        return view('contacts',['contacts' => $body,'user' => $current_user])->with(["page" => "contacts"]);
    }
}
