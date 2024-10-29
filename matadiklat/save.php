<?php
if (isset($_POST['save'])) {
    include_once('config.php');
    $nis = $_POST['Teachers Name'];
    $name = $_POST['eh'];
    $gender = $_POST['Recess'];
    $pob = $_POST['tm'];

    $sql = "INSERT INTO students SET nis='$nis', name='$name', gender='$gender', pob='$pob', dob='$dob', major_id='$major_id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: ?m=matadiklat');
    } else {
        include('index.php?m=matadiklat');
        echo '<script language="JavaScript">';
            echo 'alert("Data gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "Jangan Langsung eksekusi ke file ini, klik <a href='?m=matadiklat&s=add'>disini</a>";
}
