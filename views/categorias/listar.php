<!DOCTYPE html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body><nav class='navbar navbar-dark bg-dark px-3'>
<a class='navbar-brand' href='/proyecto_xampp_pro/views/home.php'>Inicio</a>
<a class='nav-link text-white' href='/proyecto_xampp_pro/views/categorias/listar.php'>Categorías</a>
<a class='nav-link text-white' href='/proyecto_xampp_pro/views/productos/listar.php'>Productos</a>
<a class='nav-link text-white' href='/proyecto_xampp_pro/views/creditos.php'>Créditos</a>
</nav><div class='container mt-4'>
<h2>Categorías</h2>
<a href='nuevo.php' class='btn btn-primary mb-3'>Nueva Categoría</a>
<table class='table table-bordered'>
<tr><th>ID</th><th>Nombre</th><th>Acciones</th></tr>
<?php include '../../config/database.php';
$res=$conn->query("SELECT * FROM categorias");
while($r=$res->fetch_assoc()){ echo "<tr><td>{$r['id']}</td><td>{$r['nombre']}</td>
<td><a href='editar.php?id={$r['id']}' class='btn btn-warning btn-sm'>Editar</a></td></tr>"; }
?>
</table>
</div><script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script></body></html>