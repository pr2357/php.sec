<?php

function createUser($username, $password, $mobile)
{
    global $connection; // عمومی کردن متغیر درون تابع جهت استفاده
    $sql = "INSERT INTO  `users` SET  `username`=?,`password`=?,`mobile`=?";
    $result = $connection->prepare($sql);
    $result->bindValue(1, $username);
    $result->bindValue(2, $password);
    $result->bindValue(3, $mobile);
    if ($result->execute()) {
        return true;
    } else {
        return false;
    }
}
