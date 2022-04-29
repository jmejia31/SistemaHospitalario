<?php

namespace App\Http\Controllers\Personas\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

use GuzzleHttp\Client;

class UsuariosController extends Controller
{
    private $cliente;

    public function __construct () {
        $this->cliente = new Client(['base_uri' => 'http://localhost:4000/tbl_usuarios/']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios= Http::get('http://localhost:4000/tbl_usuarios');
        //   dd($categorias->body());
            $UsuaArray =  json_decode($usuarios);
            // dd($CategArray[0]);
            $UsuaArray=$UsuaArray[0];
            return view('Personas.Usuarios.Usuarios',compact('UsuaArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuarios');

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //  dd($request);
    $response = Http::post('http://localhost:4000/tbl_usuarios', [
        'PI_COD_USR' => $request -> PI_COD_USR,
        'PI_COD_ROL_USR' => $request -> PI_COD_ROL_USR,
        'PI_COD_ESPECIALIDAD' => $request -> PI_COD_ESPECIALIDAD,
        'PV_USR_PERS' => $request -> PV_USR_PERS,
        'PV_PASSWD_PERS' => $request -> PV_PASSWD_PERS,
        'PV_VERIFY_PASSWD_PERS' => $request -> PV_VERIFY_PASSWD_PERS,
        'PV_NUMERO_COLEGIATURA' => $request -> PV_NUMERO_COLEGIATURA,
        'PV_PRIMER_NOMBRE' => $request -> PV_PRIMER_NOMBRE,
        'PV_SEGUNDO_NOMBRE' => $request -> PV_SEGUNDO_NOMBRE,
        'PV_PRIMER_APELLIDO' => $request -> PV_PRIMER_APELLIDO,
        'PV_SEGUNDO_APELLIDO' => $request -> PV_SEGUNDO_APELLIDO,
        'PV_NO_IDENTIDAD' => $request -> PV_NO_IDENTIDAD,
        'PV_DIR' => $request -> PV_DIR,
        'PV_EMAIL' => $request -> PV_EMAIL,
        'PV_TEL' => $request -> PV_TEL,
        'PV_CELL' => $request -> PV_CELL,
        'PE_GEN' => $request -> PE_GEN,
        'PE_ESTADO_CIVIL' => $request -> PE_ESTADO_CIVIL,
        'PT_EDAD' => $request -> PT_EDAD,
        'PD_FEC_NTO' => $request -> PD_FEC_NTO,
        'PE_ESTADO' => $request -> PE_ESTADO,
        'PD_SALARIO' => $request -> PD_SALARIO
    ]);
    // eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6IjExMSIsImlhdCI6MTY0OTQ4OTMwNCwiZXhwIjoxNjQ5NTc1NzA0fQ.IC27y3WpYcyLlKcOSzcle2tgTikE_-LWi3XUJfiL0a0
    return redirect()->route('Usuarioshh.index')->with('info', 'Usuarios Creada.');
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
        $respuesta = $this->cliente->get($id);
        $cuerpo = $respuesta->getBody();
        return view('Personas.Usuarios.usuarioEdit', ['infousuario' => json_decode($cuerpo)]);

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
        $this->cliente->put($id, [
            'json' => $request->all()
        ]);

        return redirect('/Usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->cliente->delete($id);

        return redirect('/Usuarios');
    }
}
