<?php

$tmpfname = tempnam(sys_get_temp_dir(), "FOO");

$handle = fopen($tmpfname, "w");
fwrite($handle, "writing to tempfile");
fclose($handle);

// do here something

unlink($tmpfname);
