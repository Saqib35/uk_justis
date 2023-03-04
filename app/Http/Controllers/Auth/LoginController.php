<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\TwilioSMSController;


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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = "/home";
    protected function redirectTo()
    {
        if (auth()->user()->user_type == 'pro') {
            return 'pro-dashboard';
        }else if(auth()->user()->user_type == 'client'){
            return 'client/dashboard';
        }else{
            return 'admin-dashboard';
        }
    }

    public function login(Request $request)
    {
        // dd(Hash::make("12345678"));
    
        if($request->user_type=="pro"){
            $request->validate([
                'mobile' => 'required',
                'user_type'=>'required'
            ]);
            if($request->filled('otp')){
                if(Auth::attempt(['mobile' => $request->mobile, 'password' =>"12345678",'user_type'=>'pro','otp'=>$request->otp])) {
                    session::flash('success','Hi '.auth()->user()->last_name.',Welcome Pro User From Dashboard!');
                    return redirect('pro-dashboard');
                }else{
                    session::flash('not_success',"OTP Does't Match");
                    return redirect()->back()->withInput($request->all());
                }
            }else{
                $User=User::where('mobile',$request->mobile)->where('user_type',"pro")->get();
                if(count($User)==1){
                    $otp=mt_rand(1000,9999);
                    // send otp call function
                    if(TwilioSMSController::sendSMS($request->mobile,$otp)=="success"){
                        User::where('mobile',$request->mobile)->update(['otp'=>$otp]);
                        session::flash('sent_otp',$otp);
                        session::flash('success',"OTP sent successfully.");
                        return redirect()->back()->withInput($request->all());    
                    }else{
                        session::flash('not_success',"OTP not sent Please try Again Later");
                        return redirect()->back()->withInput($request->all()); 
                    }
                }else{
                    session::flash('not_success',"Number Does't Exist");
                    return redirect()->back()->withInput($request->all());
                }
            }
        }else if($request->user_type=="client"){
            $request->validate([
                'mobile' => 'required',
                'user_type'=>'required'
            ]);
            if($request->filled('otp')){
                if(Auth::attempt(['mobile' => $request->mobile, 'password' =>"12345678",'user_type'=>'client','otp'=>$request->otp])) {
                    session::flash('success','Hi '.auth()->user()->last_name.',Welcome Client User From Dashboard!');
                    return redirect('client-dashboard');
                }else{
                    session::flash('not_success',"OTP Does't Match");
                    return redirect()->back()->withInput($request->all());
                }
            }else{
                $User=User::where('mobile',$request->mobile)->where('user_type',"client")->get();
                if(count($User)==1){
                    $otp=mt_rand(1000,9999);
                    // send otp call function
                    if(TwilioSMSController::sendSMS($request->mobile,$otp)=="success"){
                        User::where('mobile',$request->mobile)->update(['otp'=>$otp]);
                        session::flash('sent_otp',$otp);
                        session::flash('success',"OTP sent successfully.");
                        return redirect()->back()->withInput($request->all());    
                    }else{
                        session::flash('not_success',"OTP not sent Please try Again Later");
                        return redirect()->back()->withInput($request->all()); 
                    }
                }else{
                    session::flash('not_success',"Number Does't Exist");
                    return redirect()->back()->withInput($request->all());
                }
            }
        }else{
            $request->validate([
                'email' => 'required',
                'password'=>'required'
            ]);
            if(Auth::attempt(['email' => $request->email, 'password' =>$request->password,'user_type'=>'admin'])) {
                session::flash('success',"Welcome Admin From Admin Dashboard!");
                return redirect('admin-dashboard');
            }else{
                session::flash('not_success',"Credentials Does't Match");
                return redirect()->back()->withInput($request->all());
            }
        }


        return redirect("pro/login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
