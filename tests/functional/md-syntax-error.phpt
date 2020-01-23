--TEST--
Report a warning in case of missing PHP open tag
--FILE--
<?php

$checkRunner = require __DIR__ . '/init.php';

$checkRunner('tests/assets/syntax-error.md');

--EXPECTF--
Finding documentation files on tests/assets/syntax-error.md

Wrong code on file: /Users/malukenho/github.com/codelicia/xulieta/tests/assets/syntax-error.md
Syntax error, unexpected '}', expecting ';' on line 5


     Operation failed!