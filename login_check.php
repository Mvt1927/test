<?php
    include 'connectdb.php';
    if (isset($_POST["submit"]) && $_POST["user"] != '' && $_POST["password"] != '' ) {
        $user = $_POST["user"];
        $password = $_POST["password"];
        /* $password =md5($password); */
        $sql ="SELECT * FROM member WHERE user ='$user' AND pass='$password'";
        $old = mysqli_query($conn, $sql);
        if (mysqli_num_rows($old) > 0) {
            echo "Bạn đã đăng nhập thành công";
        }else{
            echo "Bạn đã nhập sai user hoặc mật khẩu ";
        }
    }else{
        header("location:Login.php");
    }
?>
