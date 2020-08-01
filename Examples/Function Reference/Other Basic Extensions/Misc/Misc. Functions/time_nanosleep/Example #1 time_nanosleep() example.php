<?php

// Careful! This won't work as expected if an array is returned
if (time_nanosleep(0, 500000000)) {
    echo "Slept for half a second.\n";
}

// This is better:
if (time_nanosleep(0, 500000000) === true) {
    echo "Slept for half a second.\n";
}

// And this is the best:
$nano = time_nanosleep(2, 100000);

if ($nano === true) {
    echo "Slept for 2 seconds, 100 microseconds.\n";
} elseif ($nano === false) {
    echo "Sleeping failed.\n";
} elseif (is_array($nano)) {
    $seconds = $nano['seconds'];
    $nanoseconds = $nano['nanoseconds'];
    echo "Interrupted by a signal.\n";
    echo "Time remaining: $seconds seconds, $nanoseconds nanoseconds.";
}
