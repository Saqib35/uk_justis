@extends('pro.layouts.master')

    @section('header_style')
        <title>Admin - pro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by themesbrand" name="description" />
        <meta content="Mannatthemes" name="author" />

        <style>
            .pricing-content-2 li {
                text-align: left;
            }
        </style>

    @endsection
    @section('main_content')

    @include('pro.layouts.header')
    
    <div class="page-wrapper">
        <div class="page-wrapper-inner">
         
            <!-- Page Content-->

                <!-- Page Content-->
                <div class="page-content">
                    <div class="container-fluid"> 
                        <div class="row">
                        
                            @foreach ($proPlan as $proPlans)
                            <div class="col-md-6 col-xs-12">
                            <form action="{{ url('showStripePaymentPage')  }}" method="POST"> 
                                   <input type="hidden" name="id" value="{{  $proPlans['plan_name']  }}">
                                   <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <div class="card">
                                    <div class="card-body">
                                        <div class="pricingTable1 text-center">
                                            <h6 class="title1 py-3 m-0">{{  $proPlans['plan_name']  }}</h6>
                                            <div class="text-center py-4">
                                                <h3 class="amount"> <span id="planPrice{{ $proPlans['id'] }}">{{  $proPlans['country']  }}{{  $proPlans['price_one']  }}</span> <small class="font-12 text-muted">/ <span id="planMonth{{ $proPlans['id'] }}"> {{ $proPlans['duration_one'] }} </span></small></h3>
                                            </div>
                                            <ul class="list-unstyled pricing-content-2 py-3 border-0">
                                                  @if ($proPlans['include_one']!="")
                                                     <li>{{ $proPlans['include_one']  }}</li>
                                                  @endif
                                                  
                                                  @if ($proPlans['include_two']!="")
                                                     <li>{{ $proPlans['include_two']  }}</li>
                                                  @endif
                                                  
                                                  @if ($proPlans['include_three']!="")
                                                     <li>{{ $proPlans['include_three']  }}</li>
                                                  @endif
                                                  
                                                  @if ($proPlans['include_four']!="")
                                                     <li>{{ $proPlans['include_four']  }}</li>
                                                  @endif
                                                  
                                                  @if ($proPlans['include_five']!="")
                                                     <li>{{ $proPlans['include_five']  }}</li>
                                                  @endif
                                                  
                                                  @if ($proPlans['include_six']!="")
                                                     <li>{{ $proPlans['include_six']  }}</li>
                                                  @endif
                                                  
                                                <!-- <li class="text-muted">Tax consultations</li>
                                                 -->
                                            </ul>
                                             <select class="form-control" name="selectPlan" onchange="changePlan(this.value)">
                                                 @if ($proPlans['price_one']!="" && $proPlans['stripe_price_id_one']!="" && $proPlans['duration_one']!="")
                                                  
                                                  <option value="{{ $proPlans['id'].','.$proPlans['price_one'].','.$proPlans['stripe_price_id_one'].','.$proPlans['duration_one']  }}">{{ $proPlans['country'].' '.$proPlans['price_one'].' for '.$proPlans['duration_one']  }}</option>
                                                    
                                                @endif
                                                
                                                @if ($proPlans['price_two']!="" && $proPlans['stripe_price_id_two']!="" && $proPlans['duration_two']!="")
                                                  
                                                  <option value="{{ $proPlans['id'].','.$proPlans['price_two'].','.$proPlans['stripe_price_id_two'].','.$proPlans['duration_two']  }}">{{ $proPlans['country'].' '.$proPlans['price_two'].' for '.$proPlans['duration_two']  }}</option>
                                                    
                                                @endif

                                                @if ($proPlans['price_three']!="" && $proPlans['stripe_price_id_three']!="" && $proPlans['duration_three']!="")
                                                  
                                                  <option value="{{ $proPlans['id'].','.$proPlans['price_three'].','.$proPlans['stripe_price_id_three'].','.$proPlans['duration_three']  }}">{{ $proPlans['country'].' '.$proPlans['price_three'].' for '.$proPlans['duration_three']  }}</option>
                                                    
                                                @endif

                                                @if ($proPlans['price_four']!="" && $proPlans['stripe_price_id_four']!="" && $proPlans['duration_four']!="")
                                                  
                                                  <option value="{{ $proPlans['id'].','.$proPlans['price_four'].','.$proPlans['stripe_price_id_four'].','.$proPlans['duration_four']  }}">{{ $proPlans['country'].' '.$proPlans['price_four'].' for '.$proPlans['duration_four']  }}</option>
                                                    
                                                @endif
                                              
                                                    
                                             </select>
                                                
                                            <button type="submit" class="btn btn-block  btn-success btn-square btn-skew btn-outline-dashed mt-3 py-3 font-18"><span>Choose Plan</span></button>
                                        </div><!--end pricingTable-->
                                    </div><!--end card-body-->
                                </div> <!--end card-->                                   
                            </div><!--end col-->
                            </form>
                            @endforeach
                         
                            
                        </div><!--end row-->
                        
                    </div><!-- container -->

                    <footer class="footer text-center text-sm-left">
                        &copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                    </footer>
                </div>
            <!-- end page content -->
        </div>
    </div>
    <!-- end page-wrapper -->
    @endsection
    @section('scriptlinks')
        <script src="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

        <script src="{{asset('admin/assets/plugins/moment/moment.js')}}"></script>
        <script src="{{asset('admin/assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
        <script src="https://apexcharts.com/samples/assets/irregular-data-series.js"></script>
        <script src="https://apexcharts.com/samples/assets/series1000.js"></script>
        <script src="https://apexcharts.com/samples/assets/ohlc.js"></script>
        <script src="{{asset('admin/assets/pages/jquery.dashboard.init.js')}}"></script>

    @endsection


    @section('script_code')

<script>

function changePlan(id)
{

    var detail=id.split(",");

    $('#planPrice'+detail[0]).html('€ '+detail[1]);
    $('#planMonth'+detail[0]).html(detail[3]);
    
}

</script>

    @endsection