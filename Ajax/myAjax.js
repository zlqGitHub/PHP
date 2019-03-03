//将对象转化为字符串的方法
function obj2str(obj) {
    /*
        {
            "userName":"zlq",
            "password":123456,
            "t":"15294613613"
        }
    */
    //对时间的处理
    obj.t = new Date().getTime();
    var res = [];
    for(var key in obj){
        // res.push(key+"="+obj[key])   //[userName=zlq,password=123456]
        /*
            对提交参数中文的处理，使得提交的参数中不在存在中文
            注意：在URL中是不可以出现中文的，如果出现中文需要对其进行转码
                  可以调用encodeURIComponent()方法
                  URL中只可以出现字母、数字、下划线、ASCII码

        */
        res.push(encodeURIComponent(key)+"="+encodeURIComponent(obj[key]));
    }
    return res.join("&");    //userName=zlq&assword=123456

}
function ajax(url,obj,timeout,success,error) {     //timeout表示超时时间
    var timer;
    //0.将对象转化为字符串
    var str = obj2str(obj);
    //1.创建一个异步对象
    var xmlhttp;
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    //2.设置请求方式和请求地址
    /*
        open(method,url,async)方法	规定请求的类型、URL 以及是否异步处理请求。
        method：请求的类型；GET 或 POST
        url：文件在服务器上的位置
        async：true（异步）或 false（同步）
            注意：ajax存在的意义就是异步，所以第三个参数始终传true
    */
    xmlhttp.open("GET",url+"?"+str,true);
    //3.发送请求
    /*
        send(string）方法将请求发送到服务器。
            注意：string仅用于 POST 请求中，用于传参数
    */
    xmlhttp.send();
    //4.监听状态的变化
    xmlhttp.onreadystatechange = function (ev2) {
        /*
            请求状态
            0: 请求未初始化
            1: 服务器连接已建立
            2: 请求已接收
            3: 请求处理中
            4: 请求已完成，且响应已就绪
        */
        //注意:==是判断是否相等   ===是严格判断是否相等
        if(xmlhttp.readyState === 4){
            //只要请求成功就将定时器关闭
            clearTimeout(timer);
            //判断是否请求成功
            if(xmlhttp.status >= 200 && xmlhttp.status < 300 || xmlhttp.status === 304){
                //5.处理返回结果
                // console.log("接收到服务器返回的数据");
                success(xmlhttp);
            }
            else {
                // console.log("没有接收到服务器数据");
                error(xmlhttp);
            }

        }
    }
    //判断外界是否传入了超时时间
    if(timeout){
        timer = setInterval(function () {
            console.log("中断请求");
            xmlhttp.abort();     //中断请求
            clearTimeout(timer);
        },timeout);
    }

}