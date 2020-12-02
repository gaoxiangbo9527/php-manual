<?php

$input = "plain [indent] deep [indent] deeper [/indent] deep [/indent] plain";

function parseTagsRecursive($input)
{
    if (is_array($input)) {
        $input = '<div style="margin-left: 10px">' . $input[1] . '</div>';
    }

    return preg_replace_callback('#\[indent]((?:[^[]|\[(?!/?indent])|(?R))+)\[/indent]#', 'parseTagsRecursive', $input);
}

$output = parseTagsRecursive($input);

echo $output;
