<form action="" method="post" enctype="multipart/form-data" class="rtl">
    @include('admin.partials.notification')
    @csrf
    <div class="form-group rtl">
        <label for="full_name" class="float-right">نام نام خانوادگی</label>
        <input type="text" value="{{ old('full_name',isset($player) ? $player->full_name : "")}}" class="form-control"
               name="full_name" id="full_name"
               placeholder="نام و نام خانوادگی را وارد کنید">
    </div>
    <label class="text-right float-right" for="file">عکس</label>
    @if (isset($player))
        <img class="player_image" src="{{URL::to(('images/') . $player->address_pic)}}"/>
    @endif
    <div class="custom-file form-group">
        <input type="file" value="{{ old('address_pic',isset($player) ? $player->address_pic : "")}}" name="file"
               class="custom-file-input" id="file">
        <label class="custom-file-label" for="file">عکس بازیکن . . .</label>
    </div>
    <div class="form-group">
        <label class="float-right" for="role">تیم بازیکن</label>
        <select class="form-control" name="team_id[]" id="role" multiple>
            @if (isset($teams) && count($teams)>0)
                @foreach($teams as $team)
                    <option value="{{$team->team_id}}" {{isset($player_teams) && in_array($team->team_id , $player_teams) ? 'selected': ''}} >{{$team->team_name}}</option>
                @endforeach
            @endif
        </select>
    </div>
    <input type="submit" class="btn btn-outline-primary btn-lg d-block w-50 m-auto" value="ثبت بازیکن">
</form>