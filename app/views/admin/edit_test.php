
<body style="font-family: 'Raleway', sans-serif;">
    <div class="d-flex p-2" style="height: 450px;	background-color: #FEA5A5; margin: 0px; align-items: left;">
        <div class="container" style="margin-top: 9%; margin-left: 5%; height: 300px; width: 400px; float: left;">
            <h1 style="text-align: left; font-size: 30px;">TEST
            </h1>
            <p1 style="font-size: 14px; align-items: left;">
                E-Section menyediakan serangkaian test yang
                mencangkup berbagai topik mulai dari hubungan
                sehat hingga kesehatan mental
            </p1>
        </div>
        <div class="container" style="margin-top: 5%;margin-right: 15%; height: 300px; width: 400px; float: right;">
            <img src="<?= BASEURL?>/img/A4.png" style="width: auto; height: 320px;">
        </div>
    </div>
    <br>
    <div class="d-flex p-2"
        style="background-color: #EEEEEE; align-items: left; margin-left: 10%; margin-right:  10%; margin-bottom: 5%;">
        <div class="container">
            <form action="<?= BASEURL?>/C_Admin/editTest/<?= $data['id_judul']?>/<?= $data['id_role']?>" method="post">
                <div class="row">
                    <div class="col-sm">
                        <label style="font-size: 18px;; font-weight: bolder; padding: 0px;">JUDUL TEST</label>
                        <div class="input-group input-group-lg">
                            <input name="judul" type="text" class="form-control" aria-label="Large"
                                aria-describedby="inputGroup-sizing-sm" value="<?= $data['judul'];?>">
                        </div>
                    </div>
                    <div class="col-sm">
                        <label style="font-size: 18px;; font-weight: bolder; padding: 0px;">Deskripsi</label>
                        <div class="input-group input-group-lg">
                            <input name="desc" type="text" class="form-control" aria-label="Large"
                                aria-describedby="inputGroup-sizing-sm" value="<?= $data['desc'];?>">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-danger" style="background-color: #BE4C4C; width: 30rem;">SIMPAN</button>
                </div>
            </form> 
        </div>
    </div>

    
</body>

</html>