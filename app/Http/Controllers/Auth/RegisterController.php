<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = "/home";
    protected function redirectTo()
    {
        if (auth()->user()->user_type == 'pro') {
            return 'pro/login';
        }else if(auth()->user()->user_type == 'client'){
            return 'client/login';
        }else{
            return '/home';
        }
    }
    // protected $redirectTo = "/";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        if($data['user_type']=="pro"){
            $validator= Validator::make($data, [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255','unique:users'],
                'mobile' => ['required', 'string', 'max:50', 'unique:users'],
                // 'password' => ['required', 'string', 'min:8', 'confirmed'],
                'categories_type' => ['required', 'string'],
                'personal_name' => ['required', 'string', 'max:255'],
                'gender' => ['required', 'string', 'max:10'],
                'personal_email' => ['required', 'string','email','max:255'],
                'address' => ['required', 'string'],
                'post_code' => ['required', 'string', 'max:50'],
                'country' => ['required', 'string', 'max:100'],
                'city' => ['required', 'string'],
                'category_id' => ['required', 'integer'],
                'sub_category_id' => ['required'],
            ]);
            
        }else{
            $validator=Validator::make($data, [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255','unique:users'],
                'mobile' => ['required', 'string', 'max:50', 'unique:users'],
                'gender' => ['required', 'string', 'max:10'],
                'address' => ['required', 'string'],
                'date_of_birth' => ['required'],
                'country' => ['required', 'string', 'max:100'],
            ]);
        }


        if ($validator->fails()) { 
            session::flash('not_success',"Validation Error User Not Register Yet!");
        }
        return $validator;
        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {   
        if($data['user_type']=="pro"){
            //upload id card image
            $dir = 'pro/id_card_images/';
            $extension = strtolower($data['id_card_img']->getClientOriginalExtension()); // get image extension
            $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
            $data['id_card_img']->move($dir, $fileName);
            $data['id_card_img'] ="{$dir}{$fileName}";

            //upload profile image
            $dir1 = 'pro/profile_images/';
            $extension1 = strtolower($data['profile_img']->getClientOriginalExtension()); // get image extension
            $fileName1 = bin2hex(random_bytes(20)).'.'. $extension1; // rename image
            $data['profile_img']->move($dir1, $fileName1);
            $data['profile_img'] ="{$dir1}{$fileName1}";

            $User= User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'mobile' => $data['mobile'],
                'categories_type' => $data['categories_type'],
                'personal_name' => $data['personal_name'],
                'gender' => $data['gender'],
                'personal_email' => $data['personal_email'],
                'address' => $data['address'],
                'latitude' => $data['latitude'],
                'longitude' => $data['longitude'],
                'post_code' => $data['post_code'],
                'country' => $data['country'],
                'city' => $data['city'],
                'category_id' => $data['category_id'],
                'sub_category_id' => json_encode($data['sub_category_id']),
                // 'sub_category_id' => $data['select_all_subcategory'],
                'id_card_img' => $data['id_card_img'],
                'profile_img' => $data['profile_img'],
                'monday' => isset($data['monday'])?"on":"off",
                'monday_start_time' => $data['monday_start_time'],
                'monday_end_time' => $data['monday_end_time'],
                'tuesday' => isset($data['tuesday'])?"on":"off",
                'tuesday_start_time' => $data['tuesday_start_time'],
                'tuesday_end_time' => $data['tuesday_end_time'],
                'wednesday' => isset($data['wednesday'])?"on":"off",
                'wednesday_start_time' => $data['wednesday_start_time'],
                'wednesday_end_time' => $data['wednesday_end_time'],
                'thursday' => isset($data['thursday'])?"on":"off",
                'thursday_start_time' => $data['thursday_start_time'],
                'thursday_end_time' => $data['thursday_end_time'],
                'friday' => isset($data['friday'])?"on":"off",
                'friday_start_time' => $data['friday_start_time'],
                'friday_end_time' => $data['friday_end_time'],
                'saturday' => isset($data['saturday'])?"on":"off",
                'saturday_start_time' => $data['saturday_start_time'],
                'saturday_end_time' => $data['saturday_end_time'],
                'sunday' => isset($data['sunday'])?"on":"off",
                'sunday_start_time' => $data['sunday_start_time'],
                'sunday_end_time' => $data['sunday_end_time'],
                'cash' => isset($data['cash'])?"on":"off",
                'check' =>isset($data['check'])?"on":"off",
                'credit_card' =>isset($data['credit_card'])?"on":"off",
                'wire_transfer' =>isset($data['wire_transfer'])?"on":"off",
                'user_type' => "pro", 
                'ip_address' => request()->ip(), 
                'password' => Hash::make("12345678"),
            ]);
            if($User){
                session::flash('success','Hi '.$data['last_name'].',Pro User Register Successfully!');
                return $User;
            }
        }else{
              // $data = array('name'=>"Virat Gandhi");
              // Mail::send('mail', $data, function($message) {
              //    $message->to('muhammadhamza2236@gmail.com', 'Tutorials Point')->subject('Laravel Basic Testing Mail');
              //    // $message->from('justiscall.co.uk','Virat Gandhi');
              // });
              // echo "Basic Email Sent. Check your inbox.";
              // dd('ok');
            
            //upload profile image
            $dir1 = 'client/profile_images/';
            $extension1 = strtolower($data['profile_img']->getClientOriginalExtension()); // get image extension
            $fileName1 = bin2hex(random_bytes(20)).'.'. $extension1; // rename image
            $data['profile_img']->move($dir1, $fileName1);
            $data['profile_img'] ="{$dir1}{$fileName1}";

            $User= User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'mobile' => $data['mobile'],
                'gender' => $data['gender'],
                'country' => $data['country'],
                'address' => $data['address'],
                'latitude' => $data['latitude'],
                'longitude' => $data['longitude'],
                'date_of_birth' => $data['date_of_birth'],
                'profile_img' => $data['profile_img'],
                'user_type' => "client",      
                'ip_address' => request()->ip(),   
                'password' => Hash::make("12345678"),
            ]);
            if($User){
                session::flash('success','Hi '.$data['last_name'].',Client User Register Successfully!');
                return $User;
            }
        }
        
    }
}
