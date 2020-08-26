<?php

header("X-Foo: Bar");
header("X-Foo: Bar1", false);
header("X-Bar: Baz");
header("X-Bar: Baz1", false);
header_remove("X-Foo");

var_dump(headers_list());
