<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{
    public function show(string $id)
    {
        return response()->json (
            'user'
        );
    }
}
