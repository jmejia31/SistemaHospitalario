<?php

namespace App\Http\Controllers\ventas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FacturasController extends Controller
{

    private $cliente;

    public function __construct () {
        $this->cliente = new Client(['base_uri' => 'http://localhost:4000/TBL_FACTURA/']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $respuesta = $this->cliente->get('');
        $cuerpo = $respuesta->getBody();
        return view('ventas.facturas.pacienteEdit1', ['pacienteEdit1' => json_decode($cuerpo)]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ventas.facturas.crear');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->cliente->post('', [
        'json' => $request->all()
        ]);

        // return redirect("/facturas");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $respuesta = $this->cliente->get($id);
        $cuerpo = $respuesta->getBody();
        return view('ventas.facturas.ver', ['facturas' => json_decode($cuerpo)]);
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
        return view('ventas.facturas.pacienteEdit1', ['facturas' => json_decode($cuerpo)]);
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
            'json' =>  $request->merge(['PI_COD_FACTURA' => $id])->all()
        ]);

        return redirect("/facturas");
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

        return redirect('/facturas');
    }
}
