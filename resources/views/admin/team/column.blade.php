<tr>
    <td>{{$team->team_name}}</td>
    <td>{{$team->about_team}}</td>
    <td>{{$team->players()->count()}}</td>
    <td><a href="{{route('admin.teams.syncplayer',[$team->team_id])}}">لیست بازیکنان</a></td>
    <td>{{$team->created_at->diffForHumans()}}</td>
    <td><a href="{{route("admin.teams.edit",[$team->team_id])}}">ویرایش</a></td>
    <td><a href="{{route("admin.teams.remove",[$team->team_id])}}">حذف</a></td>
</tr>