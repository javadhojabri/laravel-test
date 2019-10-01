@if (isset($message))
    <div class="alert alert-primary"> {{$message}} </div>
@elseif (isset($error))
    <div class="alert alert-danger"> {{$error}} </div>
@endif