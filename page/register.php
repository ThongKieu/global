<?php
   include "../vendor/config.php";
   $lang = $_COOKIE['lang'];
   require_once "../lang/lang_$lang.php";
        $db = new Getdatabase();
    $pdo = $db->getConnection();

    $mess ='';
    $mess2 ='';

       if(isset($_POST['uname']))
       {
        $uname = $_POST['uname'];

// nghe
        $psw = $_POST['psw'];
        $pswc = $_POST['pswc'];
        $psw2 = randomPassword(10);
        $local = $_POST['local'];
        $team = $_POST['team'];
      
        try{
            $checkmail = $pdo->query("SELECT id FROM users WHERE id_log = '$uname'");
            $num = $checkmail->rowCount();
            if($num!=0)
            {
                 $mess = cemail   ;
            }
            else{ 
               
                    try{ 
                    $sql = $pdo->query("INSERT INTO users (`id_log`,`pass_log`,`pass_log2`,`local`,`team`) VALUE('$uname','$psw','$psw2','$local','$team')");
                    if($sql) {header("location:".BASE_URL."vendor/thank.php");}
       
                            }
                        catch(PDOException $exception){
                                echo "Lỗi Kết Nối " . $exception->getMessage();}

                
               
                
            }
        }
        catch(PDOException $exception){
               echo "Lỗi Kết Nối " . $exception->getMessage();}
       
       } 
?>

<!doctype html>
<html lang="en">

<head>
    <title>Register Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cssLogin.css">
 <!--Fontawesome CDN-->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 
 
    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<div class="container-fluid">
	<div class="d-flex justify-content-center h-100">
		<div class="card animate">
			<div class="card-header text-center">
                <h3><?php echo bdk?></h3>
			</div>
			<div class="card-body">
				<form action="#" method="post">
					<span style="color:red;"><?php echo $mess;?></span>
					<div class="input-group form-group">
                    
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                       
						<input type="email" id="email" class="form-control" placeholder="Email" name="uname"  required/>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" id="password" class="form-control" placeholder="<?php echo matkhau?>" name="psw" maxlength='30' minlength='5' required/>
                        <div class="input-group-prepend">
							<span class="input-group-text bg_color"><a type="button"  id="eye"><i class="fa fa-eye"></i></a></span>
						</div>
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" id ="cpassword" class="form-control" placeholder="<?php echo rmk?>" name="pswc" maxlength='30' minlength='5'  required/>
                        
                        
					</div><span id='message'></span>
                    <span style="color:red;"><?php echo $mess2;?></span>
                    <div id="z-cpassword"></div>
                    <div class="input-group form-group">
                    
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-users"></i></span>
						</div>
                       
						<input type="text" class="form-control" placeholder="Upline Blue Diamond" name="team"  required/>
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-map"></i></span>
						</div>
                        <select class="form-select form-control" aria-label="Default select example" name ="local">
                            
                            <option selected value="VI"><?php echo vi?></option>
                            <option value="US"><?php echo us?></option>
                            <option value="EU"><?php echo eu?></option>
                        </select>
					</div>
                   
					<div class="form-group text-center">
						<button type="submit" class="btn login_btn" ><?php echo bdk?></button>
					</div>
				</form>
			</div>
			
        </div>
        
	</div>
</div>
    <script>
            let showPassword = false
            const ipnElement = document.querySelector('#password')
            const btnElement = document.querySelector('#eye')

            btnElement.addEventListener('click', togglePassword)

            function togglePassword() {
            if (showPassword) {
                // Đang hiện password
                // Chuyển sang ẩn password
                ipnElement.setAttribute('type', 'password')
                showPassword = false
            } else {
                // Đang ẩn password
                // Chuyển sang hiện password
                ipnElement.setAttribute('type', 'text')
                showPassword = true
            }
            }
    </script>
    
    <script>
        $(document).ready(function(){
            
            $('#cpassword').keyup(function(){
                var pwd =$('#password').val();
            var cpwd =$('#cpassword').val();
            if(cpwd!= pwd){
                $('#message').html('<?php echo cmk?>');
                $('#message').css('color', 'red');
                return false;
            }else{
                $('#message').html('');
                return true;
            }
            })
        })
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>