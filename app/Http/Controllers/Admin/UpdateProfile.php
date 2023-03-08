<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;


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
        $client_today=User::where('user_type','client')->get();
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

        // $input = $req->all();
        // $validator=Validator::make($input, [
        //     'mobile' => ['required', 'unique:users'],
        // ]);

        // if ($validator->fails()) { 
        //     return redirect()->back()->with('exist','number exist');
            
        // }
      
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
              'age'=>$req->age,
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
                'age'=>$req->age

             ]);

        }


        return redirect()->back()->with('status','Added new client');



    }

}
