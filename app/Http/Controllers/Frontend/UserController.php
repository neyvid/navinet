<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\UserRegister;
use App\Models\Permission\Permissions;
use App\Models\Roles\Roles;
use App\Models\User;
use App\Repository\UserRepository\UserRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        $title = 'ورود به سایت';
        if (Auth::check()) {
            return redirect('/');
        }
        return view('frontend.auth.login', compact('title'));
    }

    public function dologin(Request $request)
    {
        if (Auth::attempt(['mobile' => $request->mobile, 'password' => $request->password], $request->has('remember_me') ? true : false)) {
            return redirect()->intended();
        }
        return redirect()->back()->with('warning', 'اطلاعات کاربری صحیح نمی باشد');
    }

    public function register()
    {
        $title = 'ثبت نام';
        if (Auth::check()) {
            return redirect('/');
        }
        return view('frontend.auth.register', compact('title'));
    }

    public function doRegister(UserRegister $request)
    {
        $mobile = $request->mobile;
        $password = Hash::make($request->password);
        $newsletter = $request->newsletter;
        $isExistMobile = $this->userRepository->findBy(['mobile' => $mobile]);
        if (!$isExistMobile && !$isExistMobile instanceof User) {
            $createUser = $this->userRepository->create([
                'mobile' => $mobile,
                'password' => $password,
                'subscribe' => $newsletter
            ]);
            $createUser->assignRole(Roles::USER);
            $createUser->givePermissionTo(Permissions::USERACCESS);
            Auth::login($createUser);
            return redirect()->intended();
        } else {
            return redirect()->back()->with('warning', 'قبلا با این شماره موبایل ثبت نام شده ایددر صورت فراموشی رمز از گزینه فراموش رمز استفاده نمایید');

        }
    }

//Initial Roles And Permission for System That Run First
    public function createRole()
    {
        Role::create(['name' => Roles::MANAGER]);
        Role::create(['name' => Roles::SUPPORTER]);
        Role::create(['name' => Roles::USER]);
    }

    public function createPermission()
    {
        Permission::create(['name' => Permissions::TOTALACCESS]);
        Permission::create(['name' => Permissions::SUPPORTERACCESS]);
        Permission::create(['name' => Permissions::USERACCESS]);
    }

    public function assignPermissionToRole()
    {
        Role::findByName(Roles::MANAGER)->givePermissionTo(Permissions::TOTALACCESS);
        Role::findByName(Roles::SUPPORTER)->givePermissionTo(Permissions::SUPPORTERACCESS);
        Role::findByName(Roles::USER)->givePermissionTo(Permissions::USERACCESS);
    }
}
