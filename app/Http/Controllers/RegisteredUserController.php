<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {

        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'nationality' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'school' => ['string', 'max:255'],
            'class' => ['string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed', Password::min(6)],
        ]);
        // dd($validated);
        $user = User::create($validated);
        Auth::login($user);
        try {
            Mail::send('emails.password-change-success', ['user' => $user], function ($message) use ($request) {

                $message->to($request->email);

                $message->subject('Registration Successfull');
            });
        } catch (\Throwable $th) {
            Log::channel('forgot')->info("Password Reset Status: from controller " . $th->getMessage());
        }
        return redirect('/');
    }
    public function update(Request $request, User $user)
    {

        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'nationality' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'school' => ['required', 'string', 'max:255'],
            'class' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);
        $user->update($validated);

        return redirect('/');
    }
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('users.user', ['users' => $users]);
    }
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }
    public function ajux()
    {
        $users = User::latest()->paginate(6);
        $data = [
            'status' => 'success',
            'message' => 'Data retrieved successfully',
            'data' => [
                'users' => $users,
            ]
        ];
        return response()->json($data);
    }
    public function destroy(User $user)
    {
        // Gate::authorize('edit-user', $user);
        $user->delete();
        return  redirect('/user');
    }
    public function deactive(User $user)
    {
        // Gate::authorize('edit-user', $user);
        $user->update(['active' => 0]);
        return  redirect('/user');
    }
    public function active(User $user)
    {
        // Gate::authorize('edit-user', $user);
        $user->update(['active' => 1]);
        return  redirect('/user');
    }
}
