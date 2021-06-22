

<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary id="mainNavbar">
    <a class="navbar-brand" href="{{ route("main") }}">USER</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav mr-auto">
                <li id="index" class="nav-item">
                    <a class="nav-link" href="">
                        @lang('header.messages')                        
                        <span class="badge badge-light">@yield('newmessages')</span>
                    </a>
                </li>
                <li id="create" class="nav-item">
                    <a class="nav-link" href="">
                        @lang('header.newmessage')
                    </a>
                </li>
                <li id="estadis" class="nav-item">
                    <a class="nav-link" href="">
                        @lang('header.estadis')
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav navbar-right ">
                    <li class="nav-item dropdown active">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-flag"></i>
                        @lang('header.language')
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item {{App::getlocale()=='eu'? 'active' : ''}}" href="">Euskara</a>
                        <a class="dropdown-item {{App::getlocale()=='es'? 'active' : ''}}" href="">Castellano</a>
                      </div>
                    </li>
                    <li class="nav-item dropdown active">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->user }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="">
                              <i class="fa fa-user"></i>
                              @lang('header.profile')
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i>
                                {{ __(trans('header.logout')) }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
            </ul>
        </div>
    </div>
</nav>
