@extends('admin.layout.tableListLayout')
{{--@section('title','لیست کاربران')--}}
@section('titleOfTable','لیست دسته بندی ها')
@section('listContent')
    <thead>
    <tr>
        <th>ردیف</th>
        <th>نام کاربر</th>
        <th>ایمیل کاربر</th>
        <th>نقش/سطح دسترسی</th>
        <th>وضعیت</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
                {{$category->name}}
            </td>
            <td>
                {{isset($category->parent)? $category->parent->name : '--' }}

            </td>

            <td>
                {{$category->type}}
            </td>

        </tr>
    @endforeach

    </tbody>
    <tfoot>
    <tr>
        <th>ردیف</th>
        <th>نام دسته بندی</th>
        <th>والد دسته</th>
        <th>نوع دسته</th>
        <th>وضعیت</th>
    </tr>
    </tfoot>
@endsection
