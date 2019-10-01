<form action="" method="post" class="rtl">
    @csrf
    <div class="form-group rtl">
        <label for="full_name" class="float-right">نام نام خانوادگی</label>
        <input type="text" class="form-control" name="full_name" id="full_name"
               placeholder="نام و نام خانوادگی را وارد کنید">
    </div>
    <div class="form-group rtl">
        <label for="email" class="float-right">ایمیل آدرس</label>
        <input type="text" class="form-control" name="email" id="email"
               placeholder="ایمیل آدرس را وارد کنید">
    </div>
    <div class="form-group rtl">
        <label for="password" class="float-right">رمز عبور</label>
        <input type="password" class="form-control" name="password" id="password"
               placeholder="پسورد را وارد کنید">
    </div>
    <div class="form-group">
        <label class="float-right" for="role">نقش کاربری</label>
        <select class="form-control" value="" name="role" id="role">
            <option name="role" value="1">مدیر</option>
            <option name="role" value="2">کاربر عادی</option>
        </select>
    </div>
    <input type="submit" class="btn btn-outline-primary btn-lg d-block w-50 m-auto" value="ثبت کاربر">
</form>