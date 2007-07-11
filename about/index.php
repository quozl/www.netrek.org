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
<h2>Why play Netrek?</h2>

<br><p>
Primative graphics? Yeah, it isn't filled with eye candy. Neither is Chess
or Go; real games don't have to be about the pretty pictures, it's about
the game. 
<p>
Netrek has action and strategy, and they've been honed
to a careful balance over a longer development period than any other 
multiplayer computer game, period. Like chess, bowling, or baseball, 
you can play netrek for practically your entire life. Even if you 
are the best dogfighter, there'll be someone who's better at 
taking planets, or flying a starbase, or scout bombing. 
<p>
Netrek is probably the first video game which can accurately be
described as a "sport." It has more in common with basketball than
with arcade games or Quake. 
<p>
Its vast and expanding array of tactics
and strategies allows for many different play styles; the best players
are the ones who think fastest, not necessarily the ones who twitch
most effectively. It can be enjoyed as a twitch game, since the
dogfighting system is extremely robust, but the things that really set
Netrek apart from other video games are the team and strategic
aspects. Team play is dynamic and varied, with roles constantly
changing as the game state changes. </p>
<p>
Netrek is no-cost, open source software. Unlike some corporate 
MMPORPG, it won't disappear in a few years; it'll be around for
as long as there are people who want to play it. You don't need a hot
machine to play it, and you can play on Windows, a Mac, or Linux
(and lots of other unixes too, if you want). You can put a server
on one of those paperback-sized home firewall machines to take to 
a LAN party. 
<p>
If you're a programmer and you want to change how the 
game works, you can do it and get people to try it out. You'll be hacking
on the first Internet game protocol, ever. 

<p>
<h2>Articles and Reviews</h2>
<ul>

<li>GameSpot.com:
	<a href="http://www.gamespot.com/features/6091348/p-7.html">The
	Greatest Star Trek Game You've Never Heard Of</a>.</li>

<li>WIRED: <a href="wired_article.php">The First Online Sports Game</a>.</li>
<li>FreeDownloadCenter.com:
	<a href="http://www.freedownloadcenter.com/Reviews/r1390.html">Played
	for a long time now and is still the favorite of its patronizers</a>.</li>

<li>Netrek made it on <a href="http://slashdot.org/article.pl?sid=02/05/10/189241">Slashdot</a>
	<a href="http://ask.slashdot.org/article.pl?sid=03/03/31/2225243">twice</a>!</li>

<li>Netrek is on the <a href="http://www.heise.de/tp/r4/artikel/25/25040/11.html">Telepolis top ten open source games list.</a> (German). (Local mirrors: <a href="./www.heise.de/tp/r4/artikel/25/25040/11.html">German</a>, <a href="./telepolis-article-translated.html">English auto-translated</a>)

<li>UNIX-Info magazine (dutch):
	<a href="internet_als_nintendo.php">Netrek: het Internet als Nintendo</a>.</li>


</ul>

<p>
<h2>The McFadden Files: Early Netrek History</h2>
<br><p>
In the mid-nineties, Andy McFadden wrote up some nice historical documentation,
which covers from pre-history through 1996.
<ul>
<li><a href="history_overall.php">Overall History</a></li>
<li><a href="history_servers.php">Servers</a></li>
<li><a href="history_timeline.php">Timeline</a></li>
</ul>

<br>
<h2>Other Bits of History</h2>
<ul>
<li>Akira wrote <a href="./akira-history-of-ogg.php">a personal account of the origin of the term "Ogging".</a>

<li><a href="../developer/design.html">Netrek
Game Design</a><br />
1997 document describing the major Netrek design changes over the years.</li>

<li><a href="../developer/server-secrets.txt">Netrek
Server Secrets</a><br />
An archive from 1993 of little known facts, 
bugs or features of servers from yesteryear.</li>

<li><a href="./netrekFAQ.html">The Netrek FAQ</a>. Last updated in 2004, this
is the FAQ that used to be posted regularly to the Usenet rec.games.netrek group.</li>

<li><a href="./2005-newbie.html">Version 1.7 of the Newbie Guide</a>. The 2.x Newbie Guide was basically cut down from this, with lots of stuff taken out, some of which has been placed into various clue guides. We list the older version here for reference; it includes such chestnuts as "How to play over a SLIP line".</li>

</ul>


</ul>

<?
echo "</div>\n";
echo getFooter();
?>
