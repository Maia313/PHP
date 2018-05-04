<?php

class ArrayHelper
{
    public function prettyPrint($array)
    {
        return highlight_string("<?php\n\$data =\n" . var_export($array, true) . ";\n?>");
    }
    public function dumpAndDie($array)
    {
        die(var_dump($array));
    }
}