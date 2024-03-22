<nav class="navbar navbar-inverse navbar-expand-lg navbar-dark" style="background-color:#85149E">
    <div class="container-fluid">
        {{-- </button> --}}
        <img style="width:50px" class="shadow rounded-circle m-3" src="{{url('assets/images/ttms.jpg')}}">
        <a class="navbar-brand fs-5" href="{{'/'}}">{{config('app.name','publicworkerstranfer')}}</a>
        <!-- Right Side Of Navbar -->
        <div id="navbar" class="navbar-collapse navbar-right">
            <ul class="nav navbar-nav text">
                <li class="nav-item "><a class="nav-link text-white fs-5" href="{{'/'}}"></a></li>
            </ul>
        </div>
        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            @if(Auth()->check())
            <li class="nav-item">
                <a class="nav-link text-white fs-5 text-capitalize" href="{{url('/login') }}">
                    <i class="bi bi-box-arrow-in-right text-danger mx-2"></i>login</a>
            </li>
            @else
            <li class="nav-item"><a class="nav-link text-white " href="{{url('/register') }}">
                    <i class="bi bi-person-plus mx-2"></i>Create Account</a></li>
            @endif
        </ul>
    </div>
    <!--nav-collabse-->

</nav>
