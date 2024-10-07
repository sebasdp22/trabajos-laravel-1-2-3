<!DOCTYPE html>
<html>
<head>
    <title>Lista de Contactos - Salon Fiesta</title>
</head>
<body>
    <h1>Lista de Contactos</h1>

    @if ($contactos->isEmpty())
        <p>No hay contactos registrados.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Mensaje</th>
                    <th>Fecha de Creación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contactos as $contacto)
                    <tr>
                        <td>{{ $contacto->id }}</td>
                        <td>{{ $contacto->nombre }}</td>
                        <td>{{ $contacto->mail }}</td>
                        <td>{{ $contacto->mensaje }}</td>
                        <td>{{ $contacto->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <a href="{{ route('contacto', ['numero' => '123']) }}">Volver al formulario</a>
</body>
</html>
