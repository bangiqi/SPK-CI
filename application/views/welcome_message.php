<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;

		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;

	}

    a:link {
        text-decoration: none;
    }

    a:visited {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }

    a:active {
        text-decoration: none;
    }

	h1 {
		color: #444;
		background-color: transparent;

		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		/*margin: 0 15px 0 15px;*/
        padding: 20px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #45a049;
    }

    li {
        float: left;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover:not(.active) {
        background-color: #111;
    }

    .active {
        background-color: #336633;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: #4CAF50;
        color: white;
    }

    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=radio]{
        width: 96px;
        height: 96px;
    }
    .kanan{
        text-align: center;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin: 4px 2px;
        cursor: pointer;
    }

    .button1 {font-size: 10px;}
    .button2 {font-size: 12px;}
    .button3 {font-size: 16px;}
    .button4 {font-size: 20px;}
    .button5 {font-size: 24px;}

	</style>
</head>
<body>

<div id="container">
	<h1>SISTEM PENUNJANG KEPUTUSAN | <strong>Pemilihan Ketua Osis SMK Adi Sanggoro</strong></h1>

    <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#news">Kriteria</a></li>
        <li><a href="#contact">Alternatif</a></li>
        <li><a href="#about">About</a></li>
    </ul>

	<div id="body">

        <h2>Data Kriteria | <a href="#">Tambah</a></h2>

        <table>
            <tr>
                <th>Kode</th>
                <th>Nama Kriteria</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>Peter</td>
                <td>Griffin</td>
                <td>
                    <a href="#">Edit</a>
                    |
                    <a href="#">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>Lois</td>
                <td>Griffin</td>
                <td>$150</td>
            </tr>
            <tr>
                <td>Joe</td>
                <td>Swanson</td>
                <td>$300</td>
            </tr>
            <tr>
                <td>Cleveland</td>
                <td>Brown</td>
                <td>$250</td>
            </tr>
        </table>
	</div>

    <div id="body">

        <h2>Data Alternatif | <a href="#">Tambah</a></h2>

        <table>
            <tr>
                <th>Kode</th>
                <th>Nama Kriteria</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>Peter</td>
                <td>Griffin</td>
                <td>
                    <a href="#">Edit</a>
                    |
                    <a href="#">Hapus</a>
                </td>
            </tr>
            <tr>
                <td>Lois</td>
                <td>Griffin</td>
                <td>$150</td>
            </tr>
            <tr>
                <td>Joe</td>
                <td>Swanson</td>
                <td>$300</td>
            </tr>
            <tr>
                <td>Cleveland</td>
                <td>Brown</td>
                <td>$250</td>
            </tr>
        </table>
    </div>


    <div id="body">

        <h2>Data Matriks Hasil Kriteria | <a href="#">Tambah</a></h2>

        <table border="1">
            <thead>
            <tr>

                <th>Col 3</th>
                <th colspan="3">Col 4</th>
            </tr>

            <tr>

                <th></th>
                <th>Col 4.1</th>
                <th>Col 4.2</th>
                <th>Col 4.3</th>
            </tr>
            </thead>
            <tbody>

            <tr>

                <td>
                    Val 3
                </td>

                <td>This is Val 4.1</td>
                <td>This is Val 4.2</td>
                <td>This is Val 4.3</td>
            </tr>

            <tr>

                <td>
                    Val 3
                </td>

                <td>This is Val 4.1</td>
                <td>This is Val 4.2</td>
                <td>This is Val 4.3</td>
            </tr>
            <tr>

                <td>
                    Val 3
                </td>

                <td>This is Val 4.1</td>
                <td>This is Val 4.2</td>
                <td>This is Val 4.3</td>
            </tr>

            </tbody>
        </table>
    </div>

    <div id="body">

        <h2>Data Kriteria</h2>

        <table>
            <tr>
                <th>Kriteria</th>
                <th>Nilai Perbandingan</th>
                <th>Kriteria</th>
            </tr>

            <?php
            for ($i=0;$i<10;$i++){


                ?>

                <tr>
                    <td>

                        <input type="text" id="fname" name="firstname">
                    </td>
                    <td>
                        <select name="cars">
                            <option value="volvo">1. Kedua elemen sama pentingnya</option>
                            <option value="saab">2. Nilai-nilai antara dua nilai perbandingan berdekatan
                            </option>
                            <option value="fiat">3. Elemen yang satu sedikit lebih penting dari pada elemen yang lain
                            </option>
                            <option value="audi">4. Nilai-nilai antara dua nilai perbandingan berdekatan</option>
                            <option value="audi">5. Nilai-nilai antara dua nilai perbandingan berdekatan</option>
                            <option value="audi">6. Nilai-nilai antara dua nilai perbandingan berdekatan</option>
                            <option value="audi">7. Nilai-nilai antara dua nilai perbandingan berdekatan</option>
                            <option value="audi">8. Nilai-nilai antara dua nilai perbandingan berdekatan</option>
                            <option value="audi">9. Nilai-nilai antara dua nilai perbandingan berdekatan</option>
                        </select>
                    </td>
                    <td>
                        <input type="text" id="fname" name="firstname">
                    </td>
                </tr>

                <?php
            }
            ?>

        </table>
    </div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>