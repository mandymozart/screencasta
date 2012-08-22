<?php
// //
// Return JSON Object
// for debuggin uncomment
// Screencasta JSON Adapter for NOBACKEND SIMULATION
error_reporting(-1);
// LIBRARIES


//
$filetypes = array ('json','JSON');

$root = "../root/";


$alias = urldecode($_POST['ajax']);

// $alias = 'asset-containa';

if(file_exists($root.$alias."/index.json")){
    $data = json_decode( file_get_contents($root . $alias . "/index.json"), true);

    // Add Element to Array
    echo json_encode(array(
        'containaAlias' => $alias,
        'containaURI' => 'root/'.$alias."/",
        'data' => $data
    ));
}

/* EOF */
?>