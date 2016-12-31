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

                <input type="text" id="fname" name="firstname" value="rajin">
            </td>
            <td>
                <select name="cars">
                    <option value="volvo">1. Kedua elemen sama pentingnya</option>
                    <option value="saab">2. Nilai-nilai antara dua nilai perbandingan berdekatan
                    </option>
                    <option value="fiat">3. Elemen yang satu sedikit lebih penting dari pada elemen yang lain
                    </option>
                    <option value="audi">4. Nilai-nilai antara dua nilai perbandingan berdekatan</option>
                    <option value="audi">5. Elemen yang satu sedikit lebih cukup penting dari pada elemen yang lainnya</option>
                    <option value="audi">6. Nilai-nilai antara dua nilai perbandingan berdekatan</option>
                    <option value="audi">7. Satu elemen jelas lebih penting dari pada elemen lainnya</option>
                    <option value="audi">8. Nilai-nilai antara dua nilai perbandingan berdekatan</option>
                    <option value="audi">9. Satu elemen mutlak penting dari pada elemen lainnya</option>
                </select>
            </td>
            <td>
                <input type="text" id="fname" name="firstname" value="displin">
            </td>
        </tr>

        <?php
    }
    ?>

</table>

<div><button class="button">Take Survey</button></div>

