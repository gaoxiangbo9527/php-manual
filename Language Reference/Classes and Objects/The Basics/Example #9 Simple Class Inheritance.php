<?php
class SimpleClass
{
    public $var = 'a default value';

    public function displayVar()
    {
        echo $this->var;
    }
}

class ExtendClass extends SimpleClass
{
    public $var2 = 'extending var 2';

    function displayVar()
    {
        echo "Extending class\n";
        parent::displayVar();
    }
}

$extended = new ExtendClass();
$extended->displayVar();