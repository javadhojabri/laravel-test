@extends('layout.admin')
@section('content')
    @if ($players && count($players)>0)
        <form action="" method="post">
            {{csrf_field()}}
            <ul>
                @foreach($players as $player)
                    <li>
                        <label class="form-switch">
                            <input type="checkbox" name="players[]"
                                   value="{{$player->player_id}}" {{isset($team_player) && in_array($player->player_id ,$team_player) ? "checked" : ""  }} >
                            <i></i>
                            {{$player->full_name}}
                        </label>
                    </li>
                @endforeach
            </ul>
            <input type="submit" class="btn btn-success" value="ذخیره تغییرات بازیکنان ">
        </form>
    @endif
@endsection