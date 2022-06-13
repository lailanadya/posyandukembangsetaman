<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Daftar!</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- Login -->
    <div class="auth">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-5">REGISTRATION</h3>

                            <form action="proses_daftar.php" method="post">
                                <div class="form-group">
                                  <label for="namadepan">Nama Depan</label>
                                  <input type="text" class="form-control" id="namadepan" name="namadepan" aria-describedby="Nama Depan">
                                </div>

                                <div class="form-group">
                                    <label for="namabelakang">Nama Belakang</label>
                                    <input type="text" class="form-control" id="namabelakang" name="namabelakang" aria-describedby="Nama Belakang">
                                  </div>

                                  <div class="form-group">
                                    <label for="email">Alamat Email</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="Email">
                                  </div>

                                  <div class="form-group">
                                    <label for="telp">No. Telp</label>
                                    <input type="text" class="form-control" id="telp" name="telp" aria-describedby="No. Telp">
                                  </div>

                                  <p class="px-5">Your Password is 8-20 character, </p>

                                  <div class="form-group">
                                    <label for="password">Kata Sandi</label>
                                    <input type="password" class="form-control" id="password" name="password" aria-describedby="Kata Sandi">
                                  </div>

                                  <div class="form-group">
                                    <label for="password1">Konfirmasi Kata Sandi</label>
                                    <input type="password" class="form-control" id="password1" name="password1" aria-describedby="Konfirmasi Kata Sandi">
                                  </div>

                         
                                 <p>Sudah Punya Akun ?<a href="masuk.php"> Masuk</a></p>
                                 <div class="form group my-4">
                                    <button class="btn btn-primary form-control" id="submit" name="submit">Daftar</button>
                                 </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- End Login -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
