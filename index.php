<?php
$sFileContent = file_get_contents('Main.xml');
$oParser = xml_parser_create();
xml_parser_set_option($oParser, XML_OPTION_CASE_FOLDING, 0);
xml_parser_set_option($oParser, XML_OPTION_SKIP_WHITE, 1);
xml_parser_set_option($oParser, XML_OPTION_TARGET_ENCODING, "UTF-8");
xml_parse_into_struct($oParser, $sFileContent, $vals);
xml_parser_free($oParser);

var_dump($vals);
?>