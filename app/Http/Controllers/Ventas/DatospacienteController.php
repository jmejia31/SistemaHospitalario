<?php

namespace App\Http\Controllers\ventas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

use GuzzleHttp\Client;

class DatospacienteController extends Controller
{
    private $cliente;

    public function __construct () {
        $this->cliente = new Client(['base_uri' => 'http://localhost:4000/tbl_pacientes/']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes= Http::get('http://localhost:4000/tbl_pacientes/');
        //   dd($categorias->body());
            $PaciArray =  json_decode($pacientes);
            // dd($CategArray[0]);
            $PaciArray=$PaciArray[0];
            return view('ventas.facturas.Pacientes1',compact('PaciArray'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pacientes1');

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
    $response = Http::post('http://localhost:4000/tbl_pacientes', [
        'PI_COD_PACIENTE' => $request -> PI_COD_PACIENTE,
        'PI_COD_USR' => $request -> PI_COD_USR,
        'PV_PRIMER_NOMBRE' => $request -> PV_PRIMER_NOMBRE,
        'PV_SEGUNDO_NOMBRE' => $request -> PV_SEGUNDO_NOMBRE,
        'PV_PRIMER_APELLIDO' => $request -> PV_PRIMER_APELLIDO,
        'PV_SEGUNDO_APELLIDO' => $request -> PV_SEGUNDO_APELLIDO,
        'PV_DNI' => $request -> PV_DNI,
        'PD_FEC_NACIMIENTO' => $request -> PD_FEC_NACIMIENTO,
        'PE_GENERO' => $request -> PE_GENERO,
        'PV_EMAIL' => $request -> PV_EMAIL,
        'PV_TELEFONO' => $request -> PV_TELEFONO,
        'PV_CELULAR' => $request -> PV_CELULAR,
        'PV_DIRECCION' => $request -> PV_DIRECCION,
    ]);
    // eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6IjExMSIsImlhdCI6MTY0OTQ4OTMwNCwiZXhwIjoxNjQ5NTc1NzA0fQ.IC27y3WpYcyLlKcOSzcle2tgTikE_-LWi3XUJfiL0a0
    return redirect()->route('Pacienteshh.index')->with('info', 'Pacientes Creada.');
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
        return view('ventas.facturas.pacienteEdit1', ['infopaciente1' => json_decode($cuerpo)]);

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

        return redirect('/Pacientes1');
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

        return redirect('/Pacientes1');
    }
}
