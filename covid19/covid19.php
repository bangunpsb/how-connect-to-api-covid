<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COVID-19</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white" href="#">COVID-19</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="kawalcorona.php">Kawalcorona.com</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="covid19.php">Covid19api.com</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="welcome col-md-10 mt-5 bg-dark">
                <div class="header text-white m-3 text-center">
                    "Kasus COVID 19"
                </div>
            </div>
        </div>

    </div>

    <?php
    error_reporting(0);
    $data = file_get_contents("https://api.covid19api.com/summary");
    $result = json_decode($data, true);
    $resultarray = $result['Countries'];
    ?>
    <div class="container mt-5">
        <div class="row col-md-10">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Negara</th>
                        <th scope="col">Baru Dikonfirmasi</th>
                        <th scope="col">Total Konfirmasi</th>
                        <th scope="col">Baru Meninggal</th>
                        <th scope="col">Total Meninggal</th>
                        <th scope="col">Baru Sembuh</th>
                        <th scope="col">Total Sembuh</th>
                        <th scope="col">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($resultarray as $key => $val) { ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $val['Country']; ?></td>
                            <td><?= $val['NewConfirmed']; ?></td>
                            <td><?= $val['TotalConfirmed']; ?></td>
                            <td><?= $val['NewDeaths']; ?></td>
                            <td><?= $val['TotalDeaths']; ?></td>
                            <td><?= $val['NewRecovered']; ?></td>
                            <td><?= $val['TotalRecovered']; ?></td>
                            <td><?= $val['Date']; ?></td>
                        </tr>
                        <?php $no++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <footer class="page-footer font-small bg-dark mt-5 text-white">
        <div class="footer-copyright text-center py-3">© 2020 Copyright :
            <a href="#" class="text-white"> COVID-19</a>
        </div>
    </footer>

    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>