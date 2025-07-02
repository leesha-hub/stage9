<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Models\EmailVerification;
use App\Mail\EmailVerifyMail;

class EmailVerificationController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        try {
            $code = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

            EmailVerification::updateOrCreate(
                ['email' => $request->email],
                ['code' => $code, 'verified_at' => null]
            );

            Mail::to($request->email)->send(new EmailVerifyMail($code));

            return response()->json([
                'success' => true,
                'message' => '이메일로 인증번호를 전송했습니다.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => '메일 발송에 실패했습니다.',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code'  => 'required|string|size:6',
        ]);

        $verification = EmailVerification::where('email', $request->email)
            ->where('code', $request->code)
            ->first();

        if ($verification) {
            $verification->update(['verified_at' => now()]);
            return response()->json([
                'success' => true,
                'message' => '이메일 인증이 완료되었습니다!',
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => '인증번호가 일치하지 않습니다.',
        ], 422);
    }
}
