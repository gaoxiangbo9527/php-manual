<?php

var_dump(ini_get('url_rewriter.tags'));
// 通过打印 url_rewriter.tags 的配置值，你会发现，默认情况下 a 标签很可能不再配置值中，所以下方的调用结果中，a 标签根本没有被重写
var_dump($_SERVER['HTTP_HOST']);

output_add_rewrite_var('var', 'value');
output_add_rewrite_var('var1', 'value1');

// some links
echo '<a href="file.php">link</a>
<a href="http://example.com">link2</a>';

// a form
echo '<form action="script.php" method="post">
<input type="text" name="var2" />
</form>';

print_r(ob_list_handlers());
