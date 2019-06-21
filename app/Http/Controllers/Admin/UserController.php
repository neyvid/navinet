<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRegister;
use App\Models\Roles\Roles;
use App\Repository\UserRepository\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    private $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function index()
    {
        return view('admin.user.index');

    }

    public function create()
    {
        $title = 'ایجاد حساب کاربری جدید';
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.user.create', compact('title', 'roles', 'permissions'));
    }

    public function store(UserRegister $request)
    {
        $mobile = $request->mobile;
        $password = Hash::make($request->password);
        $isExistMobile = $this->userRepository->findBy(['mobile' => $mobile]);
        if (!$isExistMobile && !$isExistMobile instanceof User) {
            $createUser = $this->userRepository->create([
                'mobile' => $mobile,
                'password' => $password,
            ]);
            $createUser->assignRole($request->role);
            $createUser->givePermissionTo($request->permission);
            return redirect()->back()->with('success', 'کاربر مورد نظر با موفقیت ثبت گردید');
        } else {
            return redirect()->back()->with('warning', 'قبلا با این شماره موبایل ثبت نام شده است');

        }

    }
}
