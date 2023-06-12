<?php
use Illuminate\Support\Facades\DB;
?>

@extends('layouts.app')

@section('titulo')
    Pagina principal
@endsection

@section('contenido')
<?php
    $proyectos = DB::select("SELECT * FROM Proyectos");
?>

    <a href="/proyectos/crear"> Crear nuevo proyecto </a>
    <table border="1">
        <tr bgcolor="#DDDDDD">
        <th>id</th>
        <th>NombreProyecto</th>
        <th>fuenteFondos</th>
        <th>MontoPlanificado</th>
        <th>MontoPatrocinado</th>
        <th>MontoFondosPropios</th>
        <th>Acción</th>
        </tr>
        <?php 
            foreach( $proyectos as $res){
                echo "<tr>";
                echo "<td>".$res->id."</td>";
                echo "<td>".$res->NombreProyecto."</td>";
                echo "<td>".$res->fuenteFondos."</td>";
                echo "<td>".$res->MontoPlanificado."</td>";
                echo "<td>".$res->MontoPatrocinado."</td>";                
                echo "<td>".$res->MontoFondosPropios."</td>";
                echo "<td>".
                    "<a href='/proyectos/actualizar/$res->id'> Actualizar </a><br>".
                    "<a href='/proyectos/eliminar/$res->id'> Eliminar </a><br>".
                    "<a href='/proyectos/informepdf/$res->id'> Informe PDF </a>".
                    "</td>";
                echo "</tr>";
            }
        ?>
    </table>
@endsection