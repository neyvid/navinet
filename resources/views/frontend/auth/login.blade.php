@extends("frontend.layout.frontendLayout")
@section('page_title',$title)
@section('content')
    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="login.html">حساب کاربری</a></li>
                <li><a href="login.html">ورود</a></li>
            </ul>
            <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h1 class="title">حساب کاربری ورود</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="subtitle">مشتری جدید</h2>
                            <p><strong>ثبت نام حساب کاربری</strong></p>
                            <p>با ایجاد حساب کاربری میتوانید سریعتر خرید کرده، از وضعیت خرید خود آگاه شده و تاریخچه ی
                                سفارشات خود را مشاهده کنید.</p>
                            <a href="{{route('frontend.register.form')}}" class="btn btn-primary">ثبت نام</a></div>
                        <div class="col-sm-6">
                            <h2 class="subtitle">مشتری قبلی</h2>
                            @if(session('warning'))
                                <div class="alert alert-warning"><i class="fa fa-warning"></i>{{session('warning')}}</div>
                            @endif
                            <p><strong>من از قبل مشتری شما هستم</strong></p>
                            <form method="post">
                                {{@csrf_field()}}
                                <div class="form-group">
                                    <label class="control-label" for="input-mobile">شماره موبایل</label>
                                    <input type="tel" name="mobile" max="11" placeholder="شماره موبایل"
                                           id="input-mobile"
                                           class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="input-password">رمز عبور</label>
                                    <input type="password" name="password" placeholder="رمز عبور"
                                           id="input-password" class="form-control"/>
                                    <br/>
                                    <div class="form-group">
                                        <div class="pull-right">
                                            <input type="checkbox" name="remember_me">
                                            &nbsp;من رابخاطر داشته باش! &nbsp;
                                        </div>
                                    </div>
                                    <br/>
                                    <a href="#">فراموشی رمز عبور</a>
                                </div>
                                <input type="submit" value="ورود" class="btn btn-primary"/>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
