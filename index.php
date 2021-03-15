<?php 

$csv = 'data.csv';

$file = fopen($csv, 'r');

while(($readcsv = fgetcsv($file)) !== FALSE)
{
    $data[] = $readcsv;  //Read the Data Rowise Initially
}

for($i=0;$i<count($data); $i++)
    {
        $columnwise[] = getColumn($data, $i); // Call the getColumn function 
    }

// Function To Read the Data Columwise
function getColumn($arr, $col)
{
    $column = [];
    for($i=0;$i<count($arr);$i++)
        {  
        $column[] = $arr[$i][$col];
        } 
    return $column;
}  

echo "ColumnWise Data <br/>";
echo json_encode($columnwise); // Print the Data Columwise




?>
