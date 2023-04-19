<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <style>
        *{
            font-family: 'Times New Roman', Times, serif;
            font-size: 12px;
        }
        body {
            margin: 0;
            padding: 0;
            
        }

        header {
            display: flex;
            justify-content: space-between;
        }

        #invoice-container {
            width: 793.8px;
            margin: 0 auto;
            margin-top: 30px;
            padding: 20px;
            border-collapse: collapse;
            border: 3px solid black;
        }

        #kepala-invoice1 {
            width: 350px;
            font-size: 14px;
        }

        #kepala-invoice2 {
            float: right;
            font-size: 14px;
        }

        #content {
            display: flex;
            border-collapse: collapse;
            border-bottom: 3px solid black;

        }

        #diperiksa-oleh {
            border-collapse: collapse;
            border-right: 3px solid black;
            width: 200px;
        }

        #bukti-pembayaran {
            /* background-color: blue; */
            margin-top: 25px;
            margin-left: 10px;
        }

        table {
            border-collapse: collapse;
        }

        th,
        td {
            padding: 0px;
            text-align: left;
            border-collapse: collapse;
            /* border: 3px solid red; */
        }
    </style>
</head>

<body>
    <div id="invoice-container">
        <header>
            <div id="kepala-invoice1">
                <center>
                    <b>
                        KORPS PEGAWAI REPUBLIK INDONESIA <br>
                        DEWAN PENGURUS <br>
                        <u>PROVINSI KEPULAUAN BANGKA BELITUNG</u>
                    </b>
                </center>
            </div>
            <div id="kepala-invoice2">
                NO. BKU : isinya
            </div>
        </header>
        <main>
            <section id="content">
                <div id="diperiksa-oleh">
                    <p style="margin-top: 40px;">
                        Diperiksa Oleh :
                    </p>
                </div>
                <div id="bukti-pembayaran">
                    <table>
                        <tr>
                            <td>Tahun Anggaran</td>
                            <td>&nbsp;&nbsp;:</td>
                            <td>&nbsp;&nbsp; </td>
                        </tr>
                        <tr>
                            <td>Kode Rekening</td>
                            <td>&nbsp;&nbsp;:</td>
                            <td>&nbsp;&nbsp; isinya</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div style="width: 600px;">
                                    <center><b><u><h2>BUKTI PEMBAYARAN</h2></u></b></center>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Sudah diterima dari</td>
                            <td>&nbsp;&nbsp;:</td>
                            <td>&nbsp;&nbsp;isinya</td>
                        </tr>
                        <tr style="visibility: hidden;">
                            <td colspan="3">.</td>
                        </tr>
                        <tr>
                            <td>Uang Banyaknya</td>
                            <td>&nbsp;&nbsp;:</td>
                            <td>
                                <div style="font-style:italic; border-collapse: collapse; border: 3px solid black; width:450px;">
                                    &nbsp;&nbsp;
                                </div>
                            </td>
                        </tr>
                        <tr style="visibility: hidden;">
                            <td colspan="3">.</td>
                        </tr>
                        <tr>
                            <td>Yaitu Untuk</td>
                            <td>&nbsp;&nbsp;:</td>
                            <td>&nbsp;&nbsp;isinya</td>
                        </tr>
                        <tr style="visibility: hidden;">
                            <td colspan="3">.</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:justify;">
                                <u style="border-bottom: 1px dashed black; text-decoration: none;">KETERANGAN SANTUNAN</u>
                            </td>
                        </tr>
                        <tr style="visibility: hidden;">
                            <td colspan="3">.</td>
                        </tr>
                        <tr>
                            <td colspan="3" style="text-align:right;">
                                tempat, 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                2023
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div style="margin-left:450px">
                                    Penerima Uang,
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div style="padding:10px;border-collapse: collapse;border-top: 3px solid black;border-bottom: 3px solid black;width:200px;display: flex;">
                                    <div style="padding: 6px;margin-left:20px;"><b>Rp. </b></div>
                                    <div style="text-align:right;padding:5px;margin-left:10px;border-collapse:collapse;border: 3px solid black;width:200px;"><b></b></div> 
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td style="visibility: hidden; width:400px">
                                x
                            </td>
                            <td style="text-align: center;width:200px">
                                <div>
                                    <b><u>nama penerima</u></b>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="visibility: hidden;">
                                x
                            </td>
                            <td style="text-align: center;">
                                <div>
                                    <b>NIP.</b>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </section>
        </main>
        <footer>
            <table>
                <tr>
                    <td style="text-align: center">
                        <div style="margin-left:50px;">
                            Disetujui dan disahkan oleh <br>
                            Ketua DP KORPRI Provinsi Kepulauan Bangka Blitung,
                        </div>
                    </td>
                    <td style="visibility: hidden;" colspan="3">
                        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                    </td>
                    <td style="text-align: center">
                        Yang Membayar; <br>
                        Bendahara Penerimaan dan Pengeluaran,
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">
                        <div style="margin-top:50px;">
                            <b><u>NAMA KETUA</u></b>
                        </div>
                    </td>
                    <td style="visibility: hidden;" colspan="3">
                        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                    </td>
                    <td style="text-align: center">
                        <div style="margin-top:50px;">
                            <b><u>NAMA BENDAHARA</u></b>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">
                        <b>NIP.</b>
                    </td>
                    <td style="visibility: hidden;" colspan="3">
                        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                    </td>
                    <td style="text-align: center">
                        <b>NIP.</b>
                    </td>
                </tr>
            </table>
        </footer>
    </div>
</body>

</html>
