<?php

echo get_include_path();  // .:/usr/local/lib/php

set_include_path('/inc');

echo get_include_path();  // /inc

restore_include_path();

// Or using ini_restore()
ini_restore('include_path');

echo get_include_path();  // .:/usr/local/lib/php
