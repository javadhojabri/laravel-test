<tr>
    <th scope="row">
    {{$user->full_name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->details_role_user()}}</td>
    <td>{{$user->created_at->diffForHumans()}}</td>
    <td><a href="{{route("admin.users.edit",[$user->user_id])}}">ویرایش</a></td>
    <td><a href="{{route("admin.users.remove",[$user->user_id])}}">حذف</a></td>
</tr>