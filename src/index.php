<?php

if (isset($_POST['email']) && isset($_POST['pass'])) {
    $config = json_decode(file_get_contents('config.json', true));
    $flag = "BSidesVix{...}";
        
    $dologin = false;
    $success = false;

    $dologin = (isset($_POST['email']) && isset($_POST['pass']));
    $success = ($dologin && $config->username === $_POST['email'] && $config->password === $_POST['pass']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->    
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->    
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->    
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="/" method="POST">
                    <span class="login100-form-title p-b-26">
                        Bem-vindo
                    </span>
                    <span class="login100-form-title p-b-24">
                        <i class="zmdi zmdi-font">utenticar</i>
                    </span>

                    <?php if ($dologin && !$success) { ?>
                        <span class="login100-form-message p-b-48">Usu&aacute;rio ou senha inv&aacute;lidos!</span>
                    <?php } ?>

                    <?php if (!$dologin || !$success) { ?>                        

                        <div class="wrap-input100 validate-input" data-validate = "Um email válido é: a@b.c">
                            <input class="input100" type="text" name="email">
                            <span class="focus-input100" data-placeholder="E-mail"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Digite a senha">
                            <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i>
                            </span>
                            <input class="input100" type="password" name="pass">
                            <span class="focus-input100" data-placeholder="Senha"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                    Entrar
                                </button>
                            </div>
                        </div>
                    <?php } else if ($success) { ?>
                        <span class="login100-form-message p-t-32 p-b-48"><?php echo $flag; ?></span>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>
