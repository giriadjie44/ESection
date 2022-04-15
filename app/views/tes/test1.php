<body style="font-family: 'Raleway', sans-serif;">
    <div class="d-flex p-2" style="height: 300px;	background-color: #FEA5A5; margin: 0px; align-items: middle;">
        <div class="container" style="height: 300px; width: 400px;">
            <h1 class="Judul" style="font-size: 30px; font-weight: bolder; margin: 150px 60px 100px 90px;">
                TES <?= $data['judul'];?>
            </h1>
        </div>
    </div>
    <br>
    <div class="d-flex p-2"
        style="background-color: #EEEEEE; align-items: left; margin-left: 10%; margin-right:  10%; margin-bottom: 5%;">
        <div class="container">
            <br>
            <div class="row" style="margin-left: 35%; width: 400px;">
                <div class="col-sm">
                    <div class="container" style="width: 70;">
                        <img src="<?= BASEURL?>/test/star 1.png" style="width: 50px; height: 50px;">
                        <p2 style="font-weight: bold;">Intruksi</p2>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="container" style="width: 70px;">
                        <img src="<?= BASEURL?>/test/star 2.png" style="width: 50px; height: 50px;">
                        <p2 style="margin: 10px;">Tes</p2>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="container" style="width: 70px;">
                        <img src="<?= BASEURL?>/test/star 2.png" style="width: 50px; height: 50px;">
                        <p2 style="margin: 10px;">Hasil</p2>
                    </div>
                </div>
            </div>
            <br>
            <div class="container" style="width: 700px; height: auto; margin-left: 1%;">
                <h5 style="font-weight: bolder;">
                    Sebelum Memulai Tes
                </h5>
                <div class="dropdown-divider" style="border-color: #BE4C4C;"></div>
                <p2 style="font-size: 14px;">
                    Harap diperhatikan: Tes online bukanlah instrumen diagnostik.
                    Anda didorong untuk membagikan hasil Anda dengan dokter atau penyedia layanan kesehatan.
                    E-Section tidak bertanggung jawab, kehilangan, atau risiko yang timbul sebagai akibatnya,
                    secara langsung atau tidak langsung, dari penggunaan dan penerapan tes ini.
                </p2>
                <br>
                <br>
                <h5 style="font-weight: bolder;">
                    Instruksi Jawaban Tes
                </h5>
                <div class="dropdown-divider" style="border-color: #BE4C4C;"></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Pilihan</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Sangat Iya</th>
                            <td>Jika Anda sangat setuju atau jika pernyataan itu pasti benar.</td>
                        </tr>
                        <tr>
                            <th scope="row">Iya</th>
                            <td>Jika Anda setuju atau jika pernyataan itu selebihnya benar.</td>
                        </tr>
                        <tr>
                            <th scope="row">Netral</th>
                            <td>Jika Anda netral tentang pernyataan itu, jika Anda tidak dapat
                                memutuskan, atau jika pernyataan itu tentang benar dan salah.
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Tidak</th>
                            <td>Jika Anda tidak setuju atau jika pernyataan itu selebihnya salah.</td>
                        </tr>
                        <tr>
                            <th scope="row">Sangat Tidak</th>
                            <td>Jika Anda sangat tidak setuju atau jika pernyataan itu pasti salah.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 5%;">
    <form action="<?=BASEURL?>/C_User/tes/<?= $data['id_judul']?>/<?= $data['judul']?>" method="post">
        <button type="submit" class="btn btn-danger" style="background-color: #BE4C4C; font-weight: bold; margin-left: 90%;">Selanjutnya</button>
    </form>
    </div>
</body>

</html>