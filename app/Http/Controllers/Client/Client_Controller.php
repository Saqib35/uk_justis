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
use App\Models\Pro_Sub_Category;
use DB;

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
        $countries=Country::all();  
        $pro_categories=Pro_Category::where('status',1)->get();


        if(isset($_GET['category_id']) || isset($_GET['sub_category_id']) || isset($_GET['country']) || isset($_GET['city']) || isset($_GET['pro_name']) || isset($_GET['zipcode']) ){
            
            $query = User::query();
            $query = $query->where('user_type', 'pro');
            $query = $query->where('status', 1);
            // $query = $query->where('Is_piad', 'on');
         
            if(isset($_GET['zipcode']) && !empty($_GET['zipcode'])){
                $query = $query->where('post_code', $_GET['zipcode']); 
            } 
            if(isset($_GET['country']) && !empty($_GET['country'])){
                $query = $query->where('country', $_GET['country']); 
            } 
            if(isset($_GET['sub_category_id']) && !empty($_GET['sub_category_id'])){
                $query = $query->whereJsonContains('sub_category_id', $_GET['sub_category_id']); 
            } 
            if(isset($_GET['category_id']) && !empty($_GET['category_id'])){
                $query = $query->where('category_id', $_GET['category_id']); 
            } 
            if(isset($_GET['pro_name']) && !empty($_GET['pro_name'])){
                $query = $query->where(DB::raw("concat(first_name, ' ', last_name)"), 'LIKE','%'.$_GET['pro_name'].'%');           
            }
            if(isset($_GET['city']) && !empty($_GET['city'])){
                $query = $query->where('city', 'LIKE','%'.$_GET['city'].'%'); 
            } 

            $Result_Pro = $query->get();
            session::flash('search_result',"ok");
            return view("client.find-professional-client",['countries'=>$countries,'pro_categories'=>$pro_categories,'pro_users'=>$Result_Pro]);
        }
        return view("client.find-professional-client",['countries'=>$countries,'pro_categories'=>$pro_categories]);
    }

    public function profile_professional_client($id){
        //   $pro=User::Join('pro_categories', function($join){
        //     $join->on('pro_categories.id', '=', 'users.category_id');
        //   })->where('users.id',$id)->where('users.status',1)->where('users.user_type','pro')->get(['users.*','pro_categories.name as category_name']);
        //->where('users.Is_piad','on')
        
        $pro=User::where('id',$id)->where('status',1)->where('user_type','pro')->get();
        //->where('users.Is_piad','on')

        if(count($pro)==1){
            $Country=Country::where('sortname',$pro[0]->country)->get();  
            $Pro_Category=Pro_Category::where('id',$pro[0]->category_id)->get();
            $Pro_Sub_Category=Pro_Sub_Category::whereIn('id',json_decode($pro[0]->sub_category_id))->get();
            $date=date('Y-m-d');
            $today_name=strtolower(date('l', strtotime($date)));
            $today_availablity="CLOSED NOW";
            switch ($today_name) {
                case "monday":
                    if($pro[0]->monday=="on") $today_availablity="OPEN NOW";
                  break;
                case "tuesday":
                    if($pro[0]->tuesday=="on") $today_availablity="OPEN NOW";
                  break;
                case "wednesday":
                    if($pro[0]->wednesday=="on") $today_availablity="OPEN NOW";
                  break;
                case "thursday":
                    if($pro[0]->thursday=="on") $today_availablity="OPEN NOW";
                  break;
                case "friday":
                    if($pro[0]->friday=="on") $today_availablity="OPEN NOW";
                  break;
                case "saturday":
                    if($pro[0]->saturday=="on") $today_availablity="OPEN NOW";
                  break;
                case "sunday":
                    if($pro[0]->sunday=="on") $today_availablity="OPEN NOW";
                  break;
                
                default:
                    $today_availablity="CLOSED NOW";
              }

            return view("client.profile-professional-client",['pro'=>$pro,"pro_category_name"=>$Pro_Category[0]->name,"country_name"=>$Country[0]->name,'pro_sub_categories'=>$Pro_Sub_Category,'today_availablity'=>$today_availablity]);
        }else{
            return redirect('/');
        }
    }
}
