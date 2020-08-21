<?php

var_dump(parse_ini_string("test=none", false, INI_SCANNER_TYPED)['test']);
