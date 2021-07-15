<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\JsonResponse;
// use Illuminate\Http\Client\Request;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // 登出後跳轉
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/TNR-index');
    }

    // 根據 role 判斷導向
    public function redirectTo()
    {
        // 只需要 return 路徑即可
        $role = Auth::user()->role ?? null;
        if ($role == 'admin') {
            return '/TNR-admin/dashboard';
        } elseif ($role == 'user') {
            return '/TNR-index';
        } else {
            return '/TNR-index/login';
        }

    }
}
