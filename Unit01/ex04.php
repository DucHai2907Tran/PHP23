 <?php
$array = [1,4,2,6,9,100,45,8,20];

$max = null;
$position = null;

for ($i = 0; $i < count($array); $i++)
{
if ($max == null){
$max = $array[$i];
$position = $i+1;
}
else {
if ($array[$i] > $max){
$max = $array[$i];
$position = $i+1;
}
}
}

echo "Giá trị lớn nhất là $max, nằm tại vị trí $position";
?>