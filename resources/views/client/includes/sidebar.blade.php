<div class="left-sidenav">
                    
                    <ul class="metismenu left-sidenav-menu" id="side-nav">

                        <li class="menu-title">Main</li>

                        <li>
                            <a href="{{ route('client-dashboard') }}"><i class="mdi mdi-monitor"></i><span>Dashboards</span></a>
                        </li>
                        <li>
                            <a href="{{ route('find-professional-client') }}"><i class="mdi mdi-lock"></i><span>Find Professional</span></a>
                        </li>
                        <li>
                            <a href="{{ url('app-chat-client') }}"><i class="mdi mdi-message-text-outline"></i><span>Chat</span>
                        </li>
                        <li>
                            <a href="{{ route('client-profile-setting') }}"><i class="mdi mdi-book-open-page-variant"></i><span>Profile Setting</span></a>
                        </li>
                        <li>
                            <a href="{{ url('change-password-client') }}"><i class="mdi mdi-lock"></i><span>Change Password</span></a>
                        </li>
                        


                        <li>
                            <a href="javascript: void(0);"><i class="mdi mdi-lock-outline"></i><span>Authentication</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{ url('auth-login-client') }}">Login</a></li>
                                <li><a href="{{ url('auth-register-client') }}">Register</a></li>
                                <li><a href="{{ url('auth-recoverpw-client') }}">Recover Password</a></li>
                            </ul>
                        </li>



                    </ul>
                </div>