<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink to fit=no">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1922f4bd30.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="admin">
        <div class="row">
            <div class="col adminIletisimTablo">
                <?php if ($_POST["email"] == "B231210571@sakarya.edu.tr" && $_POST["password"] == "b231210571") {
                    echo "Hoşgeldin " . $_POST["email"];
                    echo "<br>Girişin Onaylandı.";
                } else {
                    echo "Kullanıcı epostası yada şifre hatalı";
                    header("refresh:2; ./login.html");
                    exit;
                }
                ?>
            </div>
        </div>
    </div>
    <script src="./bootstrap.css/js/bootstrap.js"></script>
</body>
</html>