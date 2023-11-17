<!DOCTYPE html>
<html>
<head>
    <title>Información del Usuario</title>
</head>
<body>
    <h1>Información del Usuario</h1>
    <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
    <p><strong>Identificacion:</strong> {{ $usuario->identificacion }}</p>
    <p><strong>Telefono:</strong> {{ $usuario->numero_telefono }}</p>
    <p><strong>Direccion:</strong> {{ $usuario->direccion }}</p>
    <!-- Agrega más información según sea necesario -->

    <!-- Puedes personalizar este diseño según tus necesidades -->
</body>
</html>