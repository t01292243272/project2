<?php
if(isset($_GET['status1'])&&isset($_GET['id'])){
    $status = $_GET['status1'];
    $id = $_GET['id'];
    $sql = "UPDATE bill SET status1=('$status') WHERE id=$id ";
    $query = mysqli_query($conn, $sql);
    header("location: index.php?page_layout=order");
}


?>