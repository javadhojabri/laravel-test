<table class="table table-striped rtl">
    <thead>
    <tr>
        <th scope="col">picturs</th>
        <th scope="col">full name</th>
        <th scope="col">عضو چه تعداد تیم</th>
        <th scope="col">تاریخ ایجاد</th>
        <th scope="col">ویرایش</th>
        <th scope="col">حذف</th>
    </tr>
    </thead>
    <tbody>
    @if ($players && count($players)>0)
        @foreach($players as $player)
            @include('admin.player.column',$player)
        @endforeach
    @endif
    </tbody>
</table>