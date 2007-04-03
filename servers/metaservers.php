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

<p><h2>Metaservers</h2>

<br><p>"Metaservers" are used so that clients can find out what servers 
are out there, what kind of game (form the list above) they have running, 
and how many folks are playing. 
Your client will connect to one or more of them and show you a list of what's
out there, something like<br> 
<center><img src="../img/cow-metaserver2.jpg" alt="metaserver screenshot"></center>

<br><p><b>Status:</b>
Note that when a server is properly configured, it reports only live
human players to the Metaserver. Some servers have robot players as
well, to allow for practice, or games when there 
aren't enough people around to play. These won't show up on the Metaserver; 
see the <a href="./machines.php">specific server machines</a> for info on
which servers usually have bots, or just log on and see.  

<br><p><b>Type:</b>
This describes which type of Netrek the server is hosting; <a href="./variants.php">there's a list of types here.</a>

<br><p><b>Age:</b> 
The "Age" column simply notes how long it has been since the Metaserver
has heard from a server. If the interval is long, that server may be
broken.  


<br><p>
<h2>Multiple Metaservers</h2>

<br>
To make sure things are always working, there is more than one metaserver. 
The configuration file (netrekrc) of a client will tell it which metaserver
to use. Some clients are smart enough to look at more than one metaserver,
but most are not (yet). 
<br><p>
Right now, there are two metaservers:
<ul>
<li><a
href="http://metaserver.us.netrek.org:1080/">http://metaserver.us.netrek.org:1080/</a>
<li><a
href="http://metaserver2.us.netrek.org:1080/">http://metaserver2.us.netrek.org:1080/</a>.
</ul>
<br>
If you can't get your client to show you the metaserver list, you could
try changing to the other metaserver by changing 
your netrekrc configuration file.
<br>
The two metaservers have slightly different policies about what games they 
list. The first metaserver will only list a few machines at first, until 
some of them have games going. Then it will list the rest of the machines
it knows about. Metaserver2 just lists everything it knows about all the time. 

<br><p><h3>Metaserver by Web</h3>
If you want to see the metaserver status without firing up a client,
they do, as can be seen above, each have a web address. If you connect
to this, you'll see something like:

<br><br>
<center><table border=2 cellpadding=6><tr><td><h4>Server Host</h4></td><td><h4>Port</h4></td><td><h4>Minutes Ago</h4></td><td><h4>Status</h4></td><td><h4>Flags</h4></td></tr>

<tr><td>hockey.tamu.edu</td><td>2592</td>
<td>2</td><td>Nobody playing</td><td>      H</td>

</tr>

<tr><td>netrek.hwy.com.au</td><td>2592</td>
<td>169</td><td>Nobody playing</td><td>  R   B</td>
</tr>

<tr><td>netrek.pulsar-zone.net</td><td>2592</td>
<td>1879</td><td>Nobody playing</td><td>T R   B</td>

</tr>

<tr><td>netrek.hwy.com.au</td><td>2592</td>
<td>99</td><td>Nobody playing</td><td>  R   B</td>
</tr>

<tr><td>continuum.us.netrek.org</td><td>2592</td>
<td>0</td><td>OPEN: 1 player</td><td>  R   B</td>

</tr>

<tr><td>netrek.warped.us</td><td>2592</td>
<td>0</td><td>OPEN: 1 player</td><td>T R   S</td>
</tr>

<tr><td>pickled.netrek.org</td><td>2592</td>
<td>1</td><td>Wait queue: 2</td><td>T R   B</td>

</tr>
</table></center>

<br><br><p>The flags in the above table indicate what kind of game is being played
as well as a few other pieces of server information.

Here's a key:
<table>
<tr><th>Flag<th>Means    <th>&nbsp;&nbsp;&nbsp;              <th>Flag<th>Means
<tr><td>B<td>Bronco      <td><td>R<td>Server requires "Blessed" clients
<tr><td>C<td>Chaos       <td> <td>D<td>Server is Dead (not responding)
<tr><td>P<td>Paradise    <td> <td>T<td>Server has had T-mode at some point since the last Metaserver reboot
<tr><td>H<td>Hockey
<tr><td>O<td>Other, including Base Practice
<tr><td>F<td>Dogfight (obsolete)
</table>

<br><p>
If you are totally retro, the same information is displayed by 
telnet'ing to the server's port 3521, and extended info on port 3522. 




<?
echo "</div>\n";
echo getFooter();
?>
