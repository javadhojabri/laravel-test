<table class="table table-striped rtl">
    <thead>
    <tr>
        <th scope="col">full name</th>
        <th scope="col">email</th>
        <th scope="col">سطح کاربری</th>
        <th scope="col">تاریخ ایجاد</th>
        <th scope="col">ویرایش</th>
        <th scope="col">حذف</th>
    </tr>
    </thead>
    <tbody>
    @if ($users && count($users)>0)
        @foreach($users as $user)
            @include('admin.user.column',$user)
        @endforeach
    @endif
    </tbody>
</table>