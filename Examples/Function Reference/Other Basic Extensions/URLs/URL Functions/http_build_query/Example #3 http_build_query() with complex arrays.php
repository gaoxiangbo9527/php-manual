<?php

$data = array(
    'user' => array(
        'name' => 'Bob Smith',
        'age' => 47,
        'sex' => 'M',
        'dob' => '5/12/1956'
    ),
    'pastimes' => array('golf', 'opera', 'poker', 'rap'),
    'children' => array(
        'bobby' => array('age' => 12, 'sex' => 'M'),
        'sally' => array('age' => 8, 'sex' => 'F')
    ),
    'CEO'
);

echo http_build_query($data, 'flags_');
