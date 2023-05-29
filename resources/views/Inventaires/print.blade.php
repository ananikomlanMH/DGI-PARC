<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventaire du {{ $inventaire->date_inventaire }}</title>

    <style>
        @page {
            footer: myfooter;
        }

        .header-text{
            text-align: center;
            width: 50%;
        }

        .header-bar{
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #104e94;
            border-radius: 4px 4px 4px 4px;
        }

        .header-bar tr{
            border-radius: 4px;
        }

        .listTable {
            width: 100%;
            background-color: #ffffff;
            border-collapse: collapse;
            color: #000000;
        }
        .header-table {
            width: 100%;
            background-color: #ffffff;
            border-collapse: collapse;
            border-width: 1px;
            border-color: #e2e2e2;
            border-style: solid;
            margin-bottom: 25px;
            border-radius: 5px;
        }

        .header-table td{
            border-width: 1px;
            border-color: #e2e2e2;
            border-style: solid;
            padding: 10px 15px;
        }
        .listTable td, .listTable th {
            border: 1px solid #d9d9d9;
            padding: 10px;
            font-size: .8em;
        }
        .listTable th{
            text-align: center;
            border-color: #fff;
        }

        .listTable tr:nth-child(2n){
            background: transparent;
        }

        .footer{
            background: rgba(16,78,148,0.25);
            border: 1px solid #104e94;
        }
        .total{
            background-color: #104e94cf;
            color: white;
            font-weight: bold;
            text-align: center;
        }

        .footer td{
            border: 1px solid #104e94;
        }
        .main{
            margin: 0 35px;
        }
    </style>
</head>
<body>

<htmlpagefooter name='myfooter'>
    <div style='text-align:right;font-size: .6em;font-style: italic; padding:10px;'>Page {PAGENO}/{nbpg} <br>(Tiré le {DATE d/m/Y} à {DATE H:i:s})</div>
    <img src='assets/images/dgi/footer.png' alt=''>
</htmlpagefooter>

<div class='main'>
    <p style='font-weight: bold;font-size: .9em;'>
        <img src='assets/images/dgi/tile.png' alt='' style='width: 40px;'> <br>
        REPUBLIQUE DU NIGER <br>
        MINISTERE DES FINANCES<br>
        DIRECTION GENERALE DES IMPOTS <br>
        DIRECTION DU MATERIELS ET DES AFFAIRES FINANCIERES <br>
        <span style='font-weight: normal;font-size: .9em;'>
            DIVISION DU MATERIEL <br>
            SERVICE DE LA COMPTABILITE MATIERE<br>
        </span>
    </p>

    <div>
        <img src='assets/images/dgi/top.png' alt=''>
    </div>
    <p style='text-align: center;font-weight:bold;text-decoration: underline;'>Inventaire du <span style="color:#f18516;">{{ $inventaire->date_inventaire }}</span></p>

    <table class='listTable'>
        <thead>
        <tr style='background-color: #f18516;'>
            <th style='color: #ffffff;width: 50px;'>#</th>
            <th style='color: #ffffff;'>N° Serie</th>
            <th style='color: #ffffff;'>Designation</th>
            <th style='color: #ffffff;'>Type</th>
            <th style='color: #ffffff;'>Service</th>
            <th style='color: #ffffff;'>Qte</th>
            <th style='color: #ffffff;'>Etat</th>
        </tr>
        </thead>
        <tbody>
        @foreach($inventaire->materielsInventores as $key => $item)
            <tr>
                <td style="text-align:center;">{{ $key + 1 }}</td>
                <td>{{ $item->materiel->num_serie }}</td>
                <td>{{ $item->materiel->designation }}</td>
                <td>{{ $item->materiel->typeMateriel->designation }}</td>
                <td>{{ $item->materiel->service->designation }}</td>
                <td>{{ $item->qte }}</td>
                <td>{{ $item->etat->designation }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
