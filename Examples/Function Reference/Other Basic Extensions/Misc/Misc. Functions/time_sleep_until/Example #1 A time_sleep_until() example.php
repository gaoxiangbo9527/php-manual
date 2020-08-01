<?php

//returns false and generates a warning
var_dump(time_sleep_until(time() - 1));

// may only work on faster computers, will sleep up to 0.2 seconds
var_dump(time_sleep_until(microtime(true) + 0.2));
