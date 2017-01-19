<?php  

function zipData($source, $destination) {
if (extension_loaded('zip')) {
if (file_exists($source)) {
$zip = new ZipArchive();
if ($zip->open($destination, ZIPARCHIVE::CREATE)) {
$source = realpath($source);
if (is_dir($source)) {
$iterator = new RecursiveDirectoryIterator($source);
// skip dot files while iterating
$iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);
$files = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::SELF_FIRST);
foreach ($files as $file) {
$file = realpath($file);
if (is_dir($file)) {
$zip->addEmptyDir(str_replace($source . '', '', $file . ''));
} else if (is_file($file)) {
$zip->addFromString(str_replace($source . '', '', $file), file_get_contents($file));
}
}
} else if (is_file($source)) {
$zip->addFromString(basename($source), file_get_contents($source));
}
}
return $zip->close();
}
}
return false;
}

zipData(('images/'.($mansion->id)) , ('images/'.($mansion->id).'.zip'));
// zipData(('images/'.($mansion->id)) , ('images/'.($mansion->id).'-'.($mansion->mansion_name).'.zip'));


?>