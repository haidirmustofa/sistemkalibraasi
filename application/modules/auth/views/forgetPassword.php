<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login - SMK Digital Service</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/register/css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/register/fonts/line-awesome/css/line-awesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/vendors/images/sdsblank.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/vendors/images/sdsblank.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/vendors/images/sdsblank.png">
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/register/css/style.css" />
    <style type="text/css">
        .upper {
            text-transform: uppercase;
        }

        .lower {
            text-transform: lowercase;
        }

        .cap {
            text-transform: capitalize;
        }

        .small {
            font-variant: small-caps;
        }
    </style>
</head>

<body class="form-v4">
    <div class="page-content">
        <div class="form-v4-content">
            <div class="form-left">
                PRAKERIN
                <h2>SMK Digital Service</h2>
                <!-- <p class="text-1">Silahkan daftarkan diri anda dengan data yang sesuai.</p> -->
                <!-- <p class="text-2"><span>Eu ultrices:</span> Vitae auctor eu augue ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.</p> -->
                <div class="form-left-last">
                    <form action="<?= base_url('register') ?>" method="POST">
                        <input type="submit" name="account" class="account" value="Belum Punya Akun ? ">
                    </form>
                    <form action="<?= base_url('auth') ?>" method="POST">
                        <input type="submit" name="account" class="account" value="Sudah Punya Akun ">
                    </form>
                </div>
            </div>
            <form class="form-detail" action="<?= base_url('forget-password-process') ?>" id="register" method="POST">
                <?= $this->session->flashdata('message'); ?>
                <h2>Lupa Password ?</h2>
                <h6>Silahkan masukan alamat Email anda , untuk mengatur ulang password</h6>
                <br>
                <div class="form-group">
                    <div class="form-row">
                        <label for="first_name">Email</label>
                        <input type="email" name="email" class="input-text lower" required>
                    </div>
                </div>
                <div class="form-row-last">
                    <input type="submit" name="login" class="register" value="Kirim"></input>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</body>

</html>