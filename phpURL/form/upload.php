<?php
    require("./function.php");
    var_dump($_FILES);    //$_FILES上传文件的内容
    var_dump($_FILES['headpic']['type']);
    var_dump($_FILES['headpic']['tmp_name']);

    p($_FILES);

    $upload = upload("headpic");

    p($upload);



?>