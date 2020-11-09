@extends('layouts.admin')
@section('content')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('layouts.navigation')
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="row layout-top-spacing" style="text-align:right;margin-left:20px">
                    <a href="{{ route('staffs.create') }}"><button class="btn btn-info">Upload staff csv file</button></a>
                </div>
                 <div class="row layout-top-spacing">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                          <div class="sidebar-widget">
                            <h3 class="room-details-title">Create Staff information</h3>
                                <form action="{{ route('saveStaff') }}" method="post" class="search-form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="firstname" placeholder="First name" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="lastname" placeholder="Last name" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="staff_id" placeholder="Staff ID" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="class" placeholder="Class" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="address" placeholder="Address" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="phone" placeholder="Phone number" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="designation" placeholder="Designation" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="department" placeholder="Department" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                        <label>Signature</label>  
                                            <input type="file" name="signature" placeholder="Signature" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <label>Passport Photograph</label>
                                            <input type="file" name="image" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary mt-4">SAVE</button>
                                </form>
                            </div>
                        </div>
                    </div>



                        </div>
                    </div>

                    </div>
            </div>

            @include('layouts.footer')
        </div>
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   @endsection