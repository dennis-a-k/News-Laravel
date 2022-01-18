<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getByUser($id)
    {
        return static::find($id);
    }

    public function getByUsers()
    {
        return static::query()
            ->orderBy('name', 'asc')
            ->paginate(10);
    }

    public function updateUser($value, $user)
    {
        $errors = [];
        if (Hash::check($value['current_password'], $user->password)) {
            $password = $value['password'];
            if (!empty($password)) {
                $user->password = Hash::make($password);
            }
            $user->name = $value['name'];
            $user->email = $value['email'];
            $user->save();

            return $user;
        } else {
            $errors['current_password'][] = __('validation.custom.attribute-name.password_incorrect');
        }
        return redirect()
            ->route('admin::user::index')
            ->withErrors($errors);
    }

    public function changeRole($value) {
        $user = static::find($value['id']);
        if ($user->role == 'admin') {
            $user->role = 'user';
            $user->save();
        } else {
            $user->role = 'admin';
            $user->save();
        }
        return $user;
    }

    public function hasRole($role)
    {
        return $this->role == $role;
    }
}
