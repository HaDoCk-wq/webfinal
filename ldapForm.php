<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>form</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>


<body>
    <br>
    <nav class="navbar navbar-expand-lg p-0 navbar-light fixed-top mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.html">Accesibilitat</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link topbar" aria-current="page"
                            href="perceptibilitat.html">Perceptibilitat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link topbar" href="operabilitat.html">Operabilitat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link topbar" href="comprensibilitat.html">Comprensibilitat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link topbar" href="robustesa.html">Robustesa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active topbar" href="loginForm.php">Formulari</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br>
    <div class="container">
        <nav class="mt-4"
            style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Inici</a></li>
                <li class="breadcrumb-item active" aria-current="page">Filtre</li>
            </ol>
        </nav>
        <h1 class="mt-2">Formulari</h1>
        <br>
        <form action="controller/search.php" method="POST" id="formulari">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="nom" class="text-sec">Nom</label>
                        <input type="text" class="form-control text-sec bg-pry input" id="nom" name="cn"
                            placeholder="Nom" />
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="cognoms" class="text-sec">Cognoms</label>
                        <input type="text" class="form-control text-sec bg-pry input" id="cognoms" name="sn"
                            placeholder="Cognoms" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="telfix" class="text-sec">Telèfon fix</label>
                        <input type="number" class="form-control text-sec bg-pry input" id="telfix" name="telefon"
                            placeholder="Telèfon fix" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="mobil" class="text-sec">Mòbil</label>
                        <input type="number" class="form-control text-sec bg-pry input" name="mobil" id="mobil"
                            placeholder="Mòbil" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="insorg" class="text-sec">Email</label>
                        <input type="email" class="form-control text-sec bg-pry input" id="email" name="email"
                            placeholder="Email" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="insorg" class="text-sec">Institut / Organització</label>
                        <input type="text" class="form-control text-sec bg-pry input" id="insorg" name="o"
                            placeholder="Institut / Organització" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="username" class="text-sec">Nom d’usuari</label>
                        <input type="text" class="form-control text-sec bg-pry input" id="uid" name="username"
                            placeholder="Nom d’usuari" />
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="username" class="text-sec">Grup</label>
                    <select class="form-select input form-select-lg mb-3" aria-label=".form-select-lg example" name="grup">
                        <option value="*" selected>Tots</option>
                        <option value="professorsAC">Professors</option>
                        <option value="alumnesAC">Alumnes</option>
                    </select>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="flex-fill"></div>
                <button type="submit" class="boto-principal">Cerca</button>
            </div>
        </form>
    </div>
    <br>
    <?php if(isset($_SESSION['resultats'])): ?>
        <div class="container">
            <h1 class="mt-2">Resultat</h1>
            <br>
            <table class="table  table-hover table-striped caption-top">
                <caption style="text-align:right">Resultats de la cerca</caption>

                <thead>
                    <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Cognoms</th>
                        <th scope="col" colspan="2">Telefons (inclou fix i mobil)</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nom d’usuari</th>
                        <th scope="col">Institut</th>
                        <th scope="col">Grup</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($_SESSION['resultats'] as $linia) : ?>
                        <?php if($linia['cn'][0]): ?>
                            <tr>
                                <td><?= $linia['cn'][0] ?></td>
                                <td><?= $linia['sn'][0] ?></td>
                                <td><?= $linia['telephonenumber'][0] ?></td>
                                <td><?= $linia['mobile'][0] ?></td>
                                <td><?= $linia['mail'][0] ?></td>
                                <td><?= $linia['uid'][0] ?></td>
                                <td><?= $linia['o'][0] ?></td>
                                <td><?= $linia['ou'][0] ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>

                <tfoot>
                    <th scope="col">Nom d’usuari</th>
                    <th scope="col">Cognoms</th>
                    <th scope="col" colspan="2">Telefons (inclou fix i mobil)</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nom d’usuari</th>
                    <th scope="col">Institut</th>
                    <th scope="col">Grup</th>
                </tfoot>
            </table>
        </div>
        <?php $_SESSION['resultats'] = null; ?>
    <?php endif; ?>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"
    integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg=="
    crossorigin="anonymous"></script>

<script src="js/form.js"></script>


</html>