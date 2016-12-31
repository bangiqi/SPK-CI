<?php
/**
 * Created by PhpStorm.
 * User: ramdani
 * Date: 12/17/2016
 * Time: 1:01 PM
     *********************************
    AHP PROTOTYPE
    FILENAME     : ahp.php
    CREATED BY   : CAHYA DSN
    CREATED DATE : 2013-04-23
    *******************************/

?>


<?php
//var_dump($dataku);

//Random Index
$ri=Array(0,0,0,0.58,0.9,1.12,1.24,1.32,1.41,1.45,1.49);

$a=array();
$d=array();

function logArray($d){
    echo "<pre>";
    //print_r($d);
    var_dump($d);
    echo "</pre>";
}

if (is_null($test_obj)){
    //redirect('http://localhost/spk_osis/index.php/admin/add_question');
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Maaf anda harus mengisi quisioner terlebih dahulu')
    window.location.href='http://localhost/spk_osis/index.php/admin/add_question';
    </SCRIPT>");
    redirect('http://localhost/spk_osis/index.php/admin/add_question');
}

foreach ($test_obj as $key => $value){

    //var_dump($value->kriteria_1);
    //var_dump($value->kriteria_2);

    $idx1=$a[]=str_replace(" ","_",$value->kriteria_1);
    $idx2=$a[]=str_replace(" ","_",$value->kriteria_2);

    if(!isset($d[$idx1])){$d[$idx1]=array();$d[$idx1][$idx1]=1;}
    if(!isset($d[$idx2])){$d[$idx2]=array();$d[$idx2][$idx2]=1;}

    $d[$idx1][$idx2]=$value->value_mtx;
    $d[$idx2][$idx1]=1/$value->value_mtx;
}

/*foreach($test_obj as $dt => $value){

    //echo "cek $dt : ".$dt[0];
    //logArray($dt->kriteria_2);
    //var_dump($value->kriteria_2);


}*/

$a=array_unique($a);

$b=array();

foreach($a as $v) $b[]=$v;

//echo "Criteria:\n";

//print_r($a);

?>


<h2>Data Matriks Hasil Kriteria </h2>

<?php

echo "<br><h3>Comparison data:</h3>\n";
echo "<pre>";
//print_r($d);
echo "</pre>";

$a=$b;
$n=count($a);

echo "</pre>\n<table border=1>\n";


$rows=array();
$columns=array();

for($i=0;$i<=$n;$i++){

    for($j=0;$j<$n;$j++){

        if($i>0) $columns[$i-1]=isset($columns[$i-1])?$columns[$i-1]+$d[$a[$j]][$a[$i-1]]:$d[$a[$j]][$a[$i-1]];

    }

}

for($i=0;$i<=$n;$i++){

    echo "<tr><th>".ucwords($i==0?"criteria":str_replace("_"," ",$a[$i-1]))."</th>";

    for($j=0;$j<$n;$j++){

        echo ($i==0?"<th>".ucwords(str_replace("_"," ",$a[$j]))."</th>":"<td>".round($d[$a[$i-1]][$a[$j]],2)."</td>");

        if ($i>0) $rows[$i-1] = isset($rows[$i-1]) ? $rows[$i-1]+$d[$a[$i-1]][$a[$j]] / $columns[$j] : $d[$a[$i-1]][$a[$j]] / $columns[$j];

    }

    if($i>0){

        $rows[$i-1]/=$n;echo "<td>".number_format((float)$rows[$i-1], 4, '.', '')."</td>";

    }else{

        echo "<th>Priority Vector</th>";

    }

    $p=($i==0?0:$p+$rows[$i-1]*$columns[$i-1]);


    echo "</tr>\n";

}

$ci=($p-$n)/($n-1);
$cr=$ci/$ri[$n];

echo "<table>\n<pre>";

//echo "Total:\n";

//print_r($columns);

//echo "Priority Vector:\n";

//print_r($rows);

echo "</pre>";

/*echo "Principal Eigen Value (&#955;<sub>max</sub>)=$p<br />\n"
    ."Consistency Index (CI) =$ci<br/>\n"
    ."Random Index (RI)=".$ri[$n]."<br />\n"
    ."Consistency Ratio (CR)=<span".($cr>0.1?' style="color:red"':'').">$cr</span>";*/

?>
<h3>Result :</h3>
<table>
    <tr>
        <th colspan="3">Calculation</th>
    </tr>

    <tr>
        <td width="200">Principal Eigen Value (&#955;<sub>max</sub>)</td>
        <td width="10">: </td>
        <td style="text-align: left;"><div style="color: forestgreen; font-weight: bolder;"><?php echo $p; ?></div></td>
    </tr>

    <tr>
        <td width="200">Consistency Index (CI) </td>
        <td width="10">: </td>
        <td style="text-align: left;"><div style="color: forestgreen; font-weight: bolder;"><?php echo $ci; ?></div></td>
    </tr>

    <tr>
        <td width="200">Random Index (RI) </td>
        <td width="10">: </td>
        <td style="text-align: left;"><div style="color: forestgreen; font-weight: bolder;"><?php echo $ri[$n]; ?></div></td>
    </tr>

    <tr>
        <td width="200">Consistency Ratio (CR) </td>
        <td width="10">: </td>
        <td style="text-align: left;"><div style="color: forestgreen; font-weight: bolder;"><?php echo "<span".($cr>0.1?' style="color:red"':'').">".$cr."</span>"; ?></div></td>
    </tr>


</table>


