<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml"><head>    <link href="styles/HBL.css" rel="stylesheet" />    <title>Homebrew Launcher</title></head><body>    <center>        <div class="Root">            &nbsp;            <div>                <h1 class="PageTitle">Homebrew Launcher</h1>            </div>            <ul class="ListContainer"><?php
	include ('function.php');
	$dir=scanapp("apps/");
	for($x=0;
	count($dir)>$x;
	$x++){
		if($dir[$x]['allow']){
			echo "<li class=\"ListItem\">";
			echo "<div class=\"ListItemContainer\">";
			echo "<a href=\"apps/".$dir[$x]['dir']."/\">";
			echo "<img src=\"styles/images/item.png\" />";
			echo "<p class=\"LisItemLogo\">";
			echo "<img src=\"";
			if($dir[$x]['image']){
				echo "apps/".$dir[$x]['dir']."/item.png";
			}
			else{
				echo "styles/images/noimage.png";
			}
			echo "\" width=\"47\" height=\"45\" alt=\"logo\" /></p>";
			echo "<p class=\"ListItemTitle\">".$dir[$x]['title']."</p>";
			echo "<p class=\"ListItemDescription\">".$dir[$x]['description']."</p>";
			echo "</a></div></li>";
		}
	}
?>
            </ul>            &nbsp;			<p>Rewrite By <a href="https://git.i2cttl.com/ryujiandy/homebrew_launcher_wiiu">RyujiAndy</a></p>        </div>    </center>    <!-- Piwik --><script type="text/javascript">var _paq=_paq || [];
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function (){
	var u="//www.i2cttl.com/stats/";
	_paq.push(['setTrackerUrl',u+'piwik.php']);
	_paq.push(['setSiteId',4]);
	var d=document,g=d.createElement('script'),s=d.getElementsByTagName('script')[0];
	g.type='text/javascript';
	g.async=true;
	g.defer=true;
	g.src=u+'piwik.js';
	s.parentNode.insertBefore(g,s);
})();
</script><noscript><p><img src="//www.i2cttl.com/stats/piwik.php?idsite=4" style="border:0;" alt="" /></p></noscript><!-- End Piwik Code --></body></html>