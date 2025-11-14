<!DOCTYPE html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body><nav class='navbar navbar-dark bg-dark px-3'>
<a class='navbar-brand' href='/proyecto_xampp_pro/views/home.php'>Inicio</a>
<a class='nav-link text-white' href='/proyecto_xampp_pro/views/categorias/listar.php'>Categorías</a>
<a class='nav-link text-white' href='/proyecto_xampp_pro/views/productos/listar.php'>Productos</a>
<a class='nav-link text-white' href='/proyecto_xampp_pro/views/creditos.php'>Créditos</a>
</nav><div class='container mt-4'>
<h2>Nuevo Producto</h2>
<form method='POST' action='guardar.php'>
<input name='nombre' class='form-control mb-2' placeholder='Nombre'>
<input name='precio' class='form-control mb-2' placeholder='Precio'>
<button class='btn btn-success'>Guardar</button>
</form>
</div><script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script></body></html>