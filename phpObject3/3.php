<?php
    //类常量：类常量属于类不属于对象，所有的对象就共享了这个常量。
    //类常量一旦设置后就不能改变，且在声明类常量时一定要赋初始值。

    //在类的内部，访问类常量有两种方式，一是类名(类名::常量名)，二是self，建议使用self，语法为 self::常量名
    //在类的外部，访问类常量只能通过类名，语法为类名::常量名

    // 定义一个求圆面积的类
    class Yuan{
        const PI=3.1415926; //通过类常量定义一个圆周率属性

        public $r;//圆的半径

        //构造方法
        public function __construct($r)
        {
            $this->r = $r;
        }
        //求面积
        public function mianji()
        {
            return $this->r*$this->r*self::PI;  //通过self关键字访问类中的常量。其中::是作用范围解析操作符
        }
    }

    echo Yuan::PI; //类的外部只能通过类名可以访问类常量

    echo "<br>";

    $y = new Yuan(10);
    echo "圆的面积为".$y->mianji();

?>