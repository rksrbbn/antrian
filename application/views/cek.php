<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/tailwind.css" />
       <!-- fontawesome-->
       <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <title>Output</title>
</head>

<body>
    <div class="min-h-screen flex flex-col justify-center items-center space-y-3 bg-slate-200 px-5">

        <!-- notification -->
        <div class="bg-yellow-300 lg:w-1/2 px-2 py-1 rounded shadow-sm text-yellow-900">
            <p class="text-center">Info Antrian</p>
        </div>

        <!-- making card using tailwindcss -->
        <form action="<?= site_url('dashboard'); ?>" method="post" class="w-full lg:w-1/2 space-y-5 text-gray-800 rounded-md shadow-xl p-4 bg-slate-300">
            <!-- cek apakah $result menghasilkan sebuah baris -->
            <?php if ($result) : ?>
                <div class="bg-yellow-300 w-full px-2 flex items-center justify-center py-1 rounded shadow-sm text-green-900">
                    <i class="fas fa-print"></i><button onclick="window.print()">Print</button>
                </div>

                <?php foreach ($result as $r) : ?>
                    <div class="grid grid-cols-1 space-y-2">
                        <label for="nik">NIK</label>
                        <input type="text" class="bg-slate-200 shadow-sm rounded py-1 px-3 border border-gray-400 focus:outline-none" id="nik" name="nik" value="<?= $r->nik; ?>" readonly />
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                        <label for="nama">Nama</label>
                        <input type="text" class="bg-slate-200 shadow-sm  rounded py-1 px-3 border border-gray-400 focus:outline-none" id="nama" name="nama" readonly value="<?= $r->nama_pasien; ?>" />
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="bg-slate-200 shadow-sm  rounded py-1 px-3 border border-gray-400 focus:outline-none" id="alamat" name="alamat" value="<?= $r->alamat; ?>" readonly></input>
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                        <label for="tanggal">Tangal Datang</label>
                        <input type="text" class="bg-slate-200 shadow-sm  rounded py-1 px-3 border border-gray-400 focus:outline-none" id="tanggal" name="tanggal" value="<?= $r->tgl_datang; ?>" readonly />
                    </div>
                    <div class="grid grid-cols-1 items-center space-y-2">
                        <label for="tanggal" class="">No. Antrian</label>
                        <input type="text" class="bg-slate-200 shadow-sm  rounded py-1 px-3 border border-gray-400 focus:outline-none" id="tanggal" name="tanggal" value="<?= $r->no_antrian; ?>" readonly />
                    </div>
                    <div class="grid grid-cols-1 items-center">
                        <label for="faskes">Nama Fasilitas Kesehatan</label>
                        <input name="faskes" id="faskes" class="rounded py-1 px-3 focus:outline-blue-300 text-gray-800 bg-gray-600 bg-opacity-20" value="<?= $r->nama_faskes; ?>" readonly>
                        </input>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="grid grid-cols-1 items-center">
                    <span class="text-lg text-center text-red-500">Tidak ada data</span>
                </div>
            <?php endif; ?>
            <div class="flex justify-center">
                <!-- button -->
                <input type="submit" value="OK" class="w-full bg-transparent border border-yellow-500 lg:w-1/2 p-2 rounded text-yellow-500 cursor-pointer hover:bg-yellow-500 hover:text-white transition duration-150">
                </input>
            </div>
        </form>
    </div>


</body>

</html>