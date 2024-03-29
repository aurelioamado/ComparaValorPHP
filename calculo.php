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
    <main>
    <?php



    $select1 = $_POST['select1']??'';

    $volume1 = $_POST["produto1"];
    $valor1 = $_POST['valor1'];
    $volume11 = 0;
    $preco1 = 0;
    $litro = 1000;

    switch($select1){
        case "ml":       
            $volume11 = $volume1/$litro;
            $preco1 = number_format($valor1/$volume11,2);
            break;
        case "g":
            $volume11= $volume1/$litro;
            $preco1 = number_format($valor1/$volume11,2);
            break;
        case "Kg":
        $volume11= $volume1;
            $preco1 = $valor1;
            break;   
        case "L":
            $volume11= $volume1;
            $preco1 = $valor1;
           
    }






    $select2 = $_POST['select2']??'';

    $volume2 = $_POST["produto2"];
    $valor2 = $_POST['valor2'];
    $volume12 = 0;
    $preco2 = 0;
    $litro = 1000;

    switch($select2){
        case "ml":       
            $volume12 = $volume2/$litro;
            $preco2 = number_format($valor2/$volume12,2);
            break;
        case "g":
            $volume12= $volume2/$litro;
            $preco2 = number_format($valor2/$volume12,2);
            break;
        case "Kg":
            $volume12= $volume2;
            $preco2 = $valor2;
            break;   
        case "L":
            $volume12= $volume2;
            $preco2 = $valor2;

           
    }   


    if($preco1>$preco2){
        echo "É mais economico comprar o produto 2 que custa R$ $valor2.  O produto 1 custa por litro R$ $preco1, enquanto que o produto 2 custa R$ $preco2";
    }elseif($preco1<$preco2){
        echo "É mais economico comprar o produto 1 que custa R$ $valor1. O produto 1 custa por litro $preco1, enquanto que o produto 2 custa $preco2 ";
    }else{
        echo "Os produtos tem o mesmo preço por litro";
    }

    ?>
    </main>

<p><button onclick="javascript:window.location.href='index.php'">Realizar novo calculo</button></p>
    
</body>
</html>












