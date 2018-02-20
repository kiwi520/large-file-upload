<?php
/**
 * Created by PhpStorm.
 * User: kiwi
 * Date: 2018/2/20
 * Time: 下午5:07
 */
//省略了文件接收判断isset部分
//当前目录下建立一个uploads文件夹
//接收文件名时进行转码，防止中文乱码。
$filepath="./uploads/";
$randname=$_POST["name"]. '-' . $_POST['index'];
//将临时位置的文件移动到指定的目录上即可
if(is_uploaded_file($_FILES["file"]["tmp_name"])){
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath.$randname)){
        echo "上传成功";
    }else{
        echo "上传失败";
    }
}else{
    echo "不是一个上传文件";
}
