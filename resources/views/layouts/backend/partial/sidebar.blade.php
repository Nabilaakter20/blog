        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info bg-green">
                <div class="image">
                    <img src="{{ Storage::disk('public')->url('profile/'.Auth::user()->image) }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="{{ Auth::user()->role->id == 1 ? route('admin.settings') : route('author.settings')}}">
                                <i class="material-icons">settings</i>Settings</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <i class="material-icons">input</i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            
                            <!-- <a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a> -->
                            
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>

                    @if(Request::is('admin*'))
                    <!--Home-->
                    <li class="{{ Request::is('home') ? 'active' : '' }}">
                        <a href="{{route('home')}}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <!--Dashboard-->
                    <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!--Tag-->
                    <li class="{{ Request::is('admin/tag*') ? 'active' : '' }}">
                        <a href="{{route('admin.tag.index')}}">
                            <i class="material-icons">label</i>
                            <span>Tag</span>
                        </a>
                    </li>

                    <!--Category-->
                    <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                        <a href="{{route('admin.category.index')}}">
                            <i class="material-icons">label</i>
                            <span>Category</span>
                        </a>
                    </li>
                    <!--Post-->
                    <li class="{{ Request::is('admin/post*') ? 'active' : '' }}">
                        <a href="{{ route('admin.post.index') }}">
                            <i class="material-icons">library_books</i>
                            <span>Posts</span>
                        </a>
                    </li>
                    <!-- Pending Post-->
                    <li class="{{ Request::is('admin/pending/post') ? 'active' : '' }}">
                        <a href="{{ route('admin.post.pending') }}">
                            <i class="material-icons">library_books</i>
                            <span>Pending Posts</span>
                        </a>
                    </li>
                    <!-- Favourite post -->
                    <li class="{{ Request::is('admin/favorite') ? 'active' : '' }}">
                        <a href="{{ route('admin.favorite.index') }}">
                            <i class="material-icons">favorite</i>
                            <span>Favorite Posts</span>
                        </a>
                    </li>
                    <!-- Comments -->
                    <li class="{{ Request::is('admin/comments') ? 'active' : '' }}">
                        <a href="{{ route('admin.comment.index') }}">
                            <i class="material-icons">comment</i>
                            <span>Comments</span>
                        </a>
                    </li>   
                    <!-- Author -->
                    <li class="{{ Request::is('admin/authors') ? 'active' : '' }}">
                        <a href="{{ route('admin.author.index') }}">
                            <i class="material-icons">account_circle</i>
                            <span>Users</span>
                        </a>
                    </li>

                    <li class="{{ Request::is('admin/subscriber') ? 'active' : '' }}">
                        <a href="{{ route('admin.subscriber.index') }}">
                            <i class="material-icons">subscriptions</i>
                            <span>Subscribers</span>
                        </a>
                    </li>

                   <li class="header">System</li>
                   
                   <!-- settings -->
                        <li class="{{ Request::is('admin/settings') ? 'active' : '' }}">
                            <a href="{{ route('admin.settings') }}">
                                <i class="material-icons">settings</i>
                                <span>Settings</span>
                            </a>
                        </li>
                   <!-- another logout-->
                                 
                   <li>
                       <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="material-icons">input</i>
                                <span>Logout</span>
                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </li>
                    @endif

                    @if(Request::is('user*'))
                    <!-- Home -->
                    <li class="{{ Request::is('home') ? 'active' : '' }}">
                        <a href="{{route('home')}}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <!-- Dashboard -->
                    <li class="{{ Request::is('user/dashboard') ? 'active' : '' }}">
                        <a href="{{route('author.dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                      <!--Post-->
                    <li class="{{ Request::is('user/post*') ? 'active' : '' }}">
                        <a href="{{ route('author.post.index') }}">
                            <i class="material-icons">library_books</i>
                            <span>Posts</span>
                        </a>
                    </li>

                    <!-- Favourite post -->
                    <li class="{{ Request::is('user/favorite') ? 'active' : '' }}">
                        <a href="{{ route('author.favorite.index') }}">
                            <i class="material-icons">favorite</i>
                            <span>Favorite Posts</span>
                        </a>
                    </li>
                     <!-- comments -->
                    <li class="{{ Request::is('user/comments') ? 'active' : '' }}">
                        <a href="{{ route('author.comment.index') }}">
                            <i class="material-icons">comment</i>
                            <span>Comments</span>
                        </a>
                    </li>

                     
                    <li class="header">System</li>
                    
                   <!-- settings -->
                   <li class="{{ Request::is('user/settings') ? 'active' : '' }}">
                            <a href="{{ route('author.settings') }}">
                                <i class="material-icons">settings</i>
                                <span>Settings</span>
                            </a>
                        </li>
                   <!-- another logout-->
                                 
                   <li>
                       <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="material-icons">input</i>
                                <span>Logout</span>
                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </li>
               

                    @endif
                

                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <!-- <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div> -->
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->