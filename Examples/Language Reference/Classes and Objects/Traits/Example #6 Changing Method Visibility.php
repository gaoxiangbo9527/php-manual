<?php
trait HelloWorld {
    public function sayHello() {
        echo 'Hello World!';
    }
}

// Change visibility of sayHello
class MyClass1 {
    use HelloWorld { sayHello as protected; }
}

// Alias method with changed visibility
// sayHello visibility not changed
class MyClass2 {
    use HelloWorld {
        sayHello as private myPrivateHello;
        sayHello as myPublicHello;
    }
}

$myClass2 = new MyClass2();
$myClass2->sayHello();
$myClass2->myPublicHello();
