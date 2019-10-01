<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="#">Soccer managment</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @if (!\Illuminate\Support\Facades\Auth::check())
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("frontend.home.register")}}">ثبت نام <span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("frontend.home.login")}}">ورود <span
                                class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    @else
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link"
                   href=""> {{\Illuminate\Support\Facades\Auth::user()->full_name}} خوش آمدید
                    <span
                            class="sr-only">(current)</span></a>
            </li>
            @if (\Illuminate\Support\Facades\Auth::user()->role == "1")
                <li class="nav-item active">
                    <a class="nav-link" href="{{route("admin.admin.home")}}">پنل مدیریت <span
                                class="sr-only">(current)</span></a>
                </li>
            @endif
            <li class="nav-item active">
                <a class="nav-link" href="{{route("frontend.home.logout")}}">خروج <span
                            class="sr-only">(current)</span></a>
            </li>
        </ul>
    @endif
</nav>