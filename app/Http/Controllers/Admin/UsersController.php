<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = (new User())->getByUsers();
        return view('admin.pages.users', ['users' => $users]);
    }

    public function update(Request $request)
    {
        (new User())->changeRole($request->all('id'));
        return redirect()->route('admin::users::index');
    }
}
