<?php
spl_autoload_register(function ($name) {
    echo "Want to load $name.\n";
    throw new Exception("Unable to load $name.");
});

try {
    $obj = new NonLoadableClass();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
