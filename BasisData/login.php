<?php @session_start();
    include ("koneksi.php");
    $email = $_POST['email'];
    $password = $_POST['password'];

   $query_sql = "SELECT * FROM pengguna WHERE email = '$email' AND password = '$password'";
   $result = oci_parse($koneksi, $query_sql);
   $data = oci_execute($result, OCI_DEFAULT);

   if($data >= 1) {
       $_SESSION['email_user'] - $email;
       header("location:dasboard.php");
   } else {
    echo "<center><h1>Email atau Password Anda salah. Silahkan coba login kembali. <h1><button><strong><a href = 'login.html'>Login</a></strong></button></center>";
}
?>
