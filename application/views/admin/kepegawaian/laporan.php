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
            width: 800px;
            border-radius: 10px;
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
            text-align: left;
            padding: 10px;
        }
        tbody td{
            border-top: 3px solid #e3e3e3;
            padding: 10px;
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
        <table>
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>NIP</th>
                <th>Divisi</th>
                <th>Jabatan</th>
                <th>Email </th>
            </tr>
            </thead>
            <tbody>
            <?php $no=1;
                foreach ($pegawai as $pw): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $pw->nama; ?></td>
                <td><?= $pw->nip; ?></td>
                <td><?= $pw->divisi; ?></td>
                <td><?= $pw->jabatan; ?></td>
                <td><?= $pw->email; ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>
</body>
</html>