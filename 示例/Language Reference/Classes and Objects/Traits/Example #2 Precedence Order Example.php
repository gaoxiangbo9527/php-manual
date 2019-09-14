<?php
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;

//    public function sayHello()
//    {
//        echo "my hello world";
//    }
}

$o = new MyHelloWorld();
$o->sayHello();

print $o->a;
