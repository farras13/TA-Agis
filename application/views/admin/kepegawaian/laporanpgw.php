<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pegawai</title>
    <style>
        #outtable{
            padding: 50px;
            border: 3px solid #e3e3e3;
            width: 900px;
            border-radius: 20px;
        }
        .short{
            width: 50px;
        }
        .normal{
            width: 150px;
        }
        table{
            border-collapse: collapse;
            font-family: arial;
            color: #5E5B5C;
        }
        thead th{
            text-align: center;
            padding: 15px;
        }
        tbody td{
            text-align: center;
            border-top: 3px solid #e3e3e3;
            padding: 2px;
        }
        tbody tr:nth-child even{
            background: #A6F5FA;
        }
        tbody tr:hover{
            background: #EAE9F5;
        }
    </style>
</head>
<body>
<div id="outtable">
    <p class="card-text">
        <label for=""><b> Nama : </b></label>
        <?= $pegawai['nama']; ?>
    </p>
    <p class="card-text">
        <label for=""><b> NIP : </b></label>
        <?= $pegawai['nip']; ?>
    </p>
    <p class="card-text">
        <label for=""><b> Divisi : </b></label>
        <?= $pegawai['divisi']; ?>
    </p>    
    <p class="card-text">
        <label for=""><b> Jabatan : </b></label>
        <?= $pegawai['jabatan']; ?>
    </p>
    <p class="card-text">
        <label for=""><b> Pendidikan : </b></label>
        <?= $pegawai['pendidikan']; ?>
    </p>
    <p class="card-text">
        <label for=""><b> Golongan : </b></label>
        <?= $pegawai['golongan']; ?>
    </p>
    <p class="card-text">
        <label for=""><b> Email : </b></label>
        <?= $pegawai['email']; ?>
    </p>
</div>
</body>
</html>
