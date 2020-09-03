<?php

/* set the session name to WebsiteID */
$previous_name = session_name("WebsiteID1");

echo "The previous session name was $previous_name<br />";

var_dump(session_name());

session_start();

var_dump(session_name());
