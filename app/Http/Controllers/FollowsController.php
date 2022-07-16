<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FollowsController extends Controller
{
    public function store(User $user) {
        auth()
            ->user()
            ->toggleFollow($user);

        if (auth()->user()->following($user)) {
            return response()->json(['success'=> 'followed']);
        } else {
            return response()->json(['success'=> 'unfollowed']);
        }
    }
}
