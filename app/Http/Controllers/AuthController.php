<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('login-form');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function login (request $request){
        $request->validate([
		    'username'  => 'required|max:15',
		    'password' => [
		        'required',           // Wajib diisi
		        'min:3',              // Minimal 3 karakter
		        'regex:/[A-Z]/',      // Harus mengandung setidaknya 1 huruf besar

		    ],
		]);

        if($request->username=='H2357301048' &&
         $request->password=='H2357301048'){
            $result ='succes';

            session([
                'username'=>$request->username,
                'last_login'=> date ('Y-m-d H:i:s')
            ]);
        } else {
            Session::flush();
            $result='error';
        }
        return redirect()->route('halaman-login')->with('from',$result);
        // $pagedata['result']= $result;

        // return redirect ('login-form', $pagedata);

    }

}
// $request->validate([
//     'username' => 'required|string',
//     'password' => 'required|string|min:3|regex:/[A-Z]/', // Minimal 3 karakter dan ada huruf kapital
// ]);

// $nim = '123456789'; // Ganti dengan NIM yang sesuai

// // Ambil input dari request
// $username = $request->input('username');
// $password = $request->input('password');

// // Cek apakah username dan password sama dengan NIM
// if ($username === $nim && $password === $nim) {
//     // Redirect ke halaman login dengan informasi success
//     return redirect()->route('login')->with('status', 'success');
// } else {
//     // Redirect ke halaman login dengan informasi error
//     return redirect()->route('login')->with('status', 'error');
// }

