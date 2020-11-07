<?php

echo strtr("baab", "ab", "01"), "\n";

$trans = array("ab" => "01");
echo strtr("baab", $trans);
