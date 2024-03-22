<nav class="navbar navbar-inverse navbar-expand-sm navbar-dark" style="background-color:#85149E">
    {{-- </button> --}}
    <img style="width:50px" class="shadow rounded-circle m-3" src="{{ url('assets/images/ttms.jpg') }}">
    <div class="navbar-header">
        <span class="open-slide">
            <a href="#" onclick="openSlideMenu()" style="text-decoration: none">
                <svg width="50" height="30">
                    <path d="M0,5 30,5" stroke="#fff" stroke-width="5" />
                    <path d="M0,14 30,14" stroke="#fff" stroke-width="5" />
                    <path d="M0,23 30,23" stroke="#fff" stroke-width="5" />
                </svg>
            </a>
        </span>
        <a class="navbar-brand fs-4" href="#">{{ config('app.name', 'ttms') }} </a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="nav-item "><a class="nav-link text-white fs-5" href="{{ url('/dashboard') }}">Dashboard</a></li>
        </ul>
    </div>
    {{-- drop menu --}}
    <!-- Right Side Of Navbar -->
    @if (Auth::guest())
        {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left:50%"> --}}
        <ul class="navbar-nav mb-2 mb-lg-0 text-capitalize">
            <li class="nav-item mt-2">
                <i class="bi bi-box-arrow-left text-danger"></i>
            </li>
            <li class="nav-item">
                <a class="nav-link active"aria-current="page" href="{{ '/login' }}">Login</a>
            </li>
        @else
            <li class="nav-item text-light text-capitalize" style="list-style:none">
                {{ Auth::user()->username }}
            </li>
    @endif
    @if (Auth::check())
        <li class="nav-item dropdown text-white"style="list-style:none" style="list-style:none; margin-right:20px;" >
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">
            </a>
            <ul class="dropdown-menu" style="text-transform:lowercase">
                <a class="dropdown-item" href="{{ url('/userProfile/user_profile') }}">Profile<i
                        class="bi bi-person-square ml-5"></i></a>
                <a class="dropdown-item mt-1" href="#">Setting<i class="bi bi-sliders ml-5"></i></a>
                <a class="dropdown-item mt-1" href="#">Preference<i class="fas fa-user ml-4"></i></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item mt-1" href="{{ '/logout' }}">Logout<i
                        class="bi bi-box-arrow-left ml-5"></i></a>
    @endif
    </ul>
    </li>
    </ul>
    </div>
    {{-- </div> --}}
</nav>
<!--nav-collabse-->
<div id="side-menu" class="side-nav text-white" style="background-color: #85149E" >
    @if (Auth::guest())
    <div class="pt-5"></div>
        {{-- <i class="bi bi-person-circle" class="ml-5 "style="font-size: 60px"></i> --}}
    @else
        <p class="fs-5 mr-5">{{ Auth::user()->username }}</p>
    @endif
    <ul class="nav navbar-nav" style="text-transform: capitalizes">
        <a href="#" class="btn-close btn-close-white fs-5" onclick="closeSlideMenu()">
            <small class="mr-2"></small></a>
        </hr>
        <h5 class="text-white text-white text-capitalize ml-3">Teacher Activities Menu</h5>
        <li class="nav-item ml-3">
            <a class='nav-link text-white' href="{{ url('/create') }}"> <i class="bi bi-person m-3"
                    style="color:#30BCED;"></i>Registration</a>
        </li>
        <li class="nav-item ml-3">
            <a class='nav-link text-white' href="{{ url('/employees/show') }}"> <i class="bi bi-card-checklist m-3"
                    style="color:#F56565;"></i>User Details
            </a>
        </li>
        <li class="nav-item ml-3">
            <a class='nav-link text-white' href="{{ url('/posts') }}"> <i class="bi bi-sticky-fill m-3"
                    style="color:#F56565;"></i>Posts
            </a>
        </li>
        <li class="nav navbar-nav">
            <ul class="nav-item ml-3">
                <a class='nav-link text-white' href="{{ url('/posts/show') }}"> <i class="bi bi-clock-history m-3"
                        style="color:#F56565;"></i>Post History
                </a>
            </ul>

        </li>
        {{-- <hr class="text-info" style="height: 1%"> --}}
    </ul>
</div>
<div id="main">
    {{-- row contente center --}}
</div>
<script>
    function openSlideMenu() {
        document.getElementById('side-menu').style.width = "250px";
        document.getElementById('main').style.marginLeft = "10px";
    }

    function closeSlideMenu() {
        document.getElementById('side-menu').style.width = "0";
        document.getElementById('main').style.marginLeft = "0";
    }
</script>
