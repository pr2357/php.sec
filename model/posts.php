<?php

function addCategory_adminPanel($title, $titlecategory)
{
    global $connection; // عمومی کردن متغیر درون تابع جهت استفاده
    $sql = "INSERT INTO  `category` SET  `title`=?,`titleen`=?";
    $result = $connection->prepare($sql);
    $result->bindValue(1, $title);
    $result->bindValue(2, $titlecategory);
    $result->execute();
}

function listcategory_adminPanel()
{
    global $connection; // عمومی کردن متغیر درون تابع جهت استفاده
    $sql = "SELECT  * FROM  `category`";
    $result = $connection->prepare($sql);
    $result->execute();
    if ($result->rowCount() > 0) {
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    } else {
        return false;
    }
}

function checkid_adminPanel($id)
{
    global $connection; // عمومی کردن متغیر درون تابع جهت استفاده
    $sql = "SELECT  `id`  FROM  `category` WHERE  `id`=?";
    $result = $connection->prepare($sql);
    $result->bindValue(1, $id);
    $result->execute();
    if ($result->rowCount() == 1) {
        return true;
    } else {
        return false;
    }
}

function checkidpost_adminPanel($id)
{
    global $connection; // عمومی کردن متغیر درون تابع جهت استفاده
    $sql = "SELECT  `id`  FROM  `posts` WHERE  `id`=?";
    $result = $connection->prepare($sql);
    $result->bindValue(1, $id);
    $result->execute();
    if ($result->rowCount() == 1) {
        return true;
    } else {
        return false;
    }
}

function deleteCategory_adminPanel($id)
{
    global $connection; // عمومی کردن متغیر درون تابع جهت استفاده
    $sql = "DELETE FROM `category` WHERE  `id`=?";
    $result = $connection->prepare($sql);
    $result->bindValue(1, $id);
    $result->execute();

}


function addpost_adminPanel($title, $content, $teachername, $category, $status, $price, $prerequisites, $pic)
{
    global $connection; // عمومی کردن متغیر درون تابع جهت استفاده
    $sql = "INSERT INTO `posts` SET  `title`=?,`content`=?,`teachername`=?,`category`=?,`status`=?,`price`=?,`Prerequisites`=?,`pic`=?";
    $result = $connection->prepare($sql);
    $result->bindValue(1, $title);
    $result->bindValue(2, $content);
    $result->bindValue(3, $teachername);
    $result->bindValue(4, $category);
    $result->bindValue(5, $status);
    $result->bindValue(6, $price);
    $result->bindValue(7, $prerequisites);
    $result->bindValue(8, $pic);
    $result->execute();
}


function showPost_inSite()
{
    global $connection; // عمومی کردن متغیر درون تابع جهت استفاده
    $sql = "SELECT * FROM `posts`";
    $result = $connection->prepare($sql);
    $result->execute();
    if ($result->rowCount() >= 1) {
        return $result->fetchAll(PDO::FETCH_ASSOC);
    } else {
        return false;
    }
}

function showPostbyId_inSite($id)
{
    global $connection; // عمومی کردن متغیر درون تابع جهت استفاده
    $sql = "SELECT * FROM `posts` WHERE  `id`=?";
    $result = $connection->prepare($sql);
    $result->bindValue(1, $id);
    $result->execute();
    if ($result->rowCount() == 1) {
        return $result->fetch(PDO::FETCH_ASSOC);
    } else {
        return false;
    }
}
