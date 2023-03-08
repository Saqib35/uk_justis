<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use Session;


class UpdateProfile extends Controller
{
    public function ViewProfile()
    {
        return view("admin.view-profile");
    }

    public function ViewProfileUpdate(REQUEST $req)
    {
    
        if($req->hasFile('logo'))
        {
  
          $dir = 'pro/profile_images/';
          $extension = strtolower($req['logo']->getClientOriginalExtension()); // get image extension
          $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
          $req['logo']->move($dir, $fileName);
          $logos=$req['logo'] ="{$dir}{$fileName}";
          
          User::where('id', Auth::user()->id)
          ->update([
              'last_name' => $req->last_name,
              'profile_img' => $logos,
           ]);

        }else{
         
            User::where('id',  Auth::user()->id)
            ->update([
                'last_name' => $req->last_name,
             ]);
             
        }
        
        return redirect()->back()->with('status','Updated profile');
        
    }

    public function ShowClientForm()
    {
        $Country=Country::get();
        return view("admin.add-client",["Country"=>$Country]);
    }

    
    public function AddClient(REQUEST $req)
    {
        $input = $req->all();
        $validator=Validator::make($input, [
            'mobile' => ['required', 'unique:users'],
        ]);

        if ($validator->fails()) { 
            return redirect()->back()->with('exist','number exist');
            
        }
      
        if($req->hasFile('logo'))
        {
  
          $dir = 'pro/profile_images/';
          $extension = strtolower($req['logo']->getClientOriginalExtension()); // get image extension
          $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
          $req['logo']->move($dir, $fileName);
          $logos=$req['logo'] ="{$dir}{$fileName}";
         
        
                 
          User::create([
            'first_name' => $req->first_name,
            'last_name'=>$req->last_name,
            'email'=>$req->email,
            'mobile'=>$req->mobile,
            'address'=>$req->address,
            'country'=>$req->country,
            'gender'=>$req->gender,
            'date_of_birth'=>$req->date_of_birth,
            'password'=>Hash::make("12345678"),
            'user_type'=>$req->user_type,
            'latitude'=>$req->latitude,
            'longitude'=>$req->longitude,
            'profile_img'=>$logos,    
            'age'=>$req->age
                
           ]);

         
        }else{
              
            User::create([
                'first_name' => $req->first_name,
                'last_name'=>$req->last_name,
                'email'=>$req->email,
                'mobile'=>$req->mobile,
                'address'=>$req->address,
                'country'=>$req->country,
                'gender'=>$req->gender,
                'date_of_birth'=>$req->date_of_birth,
                'password'=>Hash::make("12345678"),
                'user_type'=>$req->user_type,
                'latitude'=>$req->latitude,
                'longitude'=>$req->longitude,
                'age'=>$req->age

                
               ]);
        }


        return redirect()->back()->with('status','Added new client');
    }
    public function AllClient()
    {
        $client=User::where('user_type','client')->get();
        $client_today=User::where('user_type','client')->where('created_at', '>=', date('Y-m-d').' 00:00:00')->get();
        return view("admin.all-client",["client"=>$client,"client_today"=>$client_today]);
    }
    public function AddClientDel(REQUEST $req)
    {

        $client=User::where('user_type','client')->where('id', $req->id)->get();
        
        if(file_exists($client[0]->profile_img))
        {
           unlink($client[0]->profile_img);
        }
        

        User::where('id', $req->id)->delete();
        return redirect()->back()->with('Del','Deleted Successfully');

    }

    public function ClientEdit(REQUEST $req)
    {

        $Country=Country::get();
        $client=User::where('user_type','client')->where('id', $req->id)->get();
        return view("admin.add-client-edit",["Country"=>$Country,"Client"=>$client]);
        
    }

    public function AddClientUpdate(REQUEST $req)
    {   
        $input=$req->all();
        $validator=Validator::make($input, [
            'mobile' => ['required', 'unique:users,id,'.$req->id],
        ]);

        if ($validator->fails()) { 
            $messages = $validator->messages();
            session::flash('not_success',"Validation Error Client Not Updated!");
            return redirect()->back()->withErrors($messages)->withInput($req->input());            
        }
      
        if($req->hasFile('logo'))
        {
          if(file_exists($req->current_img))
          {
             unlink($req->current_img);
          }
          
          $dir = 'pro/profile_images/';
          $extension = strtolower($req['logo']->getClientOriginalExtension()); // get image extension
          $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
          $req['logo']->move($dir, $fileName);
          $logos=$req['logo'] ="{$dir}{$fileName}";
         
          User::where('id', $req->id)
          ->update([
              'first_name' => $req->first_name,
              'last_name'=>$req->last_name,
              'email'=>$req->email,
              'mobile'=>$req->mobile,
              'address'=>$req->address,
              'country'=>$req->country,
              'gender'=>$req->gender,
              'date_of_birth'=>$req->date_of_birth,
              'user_type'=>$req->user_type,
              'latitude'=>$req->latitude,
              'longitude'=>$req->longitude,
            //   'age'=>$req->age,
              'profile_img'=>$logos

           ]);

        
        }else{

            User::where('id', $req->id)
            ->update([
                'first_name' => $req->first_name,
                'last_name'=>$req->last_name,
                'email'=>$req->email,
                'mobile'=>$req->mobile,
                'address'=>$req->address,
                'country'=>$req->country,
                'gender'=>$req->gender,
                'date_of_birth'=>$req->date_of_birth,
                'user_type'=>$req->user_type,
                'latitude'=>$req->latitude,
                'longitude'=>$req->longitude,
                // 'age'=>$req->age

             ]);

        }
        session::flash('success','Client User Updated Successfully!');
        return back();
    }

    //show all pro from admin side
    public function ShowPro($type=null,$id=null)
    {
        if(!is_null($type) && !is_null($id) && ($type=='edit' || $type=='delete')){
            if($type=="delete"){
                $pro=User::where('user_type','pro')->where('id',$id)->get();
        
                if(file_exists($pro[0]->profile_img))
                {
                    unlink($pro[0]->profile_img);
                }

                if(file_exists($pro[0]->id_card_img))
                {
                    unlink($pro[0]->id_card_img);
                }
                User::where('id', $id)->delete();
                session::flash('success',"Pro User Deleted Successfully!");
                return back();
            }else{
                $Country=Country::get();
                $pro=User::where('user_type','pro')->where('id', $id)->get();
                dd('working');
                return view("admin.add-pro-edit",["Country"=>$Country,"Pro"=>$pro]);
            }
        }else{
            $pro=User::where('user_type','pro')->get();
            $pro_today=User::where('user_type','pro')->where('created_at', '>=', date('Y-m-d').' 00:00:00')->get();
            return view("admin.all-pro",["pro"=>$pro,"pro_today"=>$pro_today]);
        }
        
    }
  


    //show pro form from admin side
    public function ShowProForm()
    {
        $countries=Country::get();
        return view("admin.add-pro",["countries"=>$countries]);
    }

    //add pro from admin side
    public function AddPro(Request $request)
    {   
        $validator=Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'mobile' => ['required', 'string', 'max:50', 'unique:users'],
            'categories_type' => ['required', 'string'],
            'date_of_birth' => ['required'],
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

        if ($validator->fails()) {
            $messages = $validator->messages();
            session::flash('not_success',"Validation Error Pro User Not Added!");
            return redirect()->back()->withErrors($messages)->withInput($request->input());
        }


        //upload id card image
        $dir = 'pro/id_card_images/';
        $extension = strtolower($request['id_card_img']->getClientOriginalExtension()); // get image extension
        $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
        $request['id_card_img']->move($dir, $fileName);
        $request['id_card_img'] ="{$dir}{$fileName}";

        //upload profile image
        $dir1 = 'pro/profile_images/';
        $extension1 = strtolower($request['profile_img']->getClientOriginalExtension()); // get image extension
        $fileName1 = bin2hex(random_bytes(20)).'.'. $extension1; // rename image
        $request['profile_img']->move($dir1, $fileName1);
        $request['profile_img'] ="{$dir1}{$fileName1}";

        $User= User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'categories_type' => $request['categories_type'],
            'personal_name' => $request['personal_name'],
            'date_of_birth' => $request['date_of_birth'],
            'gender' => $request['gender'],
            'personal_email' => $request['personal_email'],
            'address' => $request['address'],
            'latitude' => $request['latitude'],
            'longitude' => $request['longitude'],
            'post_code' => $request['post_code'],
            'country' => $request['country'],
            'city' => $request['city'],
            'category_id' => $request['category_id'],
            'sub_category_id' => json_encode($request['sub_category_id']),
            'id_card_img' => $request['id_card_img'],
            'profile_img' => $request['profile_img'],
            'monday' => isset($request['monday'])?"on":"off",
            'monday_start_time' => $request['monday_start_time'],
            'monday_end_time' => $request['monday_end_time'],
            'tuesday' => isset($request['tuesday'])?"on":"off",
            'tuesday_start_time' => $request['tuesday_start_time'],
            'tuesday_end_time' => $request['tuesday_end_time'],
            'wednesday' => isset($request['wednesday'])?"on":"off",
            'wednesday_start_time' => $request['wednesday_start_time'],
            'wednesday_end_time' => $request['wednesday_end_time'],
            'thursday' => isset($request['thursday'])?"on":"off",
            'thursday_start_time' => $request['thursday_start_time'],
            'thursday_end_time' => $request['thursday_end_time'],
            'friday' => isset($request['friday'])?"on":"off",
            'friday_start_time' => $request['friday_start_time'],
            'friday_end_time' => $request['friday_end_time'],
            'saturday' => isset($request['saturday'])?"on":"off",
            'saturday_start_time' => $request['saturday_start_time'],
            'saturday_end_time' => $request['saturday_end_time'],
            'sunday' => isset($request['sunday'])?"on":"off",
            'sunday_start_time' => $request['sunday_start_time'],
            'sunday_end_time' => $request['sunday_end_time'],
            'cash' => isset($request['cash'])?"on":"off",
            'check' =>isset($request['check'])?"on":"off",
            'credit_card' =>isset($request['credit_card'])?"on":"off",
            'wire_transfer' =>isset($request['wire_transfer'])?"on":"off",
            'user_type' => "pro", 
            'ip_address' => request()->ip(), 
            'password' => Hash::make("12345678"),
        ]);

        if($User){
            session::flash('success','Pro User Added Successfully!');
            return back();
        }else{
            session::flash('not_success','Pro User Not Added Yet!');
            return back();
        }
    }
    

}
