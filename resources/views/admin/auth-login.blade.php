@extends('admin.layouts.main')
@section('header_style')
<title>justiscall - Admin</title>
 <!-- App favicon -->
 

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="A premium admin dashboard template by mannatthemes" name="description" />
<meta content="Mannatthemes" name="author" />
@endsection


@section('main_content')
<div class="container-fluid">
    <div class="row pt-5">
        <div class="col-lg-4 col-sm-3 col-xs-12"></div>
        <div class="col-lg-4 col-sm-6 col-xs-12">
            <div class="mb-0 shadow-none">
                <div class="card-body">  
                    <div class="px-3">
                        <div class="text-center">
                        @php
                        $headerFooter= \App\Models\header_and_footer::get();
                        @endphp 
                                        
                            <a href="{{ url('/') }}" class="logo logo-admin">
                                <img src="{{ url($headerFooter[0]->logo)}}" height="55" alt="logo" class="my-3">
                            </a>
                        </div>                            
                        
                        <form class="form-horizontal my-4" action="{{ route('login') }}" method="post">
                            <div class="row">
                                <div class="form-group col-12">
                                    <!-- <label for="uName">User Name</label> -->
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                        </div>
                                        <input type="email" class="form-control" id="email" placeholder="Enter User Email" name="email" maxlength="255" required value="{{old('email')}}">
                                        @error('email')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                                    
                                </div>

                                <div class="form-group col-12">
                                    <!-- <label for="pass">Password</label> -->
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                        </div>
                                        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" minlength="4" maxlength="14">
                                        @error('password')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                                    
                                </div> 
                            </div>
                            <div class="form-group mb-0 row">
                                <div class="col-3 mt-2"></div>
                                <div class="col-sm-6 col-xs-12 mt-2">
                                    <input type="hidden" name="user_type" value="admin">
                                    @csrf
                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Sign In</i></button>
                                </div>
                            </div>                            
                        </form>

                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection


@section('script_code')
@endsection
