<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
    <h1>Realiza tu pedido</h1>

    <form action="/index" method="post">
        <label for="">Producto:</label>
        <input type="text" name="producto   ">
        <br>

        <label for="">Cantidad:</label>
        <input type="text" name="cantidad">
        <br>

        <label for="">Descripcion:</label>
        <input type="text" name="precio">
        <br>

        <label for="">Cliente:</label>
        
        
        <label for=""><?= "$precio" ;?></label>
        

        <button type="submit">Guardar</button>
    </form>
</body>
</html>