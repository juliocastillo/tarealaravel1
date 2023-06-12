<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyectos - @yield('titulo')</title>
    </head>
    <body class="antialiased">
        <nav>
        <a href="/">Home (CRUD) </a>
        </nav>
        <h1>@yield('titulo')</h1>
        <hr>
        <h3>Agregar</h3>
        <form method="get" action="{{ route('proyectos.formdata') }}">
        <table>
        <td><label>NombreProyecto</label></td>
        <td><input type="text" name="NombreProyecto" size="50px" required></td>
        <tr>
        <td><label>fuenteFondos</label></td>
        <td><input type="area" name="fuenteFondos" size="50px" required></td>
        <tr>
        <td><label>MontoPlanificado</label></td>
        <td><input type="text" name="MontoPlanificado" required></td>
        <tr>
        <td><label>MontoPlanificado</label></td>
        <td><input type="text" name="MontoPatrocinado" required></td>
        <tr>
        <td><label>MontoFondosPropios</label></td>
        <td><input type="text" name="MontoFondosPropios" required></td>
        <tr>
        </table>
        <input type="submit">
       </form>
    </body>
</html>
