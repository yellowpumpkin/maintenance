<?php 
    session_start();
    require_once 'config/db.php';
    // $sql = $conn->prepare("SELECT * FROM tbl_department");
    // if($result = mysql_query($conn,$sql)) {
    //     if(mysqli_num_rows($result) > 0) {
    //         while( $row = mysql_fetch_array($result)) {
    //             echo $row['department_name'];
    //         }
    //     }
    // }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SK - Login</title>

    <!-- css -->
    <link rel="stylesheet" href="style.css" />
    <!-- css cdn bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--cdn icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="index.php" class="logo__sk">
                <img src="images/dog.png" alt="" />
            </a>
            <!-- <a class="animate-charcter">SIAM KYOHWA <span> SEISAKUSHO</span></a> -->
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span> <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="index.php" class="navbar__links" id="home-page">Home</a>
                </li>

                <li class="navbar__btn">
                    <button id="show-login" class="main__btn">
                        <a href="signin.php">Login</a>
                    </button>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">SK - Signup</h4>
                            </div>
                            <div class="form-row card-body justify-content-center">
                                <h4 class="mt-4">ลงทะเบียนเพื่อเข้าสู่ระบบ</h4>
                                <hr>
                                <form class="row g-3" action=signup_db.php method="post">
                                    <?php if(isset($_SESSION['error'])) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                                    </div>
                                    <?php } ?>
                                    <?php if(isset($_SESSION['success'])) { ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                                    </div>
                                    <?php } ?>
                                    <?php if(isset($_SESSION['warning'])) { ?>
                                    <div class="alert alert-warning" role="alert">
                                        <?php 
                        echo $_SESSION['warning'];
                        unset($_SESSION['warning']);
                    ?>
                                    </div>
                                    <?php } ?>
                                    <div class="col-md-4">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username"
                                            aria-describedby="username">


                                    </div>
                                    <div class="col-md-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="confirm password" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="c_password">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="firstname"
                                            aria-describedby="firstname">
                                        <div class="invalid-feedback">
                                            กรุณากรอกชื่อ นามสกุล
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="lastname"
                                            aria-describedby="lastname">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" name="phone" placeholder="0987654321">
                                    </div>
                                    <?php 
                                        $select_department = $conn->prepare("SELECT department_name FROM tbl_department");
                                        $select_department->execute();                                                        
                                    ?>
                                    <div class="col-md-4">
                                        <label for="department" class="form-label">Department</label>
                                        <select name="department" class="form-select" name="department">
                                            <option selected></option>
                                            <?php 
                                                while($row = $select_department->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <option><?php echo $row['department_name'] ?></option>
                                            <?php
                                                }?>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="urole" class="form-label">urole</label>
                                        <select id="urole" class="form-select" name="urole">
                                            <option selected></option>
                                            <option>admin</option>
                                            <option>leader</option>
                                            <option>technician</option>
                                            <option>users</option>
                                        </select>

                                    </div>

                                    <div class="col-md-12">
                                        <br>
                                        <br>
                                        <button type="submit" name="signup" class="btn btn-primary"
                                            style="float: right;">Sign Up</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- footer -->
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: #fff">© since 2015
            &nbsp;
            <a href="https://www.facebook.com/skpallet2539"><i class="bi bi-facebook"></i></a>
            &nbsp; &nbsp;
            <a href="https://www.siamkyohwa.co.th/"><i class="bi bi-browser-chrome"></i></a>
        </div>
    </footer>

    <!-- js -->
    <script src="script.js"></script>
    <!-- js cdn bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

<script type="text/javascript">
$(function(){
     $("#myform1").on("submit",function(){
         var form = $(this)[0];
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');         
     });     
});
</script>
</body>

</html>