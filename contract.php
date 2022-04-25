<?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    if (isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contract Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
</head>
<body>
    <div class="homeheader">
        <nav>
            <span class="nav-toggle" id="js-nav-toggle">
                <i class="fas fa-bars"></i>
            </span>

            <div class="logo">
                <img src="forcss/LOGO.png" height="70" alt="">
            </div>

            <ul id="js-menu">
                <li><a href="index.php">หน้าหลัก</a></li>
                <li><a href="example.php">ตัวอย่างผลงาน</a></li>
                <li><a href="service.php">อัตราค่าบริการ</a></li>
                <li><a href="contract.php">ติดต่อ</a></li>
            </ul>
        </nav>
    </div>

    <div class="homecontent">
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
                <div class="userbox"> 
                    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                    <p><a href="index.php?logout='1'" style ="color:red;">ออกจากระบบ</a></p>
                </div>
        <?php endif ?>
        <h1>ข้อมูลติดต่อช่างภาพ</h1>
        <h3 style="margin-top : 10px;">หากอยากติดต่อหรือสอบถามรายระเอียดงาน</h3>
        
        <div class="presentbox-line">
            <a href="example.php"><div class="presentbox"> <p>ตัวอย่างผลงาน</p> </div></a>
            <a href="service.php"><div class="presentbox"> <p>อัตราค่าบริการ</p> </div></a>
            <a href="contract.php"><div class="presentbox"> <p>ติดต่อสอบถาม</p> </div></a>
            <a href="book.php"><div class="presentbox"> <p>จองคิว/นัดถ่ายรูป</p> </div></a>
        </div>
        <div class="contractbox">
            <h1><i class="fa-brands fa-instagram" style="margin-right: 50px;"></i>Intagram : sszoz_<i class="fa-brands fa-instagram" style="margin-left: 50px;"></i></h1>
        </div>
        <div class="contractbox">
            <h1><i class="fa-brands fa-facebook" style="margin-right: 50px;"></i>Facebook : Sun Zoz<i class="fa-brands fa-facebook" style="margin-left: 50px;"></i></h1>
        </div>
        <div class="contractbox">
            <h1><i class="fa-brands fa-facebook-square" style="margin-right: 50px;"></i>Facebook Page : Taohook Gallery<i class="fa-brands fa-facebook-square" style="margin-left: 50px;"></i></h1>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>