<!DOCTYPE html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body><nav class='navbar navbar-dark bg-dark px-3'>
<a class='navbar-brand' href='/proyecto_xampp_pro/views/home.php'>Inicio</a>
<a class='nav-link text-white' href='/proyecto_xampp_pro/views/categorias/listar.php'>Categorías</a>
<a class='nav-link text-white' href='/proyecto_xampp_pro/views/productos/listar.php'>Productos</a>
<a class='nav-link text-white' href='/proyecto_xampp_pro/views/creditos.php'>Créditos</a>
</nav><div class='container mt-4'>
<?php include '../../config/database.php'; $id=$_GET['id']; $r=$conn->query("SELECT * FROM categorias WHERE id=$id")->fetch_assoc(); ?>
<h2>Editar Categoría</h2>
<form method='POST' action='actualizar.php'>
<input type='hidden' name='id' value='<?php echo $r['id']; ?>'>
<input name='nombre' value='<?php echo $r['nombre']; ?>' class='form-control mb-2'>
<button class='btn btn-success'>Actualizar</button>
</form>
</div><script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script></body></html>