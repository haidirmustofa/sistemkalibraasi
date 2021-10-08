<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Register - SMK Digital Service</title>
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
        <p class="text-1">Silahkan daftarkan diri anda dengan data yang sesuai.</p>
        <!-- <p class="text-2"><span>Eu ultrices:</span> Vitae auctor eu augue ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.</p> -->
        <div class="form-left-last">
          <form action="<?= base_url('auth') ?>" method="POST">
            <input type="submit" name="account" class="account" value="Sudah Punya Akun ">
          </form>
        </div>
      </div>
      <form class="form-detail" action="<?= base_url('register/process') ?>" id="register" method="POST">
        <?= $this->session->flashdata('message'); ?>
        <h2>PENDAFTARAN AKUN</h2>
        <div class="form-group">
          <div class="form-row">
            <label for="first_name">Nama Lengkap</label>
            <input type="text" name="name" id="first_name" class="input-text" required>
          </div>
        </div>
        <div class="form-group">
          <div class="form-row">
            <label for="last_name">No Hp</label>
            <input type="number" name="nohp" min="0" minlength="10" id="last_name" class="input-text" required>
          </div>
        </div>
        <div class="form-group">
          <div class="form-row">
            <label for="your_email">Alamat Email</label>
            <input type="text" name="email" id="your_email" class="input-text lower" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
          </div>
        </div>
        <div class="form-group">
          <div class="form-row">
            <div class="name">Daftar Sebagai</div>
            <select class="form-select" aria-label="Default select example" name="status">
              <option value="Peserta">Peserta</option>
              <option value="Sekolah">Sekolah</option>
              <option value="Industri">Industri</option>
            </select>
          </div>
        </div>
        <br>
        <div class="form-group">
          <div class="form-row">
            <label for="first_name">Asal Sekolah / Perusahaan</label>
            <input type="text" name="from" id="from" class="input-text" required>
          </div>
        </div>
        <div class="form-group">
          <div class="form-row ">
            <label for="password">Password (Minimal 6 Karakter)</label>
            <input type="password" name="password" minlength="6" id="password" class="input-text" required>
          </div>
        </div>
        <div class="form-group">
          <div class="form-row">
            <label for="comfirm-password">Konfirmasi Password</label>
            <input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
          </div>
        </div>
        <div class="form-checkbox">
          <label class="container">
            <p>Apakah data yang anda masukan sudah sesuai ? <a href="#" class="text"></a></p>
            <input type="checkbox" name="checkbox">
            <span class="checkmark"></span>
          </label>
        </div><br>
        <div class="form-row-last">
          <input type="submit" name="register" class="register" value="Daftar"></input>
        </div>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script>
    // just for the demos, avoids form submit
    jQuery.validator.setDefaults({
      debug: false,
      success: function(label) {
        label.attr('id', 'valid');
      },
    });
    $("#register").validate({
      rules: {
        password: "required",
        comfirm_password: {
          equalTo: "#password"
        }
      },
      messages: {
        first_name: {
          required: "Harap isi Nama Lengkap Anda"
        },
        last_name: {
          required: "Harap isi No Hp Aktif Anda"
        },
        your_email: {
          required: "Harap isi Email Aktif yang sesuai"
        },
        password: {
          required: "Harap isi Password anda"
        },
        from: {
          required: "Harap isi Asal Anda"
        },
        comfirm_password: {
          required: "Harap isi Konfirmasi Passowrd anda dengan benar",
          equalTo: "Password tidak sesuai"
        }
      }
    });
  </script>
</body>

</html>