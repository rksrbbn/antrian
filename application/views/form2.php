<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- assets -->
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/tailwind.css" />
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <title><?= $title; ?></title>
  <style>
    body {
      background-image: url('<?= base_url('assets/'); ?>img/bg.jpg');
      background-size: cover;
      background-clip: content-box;
    }
  </style>
</head>

<body>
  <div class="min-h-screen flex justify-center items-center px-10 md:px-24">

    <!-- Form -->
    <form action="<?= site_url('antrian/save'); ?>" method="post" class="w-full lg:w-1/2 space-y-5 text-gray-400 rounded-md shadow-xl p-4 bg-white bg-opacity-20 backdrop-blur-xl">

      <!-- NIK -->
      <div class="grid grid-cols-1 space-y-2">
        <div class="flex items-center justify-between">
          <label for="nik">NIK</label>
          <small class="text-red-500"><?= form_error('nik'); ?></small>
        </div>
        <input type="text" class="rounded py-1 px-3 focus:outline-blue-300 <?= form_error('nik') ? 'border border-red-500' : '' ?>" id="nik" name="nik" placeholder="Masukkan NIK" />
      </div>

      <!-- Nama -->
      <div class="grid grid-cols-1 space-y-2">
        <div class="flex items-center justify-between">
          <label for="nama">Nama</label>
          <small class="text-red-500"><?= form_error('Nama'); ?></small>
        </div>
        <input type="text" class="rounded py-1 px-3 focus:outline-blue-300 <?= form_error('Nama') ? 'border border-red-500' : '' ?>" id="nama" name="Nama" placeholder="Masukkan Nama" />
      </div>

      <!-- Alamat -->
      <div class="grid grid-cols-1 space-y-2">
        <div class="flex items-center justify-between">
          <label for="alamat">Alamat</label>
          <small class="text-red-500"><?= form_error('Alamat'); ?></small>
        </div>
        <textarea type="text" class="rounded py-1 px-3 focus:outline-blue-300 <?= form_error('Alamat') ? 'border border-red-500' : '' ?>" id="alamat" name="Alamat" placeholder="Masukkan Alamat Anda"></textarea>
      </div>

      <!-- Tanggal -->
      <div class="grid grid-cols-1 space-y-2">
        <div class="flex items-center justify-between">
          <label for="tanggal">Tanggal Datang</label>
          <small class="text-red-500"><?= form_error('Tanggal'); ?></small>
        </div>
        <input type="date" class="rounded py-1 px-3 t focus:outline-blue-300 text-gray-400 <?= form_error('Tanggal') ? 'border border-red-500' : '' ?>" id="tanggal" name="Tanggal" />
      </div>

      <!-- Antrian -->
      <div class="grid grid-cols-1 space-y-2">
        <label for="antrian">No. Antrian</label>
        <input type="text" class="rounded py-1 px-3 bg-gray-600 bg-opacity-20 text-gray-800 cursor-default focus:outline-blue-300" id="antrian" name="antrian" value="<?= $antrian ?>" readonly />
      </div>

      <!-- Faskes -->
      <div class="grid grid-cols-2">
        <label for="faskes">Nama Fasilitas Kesehatan</label>
        <select name="faskes" id="faskes" class="rounded py-1 px-3 focus:outline-blue-300 text-gray-800 bg-gray-600 bg-opacity-20 cursor-pointer">
          <?php foreach ($faskes as $f) : ?>
            <option value="<?= $f->id_faskes; ?>"><?= $f->nama_faskes; ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <!-- Button -->
      <input type="submit" name="btn" value="Daftar" class="bg-green-500 p-2 rounded w-full focus:outline-blue-300 shadow-md text-white cursor-pointer">

    </form>
  </div>
</body>

</html>