<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User as Users;
class UserController extends Controller
{
    public function show(Request $request): View
    {
        $data = [
            'users' => Users::get(),
        ];
        return view('users.index', $data);
    }
}
