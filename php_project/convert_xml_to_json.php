<?php
// class XmlToJson {
function Parse () {
# Getting the contents of the XML file by making use of the function file_get_contents() to which the URL of the XML file is passed as a paramter
// $filepath= sprintf("%s%s%s","http://");
$filepath= file_get_contents("http://ftp.geoinfo.msl.mt.gov/Documents/Metadata/GIS_Inventory/35524afc-669b-4614-9f44-43506ae21a1d.xml");
# Removing the tabs, returns and the newlines
$filechange = str_replace(array("\n", "\r", "\t"), '', $filepath);
# The trailing and leading spaces are trimmed to make sure the XML is parsed properly by a simple XML function.
$filetrim = trim(str_replace('"', "'", $filechange));
# The simplexml_load_string() function is called to load the contents of the XML file.
// $resultxml = simplexml_load_string($filetrim);
# The final conversion of XML to JSON is done by calling the json_encode() function.
$resultjson = json_encode($filetrim);
// return $resultjson;
// echo $resultjson;
echo $filetrim;
echo $resultjson;
}
parse();
// }
// ?>