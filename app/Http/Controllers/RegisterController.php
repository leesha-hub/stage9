<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\EmailVerification;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'regex:/^[가-힣a-zA-Z\s\-·]{2,20}$/u',
            ],
            'email' => [
                'required',
                'email',
                'unique:users,email',
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'max:20',
                'regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*()_+=-]).{8,}$/',
            ],
        ]);

        $verification = EmailVerification::where('email', $request->email)
            ->whereNotNull('verified_at')
            ->first();

        if (!$verification) {
            return back()->withErrors(['register' => '이메일 인증을 먼저 완료해 주세요.']);
        }

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        } catch (QueryException $e) {
            if ($e->errorInfo[1] == 1062) {
                return back()->withErrors([
                    'email' => '이미 등록된 이메일입니다.',
                ])->withInput($request->only(['name', 'email']));
            }

            // 그 외 DB 오류
            return back()->withErrors([
                'register' => '회원가입 중 오류가 발생했습니다. 다시 시도해주세요.',
            ])->withInput($request->only(['name', 'email']));
        }

        return redirect()->route('login.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
