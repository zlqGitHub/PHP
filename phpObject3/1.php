<?php
    //封装

    //定义一个人类 Person
    class Person
    {
        //public:类中的成员将没有访问限制，所有外部成员都可以访问。如果类的成员没有指定访问修饰符， 则默认为public
        //private:对于同一个类里的所有成员没有访问限制，但不允许外部访问，该类的子类同样也不能访问。
        //protected:该类的不能外部访问，但是该类的子类可以访问

        public $name; //定义一个name成员属性存储人的姓名.
        private $age;  //定义一个age成员属性存储人的年龄,并且私有化.
        public $telphone;//定义一个telphone成员属性存储人的电话号码

        //构造方法,实例化的时候的执行
        function __construct($name,$age,$telphone)
        {
            $this->name 	= $name;
            $this->age  	= $age;
            $this->telphone = $telphone;
        }

        private function say()
        {
            echo "我叫".$this->name."我今年".$this->age."岁。";
        }

        public function hello()
        {
            $this->say();
        }

        //定义一个公有的获取私有年龄属性的方法，以便于对象能够获取私有的年龄属性，但是这种做法不够灵活
        public function getAge()
        {
            return $this->age;
        }
    }

    $p1 = new Person("张利强",21,"15513268481");

    $p1->hello();   //实例化类可以访问私有方法，私有变量

    // $p1->age;
    // echo $p1->age;
    //
    echo $p1->getAge();

?>