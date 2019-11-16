<?php
// define a class
class WidgetFactory
{
    var $oink = 'moo';
}

// define a child class
class WidgetFactory_Child extends WidgetFactory
{
    var $oink = 'oink';
}

// create a new object
$WF = new WidgetFactory();
$WFC = new WidgetFactory_Child();

if (is_subclass_of($WFC, 'WidgetFactory')) {
    echo "yes, \$WFC is a subclass of WidgetFactory\n";
} else {
    echo "no, \$WFC is not a subclass of WidgetFactory\n";
}


if (is_subclass_of($WF, 'WidgetFactory')) {
    echo "yes, \$WF is a subclass of WidgetFactory\n";
} else {
    echo "no, \$WF is not a subclass of WidgetFactory\n";
}


// usable only since PHP 5.0.3
if (is_subclass_of('WidgetFactory_Child', 'WidgetFactory')) {
    echo "yes, WidgetFactory_Child is a subclass of WidgetFactory\n";
} else {
    echo "no, WidgetFactory_Child is not a subclass of WidgetFactory\n";
}
