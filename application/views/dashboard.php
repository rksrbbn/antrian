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
    html {
      scroll-behavior: smooth;
    }

    body {
      background-image: url('<?= base_url('assets/'); ?>img/bg2.jpg');
      background-size: cover;
      background-clip: content-box;
    }
  </style>
</head>

<body>
  <div class="min-h-screen p-5">
    <!-- Navbar -->
    <nav class="flex bg-slate-200 bg-opacity-80 backdrop-blur-xl justify-between shadow-lg pr-4 rounded">
      <!-- Left -->
      <div class="flex items-center space-x-2 p-4">
        <!-- logo -->
        <i class="fas fa-notes-medical text-2xl text-indigo-800"></i>
        <!-- Brand -->
        <span class="text-xl font-semibold bg-gradient-to-r from-indigo-400 to-indigo-700 text-transparent bg-clip-text">Antrian</span>
      </div>

      <!-- Right -->
      <div class="flex items-center space-x-4 text-blue-600 font-semibold">
        <a href="<?= site_url('antrian/index'); ?>" class="p-4 rounded transition duration-200 hover:bg-slate-100">Daftar</a>
        <a href="#cek" class="p-4 rounded transition duration-200 hover:bg-slate-100">Cek Antrian</a>
      </div>
    </nav>

    <!-- Content -->
    <div class="flex justify-center items-center mt-36">
      <div class="text-center space-y-4">
        <div class="py-24">
          <h1 class="text-4xl font-bold text-teal-500 rounded p-4">
            Daftar Antrian Online!
          </h1>
          <p class="text-xl text-teal-700">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
            porro commodi ducimus. Consequuntur distinctio vero magnam
            corporis eius ducimus asperiores fuga, illum eos quidem cumque?
            Adipisci impedit soluta ipsam quasi repellat harum minima fugit
            odit dolorem assumenda veritatis, qui sequi, quo veniam tempora.
            Laboriosam dolores soluta eos amet magnam similique?
          </p>
        </div>
        <div class="py-24" id="cek">
          <h1 class="text-4xl font-bold text-teal-500 rounded p-4">
            Cari Antrian Online!
          </h1>
          <p class="text-xl text-teal-700">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
            porro commodi ducimus.
          </p>
          <form action="success.html" method="get" class="flex justify-center mt-16">
            <div class="flex justify-center items-center bg-white shadow-xl px-5 rounded-full">
              <i class="fas fa-search text-xl text-gray-600"></i>
              <input type="text" placeholder="Cari Antrian Dengan NIK" class="focus:outline-none p-3" name="nik" />
              <input type="submit" value="Cari" class="hover:cursor-pointer text-blue-500" />
            </div>
          </form>
        </div>
      </div>
      <div></div>
      <div></div>
    </div>
  </div>
</body>

</html>