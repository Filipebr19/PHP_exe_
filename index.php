<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Your Base</title>
</head>
<body>
    <?php 
        require 'autoload.php';
        use class\AllYourBase;

        $number = $_POST['number'] ?? 0;
        $base = $_POST['base'] ?? 2;

        $converter = new AllYourBase($number, $base);
    ?>

    <h1>Conversor de números</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="number">Escolha um número:</label></br>
        <input type="number" name="number" id="number" value="<?=$number?>"></br></br>
        
        <label for="base">Escolha uma base para converter:</label></br>
        <input type="number" name="base" id="base" value="<?=$base?>"></br></br>

        <input type="submit" value="Converter">
    </form>

    <section>
        <h2>Resultado da conversão</h2>
        <p>O número <?=$converter->getNumber()?> na base <?=$converter->getBase()?> é <strong><?=$converter->converter()?></strong></p>
    </section>
</body>
</html>