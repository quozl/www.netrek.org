<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require '../set_my_root.php';
require '../nhp.php';

doNhpHeader();

echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>

<h1>About Netrek</h1>
<p>
Netrek is the probably the first video game which can accurately be described as a "sport." It has more in common with basketball than with arcade games or Quake. Its vast and expanding array of tactics and strategies allows for many different play styles; the best players are the ones who think fastest, not necessarily the ones who twitch most effectively. It can be enjoyed as a twitch game, since the dogfighting system is extremely robust, but the things that really set Netrek apart from other video games are the team and strategic aspects. Team play is dynamic and varied, with roles constantly changing as the game state changes. Strategic play is explored in organized league games; after 6+ years of league play, strategies are still being invented and refined.
</p>

<h2>Netrek History</h2>
All the history work was originally written by Andy McFadden.
Netrek History is available for:
<ul>
<li><a href="history_overall.php">Overall History</a></li>
<li><a href="history_servers.php">Servers</a></li>
<li><a href="history_timeline.php">Timeline</a></li>
</ul>

<br>

<h2>Articles and Reviews</h2>
<ul>
<li>WIRED: <a href="wired_article.php">The First Online Sports Game</a>.</li>

<li>GameSpot.com:
	<a href="http://www.gamespot.com/features/6091348/p-7.html">The
	Greatest Star Trek Game You've Never Heard Of</a>.</li>

<li>FreeDownloadCenter.com:
	<a href="http://www.freedownloadcenter.com/Reviews/r1390.html">Played
	for a long time now and is still the favorite of its patronizers</a>.</li>

<li>UNIX-Info magazine (dutch):
	<a href="internet_als_nintendo.php">Netrek: het Internet als Nintendo</a>.</li>

<li>Netrek made it on <a href="http://slashdot.org/article.pl?sid=02/05/10/189241">Slashdot</a>
	<a href="http://ask.slashdot.org/article.pl?sid=03/03/31/2225243">twice</a>!</li>
</ul>



<?php
echo "</div>\n";
echo getFooter();
?>
