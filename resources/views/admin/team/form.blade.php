<form action="{{route("admin.teams.create")}}" method="post" enctype="multipart/form-data" class="rtl">
    @csrf
    <div class="form-group rtl">
        <label for="team_name" class="float-right">نام تیم</label>
        <input type="text" class="form-control" name="team_name" id="team_name"
               placeholder="نام تیم را وارد کنید">
    </div>
    <div class="form-group">
        <label for="about_team" class="float-right">درباره تیم</label>
        <textarea class="form-control" name="about_team" id="about_team" rows="3"></textarea>
    </div>
    <input type="submit" class="btn btn-outline-primary btn-lg d-block w-50 m-auto" value="ثبت تیم">
</form>