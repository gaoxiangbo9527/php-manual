<?php
interface a
{
    const b = 'Interface constant';
}

echo a::b;

class b implements a
{
    const b = 'Class constant';
}

echo b::b;
