<?php

namespace App\Http\Controllers\ReportesEstadisticas\Reportes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\citas;
use App\Models\pacientes;
use GuzzleHttp\Client;
use Dompdf\Options;
use Illuminate\Support\Facades\Storage;

class ReportesController extends Controller
{
    private $cliente;

    public function __construct()
    {
        $this->cliente = new Client(['base_uri' => 'http://localhost:4000/TBL_CATEG_PRODUCTOS/']);
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
        return view('ReportesEstadisticas.Reportes.inicio', ['reportes' => json_decode($cuerpo)]); //llama la ruta de la vista
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ReportesEstadisticas.Reportes.crear');
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

        return redirect("/categorias");
    }
    
    //Devuelve el reporte de citas en pdf para verlo en el navegador
    public function VerPdf_cita(){

        //Primero se consulta el modelo para traer la data
        /*SELECT * FROM `TBL_CITAS_MEDICAS` as c 
        inner join TBL_PACIENTES as p where c.COD_PACIENTE=p.COD_PACIENTE */
        $Citas=citas::join('TBL_PACIENTES', 'TBL_CITAS_MEDICAS.COD_PACIENTE', '=', 'TBL_PACIENTES.COD_PACIENTE')->get();
/*$Nombre="";
foreach($Citas as $data){
$Nombre.=$data['PRIMER_NOMBRE'];

}
return $Citas;*/

        //Especificar la data que va dnetro del pdf
$Datos= compact('Citas');
$Options= new Options;
$Options->set(['isRemoteEnabled'=>'TRUE']);
$Pdf1=new PDF($Options);
$Pdf=$Pdf1::loadView('ReportesEstadisticas.Reportes.VerPdf_cita', $Datos)->setOptions(['defaultFont'=>'sans-serif']);

//Para que muestre el pdf en el navegador
        return ($Pdf->stream('ReporteCitas_'.date_default_timezone_get().'.pdf'));

        //Para descargarlo a la pc
       // return ($Pdf->download('ReporteCitas_'.date_default_timezone_get().'.pdf')); 
    }

//Devuelve el reporte de citas en pdf para verlo en el navegador
public function VerPdf_pacientes(){

    $Pacientes=pacientes::all();
$Datos= compact('Pacientes');
$Options= new Options;
$Options->set(['isRemoteEnabled'=>'TRUE']);
$Pdf1=new PDF($Options);
$Pdf=$Pdf1::loadView('ReportesEstadisticas.Reportes.VerPdf_pacientes', $Datos)->setOptions(['defaultFont'=>'sans-serif']);

//Para que muestre el pdf en el navegador
    return ($Pdf->stream('ReportePacientes_'.date_default_timezone_get().'.pdf'));

    //Para descargarlo a la pc
   // return ($Pdf->download('ReporteCitas_'.date_default_timezone_get().'.pdf')); 
}

/*     public function Descargar(){
        $Citas=citas::join('TBL_PACIENTES', 'TBL_CITAS_MEDICAS.COD_PACIENTE', '=', 'TBL_PACIENTES.COD_PACIENTE')->get();
        $path = Storage::path('VerPdf_cita.php');
        return response()->download("C:\Users\josue\OneDrive\Escritorio\SHH". "\"."resources\ views\ReportesEstadisticas\Reportes\VerPdf_cita.php");

        //return public_path();
    } */
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
        return view('inventario.categorias.ver', ['categorias' => json_decode($cuerpo)]);
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
        return view('inventario.categorias.editar', ['categorias' => json_decode($cuerpo)]);
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

        return redirect("/categorias");
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

        return redirect('/categorias');
    }
}