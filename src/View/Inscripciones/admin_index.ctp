<?php
$datos = array();

foreach ($inscritos as $inscrito) {
    array_push($datos, $inscrito['Inscripcion']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
