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
                    <h1 class="title">یادآوری کلمه عبور</h1>
                    <p>درصورتیکه رمز عبور خود را فراموش کرده اید ، ایمیل خود را وارد نمایید.سپس لینک بازیابی رمز عبور برای شما ایمیل خواهدشد.</p>
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
                            <legend>ایمیل و یا شماره همراه</legend>
                            <div class="form-group required">
                                <label for="input-mobile" class="col-sm-3 control-label">شماره موبایل یا پست الکترونیک</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="input-mobile"
                                           placeholder="شماره موبایل یا پست الکترونیک خود را وارد نمایید" name="resetPassInput">
                                </div>
                            </div>
                        </fieldset>

                        <div class="buttons">
                            <div class="pull-right">

                                <input type="submit" class="btn btn-primary" value="یادآوری رمز عبور">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection