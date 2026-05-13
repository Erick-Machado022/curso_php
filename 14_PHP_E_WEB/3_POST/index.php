<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" placeholder="Marca do Carro" name="marca">
        </div>
        <div>
            <input type="text" placeholder="Preço do Carro" name="preco">
        </div>

        <div>
            <input type="checkbox" name="opcionais[]" value="Teto Solar" > Teto Solar
        </div>

         <div>
            <input type="checkbox" name="opcionais[]" value="Pelicula" > Pelicula
        </div>

         <div>
            <input type="checkbox" name="opcionais[]" value="Blindado" > Blindado
        </div>

        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html>