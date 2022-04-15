<!DOCTYPE html>
<html lang="en">

<head>
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <style>
        .d-flex {
            height: 450px;
            background-color: #FEA5A5;
            margin: 0px;
            align-items: left;
        }

        .row {
            margin: 30px 0px 10px 0px;
        }

        .col-sm {
            margin-left: 5%;
            margin-right: 5%;
        }

        .card {
            margin: 10px 0px 20px 0px;
        }

        .p1 {
            font-size: 14px;
            align-items: left;
            color: #4E3B3B;
        }
    </style>
</head>

<body style="font-family: 'Raleway', sans-serif;">
    <div class="d-flex p-2">
        <div class="row">
            <div class="col-sm-4">
                <h1 style="text-align: left; font-size: 30px; font-weight: bold; margin-top: 30%;">TENTANG E-SECTION
                </h1>
                <p1>
                    E-Section merupakan web yang bertujuan membantu mengedukasi
                    masyarakat umum mengenai segala materi yang berhubungan
                    dengan pendidikan seksual
                </p1>
            </div>
            <div class="col-sm">
                <img src="<?= BASEURL?>/img/logo.png" style="width: 500px; height: auto; margin-left: 25%;">
            </div>
        </div>
    </div>
    <br>

    <div class="row" style="width: 700px; height: auto; margin-left: 25%;">
        <div class="col-sm" style="background-color: #FEA5A5;">
            <br>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h4 style="text-align: center;">E-Section menyediakan serangkaian video dan artikel edukasi yang
                            bertujuan untuk mengenalkan dan mengajarkan anak-anak tentang pubertas
                            dan hubungan sehat</h4>
                        <br>
                        <img class="d-block w-100" src="<?= BASEURL?>/video/4/Bully.jpg" alt="First slide">
                        <br>
                    </div>
                    <div class="carousel-item">
                        <h4 style="text-align: center;">E-Section menyediakan serangkaian video dan artikel
                            edukasi yang bertujuan untuk mengenalkan dan mengajarkan
                            Remaja tentang pubertas dan hubungan sehat Reproduksi,
                            hubungan sehat, dan kesehatan mental</h4>
                        <br>
                        <img class="d-block w-100" src="<?= BASEURL?>/video/3/tubuh.jpg" alt="Second slide">
                        <br>
                    </div>
                    <div class="carousel-item">
                        <h4 style="text-align: center;">E-Section menyediakan serangkaian video dan artikel
                            edukasi yang bertujuan untuk mengenalkan dan mengajarkan
                            Orang Dewasa tentang reproduksi, hubungan sehat,
                            kesehatan mental, dan kontrasepsi</h4>
                        <br>
                        <img class="d-block w-100" src="<?= BASEURL?>/video/2/contra.jpg" alt="Third slide">
                        <br>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <br>

    <script src="<?= BASEURL?>/js/bootstrap.js"></script>

</body>

</html>