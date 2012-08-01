<?php
// // 
// Return JSON Object
// for debuggin uncomment
// Screencasta XML read from Folder
error_reporting(-1);
// LIBRARIES


//
$filetypes = array ('xml','XML');
$filesArr = array(); // 

$root = "../root/";

$dir = "casestudies/";
//$dir = urldecode($_POST['ajax']);


if( file_exists($root . $dir) ) {
	$files = scandir($root . $dir);
	natcasesort($files);
	if( count($files) > 2 ) { // The 2 accounts for . and ..
		// All files
		foreach( $files as $file ) {
			$ext = preg_replace('/^.*\./', '', $file);
			if( file_exists($root . $dir . $file) && $file != '.' && $file != '..' && !is_dir($root . $dir . $file) ) {
				$ext = preg_replace('/^.*\./', '', $file);
				// display only WAV Files
				if(in_array($ext,$filetypes)){
                    $xml = array();
                    // Parse XML only for cast.title, cast.pages, cast
                    $xml_parser = xml_parser_create(); // erzeugt neuen Parser
                    $data = implode (file ($root . $dir . $file), ""); // file() liest die Datei in ein Array ein
                    xml_parse_into_struct ($xml_parser, $data, $values, $index); // parst XML-Datei in assoziativen Array
                    xml_parser_free ($xml_parser);
                    foreach ($values as $value) { // Ausgabe der Daten des assoziativen Array
                        $xml[] = $value;
                    }
					// Add Element to Array
					$filesArr[] = array(
						'hasher' => $dir,
						'filename' => $file,
						'filepath' => 'root/'.$dir.$file,
                        'xml-struct-array' => json_encode($xml),
                        'xml-values' => json_encode($values)
                    );
				}
			}		
		}
	}
	echo json_encode($filesArr);
}
?>
