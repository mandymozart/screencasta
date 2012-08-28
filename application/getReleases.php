<?php
// //
// Return JSON Object
// for debuggin uncomment
// Screencasta XML read from Folder
error_reporting(-1);
// LIBRARIES


//
$filetypes = array ('json','JSON');
$filesArr = array(); //

$root = "../root/";

$dir = "";
//$dir = urldecode($_POST['ajax']);


if( file_exists($root . $dir) ) {
    $folders = scandir($root . $dir);
    natcasesort($folders);
    if( count($folders) > 2 ){
        // All Folders
        foreach( $folders as $folder ){
            $ext = preg_replace('/^.*\./', '', $folder);
            if( $folder != '.' && $folder != '..' && is_dir($root . $dir . $folder) ) {
                if(file_exists($root.$dir.$folder."/index.json")){
                                $data = json_decode( file_get_contents($root . $dir . $folder . "/index.json"), true);

//                                // Add Element to Array
//                                $filesArr[] = array(
//                                    'hasher' => $dir,
//                                    'containaAlias' => $folder,
//                                    'containaURI' => 'root/'.$dir.$folder."/",
//                                    'data' => $data
//                                );
                    // XXX quick hack
                    $data['containaURI'] = 'root/'.$dir.$folder."/";
                    $data['containaAlias'] = $folder;


                    $filesArr[] = $data;
                }
            }
        }
    }
    echo json_encode($filesArr);
}
?>
