<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([

            'email' => 'required|email|exists:users',

        ]);



        $token = Str::random(64);
        $existData = DB::table('password_reset_tokens')->where('email', $request->email)->first();
        if (!$existData) {
            DB::table('password_reset_tokens')->insert([

                'email' => $request->email,

                'token' => $token,

                'created_at' => Carbon::now()

            ]);
        } else {
            $token = $existData->token;
        }

        try {
            Mail::send('emails.forgot-password', ['token' => $token], function ($message) use ($request) {

                $message->to($request->email);

                $message->subject('Reset Password');
            });
        } catch (\Throwable $th) {
            Log::channel('forgot')->info("Password Reset Status: from controller " . $th->getMessage());
        }
        return back()->with('message', 'We have e-mailed your password reset link!');
    }
}
