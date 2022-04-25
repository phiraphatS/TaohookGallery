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
    <title>Home Page</title>
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
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
        <?php endif ?>
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
                <div class="userbox"> 
                    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                    <p><a href="index.php?logout='1'" style ="color:red;">ออกจากระบบ</a></p>
                </div>
        <?php endif ?>
        <h1>ยินดีต้อนรับเข้าสู่เว็บไซต์</h1>
        <h3 style="margin-top : 10px;">คุณอยากให้เราช่วยอะไรไหม? ลองเลือกชมสิ่งที่เราจัดหามาให้สิ</h3>
        
        <div class="presentbox-line">
            <a href="example.php"><div class="presentbox"> <p>ตัวอย่างผลงาน</p> </div></a>
            <a href="service.php"><div class="presentbox"> <p>อัตราค่าบริการ</p> </div></a>
            <a href="contract.php"><div class="presentbox"> <p>ติดต่อสอบถาม</p> </div></a>
            <a href="book.php"><div class="presentbox"> <p>จองคิว/นัดถ่ายรูป</p> </div></a>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>