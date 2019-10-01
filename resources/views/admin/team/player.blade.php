@extends('layout.admin')
@section('content')
    @if ($players && count($players)>0)
        <div class="row">
            <div class="col-md-4 m-auto">
                <form action="" method="post">
                    {{csrf_field()}}
                    <table>
                        @foreach($players as $player)
                            <tr>
                                <td><label class="form-switch">
                                        <input type="checkbox" name="players[]"
                                               value="{{$player->player_id}}" {{isset($team_player) && in_array($player->player_id ,$team_player) ? "checked" : ""  }} >
                                        <i></i>


                                    </label></td>
                                <td>{{$player->full_name}}</td>
                                <td><img class="player_image"
                                         src="{{ URL::to(('images/') . $player->address_pic) }}"/></td>
                            </tr>
                        @endforeach
                    </table>
                    <input type="submit" class="btn btn-success" value="ذخیره تغییرات بازیکنان ">
                </form>
            </div>
        </div>
    @endif
@endsection