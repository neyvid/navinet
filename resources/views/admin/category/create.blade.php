@extends('admin.layout.createFormLayout')
@section('titleOFForm','ایجاد حساب کاربری جدید')
@section('formContent')
    <div class="form-group">
        <label for="inputCategory">نام دسته:</label>
        <input type="text" name="name" class="form-control" id="inputCategory" placeholder="نام دسته را وارد نمایید">
    </div>
    <div class="form-group">
        {{--                {{dd($categories)}}--}}
        <label>والد دسته را انتخاب نمایید:</label>
        <select class="form-control" name="parent">
            <option selected value="0">بدون والد</option>
            @include('admin.category.category_tree',['collection'=>$categories[0]])
        </select>
    </div>


@endsection