<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $jam = date("H:i:s");
        $hari = date("l");
        $tanggal = date("d/m/Y");

        if(empty($nama) or empty($email)) {
            header("Location:eror.php");
            exit();
        }
        
        echo "<h2>Halo, ".$nama."</h2>";
        echo "<p>Email: ".$email."</p>";
        echo "<p>Login jam ".$jam." pada hari ".$hari.", tanggal ".$tanggal."</p>";
    }
?>
