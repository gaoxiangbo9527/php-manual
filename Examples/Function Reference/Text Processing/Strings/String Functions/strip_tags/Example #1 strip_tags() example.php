<?php

$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

// Allow <p> and <a>
echo strip_tags($text, '<p><a>');
echo "\n";

// as of PHP 7.4.0 the line above can be written as:
echo strip_tags($text, ['p', 'a']);
echo "\n";
echo strip_tags($text, ['<p>', '<a>']);
echo "\n";
