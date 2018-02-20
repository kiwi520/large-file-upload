<?php
/**
 * Created by PhpStorm.
 * User: kiwi
 * Date: 2018/2/20
 * Time: 下午5:27
 */
$target = "uploads/".$_POST["name"];
$dst = fopen($target, 'wb');

for($i = 0; $i < $_POST['index']; $i++) {
    $slice = $target . '-' . $i;
    $src = fopen($slice, 'rb');
    stream_copy_to_stream($src, $dst);
    fclose($src);
    unlink($slice);
}

fclose($dst);