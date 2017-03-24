<?php
    include("db.php");
    if(isset($_POST["submit"])){
        if($_POST['sex'] == "M") { $sex="ชาย"; } 
        else { $sex="หญิง"; }

        if($_POST['intrL'] == "L" && $_POST['intrG'] == "") { $favorite1="เรียน"; } 
        else if($_POST['intrL'] == "" && $_POST['intrG'] == "G") { $favorite1="เกมส์"; }
        else if($_POST['intrL'] == "L" && $_POST['intrG'] == "G"){ $favorite1="เรียน";$favorite2="เกมส์"; }

        $sql = "INSERT INTO Lab07(name,email,sex,favorite,address,province_id) VALUES('".$_POST['name']."','".$_POST['email'].
            "','".$sex."','".$favorite1."','".$favorite2."','".$_POST['address']."',".$_POST['province'].")";
        $conn->query($sql);
    }

    echo "<h3>View posted data:</h3>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    echo "<hr>";
    echo "<h3>View individual data:</h3>";
    echo $_POST['name'] . "<br>";
    echo $_POST['email'] . "<br>";
    echo $_POST['address'] . "<br><br>";
?>

<html>
<body>
    <a href="show_register.php" style="text-decoration:none;">รายชื่อผู้สมัคร</a>
</body>
</html>
