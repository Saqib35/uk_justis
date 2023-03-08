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
                                                <h4 class="header-title mt-0">Add Client</h4>
                                                <p class="text-muted mb-4 font-13">
                                                    Welcome to JUSTISCALL 
                                                </p>
                                            </div>                    
                                            
                                            <form action="{{ url('add-client-update') }}" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                      <input type="hidden" name="_token" value="{{ csrf_token() }}" /> 
                                                      <input type="hidden" name="latitude" id="latitude" value="{{ $Client[0]->latitude }}" /> 
                                                      <input type="hidden" name="longitude" id="longitude" value="{{ $Client[0]->longitude }}" />
                                                      <input type="hidden" name="current_img" id="" value="{{ $Client[0]->profile_img }}" />
                                                      <input type="hidden" name="id" id="" value="{{ $Client[0]->id }}" />
                                                       
                                                      
                                                      <input type="hidden" name="user_type" value="client" /> 
                                                  
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="fName">First Name</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                            </div>
                                                            <input type="text" required="" value="{{ $Client[0]->first_name }}" class="form-control" id="fName" placeholder="Enter First Name" name="first_name">
                                                        </div>                                    
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="lName">Last Name</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" required="" id="lName" value="{{ $Client[0]->last_name }}" placeholder="Enter Last Name" name="last_name">
                                                        </div>                                    
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="dob">Date of Birth</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar"></i></span>
                                                            </div>
                                                            <input type="date" class="form-control" value="{{ $Client[0]->date_of_birth }}" required="" id="dob" placeholder="Date of Birth" name="date_of_birth">
                                                        </div>                                  
                                                    </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="dob">Client Age</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar"></i></span>
                                                            </div>
                                                            <input type="number" class="form-control"  value="{{ $Client[0]->age }}"   required="" id="dob" placeholder="Date of Birth" name="age">
                                                        </div>                                  
                                                    </div>
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="category">Gender</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-gender-male-female font-16"></i></span>
                                                            </div>
                                                            <select class="form-control" name="gender" required="">
                                                                <option  value="" selected disabled>Choose Gender</option>
                                                                <option  value="Male" @if($Client[0]->gender=="Male"){{ "selected" }} @endif >Male</option>
                                                                <option value="Female" @if($Client[0]->gender=="Female"){{ "selected" }} @endif>Female</option>
                                                            </select>
                                                        </div>                                
                                                    </div>
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                      <label for="category">Country</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-city font-16"></i></span>
                                                            </div>
                                                            <select class="form-control" name="country" required="">
                                                                <option value="" selected  disabled>Choose Country</option>
                                                                @foreach ($Country as $Country)
                                                                 <option value="{{ $Country['id']  }}" @if($Client[0]->country==$Country['id']){{ "selected" }} @endif > {{ $Country['name']  }}</option>
                                                                @endforeach
                                                                
                                                            </select>
                                                            </div>                                
                                                        </div>

                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="phNum">Phone Number</label>
                                                        <div class="input-group mb-3">
                                                            
                                                            <input type="text" value="{{ $Client[0]->mobile }}" class="form-control" required="" id="phone_number" placeholder="Enter Phone Number" name="mobile">
                                                        </div>                                
                                                    </div>
                                                   
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="eMial">Email Address</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-email-outline font-16"></i></span>
                                                            </div>
                                                            <input type="email"   value="{{ $Client[0]->email }}" required="" class="form-control" id="eMial" name="email" placeholder="Email Address">
                                                        </div>                                    
                                                    </div>


                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="profile">Upload Profile</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text form-control" id="basic-addon1"><i class="mdi mdi-image font-16"></i></span>
                                                            </div>
                                                            <input type="file" id="file-ip-11" class="form-control" accept="image/*" onchange="showPrevieww(event);" name="logo">

                                                        </div>                                    
                                                    </div>
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <label for="eMial">Client profile image current</label>
                                                        <div class="input-group mb-3">
                                                           <img src="{{ url($Client[0]->profile_img) }}" width="130px" height="130px">    
                                                        </div>                                    
                                                    </div>
                                                    <div class="form-group col-sm-6 col-xs-12">
                                                        <div class="preview1">
                                                            <img id="file-ip-11-preview" height="200px">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-sm-12 col-xs-12">
                                                        <label for="address">Address</label>
                                                        <div class="input-group mb-3">
                                                            <textarea class="form-control" required="" id="searchTextField" placeholder="Enter Address" name="address" rows="4">{{  $Client[0]->address }}</textarea>
                                                        </div>                                    
                                                    </div>
                                                    
                                                        <div id="map" style="height: 1px;"></div>
                                                         
                                                    <div class="col-md-10 mb-3"></div>
                                                   
                                                    <div class="col-md-2 mb-3">
                                                        <input type="submit" name="submit" class="btn-submit form-control" value="update">
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



       <script src="admin/assets/plugins/moment/moment.js"></script>
        <script src="admin/assets/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="admin/assets/plugins/timepicker/tempusdominus-bootstrap-4.js"></script>
        <script src="admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        <script src="admin/assets/plugins/clockpicker/jquery-clockpicker.min.js"></script>
        <script src="admin/assets/plugins/colorpicker/jquery-asColor.js"></script>
        <script src="admin/assets/plugins/colorpicker/jquery-asGradient.js"></script>
        <script src="admin/assets/plugins/colorpicker/jquery-asColorPicker.min.js"></script>
        <script src="admin/assets/plugins/select2/select2.min.js"></script>

        <script src="admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <script src="admin/assets/pages/jquery.clock-img.init.js"></script>
        <script src="admin/assets/pages/jquery.forms-advanced.js"></script>


@endsection

@section('script_code')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRJ9NKLuz1a30NakDmyGExaq8c7c9YrBk&libraries=places"></script>
    
<script type="text/javascript">
   
   function showPrevieww(event){
      if(event.target.files.length > 0){
         var src = URL.createObjectURL(event.target.files[0]);
         var preview = document.getElementById("file-ip-11-preview");
         preview.src = src;
         preview.style.display = "block";
      }
   }

</script>

<script>
var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
  separateDialCode: true,
  preferredCountries:["FR"],
  hiddenInput: "mobile",
  
  utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
});

</script>


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

        var input = document.getElementById('searchTextField');

        let autocomplete = new google.maps.places.Autocomplete(input)

        autocomplete.bindTo('bounds', map)

        let marker = new google.maps.Marker({
            map: map
        })

        google.maps.event.addListener(autocomplete, 'place_changed', () => {
            let place = autocomplete.getPlace()
      

        
            $('#latitude').val(place.geometry.location.lat());
            $('#longitude').val(place.geometry.location.lng());
            
            
            
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
@if(Session::has('status'))

<script>
swal("success", "Client updated Successfully", "success");
</script>

@endif  

@if(Session::has('exist'))

<script>
swal("status", "Number already exist", "error");
</script>

@endif  


@endsection