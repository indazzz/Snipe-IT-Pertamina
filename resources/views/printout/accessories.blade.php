<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kategori</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 5%;
        }
        .container {
            max-width: 100%;
            flex-direction: column;
        }
        header {
            margin-bottom: 20px;
        }
        .logo_pertamina {
            max-width: 20%;
        }
        .judul {
            text-align: center;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table th, table td {
            font-size: 14px;
            border: 1px solid #000;
            padding: 8px;
        }
        table th {
            background-color: #eee;
            font-weight: 600;
        }
    </style>
</head>
<body onload="window.print()">
    <div class="container">
        <header>
            <img src="{{ asset('img/hulurokan.png') }}" class="logo_pertamina" alt="Logo Pertamina">
            <h1 class="judul">ACCESSORIES</h1>
        </header>
        <?php //dd($data_table);?>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Model No.</th>
                    <th>QTY</th>
                    <th>Notes</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomer = 1; // Inisialisasi nomer perulangan
                foreach ($data_table as $x) {
                ?>
                    <tr>
                        <td align="center"><?php echo $nomer; ?></td>
                        <td><?php echo $x->name ?></td>
                        <td align="center"><?php echo $x->model_number ?></td>
                        <td align="center"><?php echo $x->qty ?></td>
                        <td><?php echo $x->notes ?></td>
                        <td align="center"><?php echo $x->created_at ?></td>
                        <td align="center"><?php echo $x->updated_at ?></td>
                    </tr>
                <?php
                    $nomer++; // Increment nomer perulangan
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>