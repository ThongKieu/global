<?php 
    $lang = 'vi';
    require_once "../lang/lang_$lang.php";?>

<!doctype html>
<html lang="en">

<head>
    <title>Thank You Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/cssLogin.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <!-- <link rel="stylesheet" href="../css/css-index.css"> -->
    <!--Fontawesome CDN-->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid">
        <div>
            <div class="d-flex justify-content-center h-100">
                <div class="card animate " style="border-radius: 10px;">
                    <div class="card-body" style="background-color: rgba(255, 255, 255, 1);border-radius: 10px; border: 1px solid green">
                        <div class ="content_card" style="font-size: 20px;color: black; border-radius: 10px">
                            <i class="fa fa-check-circle" style=" font-size: 90px; color: green; padding-left: 38%"></i>
                            <p class="text-center"><b><?php echo tks?></b></p>
                            <hr/>
                            <p class="text-center"><b><?php echo thontin?></b></p>
                            <p><?php echo tennganhang?></p>
                            
                            <p><?php echo chutaikhoan?></p>
                            <p><?php echo ndthanhtoan?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>