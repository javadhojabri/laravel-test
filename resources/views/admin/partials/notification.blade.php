@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p class="text-center"><b>{{session('message')}}</b></p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger text-center">{{$error}}</div>
    @endforeach
@endif