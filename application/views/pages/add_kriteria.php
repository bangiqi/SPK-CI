<?php
/**
 * Created by PhpStorm.
 * User: ramdani
 * Date: 12/17/2016
 * Time: 1:00 PM
 */
?>
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

