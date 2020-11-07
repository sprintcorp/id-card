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
                
                 <div class="row layout-top-spacing">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                          <div class="sidebar-widget">
                            <h3 class="room-details-title">Edit staff information</h3> 
                                <form action="{{ route('staffs.update',$staff->id) }}" method="post" class="search-form" enctype="multipart/form-data">
                                    @csrf  
                                    @method('PATCH')
                                    <div class="row">
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="name" value="{{ $staff->name }}" placeholder="staff name" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="staff_id" value="{{ $staff->staff_id }}" placeholder="Staff ID" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="class" value="{{ $staff->class }}" placeholder="Class" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="address" value="{{ $staff->address }}" placeholder="Address" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="designation" value="{{ $staff->designation }}" placeholder="Designation" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="department" value="{{ $staff->department }}" placeholder="Department" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <input type="text" name="phone" value="{{ $staff->phone }}" placeholder="Phone number" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                        <img src="{{asset($staff->signature)}}" width="100" height="100"/>
                                        <label>Signature </label>  <br/>
                                            <input type="file" name="signature" placeholder="Signature" class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">  
                                            <img src="{{ asset($staff->image) }}" width="100" height="100"/>
                                            <label>Passport Photograph</label><br/>
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