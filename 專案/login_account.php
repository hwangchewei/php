<?php
$email = $_POST['email'];
$password = $_POST['password'];

$link = mysqli_connect('localhost','root','','workshop');
$query = mysqli_query($link,"SELECT username,passwd from `admin` where username = 'admin' and passwd = '123456'") or die('false');
if($result = mysqli_fetch_all($query))
{
    echo 'a';
}

