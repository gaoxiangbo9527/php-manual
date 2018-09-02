<?php
interface a
{
    public function foo();
}

interface b extends a
{
    public function baz(Baz $baz);
}

class c implements b
{
    public function foo()
    {

    }

    public function baz(Baz $baz)
    {

    }
}

class d implements b
{
    public function foo()
    {

    }

    public function baz(Foo $foo)
    {

    }
}