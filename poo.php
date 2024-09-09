<html>
<body>
<?php
class fruta {
    //propriedades
    public $name;
    public $color;

    //metodo
    function set_name($name){
        //$this refere a instancia atual
        $this ->name = $name;

    }
    function get_name(){
        return $this ->name;
    }
}

$apple = new fruta();
$banana = new fruta();
$apple ->set_name('Apple');
$banana ->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();





?>
</body>
</html>