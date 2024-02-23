<?php
include("db_con.php");
$id = $_GET["id"];
$sql = "DELETE FROM `user` WHERE id = $id";
$result = mysqli_query($_conn, $sql);

if ($result) {
  header("Location: index2.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($_conn);
}