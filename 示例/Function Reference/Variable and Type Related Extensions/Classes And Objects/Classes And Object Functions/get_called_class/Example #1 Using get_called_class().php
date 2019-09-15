<?php
class foo {
    static public function test() {
        var_dump(get_called_class());
    }

    public function baz()
    {
        var_dump(get_called_class());
    }
}

class bar extends foo {
}

foo::test();
bar::test();

(new foo)->baz();
(new bar)->baz();
