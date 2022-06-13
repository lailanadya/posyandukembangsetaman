<?php
require 'koneksi.php';

if( isset($_POST["login"]) ) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if( mysqli_fetch_assoc($result) === 1 ) {

        // cek password 
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            header("Location: index.php");
        }
    }
}

?>
<!doctype html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>

<h1>Halaman Login</h1>

<form action="" method="post">


<ul>
    <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <button type="submit" name="login">Login</button>
    </li>
</ul>
</form>

</body>
</html>

<?php

 if (isset($_POST['login'])){
  $username = $_POST['username'];
  $pass = $_POST['password'];

  $sql = $conn->query("select * from user where username='$username' AND password='$password' ");
  $data = $sql->fetch_assoc();

  $bener = $sql->num_rows;

  if ($bener >=1) {
    
    if ($data['level']=="admin") {
      $_SESSION['admin'] = $data['id'];
      header("location:index.php");

    }elseif ($data['level']=="user") {
      $_SESSION['user'] = $data['id'];
      header("location:index.php");
    }
 
  }else{
    ?>
    <script type="text/javascript">
    alert("Log in Gagal! Username & Password Salah!")
  </script>

  <?php
}
}


    ?>
