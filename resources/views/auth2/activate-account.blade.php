@extends('layouts.app2')


@section('content')



 <!-- Start Main Body -->
 <div class="main-body">
    <!-- Start Header -->
    
    <!-- End Header -->
    <!-- Start Subheader -->

    <!-- End Subheader -->
    <!-- Start User Details -->
    <section class="section-padding-bottom user-info-details">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="user-info-tabs mt-sm-5">
                        <div id="add-user-tab" class="step-app">
                            <ul class="step-steps custom mb-xl-40">
                              <li class="active">
                                <a href="#step-1"> <span class=""></span>
                                  <span class="step-name"></span>
                                </a>
                              </li>
                                 <!-- LIST DELETED -->
                             
                            
                            </ul>
                            <div class="step-content">
                                <div class="step-tab-panel active" id="step-1">
                                    <div class="step-tab-inner">
                                        <div class="heading text-center">
                                            <h4 class="text-custom-black fw-600"></h4>
                                            <p class="text-custom-black">Kindly check your email and use the code to activate your account<sup>*</sup></p>
                                        </div>
                                        <form method="POST" action="{{ route('activate-account') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="text-custom-black fs-14 fw-600" for="activate">Activate your account</label>
                                                        <input type="number" id="activate" class="form-control form-control-custom" name="activation_code"  required  autofocus placeholder="" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn-first btn-submit-fill">Submit</button>
                                              </div>
                                        </form>
                                    </div>
                                </div>
                               
                                
                                
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start User Details -->
    <!-- Start Footer -->
   
   
</div> 
<!-- End Main Body -->






@endsection