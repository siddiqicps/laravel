<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function login(Request $request) {
            $this->validate($request,[
                    'email' => 'required|exists:users',
                    'password' => 'required'
                ]);
            try {
                $client = new Client(['base_uri' => 'http://localhost:8000/api/v1/']);

                // Send a GET request to http:127.0.0.1/path/to/api/ 
                // and method name is apiName 
                // with api authentication (username and password)
                $response = $client->request('GET', 'login', [
                                 'query' => ['email'=>$request['email'], 'password'=>$request['password']]
                                 ]);

                // check the response by
                //echo '<pre>'; var_dump(json_decode($response->getBody()->getContents())->api_key); exit;
                $content = $response->getBody()->getContents();
                if($response->getStatusCode() == '200') {
                    $key = json_decode($content)->api_key;
                    session(['api_key' => $key]);
                    return redirect()->action('HomeController@index');
                }
            } catch(RequestException $e){
                if($e->getStatusCode() == '401') {
                    $request->session()->flash('error','Unauthorized access, invalid login details.');
                    return view('auth.login')->with(['page' => 'auth.login']);
                }
            }
            //dd($response->getBody()->getContents());
            //dd($response);
    }
}
