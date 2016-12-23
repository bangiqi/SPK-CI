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

<h2>Data Matriks Hasil Kriteria | <a href="#">Tambah</a></h2>

<?php
//var_dump($dataku);

//Random Index
$ri=Array(0,0,0,0.58,0.9,1.12,1.24,1.32,1.41,1.45,1.49);

$a=array();
$d=array();

foreach($dataku as $dt){

    $idx1=$a[]=str_replace(" ","_",$dt[0]);
    $idx2=$a[]=str_replace(" ","_",$dt[1]);

    if(!isset($d[$idx1])){$d[$idx1]=array();$d[$idx1][$idx1]=1;}
    if(!isset($d[$idx2])){$d[$idx2]=array();$d[$idx2][$idx2]=1;}

    $d[$idx1][$idx2]=$dt[2];
    $d[$idx2][$idx1]=1/$dt[2];
}

$a=array_unique($a);

$b=array();

foreach($a as $v) $b[]=$v;

//echo "Criteria:\n";print_r($a);
//echo "Comparison data:\n";print_r($d);

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

        $rows[$i-1]/=$n;echo "<td>".number_format((float)$rows[$i-1], 2, '.', '')."</td>";

    }else{

        echo "<th>Priority Vector</th>";

    }

    $p=($i==0?0:$p+$rows[$i-1]*$columns[$i-1]);


    echo "</tr>\n";

}

$ci=($p-$n)/($n-1);
$cr=$ci/$ri[$n];

echo "<table>\n<pre>";

echo "Total:\n";

//print_r($columns);

echo "Priority Vector:\n";

//print_r($rows);

echo "</pre>";

echo "Principal Eigen Value (&#955;<sub>max</sub>)=$p<br />\n"
    ."Consistency Index (CI) =$ci<br/>\n"
    ."Random Index (RI)=".$ri[$n]."<br />\n"
    ."Consistency Ratio (CR)=<span".($cr>0.1?' style="color:red"':'').">$cr</span>";

?>


