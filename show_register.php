<?php
    include("db.php");
    $query = "SELECT * FROM Lab07 INNER JOIN provinces ON Lab07.province_id=provinces.PROVINCE_ID;";
    $result = $conn->query($query);
?>

<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
    <center>
        <br><table width=85% cellspacing="2" bgcolor="#0083bf">
        <tr><td class="head"><b>รายชื่อผู้ลงทะเบียน</b></td></tr></table><br>

        <table width=85% cellspacing="2" bgcolor="#0083bf">
            <tr class="HERTable">
                <th width=10%>#</th>
                <th>ชื่อ-นามสกุล</th>
                <th>อีเมล</th>
                <th>เพศ</th>
                <th>ความสนใจ</th>
                <th>ที่อยู่</th>
                <th>จังหวัด</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()){ ?>
                <tr class="HERTable">
                    <td class="TBCenter"><?php echo $row['id'];?></td>
                    <td>&nbsp;<?php echo $row['name'];?></td>
                    <td>&nbsp;<?php echo $row['email'];?></td>
                    <td class="TBCenter"><?php echo $row['sex'];?></td>
                    <td class="TBCenter"><?php echo $row['favorite'];?></td>
                    <td>&nbsp;<?php echo $row['address'];?></td>
                    <td class="TBCenter"><?php echo $row['PROVINCE_NAME'];?></td>
                </tr>
            <?php } ?>
            <tr class="HERTable">
                <th colspan="6"></th>
                <th style="background:#fff;color:#333;"><a href="register_form.php" style="text-decoration:none;">ลงทะเบียน</th>
            </tr>
        </table>
    </center>
</body>
</html>
    
