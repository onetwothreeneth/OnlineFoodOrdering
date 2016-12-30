<?php

class test{
  function insert($a,$b,$c,$d,$e){
          if (!empty($a) || !empty($b) || !empty($c) || !empty($d) || !empty($e)) {
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo $a;
                echo "<br>";
                echo $b;
                echo "<br>";
                echo $c;
                echo "<br>";
                echo $d;
                echo "<br>";
                echo $e;

          } else {
                echo "<br>";error_reporting(0);
          }
  }

}
//echo insert();


class Demo {

      public function one(){
        echo "one";
      }


      public function two(){
        echo "two";
      }


      public function three(){
        echo "three";
      }
}

$d = new Demo;
$a = new test;
echo $d->one();
echo "<br>";
echo $d->two();
echo "<br>";
echo $d->three();
echo "<br>";
echo $a->insert('kenneth','abenoar','18','male','single');
echo "<br>";






$user = $_POST['user'];
$pass = $_POST['pass'];
$class = $_POST['class'];


if($class==='login'){

  $a = new test;
  echo $a->insert('kenneth','abenoar','18','male','single');

}

if($class==='signup'){

  $a = new test;
  echo $a->signup('kenneth','abenoar','18','male','single');

}

if($class==='gallery1'){
  
}

 ?>
