<?php
namespace MyWorkspaceA;

function strlen(string $str): int 
{
    return 10;
}

$str = 'This is a string';

//echo strlen($str);

namespace MyWorkspaceB;

function strlen(string $str): int 
{
    return 5;
}

$str = 'This is a string';

echo 'From Workspace A: ' . \MyWorkspaceA\strlen($str);
echo PHP_EOL;
echo 'From Workspace B: ' . strlen($str);
echo PHP_EOL;
echo 'From global: ' . \strlen($str);