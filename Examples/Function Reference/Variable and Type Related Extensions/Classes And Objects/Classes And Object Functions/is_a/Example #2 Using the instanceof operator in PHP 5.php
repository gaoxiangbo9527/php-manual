<?php
// define a class
class WidgetFactory
{
    var $oink = 'moo';
}

// create a new object
$WF = new WidgetFactory();

if ($WF instanceof WidgetFactory) {
    echo 'Yes, $WF is a WidgetFactory';
}
