<?php

    if(isset($_POST['Naslov'])){
        $naslovFilma = $_POST['Naslov'];
        $vrstaFilma = $_POST['Vrsta'];
        $godinaFilma = $_POST['Godina'];
        $redateljFilma = $_POST['Redatelj'];
        $trajanjeFilma = $_POST['Trajanje'];
        $opisFilma = $_POST['Opis'];
        $ratingFilma = $_POST['Rating'];
        $recommended = $_POST['recommended'];

        $result = '';

        $result .= "<Book>\n";

        //naslov
            $result .= "<NaslovFilma>" . $naslovFilma . "</NaslovFilma>\n";
        
        //vrsta
            $result .= "<VrstaFilma>" . $vrstaFilma . "</VrstaFilma>\n";

        //godina
            $result .= "<GodinaFilma>" . $godinaFilma . "</GodinaFilma>\n";

        //redatelj
            $result .= "<RedateljFilma>" . $redateljFilma . "</RedateljFilma>\n";

        //trajanje
            $result .= "<TrajanjeFilma>" . $trajanjeFilma . "</TrajanjeFilma>\n";

        //opis
            $result .= "<OpisFilma>" . $opisFilma . "</OpisFilma>\n";

        //rejting
            $result .= "<RatingFilma>" . $ratingFilma . "</RatingFilma>\n";

        //recommended
            $result .= "<Recommended>" . $recommended . "</Recommended>\n";

        $result .= "</Book>\n";

        $filename = 'filmovi' . date('Y_m_d_h_i_s'). '.xml';

        file_put_contents($filename, $result);
        die('Uspješno generirano!');
    }

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Filmovi</title>
	<style>
		body{
			  background-color: #D3D3D3;
		}
		label{
			color:#696969;
		}
		h1{
			color:#696969;
			padding: 15px;
			font-size: 40px;
		}
		h2{
			color:#696969;
			padding: 5px;
			font-size: 20px;
		}
		h3{
			color:#696969;
			padding: 5px;
			font-size: 15px;
		}
	</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Početna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://imdb.com/">IMDb</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" target="_blank" href="https://www.imdb.com/chart/top/?ref_=nv_mv_250">Top Rated Movies on IMDb</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <h1 class="mb-15 mt-15 text-center">Filmovi</h1>
				<h2 class="mb-15 mt-15 text-center">koje ste gledali</h2>
				<h3 class="mb-15 mt-15 text-center">Preporuči nam super film. Spasi nas dosadnog filma. Reci nam svoje mišljenje o filmovima koje si pogledao. Ukoliko želiš znati više o filmovima, glumcima, režiserima i dr. posjeti link na IMDb u navigaciji. Također provjeri koje od 250 najbolje ocjenjenih si ti pogledao.</h3>
                <form action="aplikacija.php" method="POST">
                    <!--naslov filma-->
                    <div class="form-group">
                        <label for="naslov">Naslov filma</label>
                        <input type="text" name="Naslov" class="form-control" id="naslov" data-toggle="tooltip" data-placement="top" title="Naslov filma">
                    </div>
                    <!--vrsta filma-->
                    <div class="form-group">
                        <label for="vrsta">Vrsta filma</label>
                        <input type="text" name="Vrsta" class="form-control" id="vrsta" data-toggle="tooltip" data-placement="top" title="Vrsta filma">
                    </div>
                    <!--godina izdavanja-->
                    <div class="form-group">
                        <label for="godina">Godina izdavanja filma</label>
                        <input type="number" name="Godina" class="form-control" id="godina" min="1900" max="2099" step="1" value="2020" data-toggle="tooltip" data-placement="top" title="Godina izdavanja filma" />
                    </div>
                    <!--redatelj filma-->
                    <div class="form-group">
                        <label for="redatelj">Redatelj filma</label>
                        <input type="text" name="Redatelj" class="form-control" id="redatelj" data-toggle="tooltip" data-placement="top" title="Ime i prezime redatelja filma">
                    </div>
                    <!--trajanje filma u minutama-->
                    <div class="form-group">
                        <label for="trajanje">Trajanje filma u minutama</label>
                        <!--<input type="text" name="Trajanje" class="form-control" id="trajanje">-->
                        <input type="number" name="Trajanje" class="form-control" id="trajanje" min="1" max="1000" step="1" data-toggle="tooltip" data-placement="top" title="Trajanje filma u minutama" />
                    </div>
                    <!--opis filma-->
                    <div class="form-group">
                        <label for="opis">Opis filma</label>
                        <textarea class="form-control" name="Opis" id="opis" rows="3" data-toggle="tooltip" data-placement="top" title="Opis filma"></textarea>
                    </div>
                    <!--rejting filma-->
                    <div class="form-group">
                        <label for="rating">Vaša ocjena filma</label>
                        <input type="range" name="Rating" class="custom-range" min="1" max="5" step="1" id="rating" data-toggle="tooltip" data-placement="top" title="Ocjena filma">
                    </div>
                    <!--preporuka filma-->
                    <label for="rating">Predlažete li film?</label>
                    <select class="custom-select" name="recommended" id="recommended" data-toggle="tooltip" data-placement="top" title="Predlažete li film?">
                        <option value="yes">Da</option>
                        <option value="no">Ne</option>
                    </select><br /><br />

                    <button type="submit" class="btn btn-info float-right mb-15" data-toggle="tooltip" data-placement="top" title="Spremi unos">Spremi</button>
                    <br /><br />
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
