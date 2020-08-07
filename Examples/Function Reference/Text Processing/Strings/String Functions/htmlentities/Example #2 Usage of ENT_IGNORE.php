<?php

$str = "\x8F!!!";

// Outputs an empty string
echo htmlentities($str, ENT_QUOTES, "UTF-8");

// Outputs "!!!"
echo htmlentities($str, ENT_QUOTES | ENT_IGNORE, "UTF-8");
