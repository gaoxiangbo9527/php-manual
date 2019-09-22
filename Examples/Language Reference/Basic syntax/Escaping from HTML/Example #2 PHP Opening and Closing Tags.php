1.  <?php echo 'if you want to serve PHP code in XHTML or XML documents,
                use these tags'; ?>

2.  You can use the short echo tag to <?= 'print this string' ?>.
It's always enabled in PHP 5.4.0 and later, and is equivalent to
<?php echo 'print this string' ?>.

3.  <? echo 'this code is within short tags, but will only work '.
    'if short_open_tag is enabled'; ?>

4.  <script language="php">
        echo 'some editors (like FrontPage) don\'t
              like processing instructions within these tags';
    </script>
This syntax is removed in PHP 7.0.0.

5.  <% echo 'You may optionally use ASP-style tags'; %>
Code within these tags <%= $variable; %> is a shortcut for this code <% echo $variable; %>
Both of these syntaxes are removed in PHP 7.0.0.