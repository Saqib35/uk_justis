<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Country;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TwilioSMSController;
use App\Models\Pro_Category;
class Client_Controller extends Controller
{
    //show client dashboard
    public function show_client_dashboard(){
        return view("client.index");
    }

    //show profile page
    public function show_profile_page(){
        $countries=Country::all();  
        return view("client.page-profile",['countries'=>$countries]);
    }

    //update profile 
    public function update_profile(Request $request){
        $validator=Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'country' => ['required', 'string', 'max:100'],
        ]);

        if ($validator->fails()) {
            $messages = $validator->messages();
            session::flash('not_success',"Validation Error Profile Not Updated!");
            return redirect()->back()->withErrors($messages);
        }

        $user =Auth::user();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->email = $request['email'];
        $user->country = $request['country'];
        $user->date_of_birth = $request['date_of_birth'];
        $user->address = $request['address'];
        $user->post_code = $request['post_code'];
        $user->city = $request['city'];
        $user->save();

        session::flash('success',"Profile Updated Successfully!");
        return back();
    }

    //show change mobile 
    public function show_change_mobile_page(){
        return view("client.change-mobile-client");
    }

    //update mobile 
    public function update_mobile(Request $request){
        $validator=Validator::make($request->all(), [
            'mobile' => ['required','sometimes', 'string', 'max:50', 'unique:users'],
        ]);

        if ($validator->fails()) {
            $messages = $validator->messages();
            session::flash('not_success',"Validation Error Mobile Number Not Updated!");
            return redirect()->back()->withErrors($messages);
        }
       
        if($request->filled('otp')){
            $response=User::where('mobile',auth()->user()->mobile)->where('otp',$request->otp)->where('status',1)->get();
            if(count($response)==1) {
                $user =Auth::user();
                $user->mobile = $request['mobile'];
                $user->save();

                session::flash('success','Mobile Number Successfully Updated!');
                return back();
            }else{
                session::flash('not_success',"OTP Does't Match");
                return redirect()->back()->withInput($request->all());
            }
        }else{
            $otp=mt_rand(1000,9999);
            // send otp call function
            if(TwilioSMSController::sendSMS(auth()->user()->mobile,$otp)=="success"){
                User::where('mobile',auth()->user()->mobile)->update(['otp'=>$otp]);
                session::flash('sent_otp',$otp);
                session::flash('success',"OTP sent Successfully.");
                return redirect()->back()->withInput($request->all());    
            }else{
                session::flash('not_success',"OTP not sent Please try Again Later");
                return redirect()->back()->withInput($request->all()); 
            }
        }       

        $user =Auth::user();
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->email = $request['email'];
        $user->country = $request['country'];
        $user->date_of_birth = $request['date_of_birth'];
        $user->address = $request['address'];
        $user->post_code = $request['post_code'];
        $user->city = $request['city'];
        $user->save();

        session::flash('success',"Profile Updated Successfully!");
        return back();
    }
    
    //find professionals 
    public function find_professional(){
        if(isset($_GET['pro_name'])){
            if(is_null($_GET['pro_name'])){
                session::flash('search_result',"ok");
            }
            
            // dd('df');
        }

        $countries=Country::all();  
        $pro_categories=Pro_Category::where('status',1)->get();
        return view("client.find-professional-client",['countries'=>$countries,'pro_categories'=>$pro_categories]);
    }
    public function search_result_professionals(){
        return view("client.search-professional-client");
    }
}
