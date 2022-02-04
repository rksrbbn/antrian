<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>

    
    
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">


        <form class="w-50" action="<?= site_url('antrian/save'); ?>" method="post">
            


            <div class="form-group">
                <label for="nik">NIK*</label>
                <input type="text" class="form-control <?= form_error('nik') ? 'is-invalid' : '' ?>" id="nik" name="nik" placeholder="Masukkan NIK">
            </div>
            <div class="form-group">
                <label for="Nama">Nama*</label>
                <input type="text" class="form-control <?= form_error('Nama') ? 'is-invalid' : '' ?>" id="Nama" name="Nama" placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat*</label>
                <textarea type="text" class="form-control <?= form_error('Alamat') ? 'is-invalid' : '' ?>" id="Alamat" name="Alamat" placeholder="Masukkan Alamat"></textarea>
            </div>
            <div class="form-group">
                <label for="nik">Tanggal*</label>
                <input type="date" class="form-control <?= form_error('Tanggal') ? 'is-invalid' : '' ?>" id="Tanggal" name="Tanggal" placeholder="Masukkan Tanggal">
            </div>
            <div class="form-group">
                <label for="antrian">No. Antrian*</label>
                <input type="text" class="form-control  <?= form_error('antrian') ? 'is-invalid' : '' ?>" id="antrian" name="antrian" value="<?= $antrian ?>" readonly>
            </div>
            <div class="form-group">
                <label for="faskes">Nama Faskes*</label>
                <select name="faskes" id="faskes">
                    <?php foreach ($faskes as $f) : ?>
                        <option value="<?= $f->id_faskes; ?>"><?= $f->nama_faskes; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>


            <input class="btn btn-success" type="submit" name="btn" value="Save" />

        </form>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script>

</body>

</html>