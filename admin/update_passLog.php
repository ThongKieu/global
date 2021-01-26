<?php
     include '../config.php';

          $id = $_POST["id"];
          $pass=$_POST['passLog'];
     try {
          $sql = "UPDATE users SET pass_loge='$pass' WHERE id='$id'";
          $q = $conn->query($sql);
          $q->setFetchMode(PDO::FETCH_ASSOC);
             if($q){
               echo 'sửa thành công';
               header("location: " . BASE_URL . "pages/adminLayout.php");
          }
     } catch (PDOException $e) {
          die("Could not connect to the database $dbname :" . $e->getMessage());
     }
        
?>
     
