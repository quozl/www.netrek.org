
<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require '../../set_my_root.php';
require '../../nhp.php';

doNhpHeader();

echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>

<center>
<p><h2>Ships of Netrek</h2>

<p><p>

<a href="#sc">Scouts, your fast fragile friends</a><br>
<a href="#dd">Destroyers, the twink's favorite</a><br>
<a href="#ca">Cruisers, a happy medium</a><br>
<a href="#bb">Battleships, for those times when a Cruiser just isn't enough</a><br>
<a href="#as">Assault Ships, for making those unwelcome visits</a><br>
<a href="#sb">Starbases, one ship to rule them all</a><br>
<a href="#stats">Numerology, a table of info about all ship types</a>

</center>
<p>

Each section below contains a summary of some basic information about each ship
type, and links to some other guides written about that ship. <br>
This guide covers the standard ships used in all <a href="../../servers/variants.php">Netrek variants</a>; some Netrek flavors have additional ship types.
<br>
Note: Cruising speed is the fastest speed a ship can travel at without burning
fuel faster than it is making fuel.  
<p>

<a name="sc"></a>
<center><h2>The Scout</h2>

<p>
<table border="1" align="center"  >
<tr><td align="center">Key to<br>Press
    <td align="center">Type
    <td align="center">Max<br>Speed
    <td align="center">Cruise<br>Speed
    <td align="center">Max<br>Armies
    <td align="center">Shields
    <td align="center">Hull
    <td align="center">Fuel
</tr>
<tr><td align="center">S
    <td align="center">Scout (SC)
    <td align="center">12
    <td align="center">8
    <td align="center">2
    <td align="center">75
    <td align="center">75
    <td align="center">5000
</table><p>
</center>

<p>
These are fast fragile little things. They are very good for harassing, 
  and are most often used for bombing. Sometimes scouts drop armies too, but since they can only carry two, this is a limited role for them. They
are difficult to use to fight, especially for the inexperienced and against 
  the heavily armored opponents, although they can dodge faster than anything
else. 

<p>
Other docs available:
<ul>
<li><a href="playing_sc.txt">playing_sc.txt</a><br /></li>
<li><a href="sunscreamer_scout_lessons.txt">sunscreamer_scout_lessons.txt</a><br /></li>
<li><a href="yasuda-sc.html">Dean Yasuda's Scout notes</a><br /></li>
</ul>

<p>
<a name="dd"></a>

<center><h2>The Destroyer</h2>

<p>
<table border="1" align="center"  >
<tr><td align="center">Key to<br>Press
    <td align="center">Type
    <td align="center">Max<br>Speed
    <td align="center">Cruise<br>Speed
    <td align="center">Max<br>Armies
    <td align="center">Shields
    <td align="center">Hull
    <td align="center">Fuel
</tr>
<tr><td align="center">D
    <td align="center">Destroyer (DD)
    <td align="center">10
    <td align="center">7
    <td align="center">5
    <td align="center">85
    <td align="center">85
    <td align="center">7000
</table><p>
</center>

<p>
These are similar to scouts but they are a
little more tough and they have slightly more powerful weapons. 
They are deceptively attractive; a bit quicker to turn and a bit 
faster than cruiser. The destroyer is sometimes erroneously referred 
to as halfway between the scout and the cruiser. If this were so, 
it would have more powerful phasers and be able to go an extra half 
warp faster. For the unskilled player, they live up
to their nickname of "Ship of Lose". The destroyer is really a specialty 
ship, primarily used for taking planets by those who really know what 
they're doing.
<p>
Other docs available:
<ul>
<li><a href="playing_dd.txt">playing_dd.txt</a><br /></li>
<li><a href="playing_dd_alt.txt">playing_dd_alt.txt</a><br /></li>
<li><a href="philosophical_guide_to_dd.txt">philosophical_guide_to_dd.txt</a><br /></li>
</ul>
<p>
<a name="ca"></a>

<center><h2>The Cruiser</h2>

<p>
<table border="1" align="center"  >
<tr><td align="center">Key to<br>Press
    <td align="center">Type
    <td align="center">Max<br>Speed
    <td align="center">Cruise<br>Speed
    <td align="center">Max<br>Armies
    <td align="center">Shields
    <td align="center">Hull
    <td align="center">Fuel
</tr>
<tr><td align="center">C
    <td align="center">Cruiser (CA)
    <td align="center">9
    <td align="center">6
    <td align="center">10
    <td align="center">100
    <td align="center">100
    <td align="center">10,000
</table><p>
</center>

<p>
An all-purpose ship, and the default if you don't 
select another. This is the best ship to use for learning, and is
really the heart of the game. It's balanced; faster and more maneuverable 
than a battleship, but tougher than a destroyer and can carry more armies than
anything except an AS or a base. Most people will be in CA's most of the time.
<p>
Other docs available:
<ul>
<li><a href="playing_ca.txt">playing_ca.txt</a><br /></li>
<li><a href="ca_exercises_part1.txt">ca_exercises_part1.txt</a><br /></li>
<li><a href="ca_exercises_part2.txt">ca_exercises_part2.txt</a><br /></li>
</ul>
<p>

<a name="bb"></a>
<center><h2>The Battleship</h2>

<p>
<table border="1" align="center"  >
<tr><td align="center">Key to<br>Press
    <td align="center">Type
    <td align="center">Max<br>Speed
    <td align="center">Cruise<br>Speed
    <td align="center">Max<br>Armies
    <td align="center">Shields
    <td align="center">Hull
    <td align="center">Fuel
</tr>
<tr><td align="center">B
    <td align="center">Battleship (BB)
    <td align="center">8
    <td align="center">4
    <td align="center">6
    <td align="center">130
    <td align="center">130
    <td align="center">14,000
</table><p>
</center>

<p>
This ship is slow to accelerate and hard to
maneuver. However, it has the most firepower of any normal ship. It is
also very tough. Since it can take a fair amount of damage while still
dishing out a lot, it is very effective for offensive players but watch
your fuel, this ship uses a lot of it. The BB is not a bad ship for beginners, 
since it's harder to die in them. Dodging is tough for in a BB, so heavy use 
of tractoring, pressoring, and detting is important. 
<p>
Other docs available:
<ul>
<li><a href="playing_bb.txt">playing_bb.txt</a><br /></li>
<li><a href="zex_bb_advise.txt">zex_bb_advise.txt</a><br /></li>
</ul>
<p>

<a name="as"></a>
<center><h2>The Planetary Assault Ship</h2>

<p>
<table border="1" align="center"  >
<tr><td align="center">Key to<br>Press
    <td align="center">Type
    <td align="center">Max<br>Speed
    <td align="center">Cruise<br>Speed
    <td align="center">Max<br>Armies
    <td align="center">Shields
    <td align="center">Hull
    <td align="center">Fuel
</tr>
<tr><td align="center">A
    <td align="center">Assault Ship (AS)
    <td align="center">8
    <td align="center">8
    <td align="center">20
    <td align="center">80
    <td align="center">200
    <td align="center">6000
</table><p>
</center>

<p>
These ships are for bombing and capturing
planets (something that beginners shouldn't try until after mastering a few 
basics). They are slow and clumsy, but have tough hulls and can carry more 
than anything else. They can carry 3 armies per kill as opposed to the usual
two per kill, and can cloak without burning as much fuel as other ships.
AS' also bomb well;  the AS always bombs at least two, so if the planet 
is at 5 armies and you bomb it with an AS, it will always go to three 
armies or less! If the planet is at 6, however, you should first bomb 
it down to 5 with a normal ship and then have the AS bomb.
<p>
Other docs available:
<ul>
<li><a href="playing_as.txt">playing_as.txt</a><br /></li>
</ul>
<p>

<a name="sb"></a>
<center><h2>The Starbase</h2>

<p>
<table border="1" align="center"  >
<tr><td align="center">Key to<br>Press
    <td align="center">Type
    <td align="center">Max<br>Speed
    <td align="center">Cruise<br>Speed
    <td align="center">Max<br>Armies
    <td align="center">Shields
    <td align="center">Hull
    <td align="center">Fuel
</tr>
<tr><td align="center">O<br>(for Outpost)
    <td align="center">Starbase (SB)
    <td align="center">2
    <td align="center">2
    <td align="center">25
    <td align="center">500
    <td align="center">600
    <td align="center">60,000
</table><p>
</center>

<p>
These are very powerful and hard
  to destroy. Each team is allowed only one at a time, and if destroyed,
it will take about 20 minutes to build a new one. A team with less than 
four planets cannot build a new starbase. Other ships can dock at
the base to refuel, and on most servers, ships can "transwarp" 
in to a base, flying there at very high speed. On most servers, 
a rank of Commander is required to fly a base, although there are 
"base practice" servers to learn on that have fewer restrictions. 
It generally takes several players working together to destroy a base. 
Newbies who see a hostile base are best off running away from it. 
<p>
Other docs available:
<ul>
<li><a href="playing_sb.txt">playing_sb.txt</a><br /></li>
<li><a href="team_play_with_bases.txt">team_play_with_bases.txt</a><br /></li>
<li><a href="working_with_starbases.txt">working_with_starbases.txt</a><br /></li>
</ul>

<br><p>
<a name="stats"></a>
<center><h2>Ship Data for All Ship Types</h2></center>

<br><p>
<center>Extensive data from <a href="http://www.cc.utah.edu/~bj0038/netrek/ships.html">a page by Bret Jordan</a>.</center>
<br><p>

<CENTER><TABLE BORDER=1 >
<TR>
<TD>
<DT><B><FONT COLOR="#FFFF00">SHIPS</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><B><FONT COLOR="#FFFF00">SC</FONT></B></DT></CENTER>
</TD>

<TD>
<CENTER><DT><B><FONT COLOR="#FFFF00">DD</FONT></B></DT></CENTER>
</TD>

<TD>
<CENTER><DT><B><FONT COLOR="#FFFF00">CA</FONT></B></DT></CENTER>
</TD>

<TD>
<CENTER><DT><B><FONT COLOR="#FFFF00">GA</FONT></B></DT></CENTER>
</TD>

<TD>
<CENTER><DT><B><FONT COLOR="#FFFF00">BB</FONT></B></DT></CENTER>
</TD>

<TD>
<CENTER><DT><B><FONT COLOR="#FFFF00">AS</FONT></B></DT></CENTER>
</TD>

<TD>
<CENTER><DT><B><FONT COLOR="#FFFF00">SB</FONT></B></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Fuel</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">5000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">7000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">10000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">12000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">14000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">6000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">60000</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Hull Strength </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">75</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">85</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">120</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">130</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">200</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">600</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Shield Strength </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">75</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">85</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">140</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">130</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">80</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">500</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Shield Cost</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">6</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Max Speed </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">12</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">10</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">9</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">9</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">8</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">8</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Cruising Speed</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">8</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">7</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">6</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">6</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">4</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">8</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Combat Speed</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">6</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">5</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">4</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">5</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">4</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Armies per Kill</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">1.67</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">NA</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Max Armies</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">5</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">10</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">5</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">6</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">20</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">25</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Max Weapon Temp</font><font color="yellow"><a href="#tempnote"> [1]</a></FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">130</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Max Engine Temp</font><font color="yellow"><a href="#tempnote">  [1]</a></FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">120</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">120</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Torpedo Speed</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">16</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">14</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">12</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">16</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">12</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">16</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">14</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Torpedo Damage</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">25</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">30</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">40</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">40</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">40</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">30</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">30</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Average Torpedo Range</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">8480</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">11340</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">12120</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">12120</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">12960</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">11340</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Torpedo Weapon Temp</font><font color="yellow"><a href="#tempnote">  [1]</a></FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">7</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">11</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">18</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">26</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">17</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">20</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Phaser Damage</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">75</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">85</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">105</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">80</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">120</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Max Phaser Range</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">4500</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">5100</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">6000</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">6300</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">4800</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">7200</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">30 point phaser range </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2700</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3300</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">4200</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">4500</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">5400</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Phaser Weapon Temp</font><font color="yellow"><a href="#tempnote"> [1]</a></FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">52</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">59</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">70</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">105</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">56</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">96</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Plasma Speed</FONT></B></DT>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">15</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">15</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">15</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">15</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">15</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Plasma Weapon Temp</font><font color="yellow"><a href="#tempnote"> [1]</a></FONT></B></DT>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">142</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">292</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">307</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">292</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Tractor Strength </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2500</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3800</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3700</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2500</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">8000</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Tractor Range </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">.7</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">.9</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">1.0</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">1.0</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">1.2</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">.7</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">1.5</FONT></DT></CENTER>
</TD>
</TR>
</TABLE></CENTER>

<BR>
<BR>
<BR>

<CENTER><TABLE BORDER=1 >
<TR>
<TD>
<DT><B><FONT COLOR="#FFFF00">SHIPS</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><B><FONT COLOR="#FFFF00">SC</FONT></B></DT></CENTER>
</TD>

<TD>
<CENTER><DT><B><FONT COLOR="#FFFF00">DD</FONT></B></DT></CENTER>
</TD>

<TD>
<CENTER><DT><B><FONT COLOR="#FFFF00">CA</FONT></B></DT></CENTER>
</TD>

<TD>
<CENTER><DT><B><FONT COLOR="#FFFF00">GA</FONT></B></DT></CENTER>
</TD>

<TD>
<CENTER><DT><B><FONT COLOR="#FFFF00">BB</FONT></B></DT></CENTER>
</TD>

<TD>
<CENTER><DT><B><FONT COLOR="#FFFF00">AS</FONT></B></DT></CENTER>
</TD>

<TD>
<CENTER><DT><B><FONT COLOR="#FFFF00">SB</FONT></B></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Net fuel/sec at maxwarp, shields down, uncloaked
</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">-80</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">-80</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">-120</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">-200</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">-40</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">500</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Seconds cloaked at maxwarp before running
out of fuel </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">20</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">24.1</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">26.3</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">28</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">28.6</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">240</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Distance traveled doing that </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">48000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">48276</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">47368</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">44800</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">45714</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">96000</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Time to maximum safe engine temperature, at
max warp </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">25</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">25</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">33.3</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">50</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">60</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">NA</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Distance for this </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">60000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">50000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">60000</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">80000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">96000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">NA</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Number of torps in fuel tank </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">28</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">33</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">35</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">38</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">22</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">200</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Total damage from these torps </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">700</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">990</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">1400</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">1520</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">660</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">6000</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Number of phasers in fuel tank </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">9</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">11</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">14</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">13</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">10</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">62</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Total damage from these </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">675</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">935</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">1400</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">1365</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">800</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">7440</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">With empty fuel tank, damage delivered per
second, warp 0, shields down.</font><font color="yellow"><a href="#avedam"> [2]</a> </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">23</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">31</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">34</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">31</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">29</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">88</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Same but with shields up </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">20</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">27</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">30</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">28</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">24</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">80</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Repair/sec to shields (x2 if in repair mode)????</FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">1.6</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2.0</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2.2</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2.5</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2.4</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2.8</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">0-maxwarp acceleration time (in seconds) </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">6</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">5</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">6</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">10</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">8</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Distance to do this </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">7200</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">5000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">5400</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">8000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">6400</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">400</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Maxwarp-2 braking time (in seconds) </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3.7</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">2.7</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3.5</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3.3</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3.0</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">0</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Distance to do this </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">5185</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3200</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3850</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3333</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">3000</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">0</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Time from earth orbit to canopus orbit (dist
20615) </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">12.8</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">13.4</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">15.3</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">18.6</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">17.4</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">50.3</FONT></DT></CENTER>
</TD>
</TR>

<TR>
<TD>
<DT><B><FONT COLOR="#00FFFF">Time from earth orbit to romulus orbit (dist
60000) </FONT></B></DT>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">29.2</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">33.1</font> <br><a href="#ddheat">[Note 3]</a></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">37.2</FONT></DT></CENTER>
</TD>

<TD></TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">43.2</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">42.1</FONT></DT></CENTER>
</TD>

<TD>
<CENTER><DT><FONT COLOR="#FFFFFF">148.8</FONT></DT></CENTER>
</TD>
</TR>
</TABLE></CENTER>

<DT><BR>
</DT>

<P><FONT COLOR="#FF8000">Notes:</FONT></P>

<OL>
<P>
<LI><FONT COLOR="#FF8000"><a name="tempnote"></a>
 Weapon and engine temps are in tenths, relative
to what you see on the client's display. </FONT></P>

<LI><FONT COLOR="#FF8000"><a name="avedam"></a>
This is the average amount of damage you can
do by recharging fuel and and hitting whenever you can. For assault ships
and starbases the best average is with phasers (assuming point-blank range),
and for battleships it's with torps. The figures above are with the best
strategy for the ship.</FONT></P>

<LI><FONT COLOR="#FF8000"><a name="ddheat"></a>
There's some chance of overheating the engines
doing this in a destroyer. Add a little extra time (I'm not sure how much,
maybe a second) to avoid this. I've deducted 900 distance for orbit radius,
and factored in the acceleration and deceleration times. </FONT></P>

</OL>

<P><FONT COLOR="#FF8000">A &quot;tick&quot; is 1/10 of a second. Most of
the cost constants above are per tick.</FONT></P>

<P><FONT COLOR="#FF8000">Every tick, your ship's speed is added to etemp,
and you lose warpcost*speed in fuel. There's additional cost if you're
a SB moving with docked ships. </FONT></P>

<P><FONT COLOR="#FF8000">When etemp goes over maxegntemp, there's a 1/40
chance (per tick) of getting an overheat lasting 100 + random()%150 ticks.
<br>This is why I still have to wait a few seconds after my scout cools to
0 before I can move. Weapon temperature works the same way. <br>Detonating
heats weapons by 20 (remember it looks like 2 to the client) regardless
of whether there's anything to det. </FONT></P>

<P><FONT COLOR="#FF8000">Adding fuel (every tick): 
<ul>
<li>In orbit around friendly fuel planet, 8 * recharge. 
<li>If docked on a starbase with at least SBFUELMIN,
you take 12 * recharge from the SB. 
<li>Otherwise, 2 * recharge.</FONT>
</ul>

<P><FONT COLOR="#FF8000">Repairing (every tick): 
<ul>
<li>If in repair mode shields gain repair * 4, in thousandths. 
<li>If in orbit around friendly repair
planet another repair * 4. 
<li>If docked at a starbase, repair * 6
<li>Otherwise, repair * 2. 
<li>Hull damage works the same way, but repairs half as fast. </FONT></P>
</ul>


<P><FONT COLOR="#FF8000">Damage from a torp you det is multiplied by (2000
- dist)/1650. Which means if you det it at 1600 (the best you can do),
it will do 24.2% damage. This is independent of ship class. </FONT></P>

<P><FONT COLOR="#FF8000">Phaser range is proportional to phaserdamage.
Phaser damage is multiplied by (1 - dist / phrange), i.e. drops off linearly
</FONT></P>

<P><FONT COLOR="#FF8000">Ships blowing up: Starbase does 200, scouts 75,
others 100. If the ship is farther than 350 away, this damage is multiplied
(3000-dist)/2650. Ships that quit don't hurt. </FONT></P>

<p><FONT COLOR="#FF8000">GA in the above table refers to Galaxy Class ships,
which are not otherwise covered on this page, because they are a twinky 
Chaos and Sturgeon Netrek phenomena. There are also eight additional
ship types in Paradise netrek. </font>

<?
echo "</div>\n";
echo getFooter();
?>
