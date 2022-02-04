<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/tailwind2.css" />
    <link
      href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <title>Failed</title>
  </head>
  <body>
    <div
      class="min-h-screen bg-slate-200 flex flex-col items-center justify-center"
    >
      <div
        class="bg-slate-300 p-3 shadow-xl rounded flex flex-col items-center text-xl space-y-4"
      >
        <div class="flex items-center space-x-2 bg-slate-400 p-2 rounded-md">
          <i class="fas fa-exclamation-circle text-red-500"></i>

          <h1 class="text-xl text-gray-800">
            Antrian Sudah Penuh. Coba Kembali Lagi Besok.
          </h1>
        </div>

        <form action="<?= site_url('antrian'); ?>" class="rounded flex justify-center items-center text-green-600 w-full">
          <input type="submit" value="OK" class="bg-transparent border border-green-600 w-full cursor-pointer hover:bg-green-600 hover:text-white transition duration-150">
        </form>
      </div>
    </div>
  </body>
</html>
