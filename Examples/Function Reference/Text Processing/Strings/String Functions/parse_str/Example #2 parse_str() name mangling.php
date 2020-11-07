<?php

parse_str("My Value=Something");
echo $My_Value; // Something

parse_str("My Value=Something", $output);
echo $output['My_Value']; // Something
