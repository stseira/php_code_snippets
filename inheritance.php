<?php

class A
{
    public function __construct()
    {
        echo __CLASS__.__FUNCTION__."\n";
        echo $this->foo();
    }

    public function __destruct()
    {
        echo __CLASS__.__FUNCTION__."\n";
    }

    public function foo()
    {
        echo __CLASS__.__FUNCTION__."\n";
    }
}

class B extends A
{
    public function __construct()
    {
        echo __CLASS__.__FUNCTION__."\n";
        echo $this->foo();
    }

    public function __destruct()
    {
        echo __CLASS__.__FUNCTION__."\n";
    }

    public function foo()
    {
        echo __CLASS__.__FUNCTION__."\n";
    }
}

$a = new A();
$a->foo();

$b = new B();
$b->foo();
