<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="styles/HBL.css" rel="stylesheet" />
    <title>Homebrew Launcher</title>
</head>
<body>
    <center>
        <div class="Root">
            &nbsp;
            <div>
                <h1 class="PageTitle">Homebrew Launcher</h1>
            </div>
            <ul class="ListContainer">
<?php
include ('function.php');
$dir = scanapp("apps/");
for ($x = 0; count($dir) > $x; $x++) {
	if ($dir[$x]['allow']) {
		echo "<li class=\"ListItem\">";
		echo "<div class=\"ListItemContainer\">";
		echo "<a href=\"apps/".$dir[$x]['dir']."/\">";
		echo "<img src=\"styles/images/item.png\" />";
		echo "<p class=\"LisItemLogo\">";
		echo "<img src=\"";
		if ($dir[$x]['image']) {
			echo "apps/".$dir[$x]['dir']."/item.png";
		} else {
			echo "styles/images/noimage.png";
		}
		echo "\" width=\"47\" height=\"45\" alt=\"logo\" /></p>";
		echo "<p class=\"ListItemTitle\">".$dir[$x]['title']."</p>";
		echo "<p class=\"ListItemDescription\">".$dir[$x]['description']."</p>";
		echo "</a></div></li>";
	}
}
?>
            </ul>
            &nbsp;
			<p>Rewrite By <a href="https://www.i2cttl.com">RyujiAndy</a></p>
        </div>
    </center>
</body>
</html>
