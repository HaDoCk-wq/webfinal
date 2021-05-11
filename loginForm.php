<?php
session_start();
if($_SESSION["loged"]){
    header('Location: ldapForm.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">


</head>


<body class=" pt-4">
    <div class="container pt-4" style="max-width: 900px">
        <div class="contenidorForm mt-4 p-4">
            <form method="POST" id="form" action="controller/login.php">
                <div class="d-flex flex-wrap">
                    <h1 class="text-sec text-start loginTitle">Login</h1>
                    <div class="flex-fill"></div>
                </div>
                <br>
                <label for="floatingInput" class="text-sec text-start">Contrasenya</label>
                <input type="password" class="form-control text-sec bg-pry input" name="password"
                    placeholder="Contrasenya" minlength="8" required />
                <br>
                <div class="d-flex flex-wrap">
                    <div class="flex-fill"></div>
                    <button type="submit" class="boto-principal">Login</button>
                </div>
                <br>
                <?php if (!empty($_SESSION['loginError'])): ?>

                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        <div>
                            <?php echo $_SESSION['loginError']; ?>
                        </div>
                    </div>
                    
                <?php endif; ?>

                <?php $_SESSION['loginError'] = null; ?>
            </form>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"
    integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg=="
    crossorigin="anonymous"></script>

<script src="js/login.js"></script>


</html>