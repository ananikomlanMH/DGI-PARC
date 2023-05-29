<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maintenance {{ $maintenance->materiel->designation }} ({{ $maintenance->materiel->service->designation }})</title>

    <style>
        @page {
            footer: myfooter;
        }

        .b {
            border-collapse: collapse;
            border: 1px solid #e2e2e2;
            margin-left: 3em;
            margin-right: 3em;
            margin-top: 2em;
        }

        th, td {
            border-collapse: collapse;
            text-align: center;
            font-family: Poppins, serif;
            border: 1px solid #e2e2e2;
            font-size: 10px;
        }

        ul {
            font-family: Poppins;
            font-size: 10px;
            padding: 0.5em 1em 0.5em 0.5em;
            margin-left: 6em;
            margin-right: 6em;
        }


        th {
            background-color: #f3f3f3;
            color: black;
        }

        td {
            padding: 0.5em 1em 1em 0.5em;
        }

        .c {
            border: 1px solid #e2e2e2;
            width: 100%;
            margin-left: 3em;
            margin-right: 3em;
            margin-top: 1em;
            border-collapse: collapse;
        }

        ul li {
            list-style: none;
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
    <p style='text-align: center;font-weight:bold;text-decoration: underline;'>Maintenance <span style="color:#f18516;">{{ $maintenance->materiel->designation }} ({{ $maintenance->materiel->service->designation }})</span></p>

    <p>Machine: <b>{{ $maintenance->materiel->designation }} ({{ $maintenance->materiel->service->designation }})</b></p>
    <p>Date debut: <b>{{ $maintenance->date_debut }}</b></p>
    <p>Date fin: <b>{{ $maintenance->date_fin }}</b></p>
    <p>Commentaire: {!! nl2br($maintenance->commentaire) !!}</p>
</div>
</body>
</html>
