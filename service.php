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
    <title>Service Page</title>
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
        <h1>อัตราค่าบริการของ TaoHook Gallery</h1>
        <h3 style="margin-top : 10px;">ดูราคารูป พิจารณาก่อนตัดสินใจซื้อบริการเรา!</h3>
        
        <div class="presentbox-line">
            <a href="excemple.php"><div class="presentbox"> <p>ตัวอย่างผลงาน</p> </div></a>
            <a href="service.php"><div class="presentbox"> <p>อัตราค่าบริการ</p> </div></a>
            <a href="contract.php"><div class="presentbox"> <p>ติดต่อสอบถาม</p> </div></a>
            <a href="book.php"><div class="presentbox"> <p>จองคิว/นัดถ่ายรูป</p> </div></a>
        </div>

        <center>
            <table border="2" width="80%" style="border-color: black; background: white;">
                <tr>
                    <th colspan="4">Cosplay</th>
                    <th colspan="4">Potrait</th>
                </tr>
                <tr style="text-align: center; font-weight: bold;">
                    <td>ชั่วโมง</td>
                    <td colspan="2">ราคา</td>
                    <td>จำนวนคน</td>
                    <td>ชั่วโมง</td>
                    <td colspan="2">ราคา</td>
                    <td>จำนวนคน</td>
                </tr>
                <tr style="text-align: center;">
                    <td>1 ชม.</td>
                    <td>400</td>
                    <td>บาท</td>
                    <td>ไม่เกิน 2 คน</td>
                    <td>1 ชม.</td>
                    <td>350</td>
                    <td>บาท</td>
                    <td>ไม่เกิน 4 คน</td>
                </tr>
                <tr style="text-align: center;">
                    <td>3 ชม.</td>
                    <td>1,200</td>
                    <td>บาท</td>
                    <td>ไม่เกิน 2 คน</td>
                    <td>3 ชม.</td>
                    <td>700</td>
                    <td>บาท</td>
                    <td>ไม่เกิน 4 คน</td>
                </tr>
                <tr style="text-align: center;">
                    <td>5 ชม.</td>
                    <td>1,900</td>
                    <td>บาท</td>
                    <td>ไม่เกิน 3 คน</td>
                    <td>5 ชม.</td>
                    <td>1,700</td>
                    <td>บาท</td>
                    <td>ไม่เกิน 5 คน</td>
                </tr>
                <tr style="text-align: center; font-weight: bold;">
                    <td colspan="4">แถม(กรณีเหมา)</td>
                    <td colspan="4">แถม(กรณีเหมา)</td>
                </tr>
                <tr style="text-align: center;">
                    <td>แต่งภาพ</td>
                    <td>10 รูป</td>
                    <td>ฟรี</td>
                    <td></td>
                    <td>แต่งภาพ</td>
                    <td>10 รูป</td>
                    <td>ฟรี</td>
                    <td></td>
                </tr>
                <tr style="text-align: center;">
                    <td>รีทัช</td>
                    <td>3 รูป</td>
                    <td>ฟรี</td>
                    <td></td>
                    <td>รีทัช</td>
                    <td>3 รูป</td>
                    <td>ฟรี</td>
                    <td></td>
                </tr>
                <tr style="text-align: center; font-weight: bold;">
                    <td colspan="4">เพิ่มเติม</td>
                    <td colspan="4">เพิ่มเติม</td>
                </tr>
                <tr style="text-align: center;">
                    <td colspan="4">แต่งภาพรูปละ 100 บาท</td>
                    <td colspan="4">รีทัชรูปละ 150 บาท</td>
                </tr>
                <tr style="text-align: center;">
                    <td colspan="4">แต่งภาพรูปละ 100 บาท</td>
                    <td colspan="4">รีทัชรูปละ 150 บาท</td>
                </tr>
                <tr style="text-align: center;">
                    <td colspan="4">**เกิน + คน 250 บาท**</td>
                    <td colspan="4">**เกิน + คน 200 บาท**</td>
                </tr>
            </table>
        </center>

    </div>
    <script src="script.js"></script>
</body>
</html>