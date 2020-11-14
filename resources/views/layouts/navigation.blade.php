<div class="sidebar-wrapper sidebar-theme">
            
            <nav id="sidebar">
                <div class="profile-info">
                    <figure class="user-cover-image"></figure>
                    <div class="user-info">
                        {{-- <img src="images/logo.jpeg" alt="avatar"> --}}
                        <h6 class="">{{ auth()->user()->name }}</h6>
                        <p class="">ID Portal</p>
                    </div>
                </div>

                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="{{ route('home') }}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Student</span>
                            </div>
                            
                        </a>
                    </li>


                    <li class="menu">
                        <a href="{{ route('staffs.index') }}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                <span>Staff</span>
                            </div>
                        </a>
                       
                    </li>


                    <li class="menu">
                        <a href="{{ route('students.index') }}"  aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                <span>Add Student</span>
                            </div>
                            
                        </a>
                        
                    </li>

                     <li class="menu">
                        <a href="{{ route('addStaff') }}"  aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg  width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                                <span>Add Staff</span>
                            </div>
                            
                        </a>
                        
                    </li>
                </ul>
                
            </nav>

        </div>