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

<h1>Netrek Servers</h1>

<p><h2>Server Types</h2>
Netrek has spawned many variants, most of which can be played using the
standard clients.  On the <a href="http://www.metaserver.netrek.org/">Metaserver
list</a>, the last character on the right denotes the server type.

<p>
This is a listing of currently active variants. <b>Bronco</b> is the standard netrek variant.
The rest is vaguely ordered by popularity.
</p>

<ul>
<li><b>Bronco</b> (Metaserver code B)<br>
The most common and "standard" form of netrek. Also known as Vanilla or Guzzler code.
These servers are based on the
original code, Terence Chang's bronco code, or Nick Trown's New Vanilla
release.  They are not all identical but they have minimal modifications.
</li>

<li><b>Hockey</b> (Metaserver code H)<br>
Netrek hockey mode.  The most fun you can have on ice 
without actually being on it.  Teams of players try to shoot (pressor)
the Puck (a robot) into the other teams' goal.</li>

<li><b>Paradise</b> (Metaserver code P)<br>
These servers use the NetrekII/Paradise source.  
Paradise servers can be configured to many settings, including simulating a 
regular Vanilla server.  The source code release includes an expanded galaxy, 
impluse/warp differentiation, suns, extra ships, and more.  You need to
use the Paradise client to play on most Paradise servers.</li>

<li><b>Base Practice</b> (Metaserver code unknown)<br>
These are servers designed to allow people to practice playing starbases.
They feature programmable robot oggers.</li>

<li><b>Chaos</b> (Metaserver code C)<br>
These servers include modifications designed to 
make the game chaotic, including galaxy-class ships, free plasmas, unlimited
starbases, pass-through walls, and more.</li>

<li><b>Dogfight</b> (Metaserver code F)<br>
These are servers designed with dogfighting 
tournaments in mind.  The code is still rather buggy, but getting better.</li>
</ul>

<p><h2>INL Servers</h2>
These are actually ordinairy Bronco type servers with some special extensions
to support timed games. These servers are used for official matches between
teams in the various <a href="../leagues/">Netrek Leagues</a>. Two teams play
each other for 90 or 60 minutes, in which time they must gain a decisive
advantage or an all-out genocide in order to be victorious.

<ul>
<li><a href="inl_server_guide.php">Users Guide to the INL Server</a><br>
To help people who aren't familiar with playing games on INL servers 
(like, people just entering the draft league :) Andrew Markiel (Grey Elf)
wrote up a document explaining how timed games work and summarizing the
commands.
</li>
</ul>

<p><h2>Metaservers</h2>
A Metaserver is a server about servers.  You can find out information
about active games, server types, current players, and more.  There are
two ways to use metaservers; most clients connect per default to the metaserver
at startup or support a -m option that will call up a metaserver and give you a
list of active games to click on.<br>
The other is to use telnet to the metaserver port to get the full listing.
Port 3521 is probably the most useful.  There is also a WWW interface at port
1080.

<p>
The default metaserver on older clients is usually csuchico, which has closed;
to change this, put the line:
</p>
<pre>metaserver: metaserver.netrek.org</pre>
in your netrekrc.

<table border="1" cellpadding="5">
<tr>
	<th>Server</th>
	<th>IP address</th>
	<th>Ports</th>
	<th>Comments</th>
</tr><tr>
	<td><a href="http://metaserver.netrek.org:1080">metaserver.netrek.org</a></td>
	<td>Varies</td>
	<td>3520-6</td>
	<td>An alias for all metaservers</td>
</tr><tr>
	<td><a href="http://metaserver.us.netrek.org:1080">metaserver.us.netrek.org</a></td>
	<td>206.10.253.3</td>
	<td>3520-6</td>
	<td>Primary United States Metaserver</td>
</tr><tr>
	<td><a href="http://metaserver2.us.netrek.org:1080">metaserver2.us.netrek.org</a></td>
	<td>128.149.33.188</td>
	<td>3520-6</td><td>Secondary United States Metaserver</td>
</tr><tr>
	<td><a href="http://metaserver.eu.netrek.org:1080">metaserver.eu.netrek.org</a></td>
	<td>192.31.231.153</td>
	<td>3520-6</td>
	<td>European Metaserver</td>
</tr></table>

<p><h2>Servers with Home Pages</h2>
<ul>
	<li><a href="http://nl.netrek.org/">nl.netrek.org</a><br>
	Special features: Ping-pong plasma's, visible tractors/pressors,
	plasma's come free at zero kills and T-mode starts at 3 vs. 3.</li>

	<li><a href="http://www.ecst.csuchico.edu/%7Enetrek/">Wormhole</a><br>
	Once the greatest server of em all! Now unfortunately a defunct
	server)</li>
</ul>

<p><h2><a href="../developer/">Server Setup and Development</a></h2>
If you are interested in running your own server or helping in server
development, you can follow <a href="../developer/">this link</a> for
additional information. The only actively maintained Netrek server is
the Vanilla server.


<?
echo "</div>\n";
echo getFooter();
?>
