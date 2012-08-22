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
    print_r ($folders);
    if( count($folders) > 2 ){
        // All Folders
        foreach( $folders as $folder ){
            $ext = preg_replace('/^.*\./', '', $folder);
            print $root.$dir.$folder;
            if( $folder != '.' && $folder != '..' && is_dir($root . $dir . $folder) ) {
                $files = scandir($root . $dir . $folder);
                natcasesort($files);
                print_r ($files);
                if( count($files) > 2 ) { // The 2 accounts for . and ..
                    // All files
                    foreach( $files as $file ) {
                        $ext = preg_replace('/^.*\./', '', $file);
                        print $root.$dir.$folder."/".$file;
                        if( file_exists($root . $dir . $folder ."/" . $file) && $file != '.' && $file != '..' && !is_dir($root . $dir . $folder ."/" . $file) ) {
                            $ext = preg_replace('/^.*\./', '', $file);

                            // read only allowed fileTypes
                            if(in_array($ext,$filetypes)){
                                $data = file_get_contents($root . $dir . $folder . $file);

                                // Add Element to Array
                                $filesArr[] = array(
                                    'hasher' => $dir,
                                    'filename' => $file,
                                    'filepath' => 'root/'.$dir.$folder.$file,
                                    'data' => $data
                                );
                            }
                        }
                    }
                }
            }
        }
    }
    echo json_encode($filesArr);
}
?>
