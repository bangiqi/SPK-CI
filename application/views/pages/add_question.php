<?php
/**
 * Created by PhpStorm.
 * User: ramdani
 * Date: 12/30/2016
 * Time: 12:37 AM
 */

function logArray($d){
    echo "<pre>";
    //print_r($d);
    var_dump($d);
    echo "</pre>";
}
?>


<h2>Pairwise Comparison Kriteria Calon Ketua OSIS</h2>
<?php echo form_open('admin/get_kriteria_weight', 'class="email" id="myform"'); ?>
<table>

    <tr>
        <th>Kriteria</th>
        <th style="text-align: right;">more important than</th>
        <th style="text-align: center;">equals</th>
        <th>less important than</th>
        <th>Kriteria</th>
    </tr>


    <?php
    $next = 1;
    //logArray($pairwise_kriteria['dataku']);
    $data = $pairwise_kriteria['dataku'];
    //logArray($data);
    foreach ($data as $key => $value) {
        //logArray($value[0])
        ?>

        <tr>
            <td style="text-align: right;"><h2><?php echo $value[0]; ?></h2></td>
            <td style="text-align: right;">
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="9"> 9
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="8"> 8
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="7"> 7
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="6"> 6
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="5"> 5
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="4"> 4
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="3"> 3
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="2"> 2
            </td>
            <td style="text-align: center;">
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="1"> 1
            </td>
            <td style="text-align: left;">
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="0.5"> 2
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="0.33333333333333"> 3
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="0.25"> 4
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="0.2"> 5
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="0.66666666666666"> 6
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="0.14285714285714"> 7
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="0.125"> 8
                <input type="radio" name="kriteria[<?php echo $next; ?>]" value="0.11111111111111"> 9
            </td>
            <td><h2><?php echo $value[1]; ?></h2></td>
        </tr>

        <?php
        $next++;    } ?>



    <tr>
        <td colspan="5"><button type="submit">compute</button></td>


    </tr>

</table>

<?php echo form_close(); ?>
