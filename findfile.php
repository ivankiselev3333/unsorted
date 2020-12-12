<?php
$base_dir = 'Z:\\';
$extension_restriction = array(
    'js',
    'php'
);

$it = new RecursiveDirectoryIterator($base_dir);
foreach (new RecursiveIteratorIterator($it) as $file) {
    if (in_array(strtolower(pathinfo( $file, PATHINFO_EXTENSION )), $extension_restriction)) {
         $Arr[]=$file . " \n";
    }
}
print_R($Arr);
file_put_contents( 'A:\apps\a\helpers\filesArray.php' ,'<?php return $filesArray='.var_export( $Arr, true ).";\n" );


?>