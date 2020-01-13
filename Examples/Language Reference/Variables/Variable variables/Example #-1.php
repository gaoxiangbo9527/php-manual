<?php
$a = 'hello';
${$a} = 'world';
echo "$a ${$a} $$a";
exit;

//$a = 'hello';
//$b = 'world';
//${$a . $b} = 'hello world';
//var_dump(get_defined_vars());

//$a = 'xyz';
//$$a[1] = 'hello';
//var_dump(get_defined_vars());

//$a = 'xyz';
//${$a[1]} = 'hello';
//var_dump(get_defined_vars());


$obj = new stdClass();
$obj->{1} = 'hello';
echo $obj->{1};
