<?php

namespace HishabKitab\Engine\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use HishabKitab\Engine\Http\Requests\Authentication\RegisterRequest;
use HishabKitab\Engine\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('engine::auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param RegisterRequest $request
     * @return RedirectResponse
     */
    public function store(RegisterRequest $request)
    {
        //register new user

        if($user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])) {

            //set a confirmation msg
            notify()->success(__('auth.register.success'), 'Authentication');

            //send a user to login
            Auth::login($user);

            //trigger registered event [email verification]
            event(new Registered($user));

            //send to company config info
            return redirect()->route('config.company');
        }

        //set a confirmation msg
        notify()->success(__('auth.register.failed'), 'Authentication');

        //send back to register page
        return redirect()->route('config.company');
    }
}
