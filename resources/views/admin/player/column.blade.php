<tr>
    <td><a target="_blank" href="{{ URL::to(('images/') . $player->address_pic) }}"><img class="player_image"
                                                                                         src="{{ URL::to(('images/') . $player->address_pic) }}"/></a>
    </td>
    <td>{{$player->full_name}}</td>
    <td>{{$player->teams()->count()}}</td>
    <td>{{$player->created_at->diffForHumans()}}</td>
    <td><a href="{{route("admin.players.edit",[$player->player_id])}}">ویرایش</a></td>
    <td><a href="{{route("admin.players.remove",[$player->player_id])}}">حذف</a></td>
</tr>