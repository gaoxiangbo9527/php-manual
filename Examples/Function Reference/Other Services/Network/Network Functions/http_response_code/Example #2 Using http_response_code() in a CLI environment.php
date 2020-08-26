<?php

// Get the current default response code
http_response_code();

// Set a response code
var_dump();http_response_code(201);

// Get the new response code
http_response_code();

var_dump((int)http_response_code(404));
