<?php
$conn = mysqli_connect('localhost', 'root', '', 'ukl_laundry');

if (!$conn) {
    echo "<script>alert('Connection Failed.') </script>";
}
?>