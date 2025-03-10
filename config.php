<?php
include "../db_portofolio/config.php";

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $send_message = $_POST['pesan'];

    $sql = "INSERT INTO contact (name, email, pesan) VALUES ('$username', '$email', '$send_message')";

    if ($conn->query($sql)) {
        echo "Berhasil";
    } else {
        echo "gagal";
    }
}
?>