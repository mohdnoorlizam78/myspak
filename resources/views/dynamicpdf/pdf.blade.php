<!DOCTYPE html>
<html>

<head>
    <title><title>Laporan @if($order)- {{$order->no_aduan}} @endif</title></title>
</head>

<body>
    <p style="text-align: right;"><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: right; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>JKR.PATA.F7/2</span></p>
    <table style="width: 100%;">
        <tbody>
            <tr>
                <td style="width: 99.8498%;">
                    <div style="text-align: center;"><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>TATACARA PENGURUSAN ASET TAK ALIH</span></div>
                </td>
            </tr>
            <tr>
                <td style="width: 99.6997%;">
                    <div style="text-align: center;"><span style='color: rgb(0, 0, 0); font-family: "Times New Roman"; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: center; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>BORANG ADUAN / PERMINTAAN PELANGGAN</span></div>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="text-align: center;"><br></p>
    <table style="width: 100%;">
        <tbody>
            <tr>
                <td style="width: 30.1802%;">No. Aduan</td>
                <td style="width: 69.6696%;">: {{$order->no_aduan}}</td>
            </tr>
            <tr>
                <td style="width: 30.1802%;">Nama Pelapor</td>
                <td style="width: 69.6696%;">: {{$order->users->name}}</td>
            </tr>
            <tr>
                <td style="width: 30.1802%;">No. Telefon</td>
                <td style="width: 69.6696%;">: {{$order->no_tel}}</td>
            </tr>
            <tr>
                <td style="width: 30.1802%;">Bahagian / Unit</td>
                <td style="width: 69.6696%;">: {{$order->bhgn_unit->nama_bahagian}}</td>
            </tr>
            <tr>
                <td style="width: 30.1802%;">Premis</td>
                <td style="width: 69.6696%;">: Institut Latihan PErindustrian Selandar</td>
            </tr>
            <tr>
                <td style="width: 30.1802%;">No. DPA</td>
                <td style="width: 69.6696%;">: 1114111MYS.040214.BE0001</td>
            </tr>
            <tr>
                <td style="width: 30.1802%;">Tarikh/Masa</td>
                <td style="width: 69.6696%;">: {{$order->created_at}}</td>
            </tr>
            <tr>
                <td style="width: 30.1802%;">Skop Perkhidmatan</td>
                <td style="width: 69.6696%;">: {{$order->s_perkhidmatan->nama_skop}}</td>
            </tr>
            <tr>
                <td style="width: 30.1802%;">Lain-lain Skop Perkhidmatan</td>
                <td style="width: 69.6696%;">: {{$order->lain_skop}}</td>
            </tr>
            <tr>
                <td style="width: 30.1802%;">Mod Aduan</td>
                <td style="width: 69.6696%;">: {{$order->m_aduan->nama_mod}}</td>
            </tr>
            <tr>
                <td style="width: 30.1802%;">Lain-lain Mod Aduan</td>
                <td style="width: 69.6696%;">: {{$order->lain_mod}}</td>
            </tr>
            <tr>
                <td style="width: 30.1802%;">Keutamaan</td>
                <td style="width: 69.6696%;">: {{$order->keutamaan->nama_keutamaan}}</td>
            </tr>
        </tbody>
    </table>
    <p><br></p>
    <p>CATATAN ADUAN</p>
    <table style="width: 100%;">
        <tbody>
            <tr>
                <td style="width: 27.4775%;">Lokasi</td>
                <td style="width: 72.3723%;">: {{$order->lokasi->nama_lokasi}}</td>
            </tr>
            <tr>
                <td style="width: 27.4775%;">Lain-lain lokasi</td>
                <td style="width: 72.3723%;">: {{$order->lokasi_lain}}</td>
            </tr>
            <tr>
                <td style="width: 27.4775%;">Aras</td>
                <td style="width: 72.3723%;">: {{$order->aras->nama_aras}}</td>
            </tr>
            <tr>
                <td style="width: 27.4775%;">Nama / No Bilik (Jika ada)</td>
                <td style="width: 72.3723%;">: {{$order->nama_no_bilik}}</td>
            </tr>
            <tr>
                <td style="width: 27.4775%;">Keterangan kerosakan </td>
                <td style="width: 72.3723%;">: {{$order->keterangan_rosak}}</td>
            </tr>
            <tr>
                <td style="width: 27.4775%;">Nama Penerima</td>
                <td style="width: 72.3723%;">: {{$order->getPegawaiterima->name}}</td>
            </tr>
            <tr>
                <td style="width: 27.4775%;">Jawatan</td>
                <td style="width: 72.3723%;">: {{$order->getJawatan->nama_jawatan}}</td>
            </tr>
            <tr>
                <td style="width: 27.4775%;">Tarikh/Masa</td>
                <td style="width: 72.3723%;">: {{$order->updated_at}}</td>
            </tr>
        </tbody>
    </table>

</body>

</html>