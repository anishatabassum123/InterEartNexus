<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserSearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $query = $request->input('search');

        $users = User::when($query, function ($q) use ($query) {
            $q->where('full_name', 'like', "%{$query}%")
                ->orWhere('email', 'like', "%{$query}%")
                ->orWhere('nationality', 'like', "%{$query}%")
                ->orWhere('role', 'like', "%{$query}%");
        })->paginate(10);

        return view('users.user', ['users' => $users]);
    }
}
