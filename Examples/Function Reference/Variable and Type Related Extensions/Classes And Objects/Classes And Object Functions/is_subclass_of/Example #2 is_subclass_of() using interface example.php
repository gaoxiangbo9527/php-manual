<?php
// Define the Interface
interface MyInterface
{
    public function MyFunction();
}

// Define the class implementation of the interface
class MyClass implements MyInterface
{
    public function MyFunction()
    {
        return "MyClass Implements MyInterface!";
    }
}

// Instantiate the object
$my_object = new MyClass;

// Works since 5.3.7

// Test using the object instance of the class
if (is_subclass_of($my_object, 'MyInterface')) {
    echo "Yes, \$my_object is a subclass of MyInterface\n";
} else {
    echo "No, \$my_object is not a subclass of MyInterface\n";
}

// Test using a string of the class name
if (is_subclass_of('MyClass', 'MyInterface')) {
    echo "Yes, MyClass is a subclass of MyInterface\n";
} else {
    echo "No, MyClass is not a subclass of MyInterface\n";
}
