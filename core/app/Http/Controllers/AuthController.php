<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Messages;
use App\Models\User;
use Auth;
use Hash;
use Jenssegers\Date\Date;
use Session;
use Input;
use Redirect;
use URL;
use View;
use Request;

/**
 * Class AuthController
 * @package App\Http\Controllers
 */
class AuthController extends Controller {


    /**
     * Constructor
     */
    public function __construct(){
        $this->title = app('title');
    }

    /**
     * Login Page
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function login()
    {
        if (Auth::check()) {
            return Redirect::to(URL::route('index'));
        }
        $this->title->prepend(trans('auth.authorisation'));
        View::share('menu_item', '');
        $data = [];

        return View::make(config('app.t') . '.auth.login', $data);
    }

    /**
     * Receive Login Post Information and Authorize user
     *
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function loginPost()
    {
        $email = trim(Input::get('email', ''));
        $password = trim(Input::get('password', ''));
        $isRemember = Input::has('remember');

        $user = User::where('email', $email)->first();

        if (empty($user)) {
            sm('danger', 'Пользователя с таким email не существует', 'login');
            return Redirect::to(URL::route('login'))->withInput();
        }

        if (!Hash::check($password, $user->password)) {
            sm('danger', 'Неверный пароль', 'login');
            return Redirect::to(URL::route('login'))->withInput();
        }
        if ($user->active != '1') {
            sm('danger', 'Доступ заблокирован', 'login');
            return Redirect::to(URL::route('login'))->withInput();
        }
        $user->timestamps = false;
        $user->last_access = Date::now();
        $user->last_ip = Request::getClientIp();
        $user->save();
        Auth::login($user, $isRemember);
        return Redirect::intended(URL::route('index'));
    }

    /**
     * Logout
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return Redirect::route('index');
    }

}
