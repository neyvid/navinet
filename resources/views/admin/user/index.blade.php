@extends('admin.layout.tableListLayout')
{{--@section('title','لیست کاربران')--}}
@section('titleOfTable','لیست کاربران')
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
    @foreach($allUsers as $user)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
                {{$user->name}}
            </td>
            <td>
                @if(!$user->email)
                    وارد نشده است
                @endif
                {{$user->email}}

            </td>
            <td>
                @foreach($user->getRoleNames() as $roleName)
                    {{\App\Models\Roles\Roles::getRoleName($roleName)}}
                @endforeach
                /
                @foreach($user->getPermissionNames() as $permissionName)
                    {{\App\Models\Permission\Permissions::getPermissionName($permissionName)}}
                @endforeach
            </td>
            <td>
                {{$user->user_status=2}}
            </td>

        </tr>
    @endforeach

    </tbody>
    <tfoot>
    <tr>
        <th>ردیف</th>
        <th>نام کاربر</th>
        <th>ایمیل کاربر</th>
        <th>نقش/سطح دسترسی</th>
        <th>وضعیت</th>
        <th>عملیات</th>
    </tr>
    </tfoot>
@endsection
