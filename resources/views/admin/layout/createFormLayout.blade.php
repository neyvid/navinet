@extends('admin.layout.adminLayout')
@section('content')
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                @if(session('warning'))
                    <div class="alert alert-warning"><i class="fa fa-warning"></i>{{session('warning')}}</div>
                @endif
                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
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
                <div class="box-header with-border">
                    <h3 class="box-title">@yield('titleOFForm')</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="post">
                    {{@csrf_field()}}
                    <div class="box-body">
                        @yield('formContent')
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">ثبت</button>
                    </div>
                </form>
            </div>


        </div>
@endsection