<?php
/*  listDirTree( $dirName = null )
** descript list files under a folder
** param $dirName 
** return folder ,if none return false
*/
function listDirTree( $dirName = null )
{
	if( empty( $dirName ) )
		exit( "IBFileSystem: directory is empty." );
	if( is_dir( $dirName ) ){
		if( $dh = opendir( $dirName ) ){
			$tree = array();
			while( ( $file = readdir( $dh ) ) !== false ){
				if( $file != "." && $file != ".." ){
					$filePath = $dirName . "/" . $file;
					if( is_dir( $filePath ) ) {
						$tree[$file] = listDirTree( $filePath );
					}else {
						$tree[] = $file;
					}
				}
			}
			closedir( $dh );
		}else{
			exit( "IBFileSystem: can not open directory $dirName.");
		}
		
		return $tree;
	}else{
		exit( "IBFileSystem: $dirName is not a directory.");
	}
}

$files = listDirTree("kiosk");
$size = count($files);
//create  file list links
echo '<ol>';
    for( $i=0; $i < $size; $i++ ) {
    echo '<li><a href="kiosk\\'.($files[$i]).'" target="_blank">'.$files[$i].'</a></li>';
    }
echo '</ol>';
?>