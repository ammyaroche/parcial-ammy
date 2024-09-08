<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Actualizar Libro</h1>
        <form action="<?= base_url('actualizar_libro') ?>" method="post">
            <div class="mb-3">
                <label for="txt_libro" class="form-label">Libro_id</label>
                <input type="text" class="form-control" name="txt_libro" value="<?=$autolibd['libro_id'];?>" readonly>
            </div>
            <div class="mb-3">
                <label for="txt_autor" class="form-label">Autor_id</label>
                <input type="text" class="form-control" name="txt_autor" value="<?=$autolibd['autor_id']?>" placeholder="Ingrese autor">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" name="btn_actualizar_libro" value="Guardar Cambios">
            </div>

        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>