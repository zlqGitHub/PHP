<?php
    //final 关键字：不仅可以修饰类，还可以修饰方法

    //当一个类中的方法被 final 关键字修饰后，这个类的子类将不能重写该方法。

    class Animal
    {
        final public function shout()
        {
            echo "动物正在叫";
        }

    }


    class Dog extends Animal
    {

        public function shout()
        {
            echo "汪汪……";
        }
    }

    $dog = new Dog();

    $dog->shout();

?>