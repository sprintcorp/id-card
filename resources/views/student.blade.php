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
                    <a href="{{ route('students.index') }}"><button class="btn btn-info">Upload student csv file</button></a>
                </div>
    @if($message)
       <div class="card p-3" style="margin-top:10px;background-color:red;color:white"> {{ $message }}</div>
    @endif
                 <div class="row layout-top-spacing">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                          <div class="sidebar-widget">
                            <h3 class="room-details-title">Upload Student CSV Information</h3>
                                <form action="{{ route('students.store') }}" method="post" class="search-form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">  
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary mt-4">UPLOAD STUDENTS INFORMATION</button>
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