<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();
echo '<br>';
//1234
//Потому, что свойство static принадлежит классу а не экземпляру класса

class B {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class C extends B {
}
$a1 = new B();
$b1 = new C();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
echo '<br>';
//1122
//Потому, что В и С разные классы со своими static x

class D {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class E extends D {
}
$a1 = new D;
$b1 = new E;
$a1->foo();     
$b1->foo();
$a1->foo();
$b1->foo();
//1122
//То же самое, что и в предыдущем случае. При отсутствии аргументов, необходимых для конструктора, скобки можно опустить