<table class="table table-striped rtl">
    <thead>
    <tr>
        <th scope="col">اسم تیم</th>
        <th scope="col">درباره تیم</th>
        <th scope="col">تعداد بازیکنان</th>
        <th scope="col">لیست بازیکنان</th>
        <th scope="col">تاریخ ایجاد</th>
        <th scope="col">ویرایش</th>
        <th scope="col">حذف</th>
    </tr>
    </thead>
    <tbody>
    @if ($teams && count($teams)>0)
        @foreach($teams as $team)
            @include('admin.team.column',$team)
        @endforeach
    @endif
    </tbody>
</table>