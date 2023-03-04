<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customerSupport;
use App\Models\header_and_footer;
use App\Models\About;
use App\Models\faq;
use App\Models\privacy_policys;
use App\Models\Terms_Conditions;


use Illuminate\Support\Facades\Validator;


class aboutController extends Controller
{
      public function index()
      {
          $about=About::get();
          return view('about',['about'=>$about]);
      }
      
      public function contact()
      {
          $headerFooter=header_and_footer::get();
          return view('contact',['headerFooter'=>$headerFooter]);
            
      }
      public function faq()
      {

            $faq=faq::get();
            return view('faq',['faq'=>$faq]);
            
      }
      public function privacy()
      {
            $privacy=privacy_policys::get();
            return view('privacy',['privacy'=>$privacy]);
            
      }
      public function termsConditions()
      {
            $Terms_Conditions=Terms_Conditions::get();
            return view('terms-and-conditions',['Terms_Conditions'=>$Terms_Conditions]);
            
      }
      public function customerSupport(REQUEST $req)
      {
  
            customerSupport::create([
            'name' => $req->name,
            'email'=>$req->email,
            'phone'=>$req->phone,
            'subject'=>$req->subject,
            'note'=>$req->note
            
           ]);
      
      
           return redirect()->back()->with('status','Thank you for contacting us');

      }
      
      
}
