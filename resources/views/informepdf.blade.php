<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PDF</title>
    </head>
    <h1>Informe PDF</h1>
    
    <body class="antialiased">
        <table>
        <td><label>NombreProyecto</label></td>
        <td>{{ $NombreProyecto }}</td>
        <tr>
        <td><label>fuenteFondos</label></td>
        <td>{{ $fuenteFondos }}</td>
        <tr>
        <td><label>MontoPlanificado</label></td>
        <td>{{ $MontoPlanificado }}</td>
        <tr>
        <td><label>MontoPlanificado</label></td>
        <td>{{ $MontoPatrocinado }}</td>
        <tr>
        <td><label>MontoFondosPropios</label></td>
        <td>{{ $MontoFondosPropios }}</td>
        <tr>
        </table>

    </body>
</html>
