<?php
// won't work, evaluated as include(('vars.php') == TRUE), i.e. include('')
if (include('vars.php') == TRUE) {
    echo 'OK';
}

// works
if ((include 'vars.php') == TRUE) {
    echo 'OK';
}
