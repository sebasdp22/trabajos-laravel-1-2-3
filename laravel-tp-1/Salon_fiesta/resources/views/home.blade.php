<!DOCTYPE html>
<html>
<head>
    <title>Home - Salon Fiesta</title>
</head>
<body>
    <h1>Bienvenido a Salon Fiesta</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('salones_disponibles', ['zona' => 'Ituzaingo']) }}">Salones Disponibles</a></li>
            <li><a href="{{ route('contacto', ['numero' => 12345]) }}">Contacto</a></li>
        </ul>
    </nav>
</body>
</html>
