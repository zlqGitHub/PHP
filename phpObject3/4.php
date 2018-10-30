<?php

    //静态成员是指使用 static 关键字修饰的成员
    //静态成员不属于任何对象，只属于类！

    //定义一个学生类  Student
    class Student
    {
        //定义一个静态属性，用来存储学生所在的学校
        public static $schoolName = "中北大学";

        //定义一个静态方法，用来操作静态属性
        public static function show()
        {
            return self::$schoolName;  //在类的内部可以通过self关键字来访问静态成员属性
        }
    }

    echo Student::$schoolName; //在类的外部直接通过类名访问静态属性
    echo "<br>";
    echo Student::show(); //在类的外部通过类名访问静态方法.

?>