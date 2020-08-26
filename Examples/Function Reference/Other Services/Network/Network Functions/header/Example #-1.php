<?php

setcookie('name', 'mitu');
header('Set-Cookie: name=gaoxiangbo', false);

var_dump(headers_list());
