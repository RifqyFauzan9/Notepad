<?php
$id = $_POST['id'];
$title = $_POST['title_note'];
$note = $_POST['note_note'];
$query = "UPDATE tb_notee SET title_note = '$title', note_note = '$note' WHERE tb_notee.id_note='$id'";
include "config.php";
$sql = mysqli_query($conn, $query);

if($sql) {
    header("location:index.php");
}else{
    echo $query;
}
?>