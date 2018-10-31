<?php
    //多态
    //在 PHP 中，一个父类被多个子类继承，如果这个父类的某个方法在多个子类中表现不同的功能，那么这种行为我们就称其为多态的实现。


    //案例：求不同形状的图像的周长和面积。

    //定义一个图形接口 shape
    interface Shape
    {
        function acreage();//抽象方法，求面积
        function perimeter();//抽象方法，求周长
    }

    //定义一个矩形类 Rect 实现图形 Shape 接口
    class Rect implements Shape
    {
        public $width;  //宽
        public $length;  //长

        //构造方法
        public function __construct($length,$width)
        {
            $this->length = $length;
            $this->width = $width;
        }

        //实现接口中的求面积方法

        public function acreage()
        {
            return $this->width*$this->length;
        }


        //实现接口中的求周长方法
        public function perimeter()
        {
            return ($this->width + $this->length)*2;
        }
    }


    $rect = new Rect(4,6);
    echo "矩形的面积是".$rect->acreage();
    echo "<br>";
    echo "矩形的周长是".$rect->perimeter();

?>