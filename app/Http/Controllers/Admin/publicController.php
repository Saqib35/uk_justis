<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customerSupport;
use App\Models\header_and_footer;
use App\Models\About;
use App\Models\Faq;
use App\Models\privacy_policys;
use App\Models\Terms_Conditions;
use App\Models\home_achievement;
use App\Models\Sliders;



class publicController extends Controller
{
    
        
        public function AdminSlider()
        {
            $Sliders=Sliders::get();
          
            return view("admin.panel-slider",["Sliders"=>$Sliders]);
        }

   
       
      public function AdminSliderUpdate(REQUEST $req)
      {
             
          $dir = 'assets/img/hero/';
          $extension = strtolower($req['logo']->getClientOriginalExtension()); // get image extension
          $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
          $req['logo']->move($dir, $fileName);
          $logos=$req['logo'] ="{$dir}{$fileName}";
       
          Sliders::create([
            'title' => $req->title,
            'description' => $req->description,
            'img'=>$logos
            ]);
         

        return redirect()->back()->with('status','added');
      }
     
     
    public function AdminSliderDel(REQUEST $req)
    {
             Sliders::where('id', $req->id)->delete();
             return redirect()->back()->with('Del','Deleted Successfully');
    }

     
    public function TermConditions()
    {
        $Terms_Conditions=Terms_Conditions::get();
        return view("admin.panel-terms-conditions",["Terms_Conditions"=>$Terms_Conditions]);
    }

    public function TermConditionsUpdate(REQUEST $req)
    {
        
        Terms_Conditions::where('id', $req->id)
        ->update([
            'content' => $req->area
         ]);
     
         return redirect()->back()->with('status','updated');
    }
    

    public function PrivacyPolicy()
    {
        $privacy_policys=privacy_policys::get();
        return view("admin.panel-privacy-policy",["privacy_policys"=>$privacy_policys]);
    }

    public function PrivacyPolicyUpdate(REQUEST $req)
    {
        
        privacy_policys::where('id', $req->id)
        ->update([
            'content' => $req->area
         ]);
     
         return redirect()->back()->with('status','updated');
    }
    
    public function AdminDetail()
    {
        $header_and_footer=header_and_footer::get();
        return view("admin.panel-details",["header_and_footer"=>$header_and_footer]);
    }

    public function AdminDetailUpdate(REQUEST $req)
    {
        

   

      if($req->hasFile('logo'))
      {
        

        $dir = 'assets/img/';
        $extension = strtolower($req['logo']->getClientOriginalExtension()); // get image extension
        $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
        $req['logo']->move($dir, $fileName);
        $logos=$req['logo'] ="{$dir}{$fileName}";

        header_and_footer::first()
        ->update([
            'time_office' => $req->time_office,
            'email_office' => $req->email_office,
            'phone' => $req->phone,
            'address_office' => $req->address_office,
            'description_footer' => $req->description_footer,
            'facebook_link' => $req->facebook_link,
            'twitter_link' => $req->twitter_link,
            'whatapp_link' =>$req->whatapp_link,
            'linkdin_link' => $req->linkdin_link,
            'design_by' => $req->design_by,
            'logo' => $logos
           ]);
     

       }else{

        header_and_footer::first()
        ->update([
            'time_office' => $req->time_office,
            'email_office' => $req->email_office,
            'phone' => $req->phone,
            'address_office' => $req->address_office,
            'description_footer' => $req->description_footer,
            'facebook_link' => $req->facebook_link,
            'twitter_link' => $req->twitter_link,
            'whatapp_link' =>$req->whatapp_link,
            'linkdin_link' => $req->linkdin_link,
            'design_by' => $req->design_by,
           ]);
     
    
      }



      
      if($req->hasFile('logo2'))
      {
       
        $dir = 'assets/img/';
        $extension = strtolower($req['logo2']->getClientOriginalExtension()); // get image extension
        $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
        $req['logo2']->move($dir, $fileName);
        $logoss=$req['logo2'] ="{$dir}{$fileName}";


        header_and_footer::first()
        ->update([
         'pro_logo'=>$logoss
           ]);

      }
      
        
         return redirect()->back()->with('status','updated');
    }
    

    public function AdminAbout()
    {
        $About=About::get();
        return view("admin.panel-about",["About"=>$About]);
    }

    public function AdminAboutUpdate(REQUEST $req)
    {
        
        About::where('id', $req->id)
        ->update([
            'content' => $req->area
         ]);
     
         return redirect()->back()->with('status','updated');
    }

   
    public function AdminFaq()
    {
        $faq=Faq::get();
        return view("admin.panel-faq",["faq"=>$faq]);
    }
  
    public function add_Faq(REQUEST $req)
    {
          Faq::create([
            'question' => $req->question,
            'answer'=>$req->answer
            
           ]);
           return redirect()->back()->with('status','Added');
    }

    public function AdminFaqDel(REQUEST $req)
    {
             faq::where('id', $req->id)->delete();
         return redirect()->back()->with('Del','Deleted Successfully');
    }

   
    
    public function AdminEchivement()
    {
        $home_achievement=home_achievement::get();
        return view("admin.panel-achivement",["home_achievement"=>$home_achievement]);
    }

    public function AdminEchivementUpdate(REQUEST $req)
    {
      

        if($req->hasFile('logo'))
        {
          
  
             
          $dir = 'assets/img/';
          $extension = strtolower($req['logo']->getClientOriginalExtension()); // get image extension
          $fileName = bin2hex(random_bytes(20)).'.'. $extension; // rename image
          $req['logo']->move($dir, $fileName);
          $logos=$req['logo'] ="{$dir}{$fileName}";
          
        home_achievement::where('id', $req->id)
          ->update([
            'title' => $req->title,
            'detail' => $req->detail,
            'complete_case' => $req->complete_case,
            'expart_attorney' => $req->expart_attorney,
            'happy_clients' => $req->happy_clients,
            'win_awards' => $req->win_awards,
            'complete_case_number' => $req->complete_case_number,
            'expart_attorney_number' => $req->expart_attorney_number,
            'happy_clients_number' => $req->happy_clients_number,
            'win_awards_number' => $req->win_awards_number,
            'img'=>$logos
            
         ]);



        }else{

        home_achievement::where('id', $req->id)
        ->update([
            'title' => $req->title,
            'detail' => $req->detail,
            'complete_case' => $req->complete_case,
            'expart_attorney' => $req->expart_attorney,
            'happy_clients' => $req->happy_clients,
            'win_awards' => $req->win_awards,
            'complete_case_number' => $req->complete_case_number,
            'expart_attorney_number' => $req->expart_attorney_number,
            'happy_clients_number' => $req->happy_clients_number,
            'win_awards_number' => $req->win_awards_number,
            
         ]);

        }
         return redirect()->back()->with('status','updated');
    }

}
