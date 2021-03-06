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
                <a href="{{ route('students.create') }}"><button class="btn btn-info">Upload student csv file</button></a>
                </div>
                 <div class="row layout-top-spacing">
                
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table id="zero-config" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Admission no</th>
                                            <th>Parent name</th>
                                            <th>Class</th>                                            
                                            <th>Image</th>                                            
                                            {{-- <th>Signature</th>                                             --}}
                                            <th class="no-content"></th>
                                            <th class="no-content"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->firstname }} {{ $student->surname }}</td>
                                            <td>{{ $student->admission_no }}</td>
                                            <td> {{ $student->surname }}</td>
                                            <td>{{ $student->class }}</td>
                                            <td><img src="{{ $student->image }}" width="70" height="70"/> </td>
                                            {{-- <td>{{ $student->signature }} </td> --}}
                                            <td><a href="{{ route('students.edit',$student->id) }}">
                                                <button class="btn btn-dark">View</button></a>
                                            </td>
                                            <td class="text-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" href="{{ route('students.destroy',$student->id) }}" onclick="event.preventDefault();document.getElementById('delete-event{{ $student->id }}').submit();" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>

                                                        <form  id="delete-event{{ $student->id }}" action="{{ route('students.destroy',$student->id) }}" method="POST">
                                                        @csrf

                                                        @method('DELETE')
                                                        </form>
                                                    
                                                    </td>     

                                            
                                        </tr>
                                    @endforeach   
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Admission no</th>
                                            <th>Parent name</th>
                                            <th>Class</th>                                            
                                            <th>Image</th>                                            
                                            {{-- <th>Signature</th>                                             --}}
                                            <th class="no-content"></th>
                                            <th class="no-content"></th>
                                        </tr>
                                    </tfoot>
                                </table>
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