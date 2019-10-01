@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header text-center">تعداد کاربران</div>
                <div class="card-body">
                    <h5 class="card-title text-center">{{$user}} نفر</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header text-center">تعداد بازیکن</div>
                <div class="card-body">
                    <h5 class="card-title text-center">{{$player}} بازیکن</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header text-center">تعداد تیم</div>
                <div class="card-body">
                    <h5 class="card-title text-center">{{$team}} تیم</h5>
                </div>
            </div>
        </div>
    </div>
@endsection