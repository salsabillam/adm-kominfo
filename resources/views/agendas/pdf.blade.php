<html>

<head>
    <title>
        Data Agenda
    </title>
    <style>
        body {
            font-family: times new roman;
            font-size: 10pt;
        }

        p {
            margin: 0pt;
        }

        table.items {
            border: 0.1mm solid #000000;
        }

        td {
            vertical-align: top;
        }

        .items td {
            border-left: 0.1mm solid #000000;
            border-right: 0.1mm solid #000000;
        }

        .items th {
            background-color: aqua;
            border-bottom: 0.1mm solid #000000;
            border-left: 0.1mm solid #000000;
            border-right: 0.1mm solid #000000;
        }
    </style>
</head>

<body>

    <table width="100%">
        <tr>
            <td style="text-align: right;">Tanggal Cetak.<br /><span style="font-weight: bold;"> <?= date('d F Y') ?></span></td>
        </tr>
    </table>
    <htmlpagefooter name="myfooter">
    </htmlpagefooter>
    <sethtmlpageheader name="myheader" value="on" show-this-page="1" />
    <sethtmlpagefooter name="myfooter" value="on" />

    <div style="text-align: center">
        <h4>Laporan Data Agenda <?= date('F Y'); ?></h4>
    </div>
    <br />
    <table class="items" width="100%" style="font-size: 10pt; border-collapse: collapse; " cellpadding="8">
        <thead>
            <tr>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Lokasi</th>
                <th>Kegiatan</th>
            </tr>
        </thead>
        <tbody>
                            @foreach ($agendas as $item)
                                <tr>
                                    <td scope="row">{{ $item['hari'] }}</td>
                                    <td>{{ $item['tgl'] }}</td>
                                    <td>{{ $item['waktu'] }}</td>
                                    <td>{{ $item['lokasi'] }}</td>
                                    <td>{{ $item['kegiatan'] }}</td>
                                </tr>
                            @endforeach

        </tbody>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>