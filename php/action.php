<?php

//action.php

$connect = new PDO("mysql:host=localhost;dbname=militares", "root", "");

$received_data = json_decode(file_get_contents("php://input"));

if($received_data->request_for == 'country')
{
 $query = "
 SELECT * FROM zodi_tabla 
 ORDER BY descripcion2 ASC
 ";
}

if($received_data->request_for == 'state')
{
 $query = "
 SELECT * FROM region_tabla 
 WHERE id_region = '".$received_data->id_region."' 
 ORDER BY descripcion1 ASC
 ";
}

if($received_data->request_for == 'city')
{
 $query = "
 SELECT * FROM adi_datos
 WHERE id_adi = '".$received_data->id_adi."' 
 ORDER BY descripcion ASC
 ";
}

$statement = $connect->prepare($query);

$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);


?>
