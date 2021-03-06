<?php
require_once __DIR__ . '/ShowInfo.php';
require_once __DIR__ . '/Person.php';

class LazyPerson extends Person implements ShowInfo
{
    function runFor($km)
    {
        fprintf(STDERR, "I am a lazy man, I don't run.\n");
        return false;
    }
    
    function showInfo()
    {
        fprintf(STDERR, "I am too lazy to answer you.\n");
        return false;
    }
    
    function showLongInfo()
    {
        return $this->showInfo();
    }
}
