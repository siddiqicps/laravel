<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use GuzzleHttp\Client;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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
        //$this->middleware('guest');

    }

    /**
     * Display the password reset view for the given token.
     *
     * If no token is present, display the link request form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string|null  $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function showResetForm(Request $request, $token = 'null')
    {
        $current_user = session('current_user');
        return view('auth.passwords.reset',['user' => $current_user])->with(
            ['page' => 'auth.passwords.reset', 'token' => $token, 'email' => $request->email]
        );
    }

    /**
     * Reset the given user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function reset(Request $request)
    {
        $this->validate($request, $this->rules(), $this->validationErrorMessages());

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $client = new Client(['base_uri' => 'http://localhost:8000/api/v1/']);

        // Send a GET request to http:127.0.0.1/path/to/api/ 
        // and method name is apiName 
        // with api authentication (username and password)
        $key = session('api_key');
        $current_user = session('current_user');
        $headers = ['Authorization' => $key];
        $body = $request->input();
        //echo '<pre>'; var_dump($body); exit;
        $response = $client->request('POST', 'reset',  ['headers' => $headers, 'form_params' => $body]);
        //echo '<pre>'; var_dump($response->getBody()->getContents()); exit;
        if($response->getStatusCode() == '200') {
            $request->session()->flash('success','Your password has been reset successfully');
            return redirect($this->redirectPath())->with(["page" => "home",'user' => $current_user]);
        }
    }
}
