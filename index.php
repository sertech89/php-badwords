<?php
 $parametro=(isset($_GET['parametro'])) ? $_GET['parametro']:'';
 $paragrafo='Steven Grant, un impiegato di un negozio di souvenir, viene colpito da vuoti di memoria e ricordi provenienti da un altra vita. Scopre di avere un disturbo dissociativo dell identità e di condividere il suo corpo con il mercenario Marc Spector, rimanendo coinvolto in un mistero coinvolgente le antiche divinità egizie.';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Paragrafo inziale</h1>
    <p> 
       <?php echo $paragrafo?>   
    </p>
    <p>
        La lunghezza del paragrafo senza censura è: <?php echo strlen($paragrafo)?>
    </p>
    <h1>Paragrafo con censura</h1>
    <form method="get">
        <input  type="text" name='parametro' placeholder='Inserisci censura'>
        
        <button type="submit">Invia</button>
    </form>
    <p>
        <?php
            $paragrafo_censurato= str_ireplace($parametro,'***',$paragrafo);
            echo $paragrafo_censurato;
        ?>
    </p>
    <p>
    La lunghezza del paragrafo censurato è: <?php echo strlen($paragrafo_censurato)?>
    </p>

</body>
</html>