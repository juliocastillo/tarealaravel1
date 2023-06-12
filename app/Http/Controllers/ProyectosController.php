<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
class ProyectosController extends Controller
{
    public function index() {
        return view('welcome');
    }


    public function dataformulario(Request $request) {
        $NombreProyecto = $request->input('NombreProyecto');
        $fuenteFondos = $request->input('fuenteFondos');
        $MontoPlanificado = $request->input('MontoPlanificado');
        $MontoPatrocinado = $request->input('MontoPatrocinado');                
        $MontoFondosPropios = $request->input('MontoFondosPropios');
        DB::insert("INSERT INTO Proyectos (NombreProyecto,fuenteFondos,MontoPlanificado,MontoPatrocinado,MontoFondosPropios)
        VALUES ('$NombreProyecto','$fuenteFondos',$MontoPlanificado,$MontoPatrocinado,$MontoFondosPropios)");
        return view('crear');
    }

    public function informepdf($id) {
        $proyectos = DB::select("SELECT * FROM Proyectos WHERE id = $id");
        $id = $proyectos[0]->id;
        $NombreProyecto = $proyectos[0]->NombreProyecto;
        $fuenteFondos = $proyectos[0]->fuenteFondos;
        $MontoPlanificado = $proyectos[0]->MontoPlanificado;
        $MontoPatrocinado = $proyectos[0]->MontoPatrocinado;
        $MontoFondosPropios = $proyectos[0]->MontoFondosPropios;

        $pdf = PDF::loadView('informepdf', compact(
            'id', 
            'NombreProyecto', 
            'fuenteFondos',
            'MontoPlanificado', 
            'MontoPatrocinado', 
            'MontoFondosPropios' 
        ));
        return $pdf->stream('prueba.pdf');
        /*return view('informepdf', 
                    [
                    'id' => $proyectos[0]->id,
                    'NombreProyecto' => $proyectos[0]->NombreProyecto,
                    'fuenteFondos' => $proyectos[0]->fuenteFondos,
                    'MontoPlanificado' => $proyectos[0]->MontoPlanificado,
                    'MontoPatrocinado' => $proyectos[0]->MontoPatrocinado,
                    'MontoFondosPropios' => $proyectos[0]->MontoFondosPropios
                    ],
                );*/
    }

    public function eliminar($id) {
        DB::delete("DELETE FROM Proyectos WHERE id = $id");
        return redirect('/');
    }


    public function actualizar($id) {
        $proyectos = DB::select("SELECT * FROM Proyectos WHERE id=$id");
        return view('actualizar', 
                    [
                    'id' => $proyectos[0]->id,
                    'NombreProyecto' => $proyectos[0]->NombreProyecto,
                    'fuenteFondos' => $proyectos[0]->fuenteFondos,
                    'MontoPlanificado' => $proyectos[0]->MontoPlanificado,
                    'MontoPatrocinado' => $proyectos[0]->MontoPatrocinado,
                    'MontoFondosPropios' => $proyectos[0]->MontoFondosPropios
                    ],
                );
    }

    
    public function actualizardataformulario($id, Request $request) {
        $NombreProyecto = $request->input('NombreProyecto');
        $fuenteFondos = $request->input('fuenteFondos');
        $MontoPlanificado = $request->input('MontoPlanificado');
        $MontoPatrocinado = $request->input('MontoPatrocinado');                
        $MontoFondosPropios = $request->input('MontoFondosPropios');
        DB::update("UPDATE proyectos SET NombreProyecto='$NombreProyecto',fuenteFondos='$fuenteFondos',MontoPlanificado=$MontoPlanificado,MontoPatrocinado=$MontoPatrocinado,MontoFondosPropios=$MontoFondosPropios WHERE id = $id");
        return redirect('/');
    }




}
