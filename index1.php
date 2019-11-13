<?php

class Pet
{
    public $vardas;
    public $spalva;
    public $amzius;

    public function __construct($vardas, $spalva, $amzius)
    {
        $this->vardas = $vardas;
        $this->spalva = $spalva;
        $this->amzius = $amzius;
    }

    public function edit($vardas, $spalva, $amzius)
    {
        $this->vardas = $vardas;
        $this->spalva = $spalva;
        $this->amzius = $amzius;
    }

    public function reset()
    {
        $this->vardas = null;
        $this->spalva = null;
        $this->amzius = null;
    }

    public function delete(){
        return $var = null;
    }

    public function insert($array, $vardas, $spalva, $amzius ){
        $array[] = new Pet($vardas, $spalva, $amzius);
        return $array;
    }
}

$db = new Pet('Tomas', 'Raudonas', '43');

$db->edit('Giedrius', 'zydras', '12');

$db->reset();

var_dump($db->delete());

$null = new Pet(null, null,null);
$masyvas = [];

$masyvas = $null->insert($masyvas, 'Dainius', 'zalias', '41');

var_dump($masyvas);

if (isset($_POST['vardas']) || isset($_POST['spalva']) || isset($_POST['amzius'])){
    $masyvas = $null->insert($masyvas, $_POST['vardas'], $_POST['spalva'], $_POST['amzius']);
}

var_dump($masyvas);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" placeholder="vardas" name="vardas">
    <input type="color" placeholder="spalva" name="spalva">
    <input type="number" placeholder="amzius" name="amzius">
    <input type="submit" value="sukurti" name="submit">
</form>
</body>
</html>



