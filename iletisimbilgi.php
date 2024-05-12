<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Wep-Proje</title>
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./bootstrap.css/css/bootstrap.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/1922f4bd30.js" crossorigin="anonymous"></script>
</head>
<body id="anasayfa1">
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">  
  <div class="container">
    <a class="navbar-brand" href="index.html">MONZER AIYASH</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html"><span>AnaSayfa</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="City.html">Şehrim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="OzgecmisCv.html">Özgeçmiş/CV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Ilgialanlarim.html">İlgi Alanlarım</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Takimim.html">Bursaspor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Iletisim.html">İletişim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.html">Giriş Sayfası</a>
        </li>
      </ul>
    </div>
    </div>
</div>
</nav>
<section class="p-5 text-center">
        <div class="container">
            <h2 class="mb-3 font-weight-bold" id="iletisimkontrolbaslik">İLETİSİM KONTROL</h2><i class="fas fa-code" id="iconn"></i>
            <hr class="cizgi">
        </div>
    </section>
    <br><br>
    <!-- bitis -->
    <table class="table">
        <thead class="table">
            <tr>
                <th colspan="5" id="basliklar">
                    <h3> GELEN BİLGİLER</h3>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="basliklar">İsminiz</td>
                <td id="basliklar">

                    <?php
                    echo $_POST['isim'];
                    ?>

                </td>
            </tr>

            <tr>
                <td id="basliklar">E-Mail</td>
                <td id="basliklar">
                    <?php
                    echo $_POST['mail'];
                    ?>
                </td>
            </tr>

            <tr>
                <td id="basliklar">Konu</td>
                <td id="basliklar">
                    <?php
                    if (isset($_POST['gonder'])) {

                        $secim = $_POST['radio'];
                        echo $secim;
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td id="basliklar">Cinsiyetiniz</td>
                <td id="basliklar">
                    <?php
                    if (isset($_POST['gonder'])) {

                        $secim2 = $_POST['radio2'];
                        echo $secim2;
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td id="basliklar">Mesajınız</td>
                <td id="basliklar">
                    <?php
                    echo $_POST['mesaj'];
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <script src="./bootstrap.css/js/bootstrap.js"></script>
</body>
</html>
