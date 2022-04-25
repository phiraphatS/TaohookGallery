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
    <title>Book Page</title>
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
        <h1>ระบบจองคิว</h1>
        <h3 style="margin-top : 10px;">กรอกข้อมูลใส่แบบฟอร์มเพื่อจองคิว</h3>
        
        <div class="book-header">
            <h2>จองคิว</h2>
        </div>
        <form class="book-form" action="book_db.php" method="post">
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
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="flname">ชื่อ-นามสกุล</label>
            <input type="text" name="flname">
        </div>
        <div class="input-group">
            <label for="email">อีเมล</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="tel">เบอร์โทรศัพท์</label>
            <input type="tel" name="tel">
        </div>
        <div class="input-group">
            <label for="date">วันที่/เวลา</label>
            <input type="datetime-local" name="date">
        </div>
        <div class="input-group">
            <button type="submit" name="book_order" class="btn">จองคิว</button>
        </div>
    </form>
    </div>
    <script src="script.js"></script>
</body>
</html>