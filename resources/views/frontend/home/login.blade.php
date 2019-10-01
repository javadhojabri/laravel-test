@extends('layout.frontend')
@section('content')
    <div class="col-md-8 m-auto">
        @if (session('LoginError'))
            <div class="alert alert-danger text-center">{{session('LoginError')}}</div>
        @endif
        <form action="" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="password">
                </div>
            </div>
            <input type="submit" class="btn btn-outline-primary btn-lg d-block w-50 m-auto" value="ورود کاربر">

        </form>
    </div>
@endsection