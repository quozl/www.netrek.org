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

<h1>Netrek Leagues</h1>

<p>An inter-collegiate Netrek "All-Stars" game was played in 
November of 1991 between
people at Carnagie Mellon University and the University of California at
Berkeley. In February of 1992, league play started with a league of 13 teams.
<p>
Netrek was almost certainly the first Internet game to have league play,
and at one time or another had leagues not only for 
Vanilla/Bronco style Netrek, but for
two of the other variants as well. Leagues ranged in size from
two to at least fourteen teams. Teams sometimes had several members
who worked or went to school together so that they could be in the
same room during a game. 
<p>
As of 2007, there are no active Netrek leagues. Team play has just
been restarted, with two teams having formed and played their
first games against each other and against the world.

<p>
The following leagues have existed in the past:
<p><h2>International Netrek League</h2>
The INL had their first games in February of 1992, and played two 
or three seasons per year through 2002 (ending with the "Fall/Winter 
2002 season", scheduled to run from December 2002 through April of 2003).
Most INL players were from the United States and Canada, though there
were certainly a number of European players and others as well. 
<ul>
	<li>
	<a href="http://www.inl.org/">INL Home Page</a><br />
        This is just a tad stale.
	</li>

	<li>
	<a href="../leagues/inl/statboy/">INL sTaTbOy! Archives</a><br />
	Current and past INL season statistics dating back to Spring 1992
	are available here. INL Hall of Twink and Rewl. Game summaries.
	</li>
</ul>

<p><h2>The Draft League</h2>
A semi-annual (two seasons per year) league dedicated to (and tolerant of) 
newer players who have little or no league experience. 2002 was the 
most recent year of Draft League play. The 
<a href="../leagues/dl/">Draft League</a> home page is still up. 

<p><h2>World Netrek League</h2>
The WNL was a league that tried to blend the best of the INL
and the DL, and teams from both other leagues were welcome to play
in WNL games. The WNL played four seasons, Fall 2000 through Spring 2002,
before merging with the INL. The 
<a href="../leagues/wnl/">WNL Home Page</a> is mostly inoperable, but
display of the the old game statistics may be repaired at some point. 

<p><h2>European Netrek League</h2>
The ENL was the European-oriented counterpart to the INL. There
were no restrictions preventing non-Europeans from playing in the ENL
and Europeans from playing in the INL; some players
participated in both leagues. The league existed primarily because
for most of the 1990s, trans-continental Internet
connections were quite bad, discouraging European players from
playing in the INL because their server lag impeded their play. The
league folded in the Summer of 1999, by which team the player
base had somewhat eroded, and network performance was less of an issue.
The old <a href="http://enl.netrek.org">ENL Home Page</a> is currently
inoperable. 

<p><h2>International Netrek Hockey League</h2>
The INHL was a league dedicated to Netrek Hockey. They played
their most recent season in 1998. Home page at <a href="http://www.inl.org/inhl/">http://www.inl.org/inhl/</a>.

<p><h2>Paradise Netrek League</h2>
Paradise is a different flavor of Netrek that is not, as of 2007, 
actively played.
There was a Paradise league, whose last season was played around 1995. 
For more info about Paradise, see the <a href="http://paradise.netrek.org/">Paradise Netrek Home Page</a><br />



<?
echo "</div>\n";
echo getFooter();
?>
