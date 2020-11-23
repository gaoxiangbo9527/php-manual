<?php
// This code works with PHP 7.1.0, 7.0.10, 5.6.25 and up.

// HTTP_HOST is default target host. Set manually to make sample code works.
$_SERVER['HTTP_HOST'] = 'php.net';

// Output rewriter only rewrite form. Add a=href.
// Tags can be specified tag_name=url_attr, e.g. img=src,iframe=src
// No space allowed between settings.
// Form tag is special tag that add hidden input.
ini_set('url_rewriter.tags', 'a=href,form=');
var_dump(ini_get('url_rewriter.tags'));

// This is added to URL and form
output_add_rewrite_var('test', 'value');
?>
<a href="//php.net/index.php?bug=1234">bug1234</a>
<form action="https://php.net/?bug=1234&edit=1" action="post">
    <input type="text" name="title"/>
</form>
