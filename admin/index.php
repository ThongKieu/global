<?php
    include '../config.php';
    
  try{
    
    $sql = "SELECT * FROM users ";
    $q= $conn->query("SELECT * FROM users ");
    $q ->setFetchMode(PDO::FETCH_ASSOC);
    $ruser=$q->fetch();

}
catch (PDOException $e)
{
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../css/admin.css"> -->
    <link rel="stylesheet" href="../css/admin1.css">
</head>

<body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <div class="container-fluid">
        <div class="header">
            <div class="logo text-center">
                <img src="../image/logo.png" alt="Avatar">
            </div>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Danh Sách</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Link</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="content">

            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Tìm kiếm theo ID" class="mt-2">
                <table class="table" id="myTable">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên KH</th>
                            <th scope="col">passLog</th>
                            <th scope="col">passLog2</th>
                            <th scope="col">Xử lý</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php  while ($ruser = $q->fetch(PDO::FETCH_ASSOC)):
                            echo "<tr>
                                <td>".htmlspecialchars($ruser['id'])."</td>
                                <td>".htmlspecialchars($ruser['id_log'])."</td>
                                <td>".htmlspecialchars($ruser['pass_log'])."</td>
                                <td>".htmlspecialchars($ruser['pass_log2'])."</td>
                                <td>
                                <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal".$ruser['id']."'>
                                <img src='../image/18392.png' alt='sua' class='icon_wrench'>
                                </button>
                                <!-- Modal -->
                                <div class='modal fade' id='exampleModal".$ruser['id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog' role='document'>
                                    <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLabel'>Sửa Thông Tin</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='modal-body'>
                                    <form action='".BASE_URL."includes/update_passLog.php' id='frm_suaPassLog' method='POST' class ='form-container'>
                                        <div class='input-group mb-3'>
                                        <input type='hidden' class='form-control' name ='id' value='".$ruser['id']."'>
                                        <input type='text' class='form-control' placeholder='Mật Khẩu' aria-label='password' aria-describedby='basic-addon1' name='passLog' value = '".$ruser['pass_log']."'>
                                        </div>
                                    </div>
                                    <div class='modal-footer'>
                                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Đóng</button>
                                        <button type='submit' class='btn btn-primary'>Lưu thay đổi</button>
                                    </div>
                                    </form>
                                    </div>
                                </div>
                                </div>
                            </td>
                        </tr>";
                        endwhile;?> 
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Import File</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>
        </div>
    </div>
    </div>
    <script>
    function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
        }       
    }
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>