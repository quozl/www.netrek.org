<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require '../../../set_my_root.php';
require '../../../nhp.php';

doNhpHeader();

// echo getSidebarDownload();
echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>


<h1>INL sTaTbOy! Archives</h1>
<p>
The sTaTbOy! Archives contain all sorts of information about and 
statistics on games, teams, and players of past and current
<a href="http://www.inl.org/">INL</a> seasons.
</p>

<p><h2><a href="archives/KCStatRecords/index.html">INL Hall of Twink and Rewl</a></h2>
Which players are the best of the best (or the worst of the worst)? 
Browse through the All-time Individual Records and other interesting 
statistics gathered since the Fall 1993 season. The current season 
statistics are not represented.

<p><h2>Pre-sTaTbOy! years</h2>
Information is available for the following seasons:
<ul>
	<li><a href="archives/1992_Spring/Rosterlist">Spring 1992</a> (roster list only)</li>
	<li><a href="archives/1992_Summer/Rosterlist">Summer 1992</a> (roster list only)</li>
	<li><a href="archives/1993_Spring/Rosterlist">Spring 1993</a> (roster list only)</li>
	<li><a href="archives/1993_Summer/Rosterlist">Summer 1993</a> (roster list only)</li>
</ul>

<p><h2>Andy Mueller years</h2>
<ul>
	<li><a href="archives/1993_Fall/index.html">Fall 1993</a>, won by 7 Samurai.</li>
	<li><a href="archives/1994_Winter/index.html">Winter 1993</a>, won by ??.</li>
	<li>Spring 1994 does not exist because Winter 1993 ran over.</li>
	<li><a href="archives/1994_Summer/index.html">Summer 1994</a>, won by The Zoo.</li>
	<li><a href="archives/1994_Fall/index.html">Fall 1994</a>, won by ??.</li>
</ul>

<p><h2>Greg Dearing year</h2>
<ul>
<li><a href="archives/1995_Spring/index.html">Spring 1995</a>, won by ??.</li>
<li><a href="archives/1995_Summer/index.html">Summer 1995</a>, won by Monster Maggots!!</li>
</ul>

<p><h2>Dave Ahn year</h2>
<ul>
<li><a href="archives/1995_Fall/index.html">Fall 1995</a>, won by The Babes.</li>
<li><a href="current/index.html">Spring 1996</a>, won by 99 Cent Value Deal.</li> 
</ul>

<p><h2>Jan Sandorf years</h2>
<ul>
	<li><a href="statboy-sum96/">Summer 1996</a>, won by Tool Time.</li>
	<li><a href="statboy-aut96/">Fall 1996</a>, won by Golden Bears.</li>
	<li><a href="statboy-spr97/">Spring 1997</a>, won by The Force.</li>
	<li><a href="statboy-sum97/">Summer 1997</a>, won by ??.</li>
	<li><a href="statboy-aut97/">Fall 1997</a>, won by Good Fellas (??).</li>
	<li><a href="statboy-spr98/">Spring 1998</a>, won by Good Fellas.</li>
	<li><a href="statboy-sum98/">Summer 1998</a>, won by Hooked on Ebonics.</li>
	<li><a href="statboy-aut98/">Fall 1998</a>, won by Team Fuck You.</li>
	<li><a href="statboy-spr99/">Spring 1999</a>, won by Symphony Of Destruction.</li>
	<li><a href="statboy-sum99/">Summer 1999</a>, won by Team w00bie.</li>
</ul>

<p><h2>History of the sTaTbOy! Archives</h2>
<p>
The information here, particularly the early history, may not be entirely
accurate. -Dave
</p>

<p>
The INL sTaTbOy!'s have been archiving statistics on games ever since the
conception of the INL in probably Fall 1991 or Spring 1992. Initially,
basic statistics, such as roster lists and team rankings/polls, were
recorded each season. I'm not even sure if the currently available
statistics (such as Passing Wind's PWstats) were in existence back then,
and it seems likely that the sTaTbOy! title and responsibilities were
not seen as a separate "entity" from the INL and INL Council.
</p>

<p>
In Fall 1993, Andy Mueller was officially granted the sTaTbOy! title, and
he expanded the archive to include PW statistics, game results, official
and unofficial rankings, and other information, such as season schedules
and team roster lists. The sTaTbOy! archives were probably accessible only
through FTP initially, since the World Wide Web was still in its infancy.
</p>

<p>
Around this time, King Crimson wrote and submitted KCstats package to
the sTaTbOy!. This KCstats package parsed the PWstat results of each game
and organized the statistics on a per-individual basis. I'm not sure if
this package was available to Andy, but it was available to his successor.
</p>

<p>
Greg Dearing (Porkchop) took over the prestigious title in Spring
1995. During his year, Greg invested a lot of time to make the
sTaTbOy! archives more useful and less time consuming. There were
modifications and additions to the existing polls, some of which
were based on ranking formulas discussed on the Usenet newsgroup
rec.games.netrek. The process of adding official game results to the
archives became almost completely automated. To make the statistics more
readily accessible in a more visually appealing manner, Greg placed
the archives on the World Wide Web. Due to time constraints, however,
he retired from his esteemed position in Fall 1995, thereby passing the
torch to me, Dave Ahn.
</p>

<p>
Since Sept 1995, I've expanded the sTaTbOy! archives to include game
summaries, recordings, and images. In Jan 1996, the INL Home Page and
the sTaTbOy! archives were merged and Jan Sandorf took over.
</p>

<?
echo "</div>\n";
echo getFooter();
?>
