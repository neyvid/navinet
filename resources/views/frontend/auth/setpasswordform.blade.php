@extends("frontend.layout.frontendLayout")
@section('page_title',$title)
@section('content')
    <div id="container">
        <div class="container">
            <div class="row">
                <!--Middle Part Start-->
                <div class="col-sm-12" id="content">
                    @if(isset($error))
                        <div class="alert alert-warning"><i class="fa fa-warning"></i>{{$error}}</div>

                    @else
                        <h1 class="title">بازیابی رمز عبور</h1>
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
                                <div class="form-group required">
                                    <label for="input-new-password" class="col-sm-3 control-label">رمزعبورجدید</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="input-new-password"
                                               placeholder="رمزعبورراواردنمایید" name="newPassword">
                                    </div>

                                </div>
                                <div class="form-group required">
                                    <label for="input-confirm-password"
                                           class="col-sm-3 control-label">تکراررمزعبورجدید</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="input-confirm-password"
                                               placeholder="رمزعبورخودتکرار نمایید" name="newPassword_confirmation ">
                                    </div>

                                </div>
                            </fieldset>

                            <div class="buttons">
                                <div class="pull-right">

                                    <input type="submit" class="btn btn-primary" value="ثبت رمز جدید">
                                </div>
                            </div>
                        </form>
                    @endif
                </div>

            </div>
        </div>
    </div>
@endsection
