@extends('admin.layout.createFormLayout')
@section('titleOFForm','ایجاد حساب کاربری جدید')
@section('formContent')
    <div class="form-group">
        <label for="inputMobile">شماره موبایل:</label>
        <input type="tel" name="mobile" class="form-control" id="inputMobile" placeholder="شماره موبایل">
    </div>
    <div class="form-group">
        <label for="inputPassword">رمز عبور:</label>
        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="رمز عبور">
    </div>

    <div class="form-group">
        <label for="inputPassword">تکرار رمز عبور:</label>
        <input type="password" name="password_confirmation" class="form-control" id="inputPassword"
               placeholder="رمز عبور">
    </div>
    <div class="form-group">
        <label>نقش این حساب را انتخاب کنید:</label>
        <select class="form-control" name="role">
            @foreach($roles as $role)
                <option value="{{$role->name}}">{{\App\Models\Roles\Roles::getRoleName($role->name)}}</option>
            @endforeach
        </select>
    </div>  <div class="form-group">
        <label>سطح دسترسی این حساب را انتخاب کنید:</label>
        <select class="form-control" name="permission">
            @foreach($permissions as $permission)
                <option value="{{$permission->name}}">{{\App\Models\Permission\Permissions::getPermissionName($permission->name)}}</option>
            @endforeach
        </select>
    </div>

    {{--    <div class="form-group">--}}
    {{--        <label for="exampleInputFile">ارسال فایل</label>--}}
    {{--        <input type="file" id="exampleInputFile">--}}

    {{--        <p class="help-block">متن راهنما</p>--}}
    {{--    </div>--}}

@endsection