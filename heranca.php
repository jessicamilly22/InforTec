<!DOCTYPE html>
<html>
<body>
<?php
    class fruta {
        public $name;
        public $color;

        function _construct($name, $color){
            $this ->name = $name;
            $this ->color = $color;
        }
       
        public function intro(){
            echo "A fruta é {$this ->name} e a cor é {$this ->color} .";
        }
        }
class Morango extends fruta{
    function public message(){
        echo "Eu sou uma fruta ";
    }
}

$Morango = new Morango("Morango", "vermelho");
$Morango -> mensagem();
$Morango -> intro();
echo $apple->get_name();

?>
</body>
</html>