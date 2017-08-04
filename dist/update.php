<?php

include('connect.php');

$id = $_GET['ID'];

$titulo = $_POST['mainTitle'];

$sql = "UPDATE pecas SET mainTitle='$titulo' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    echo $id;
    echo $titulo;
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
