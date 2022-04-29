<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function login(Request $request)
    {


        $validate = $request->validate([
            'usuario' => 'required|string|max:20',
            'clave' => 'required|string|min:8'
        ]);

        // return $validate;

        // $user=usuario::where('USR_PERS', $validate['usuario'])->where('PASSWD_PERS', $validate['clave'])->first();
        $user=usuario::where('USR_PERS', $validate['usuario'])->where('PASSWD_PERS', $validate['clave'])->exists();
        // return view('home');
        // return response()->json([
        //     'result' => $user,
        // ]);

        if ($user){
             return view('home');
        }else{
             return view('acceso.login');
        }

    }

     public function index()
    {
        return view('acceso.login');
    }


    public function obtenerusuario()
    {
        $user=usuario::all();
        return $user;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acceso.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
