<?php
    // 在继承一个类的同时实现接口
    // extends 和 implements 配合使用

    class D{
        public function c()
        {
            echo "c";
        }
    }

    interface A
    {
        function a();
    }

    interface B
    {
        function b();
    }

    // 一个类可以实现多个接口，并且这些接口之间用逗号（,）分隔开
    class C extends D implements A,B
    {
        function a()
        {
            echo "a";
        }

        function b()
        {
            echo "b";
        }
    }

    $c = new C();
    $c->a();
    $c->b();
    $c->c();

?>