<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('fakeBlade.login');
    }

    public function register()
    {
        return view('fakeBlade.register');
    }

    public function registerPost(Request $request)
    {
        // اعتبارسنجی
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:191',
            'family' => 'required|string|max:191',
            'national' => 'required|string|size:10|unique:users,national',
            'mobile' => 'required|string|size:11|unique:users,mobile',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // ایجاد کاربر جدید
            $user = User::create([
                'name' => $request->name,
                'family' => $request->family,
                'national' => $request->national,
                'mobile' => $request->mobile,
                'password' => Hash::make($request->password),
                'role' => 2, // پیشفرض: دانشجو (role=2)
                'active' => 1,
                'email' => null, // میتونی از موبایل یا ایمیل استفاده کنی
            ]);

            $user->addRole('student');

            Auth::login($user);

            return redirect()->route('dashboard')->with('success', 'ثبت نام با موفقیت انجام شد');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('danger', 'خطا در ثبت نام: ' . $e->getMessage())
                ->withInput();
        }
    }

    public function loginPost(Request $request)
    {
        // اعتبارسنجی
        $validator = Validator::make($request->all(), [
            'national' => 'required|string|size:10',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // جستجوی کاربر با کد ملی
        $user = User::where('national', $request->national)->first();

        if (!$user) {
            return redirect()->back()
                ->with('error', 'کد ملی یا رمز عبور اشتباه است')
                ->withInput();
        }

        // بررسی پسورد
        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()
                ->with('error', 'کد ملی یا رمز عبور اشتباه است')
                ->withInput();
        }

        // بررسی فعال بودن کاربر
        if ($user->active != 1) {
            return redirect()->back()
                ->with('error', 'حساب کاربری شما غیرفعال است')
                ->withInput();
        }

        // ورود کاربر
        Auth::login($user, $request->has('remember'));

        // بازگشت به صفحه مورد نظر
        return redirect()->intended('/dashboard')->with('success', 'خوش آمدید');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'با موفقیت خارج شدید');
    }
}