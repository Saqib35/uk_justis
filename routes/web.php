<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControllerME;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\TwilioSMSController;
use App\Http\Controllers\Admin\publicController;
use App\Http\Controllers\Admin\stripeController;
use App\Http\Controllers\Client\Client_Controller;
use App\Http\Controllers\Admin\Categories;
use App\Http\Controllers\Admin\UpdateProfile;
use App\Http\Controllers\Admin\ShowProAdmin;
use App\Http\Controllers\Pro\ProStripeController;



use App\Models\Country;
use App\Models\Pro_Category;
use App\Models\Pro_Sub_Category;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function () {
  Artisan::call('view:clear');
  Artisan::call('cache:clear');
  Artisan::call('config:clear');
  Artisan::call('route:clear');
  return "Successfully Cleared";
});



Route::get('/', [homeControllerME::class,'index']);
Route::get('pricing', [homeControllerME::class,'pricing']);
Route::get('about', [aboutController::class,'index']);
Route::get('contact', [aboutController::class,'contact']);
Route::get('faq', [aboutController::class,'faq']);
Route::get('privacy', [aboutController::class,'privacy']);
Route::get('terms-and-conditions', [aboutController::class,'termsConditions']);
Route::post('customer-support', [aboutController::class,'customerSupport']);







// admin route start//
// admin route start//
// admin route start//



Route::group(['middleware'=>['IsAdmin']],function () {

Route::get("admin/login", function(){
  return view("admin.auth-login");
})->name('admin-login');

Route::get("admin-dashboard", function(){
  return view("admin.index");
})->name('admin-dashboard');



Route::get("admin-licence", function(){
   return view("admin.admin-licence");
});
Route::get("create-coupan", function(){
   return view("admin.create-coupan");
});
Route::get("create-new-coupan", function(){
   return view("admin.create-new-coupan");
});
Route::get("create-refferal", function(){
   return view("admin.create-refferal");
});
Route::get("create-new-refferal", function(){
   return view("admin.create-new-refferal");
});



Route::get("add-categories", function(){
   return view("admin.add-categories");
});


Route::get("admin-price", function(){
  return view("admin.panel-price");
});

Route::get("app-chat", function(){
  return view("admin.app-chat");
});


Route::get("stripe", [ProStripeController::class,'stripe']);




Route::get("view-profile-pro/{id}", [ShowProAdmin::class,'ShowProProfile']);
Route::get("show/{id}", [ShowProAdmin::class,'ShowProAdmin']);
Route::get("delete-pro/{id}", [ShowProAdmin::class,'DelProAdmin']);



Route::get("all-client", [UpdateProfile::class,'AllClient']);
Route::get("all-client/{id}", [UpdateProfile::class,'AddClientDel']);
Route::get("client-edit/{id}", [UpdateProfile::class,'ClientEdit']);
Route::get("add-client", [UpdateProfile::class,'ShowClientForm']);
Route::post("add-client", [UpdateProfile::class,'AddClient']);
Route::post("add-client-update", [UpdateProfile::class,'AddClientUpdate']);


Route::get("all-pro/{type?}/{id?}", [UpdateProfile::class,'ShowPro']);
Route::get("add-pro", [UpdateProfile::class,'ShowProForm']);
Route::post("add-pro", [UpdateProfile::class,'AddPro']);




Route::get("view-profile", [UpdateProfile::class,'ViewProfile']);
Route::post("view-profile-update", [UpdateProfile::class,'ViewProfileUpdate']);




Route::get("add-sub-categories", [Categories::class,'ShowCategoriesList']);
Route::post("sub_add_category", [Categories::class,'AddSubCategory']);
Route::get("sub-categories-list", [Categories::class,'SubCategoriesList']);
Route::get("active_sub_category/{id}/{status}", [Categories::class,'activeSubCategory']);
Route::get("del_sub_category/{id}", [Categories::class,'delSubCategory']);



Route::get("categories-list", [Categories::class,'categorieslist']);
Route::get("active_category/{id}/{status}", [Categories::class,'activeCategory']);
Route::get("del_category/{id}", [Categories::class,'delCategory']);
Route::post("add_category", [Categories::class,'addCategory']);



Route::get("all-subscription", [stripeController::class,'allSubscriptionShow']);
Route::get("activeSubcription/{id}/{status}", [stripeController::class,'activeSubcription']);
Route::get("delSubcription/{id}", [stripeController::class,'delSubcription']);



Route::get("add-subscription", [stripeController::class,'addSubscriptionShow']);
Route::post("add-subscription", [stripeController::class,'addSubscription']);



Route::get("admin-slider", [publicController::class,'AdminSlider']);
Route::post("admin-slider_update", [publicController::class,'AdminSliderUpdate']);
Route::get("admin-slider-del/{id}", [publicController::class,'AdminSliderDel']);


Route::get("admin-achivement", [publicController::class,'AdminEchivement']);
Route::post("admin-achivement_update", [publicController::class,'AdminEchivementUpdate']);


Route::get("admin-about", [publicController::class,'AdminAbout']);
Route::post("admin-about_update", [publicController::class,'AdminAboutUpdate']);


Route::get("admin-details", [publicController::class,'AdminDetail']);
Route::post("admin-details_update", [publicController::class,'AdminDetailUpdate']);


Route::get("admin-privacy-policy", [publicController::class,'PrivacyPolicy']);
Route::post("admin-privacy-policy_update", [publicController::class,'PrivacyPolicyUpdate']);


Route::get("admin-terms-conditions", [publicController::class,'TermConditions']);
Route::post("admin-terms-conditions_update", [publicController::class,'TermConditionsUpdate']);


Route::get("admin-faq", [publicController::class,'AdminFaq']);
Route::get("admin-faq_del/{id}", [publicController::class,'AdminFaqDel']);
Route::post("add_Faq", [publicController::class,'add_Faq']);

});
// admin route end//
// admin route end//
// admin route end//




// pro route start//
// pro route start//
// pro route start//



Route::get("pro/getProCategoriesThroughCategoryTypeAjax",function(Request $request){
  $pro_categories=Pro_Category::where('status',1)->where('category_type',$request->category_type)->get();
  $html='<option selected disabled>Choose Category</option>';
  foreach($pro_categories as $category)
  {
   $html.='<option value="'.$category->id.'">'.$category->name.'</option>';
  }
  return $html;
});

Route::get("pro/getProSubCategoriesThroughProCategoryAjax",function(Request $request){
  $pro_sub_categories=Pro_Sub_Category::where('status',1)->where('category_id',$request->category_id)->get();
  $html='<option selected disabled>Choose Sub Category</option>';
  foreach($pro_sub_categories as $sub_category)
  {
   $html.='<option value="'.$sub_category->id.'">'.$sub_category->name.'</option>';
  }
  return $html;
});




Route::group(['middleware'=>['IsPro']],function () {

Route::get("pro/login", function(){ return view("pro.auth-login"); })->name('pro-login');

Route::get("pro/register", function(){ 
  $countries=Country::all();  
  return view("pro.auth-register",['countries'=>$countries]);
})->name('pro-register');


Route::get("pro-dashboard", function(){
   return view("pro.index");
})->name('pro-dashboard');
Route::get("advanced-ratings-pro", function(){
   return view("pro.advanced-ratings");
});
Route::get("advanced-sweetalerts-pro", function(){
  return view("pro.advanced-sweetalerts");
});
Route::get("app-calendar-pro", function(){
  return view("pro.app-calendar");
});
Route::get("app-chat-pro", function(){
  return view("pro.app-chat");
});
Route::get("app-contact-list-pro", function(){
  return view("pro.app-contact-list");
});


// Mubasher Start

Route::get("subscription-pro", function(){
  return view("pro.subscription");
});
Route::get("wallet-pro", function(){
  return view("pro.wallet");
});
Route::get("client-chat-pro", function(){
  return view("pro.client-chat");
});
Route::get("admin-chat-pro", function(){
  return view("pro.admin-chat");
});
Route::get("feedback-pro", function(){
  return view("pro.feedback");
});
Route::get("all-clients-pro", function(){
  return view("pro.all-clients");
});
Route::get("client-chart-pro", function(){
  return view("pro.client-chart");
});
Route::get("calender-pro", function(){
  return view("pro.calender");
});
Route::get("profile-pro", function(){
  return view("pro.profile");
});



// Mubasher End
Route::get("auth-recoverpw-pro", function(){
  return view("pro.auth-recoverpw");
});
Route::get("charts-apex-pro", function(){
  return view("pro.charts-apex");
});
Route::get("email-templates-alert-pro", function(){
  return view("pro.email-templates-alert");
});
Route::get("forms-advanced-pro", function(){
  return view("pro.forms-advanced");
});
Route::get("forms-editors-pro", function(){
  return view("pro.forms-editors");
});
Route::get("forms-repeater-pro", function(){
  return view("pro.forms-repeater");
});
Route::get("forms-uploads-pro", function(){
  return view("pro.forms-uploads");
});
Route::get("forms-wizard-pro", function(){
  return view("pro.forms-wizard");
});
Route::get("page-invoice-pro", function(){
  return view("pro.page-invoice");
});
Route::get("page-pricing-pro", function(){
  return view("pro.page-pricing");
});
Route::get("page-profile-pro", function(){
  return view("pro.page-profile");
});

Route::get("tables-datatable-pro", function(){
  return view("pro.tables-datatable");
});
Route::get("ui-other-clipboard-pro", function(){
  return view("pro.ui-other-clipboard");
});

});
// pro route end//
// pro route end//
// pro route end//







// client route start//
// client route start//
// client route start//


Route::group(['middleware'=>['IsClient']],function () {

Route::get("client/login", function(){
  return view("client.auth-login");
})->name('client-login');

Route::get("client/register", function(){
  $countries=Country::all();  
  return view("client.auth-register",['countries'=>$countries]);
})->name('client-register');


Route::get("advanced-ratings-client", function(){
   return view("client.advanced-ratings");
});
Route::get("advanced-sweetalerts-client", function(){
  return view("client.advanced-sweetalerts");
});
Route::get("app-calendar-client", function(){
  return view("client.app-calendar");
});
Route::get("app-contact-list-client", function(){
  return view("client.app-contact-list");
});

Route::get("auth-recoverpw-client", function(){
  return view("client.auth-recoverpw");
});
Route::get("charts-apex-client", function(){
  return view("client.charts-apex");
});
Route::get("email-templates-alert-client", function(){
  return view("client.email-templates-alert");
});
Route::get("forms-advanced-client", function(){
  return view("client.forms-advanced");
});
Route::get("forms-editors-client", function(){
  return view("client.forms-editors");
});
Route::get("forms-repeater-client", function(){
  return view("client.forms-repeater");
});
Route::get("forms-uploads-client", function(){
  return view("client.forms-uploads");
});
Route::get("forms-wizard-client", function(){
  return view("client.forms-wizard");
});
Route::get("page-invoice-client", function(){
  return view("client.page-invoice");
});
Route::get("page-pricing-client", function(){
  return view("client.page-pricing");
});

// Mubashar Start Client
Route::get("client/dashboard", [Client_Controller::class,'show_client_dashboard'])->name('client-dashboard');

Route::get("app-chat-client", function(){
  return view("client.app-chat");
});

Route::get("client/profile", [Client_Controller::class,'show_profile_page'])->name('client-profile-setting');
Route::post("client/profile", [Client_Controller::class,'update_profile']);
Route::get("client/change_mobile",[Client_Controller::class,'show_change_mobile_page'])->name('client-mobile-setting');
Route::post("client/change_mobile",[Client_Controller::class,'update_mobile']);

Route::get("change-password-client", function(){
  return view("client.change-password-client");
});



Route::get("find-professional-client", function(){
  return view("client.find-professional-client");
});
Route::get("search-professional-client", function(){
  return view("client.search-professional-client");
});
Route::get("profile-professional-client", function(){
  return view("client.profile-professional-client");
});
Route::get("professional-checkout-client", function(){
  return view("client.professional-checkout-client");
});
Route::get("favourite-professional", function(){
  return view("client.favourite");
});

// Mubashar End Client

Route::get("tables-datatable-client", function(){
  return view("client.tables-datatable");
});
Route::get("ui-other-clipboard-client", function(){
  return view("client.ui-other-clipboard");
});
});
// client route end//
// client route end//
// client route end//


Auth::routes();

Route::get("login", function(){
   return redirect()->route('client-login');
})->name('login');

Route::get("register", function(){
   return redirect()->route('client-register');
})->name('register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');