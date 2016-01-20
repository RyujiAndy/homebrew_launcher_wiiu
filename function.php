<?php
function scanapp($Mydir) {
	$x = 0;
	foreach(glob($Mydir.'*', GLOB_ONLYDIR) as $dir) {
		$dir = str_replace($Mydir, '', $dir);
		if (file_exists("apps/".$dir."/item.xml")) {
			$xml=simplexml_load_file("apps/".$dir."/item.xml");
			$title = $xml -> title;
			$description = $xml -> description;
			$visible = $xml -> allow;
		} else {
			$title = $dir;
			$description = "No Description";
			$visible = false;
		}
		$image = file_exists("apps/".$dir."/item.png");
		$res[$x] = array( "dir" => $dir, "title" => $title, "description" => $description, "image" => $image, "allow" => $visible);
		$x++;
	}
	return $res;
}

?>
