<?php
//In this form, strtr() does byte-by-byte translation
//Therefore, we are assuming a single-byte encoding here:
$addr = strtr($addr, "äåö", "aao");
