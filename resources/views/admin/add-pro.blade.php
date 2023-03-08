@extends('admin.layouts.master')
@section('header_style')
<title>justiscall - Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="" name="description" />
<meta content="" name="author" />
<style>
    .btn-submit, .btn-cancel{
        background-image: linear-gradient(180deg,#2b2b48 0%,#224858 50%);
        color: #fff;
    }
   .form-input img {
      display:none;
   }
   #file-ip-1-preview, #file-ip-11-preview{
      height: auto;
      width: 60%;
      margin: 5% 0% 0% 20%;
}
.btn-submit, .btn-cancel{
    background-image: linear-gradient(180deg,#2b2b48 0%,#224858 50%);
    color: #fff;
}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>

@endsection


  
@section('main_content')       
    @include('admin.layouts.header')
        
        <div class="page-wrapper">
            <div class="page-wrapper-inner">

                <!-- Left Sidenav -->
                  @include('admin.includes.sidebar')
                <!-- end left-sidenav-->

                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid"> 

                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="card mb-0 shadow-none">
                                    <div class="card-body">  
                                        <div class="px-3">
                                            <div class="media-body ml-3 align-self-center">   
                                                <h4 class="header-title mt-0">Add Pro</h4>
                                                <p class="text-muted mb-4 font-13">
                                                    Welcome to JUSTISCALL 
                                                </p>
                                            </div>                    
                                            
                                            <form action="" method="post" enctype="multipart/form-data">
                                                @csrf
                                                
                                                <div class="row">
                                                      
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="fName">First Name</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control " id="fName" placeholder="Enter First Name" name="first_name" maxlength="255" required value="{{old('first_name')}}">
                                                            @error('first_name')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>                                    
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="lName">Last Name</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" id="lName" placeholder="Enter Last Name" name="last_name" maxlength="255" required value="{{old('last_name')}}">
                                                            @error('last_name')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>                                    
                                                    </div>
                                                
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="eMial">Email Address</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-email-outline font-16"></i></span>
                                                            </div>
                                                            <input type="email" class="form-control" id="eMial" name="email" placeholder="Email Address" maxlength="255" required value="{{old('email')}}">
                                                            @error('email')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>                                    
                                                    </div>
                    
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="mobile">Phone Number</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control" id="mobile" placeholder="Enter Phone Number"  maxlength="50" required value="{{old('mobile')}}">
                                                            @error('mobile')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>                                
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="category">Category Type</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                            </div>
                                                            <select class="form-control" required name="categories_type" id="category-type" >
                                                                <option @if(!old('categories_type')) selected @endif  disabled>Choose Category Type</option>
                                                                <option value="Personal" @if(old('categories_type')=='Personal') selected @endif>Personal</option>
                                                                <option value="Firm" @if(old('categories_type')=='Firm') selected @endif>Firm</option>
                                                            </select>
                                                            @error('categories_type')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>                                
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="dob">Date of Birth</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar"></i></span>
                                                            </div>
                                                            <input type="date" class="form-control" required="" id="dob" placeholder="Date of Birth" name="date_of_birth" value="{{old('date_of_birth')}}" max="{{date('Y-m-d', strtotime('-5 years'))}}">
                                                            @error('date_of_birth')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>                                  
                                                    </div>

                                                    <div class="col-sm-12 pd text-center"><h3>Personal Details</h3></div>
                                                    <div class="col-sm-12 fd text-center d-none"><h3>Firm Details</h3></div>
                                                    

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="fName">Name</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" id="fName" placeholder="Enter Name" name="personal_name" maxlength="255" required value="{{old('personal_name')}}">
                                                            @error('personal_name')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>                                    
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="category">Gender</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-gender-male-female font-16"></i></span>
                                                            </div>
                                                            <select class="form-control" name="gender" required>
                                                                <option @if(!old('gender')) selected @endif disabled>Choose Gender</option>
                                                                <option value="Male" @if(old('gender')=='Male') selected @endif>Male</option>
                                                                <option value="Female" @if(old('gender')=='Female') selected @endif>Female</option>
                                                            </select>
                                                            @error('gender')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>                                
                                                    </div>
                                                
                                                    <div class="form-group col-sm-12 col-xs-12">
                                                        <label for="personal_email">Email Address</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-email-outline font-16"></i></span>
                                                            </div>
                                                            <input type="email" class="form-control" id="personal_email" name="personal_email" placeholder="Email Address" maxlength="255" required value="{{old('personal_email')}}">
                                                            @error('personal_email')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>                                    
                                                    </div>

                                                    <div class="form-group col-sm-12 ">
                                                        <label for="google-map-address">Address</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-map-marker-outline font-16"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" id="google-map-address" placeholder="Enter Address" name="address" size="50" required value="{{old('address')}}">
                                                            @error('address')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <input type="hidden" name="latitude" id="latitude" value="{{old('latitude')}}">
                                                            <input type="hidden" name="longitude" id="longitude" value="{{old('longitude')}}">
                                                        </div>                                    
                                                    </div>
                                                    <div class="col-sm-6 col-md-12  mb-3">
                                                        <div id="map" style="height: 300px;"></div>
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="pCode">Postal Code</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-map-marker-circle font-16"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" id="pCode" placeholder="Enter Postal Code" name="post_code" required maxlength="50" value="{{old('post_code')}}">
                                                            @error('post_code')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>                                    
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="category">Country</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-city font-16"></i></span>
                                                            </div>
                                                            <select class="form-control" name="country" required id="country-id">
                                                                <option @if(!old('country')) selected @endif disabled>Choose Country</option>
                                                                @foreach($countries as $country)
                                                                <option value="{{$country->sortname}}" @if(old('country')==$country->sortname) selected @endif>{{$country->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('country')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>                                
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="city">City</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-city font-16"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" id="city" placeholder="Enter City" name="city" required value="{{old('city')}}">
                                                            @error('city')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>                                    
                                                    </div>


                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="category">Categories</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                            </div>
                                                            <select class="form-control" name="category_id" id="category-id" required>
                                                                <option @if(!old('category_id')) selected @endif disabled>Choose Category</option>
                                                                @if(old('category_id'))
                                                                    @php $Pro_Categories=App\Models\Pro_Category::where('status',1)->get() @endphp
                                                                    @foreach($Pro_Categories as $pro_category)
                                                                    <option value="{{$pro_category->id}}" @if(old('category_id')==$pro_category->id) selected @endif>{{$pro_category->name}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                            @error('category_id')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror

                                                        </div>                                
                                                    </div>

                                                    <div class="form-group col-sm-12 col-xs-12">
                                                        <label for="category">Sub Categories</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-folder-multiple font-16"></i></span>
                                                            </div>
                                                            <select class="form-control" name="sub_category_id[]" required id="sub-category-id" multiple="multiple">
                                                                <option selected disabled>Choose Sub Category</option>
                                                                @if(old('sub_category_id'))
                                                                    @php $Pro_Sub_Categories=App\Models\Pro_Sub_Category::where('status',1)->where('category_id',old('category_id'))->get() @endphp
                                                                    @foreach($Pro_Sub_Categories as $pro_sub_category)
                                                                    <option value="{{$pro_sub_category->id}}" @if(old('sub_category_id')==$pro_sub_category->id) selected @endif>{{$pro_sub_category->name}}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                            @error('sub_category_id')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>                                
                                                    </div>
                                                    <!-- <div class="form-group col-sm-6 col-xs-12"></div> -->
                                                    <!-- <div class="form-group col-sm-6 col-xs-12">
                                                        <input type="checkbox" name="select_all_subcategory" id="all" @if(old('select_all_subcategory')=='on') checked="" @endif>
                                                        <label class="mx-3" for="all"> Select all</label>
                                                    </div> -->

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="file-ip-1">Upload ID Card</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-cards font-16"></i></span>
                                                            </div>
                                                            <input type="file" id="file-ip-1" class="form-control" accept="image/*" onchange="showPreview(event);" name="id_card_img" required>
                                                            @error('id_card_img')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <div class="preview">
                                                            <img id="file-ip-1-preview">
                                                            </div>
                                                        </div>                                    
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="profile">Upload Profile</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text form-control" id="basic-addon1"><i class="mdi mdi-image font-16"></i></span>
                                                            </div>
                                                            <input type="file" id="file-ip-11" class="form-control" accept="image/*" onchange="showPrevieww(event);" name="profile_img" required>
                                                            @error('profile_img')
                                                                <span class="text-danger">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                            <div class="preview1">
                                                                <img id="file-ip-11-preview">
                                                            </div>

                                                        </div>                                    
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <h3 class="my-3 text-center">Work Timing</h3>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="row days">
                                                            <div class="col-4">
                                                                <label for="monday"><b>Monday</b></label>
                                                                <input type="checkbox" name="monday" id="monday" class="check-time" @if(old('monday')=='on') checked="" @endif> 
                                                            </div>
                                                            <div class="col-4">
                                                                <b>Form</b>
                                                                <input type="time" name="monday_start_time" class="from-time" value="{{old('monday_start_time')}}"> 
                                                            </div>
                                                            <div class="col-4">
                                                                <b>To</b>
                                                                <input type="time" name="monday_end_time" class="to-time" value="{{old('monday_end_time')}}"> 
                                                            </div>
                                                        </div>
                                                        <div class="row days">
                                                            <div class="col-4">
                                                                <label for="tuesday"><b>Tuesday</b></label>
                                                                <input type="checkbox" name="tuesday" id="tuesday" class="check-time" @if(old('tuesday')=='on') checked="" @endif> 
                                                            </div>
                                                            <div class="col-4">
                                                                <b>Form</b>
                                                                <input type="time" name="tuesday_start_time" class="from-time" value="{{old('tuesday_start_time')}}"> 
                                                            </div>
                                                            <div class="col-4">
                                                                <b>To</b>
                                                                <input type="time" name="tuesday_end_time" class="to-time" value="{{old('tuesday_end_time')}}"> 
                                                            </div>
                                                        </div>
                                                        <div class="row days">
                                                            <div class="col-4 wed">
                                                                <label for="wednesday"><b>Wednesday</b></label>
                                                                <input type="checkbox" name="wednesday"  id="wednesday"  class="check-time" @if(old('wednesday')=='on') checked="" @endif> 
                                                            </div>
                                                            <div class="col-4">
                                                                <b>Form</b>
                                                                <input type="time" name="wednesday_start_time" class="from-time" value="{{old('wednesday_start_time')}}">  
                                                            </div>
                                                            <div class="col-4">
                                                                <b>To</b>
                                                                <input type="time" name="wednesday_end_time" class="to-time" value="{{old('wednesday_end_time')}}"> 
                                                            </div>
                                                        </div>
                                                        <div class="row days">
                                                            <div class="col-4">
                                                                <label for="thursday"><b>Thursday</b></label>
                                                                <input type="checkbox" name="thursday" id="thursday" class="check-time" @if(old('thursday')=='on') checked="" @endif> 
                                                            </div>
                                                            <div class="col-4">
                                                                <b>Form</b>
                                                                <input type="time" name="thursday_start_time" class="from-time" value="{{old('thursday_start_time')}}"> 
                                                            </div>
                                                            <div class="col-4">
                                                                <b>To</b>
                                                                <input type="time" name="thursday_end_time" class="to-time" value="{{old('thursday_end_time')}}"> 
                                                            </div>
                                                        </div>
                                                        <div class="row days">
                                                            <div class="col-4">
                                                                <label for="friday"><b>Friday</b></label>
                                                                <input type="checkbox" name="friday" id="friday" class="check-time"  @if(old('friday')=='on') checked="" @endif> 
                                                            </div>
                                                            <div class="col-4">
                                                                <b>Form</b>
                                                                <input type="time" name="friday_start_time" class="from-time" value="{{old('friday_start_time')}}"> 
                                                            </div>
                                                            <div class="col-4">
                                                                <b>To</b>
                                                                <input type="time" name="friday_end_time" class="to-time" value="{{old('friday_end_time')}}"> 
                                                            </div>
                                                        </div>
                                                        <div class="row days">
                                                            <div class="col-4">
                                                                <label for="saturday"><b>Saturday</b></label>
                                                                <input type="checkbox" name="saturday" id="saturday" class="check-time" @if(old('saturday')=='on') checked="" @endif> 
                                                            </div>
                                                            <div class="col-4">
                                                                <b>Form</b>
                                                                <input type="time" name="saturday_start_time" class="from-time" value="{{old('saturday_start_time')}}"> 
                                                            </div>
                                                            <div class="col-4">
                                                                <b>To</b>
                                                                <input type="time" name="saturday_end_time" class="to-time" value="{{old('saturday_end_time')}}"> 
                                                            </div>
                                                        </div>
                                                        <div class="row days">
                                                            <div class="col-4">
                                                                <label for="sunday"><b>Sunday</b></label>
                                                                <input type="checkbox" name="sunday" id="sunday" class="check-time" @if(old('sunday')=='on') checked="" @endif> 
                                                            </div>
                                                            <div class="col-4">
                                                                <b>Form</b>
                                                                <input type="time" name="sunday_start_time" class="from-time" value="{{old('sunday_start_time')}}"> 
                                                            </div>
                                                            <div class="col-4">
                                                                <b>To</b>
                                                                <input type="time" name="sunday_end_time" class="to-time" value="{{old('sunday_end_time')}}"> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 col-xs-12">
                                                        <input type="checkbox" id="accept_terms_and_conditions" required id="">
                                                        <label for="accept_terms_and_conditions"> Accept Terms & Conditions</label>
                                                    </div>
                                                    <div class="col-sm-8 col-xs-12">
                                                        <h6>payment Accepted</h6>
                                                        <div class="row">
                                                            <div class="col-sm-2 col-xs-6">
                                                                <input type="checkbox" id="cash" name="cash" @if(old('cash')=='on') checked="" @endif >
                                                                <label for="cash">CASH</label>
                                                            </div>
                                                            <div class="col-sm-3 col-xs-6">
                                                                <input type="checkbox" id="credit_card" name="credit_card" @if(old('credit_card')=='on') checked="" @endif>
                                                                <label for="credit_card">Credit Card</label>
                                                            </div>
                                                            <div class="col-sm-3 col-xs-6">
                                                                <input type="checkbox" id="check" name="check" @if(old('check')=='on') checked="" @endif>
                                                                <label for="check">CHECK</label>
                                                            </div>
                                                            <div class="col-sm-4 col-xs-6">
                                                                <input type="checkbox" id="wire_transfer" name="wire_transfer" @if(old('wire_transfer')=='on') checked="" @endif>
                                                                <label for="wire_transfer">Wire Transfert</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                

                                                    
                                                    
                                                    <div class="col-md-10 mb-3"></div>
                                                   
                                                    <div class="col-md-2 mb-3">
                                                        <input type="submit" name="submit" class="btn-submit form-control" value="Add">
                                                    </div>                          
                                                </div>
                                            </form>

                                        </div>
                                                             
                                    </div>
                                </div>
                            </div>
                            
                        </div>

  
                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>
                <!-- end page content -->
            </div>
            <!--end page-wrapper-inner -->
        </div>
     
 @endsection
      
 @section("scriptlinks")
        <script src="{{asset('admin/assets/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/timepicker/tempusdominus-bootstrap-4.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/clockpicker/jquery-clockpicker.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/colorpicker/jquery-asColor.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/colorpicker/jquery-asGradient.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/colorpicker/jquery-asColorPicker.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/select2/select2.min.js')}}"></script>

        <script src="{{asset('admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>

        <script src="{{asset('admin/assets/pages/jquery.clock-img.init.js')}}"></script>
        <script src="{{asset('admin/assets/pages/jquery.forms-advanced.js')}}"></script>
@endsection

@section('script_code')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRJ9NKLuz1a30NakDmyGExaq8c7c9YrBk&libraries=places"></script>
<script>
    var map;
    var service;
    var infowindow;

    function initialize() {
        var pyrmont = new google.maps.LatLng(-33.8665433, 151.1956316);

        map = new google.maps.Map(document.getElementById('map'), {
            center: pyrmont,
            zoom: 15
        })

        var input = document.getElementById('google-map-address');

        let autocomplete = new google.maps.places.Autocomplete(input)

        autocomplete.bindTo('bounds', map)

        let marker = new google.maps.Marker({
            map: map
        })

        google.maps.event.addListener(autocomplete, 'place_changed', () => {
            let place = autocomplete.getPlace()
      
            $('#latitude').val(place.geometry.location.lat());
            $('#longitude').val(place.geometry.location.lng());
            
            var address = place.formatted_address;
            var latitude = place.geometry.location.lat();
            var longitude = place.geometry.location.lng();
            var latlng = new google.maps.LatLng(latitude, longitude);
            var geocoder = (geocoder = new google.maps.Geocoder());
            geocoder.geocode({ latLng: latlng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        var address = results[0].formatted_address;
                        var pin =
                        results[0].address_components[
                        results[0].address_components.length - 1
                        ].long_name;
                        var pin_short =
                        results[0].address_components[
                        results[0].address_components.length - 1
                        ].short_name;
                        var country =
                        results[0].address_components[
                        results[0].address_components.length - 2
                        ].short_name;
                        var state =
                        results[0].address_components[
                        results[0].address_components.length - 3
                        ].long_name;
                        var city =
                        results[0].address_components[
                        results[0].address_components.length - 4
                        ].long_name;
                        // var country_find=false;

                        $("#country-id option[value='" + country + "']").attr("selected","selected");
                        $("#country-id option[value='" + pin_short + "']").attr("selected","selected");
                        $("#city").val(city);
                        if($.isNumeric(pin)){
                            $("#pCode").val(pin);
                        }else{
                            $("#pCode").val("");
                        }

                        // $("#country-id > option").each(function() {
                        //     if(this.value==country){
                        //        country_find=true;  
                        //     }
                        //     if(this.value==pin){
                        //        country_find=true;  
                        //     }
                        // });
                        // if(country_find==false){
                        //     $("#country-id option[text='Choose Country']").attr("selected","selected");
                        // }

                        console.log(country)
                        console.log(state)
                        console.log(city)
                        console.log(pin)

                       

                        
                    }
                }
            });

                
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport)
            } else {
                map.setCenter(place.geometry.location)
                map.setZoom(17)
            }
            marker.setPosition(place.geometry.location)
            marker.setVisible(true)

            let request = {
                location: place.geometry.location,
                radius: '500',
                type: ['atm']
            }

            service = new google.maps.places.PlacesService(map)
            service.nearbySearch(request, callback)

        })

    }

    google.maps.event.addDomListener(window, 'load', initialize)
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
<script>
    var phone_number = window.intlTelInput(document.querySelector("#mobile"), {
    separateDialCode: true,
    preferredCountries:["FR"],
    hiddenInput: "mobile",
    
    utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
    });

</script>

<script type="text/javascript">
    function showPreview(event){
      if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-1-preview");
        preview.src = src;
        preview.style.display = "block";
      }
    }
    function showPrevieww(event){
      if(event.target.files.length > 0){
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("file-ip-11-preview");
        preview.src = src;
        preview.style.display = "block";
      }
    }



    $(".check-time").change(function(){
        var checked=$(this).is(':checked');
        if(checked==true){   
            $(this).parent().closest(".days").find(".from-time").attr('required',"true");
            $(this).parent().closest(".days").find(".to-time").attr('required',"true");
        }else{
            $(this).parent().closest(".days").find(".from-time").removeAttr('required');
            $(this).parent().closest(".days").find(".to-time").removeAttr('required');
        }
    });

</script>

<script>
    // get pro categories
    $("#category-type").change(function(){
        var category_type = $(this).find(":selected").val();
        $.ajax({
            type:'get',
            url:'{!!URL::to('pro/getProCategoriesThroughCategoryTypeAjax')!!}',
            data:{'category_type':category_type},
            success:function(data)
            {
            $("#category-id").html('');
            $("#category-id").append(data);
            },
            error:function()
            {
            alert('error');
            }
        });
     });

    // get pro categories
    $("#category-id").change(function(){
        var category_id = $(this).find(":selected").val();
        $.ajax({
            type:'get',
            url:'{!!URL::to('pro/getProSubCategoriesThroughProCategoryAjax')!!}',
            data:{'category_id':category_id},
            success:function(data)
            {
            $("#sub-category-id").html('');
            $("#sub-category-id").append(data);
            },
            error:function()
            {
            alert('error');
            }
        });
     });      
            
</script>



@endsection