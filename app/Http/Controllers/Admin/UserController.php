<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = (new User())->getByUser(Auth::user()->id);
        return view('admin.pages.user', ['user' => $user]);
    }

    public function update(UserRequest $request)
    {
        (new User())->updateUser($request->all(), Auth::user());
        return redirect()
            ->route('admin::user::index')
            ->with('success', __('validation.custom.attribute-name.data_changed') . '!');
    }
}
