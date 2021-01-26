<?php
    $servername = "";
    $username = "";
    $password = "";
    $database = "";
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=test', $username, $password);
        foreach($dbh->query('SELECT * from FOO') as $row) {
            print_r($row);
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

?>
<!doctype html>
<html lang="en">

<head>
    <title>Sign Up</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/css-login.css">

</head>

<body>
    <div class="container-fluid">
        <div class="logo">
            <img src="../image/logo.png" alt="Avatar">
        </div>
        <div class="banner">
            <img src="https://cdn.tgdd.vn/Files/2020/06/08/1261696/moi-tai-bo-hinh-nen-asus-rog-2020-moi-nhat_800x450.jpg" alt="">
        </div>
        <div class="btn_login text-center">

            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Đăng kí</button>

            <div id="id01" class="modal">

                <form class="modal-content animate" action="#" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="../image/logo.png" alt="Avatar" style="width: 30%; ">
                    </div>

                    <div class="container">
                        <label for="uname"><b>Email</b></label>
                        <input type="email" placeholder="Email" name="uname" required>

                        <label for="psw"><b>Mật Khẩu</b></label>
                        <input type="password" placeholder="Mật khẩu" name="psw" required>

                        <button type="submit">Đăng kí</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>