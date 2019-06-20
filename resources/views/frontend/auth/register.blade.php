@extends("frontend.layout.frontendLayout")
@section('page_title',$title)
@section('content')
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="login.html">حساب کاربری</a></li>
                <li><a href="register.html">ثبت نام</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                <div class="col-sm-12" id="content">
                    <h1 class="title">ثبت نام حساب کاربری</h1>
                    <p>اگر قبلا حساب کاربریتان را ایجاد کرد اید جهت ورود به <a href="login.html">صفحه لاگین</a> مراجعه
                        کنید.</p>
                    @if(session('warning'))
                        <div class="alert alert-warning"><i class="fa fa-warning"></i>{{session('warning')}}</div>
                    @endif
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <i class="fa fa-exclamation-circle"></i>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </div>
                    @endif
                    <form class="form-horizontal" method="post">
                        {{@csrf_field()}}
                        <fieldset id="account">
                            <legend>اطلاعات شخصی شما</legend>
                            <div class="form-group required">
                                <label for="input-mobile" class="col-sm-2 control-label">شماره موبایل</label>
                                <div class="col-sm-4">
                                    <input type="tel" class="form-control" id="input-mobile" maxlength="11"
                                           placeholder="شماره موبایل " name="mobile">
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-group required">
                            <label for="input-password" class="col-sm-2 control-label">رمز عبور</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" id="input-password"
                                       placeholder="رمز عبور" value="" name="password">
                            </div>
                        </div>
                        <fieldset>
                            <legend>خبرنامه</legend>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">اشتراک</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline">
                                        <input type="radio" value="1" name="newsletter">
                                        بله</label>
                                    <label class="radio-inline">
                                        <input type="radio" checked="checked" value="0" name="newsletter">
                                        نه</label>
                                </div>
                            </div>
                        </fieldset>
                        <div class="buttons">
                            <div class="pull-right">

                                <input type="submit" class="btn btn-primary" value="ثبت نام">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection