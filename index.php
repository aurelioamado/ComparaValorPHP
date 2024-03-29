<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Calcule o melhor valor</h1>
    <form action="calculo.php" method="POST" >
        <h3>1° produto </h3>
        <label for="produto1">Volume</label>
        <input type="number" name="produto1" required="">
        <select name="select1">
            <option  value="ml"> Mililitros </option>
            <option value ="L"> Litros </option>
            <option value ="g"> Gramas </option>
            <option value="Kg"> Quilogramas </option>
        </select><br>
        <label for="valor1">Valor</label>
        <input type="number" name="valor1" required="">
        
        <br><br>
        <h3>2° produto </h3>
        <label for="produto2">Volume</label>
        <input type="text" name="produto2" required="">
        <select name="select2">
            <option value="ml" > Mililitros </option>
            <option value ="L" > Litros </option>
            <option value ="g" > Gramas </option>
            <option value="Kg" > Quilogramas </option>
        </select><br>
        <label for="valor1">Valor</label>
        <input type="number" name="valor2" required="">
        <br><br>
        <input type="submit" value="Calcular">


    </form>

</body>
</html>