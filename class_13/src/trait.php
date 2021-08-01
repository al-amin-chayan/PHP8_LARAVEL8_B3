<?php

trait TA {
    public function sayHi()
    {
        return 'Hi';
    }
}

trait TB {
    public function sayHello()
    {
        return 'Hello-TB';
    }
}

trait TC {
    public function sayHello()
    {
        return 'Hello-TC';
    }

    public function saySomething()
    {
        return 'Something';
    }
}

class A {

}

class B extends A {
    use TA;
    use TB{
        TB::sayHello insteadOf TC;
        TC::sayHello as myHello;
    }
    use TC;
}

$b = new B();

echo $b->sayHi();
echo PHP_EOL;
echo $b->sayHello();
echo PHP_EOL;
echo $b->myHello();