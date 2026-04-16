<?php
require("../../db/connect.php");

$id =  $_POST['id'];

$sql = "DELETE FROM contacts WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $id]);

header("Location: index.php");
exit;
?>