<?php
$dataDate = date('Ymd');
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=categori-list(" . $dataDate . ").xls");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="<?= base_url() ?>/myfavicon.ico" type="ico" sizes="16x16">
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h2>Data Category List</h2>

    <table id="customers" style="width:100%">
        <thead>
            <tr>
                <th>no</th>
                <th>Category Name</th>
            </tr>

        </thead>
        <tbody>
            <?php $no = 1 ?>
            <?php foreach ($content as $key => $value) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['category_name']  ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>



    </table>

</body>

</html>