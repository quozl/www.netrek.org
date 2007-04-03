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



<h2>Today's Top Servers</h2>

<br><p>
Many Servers have come and gone, and it doesn't take much to put one online, so for the latest list of what's out there,
fire up a client and see for yourself, 
or go look at a <a href="./metaservers.php">Metaserver</a>.
This list is mainly to mention a few details about the servers that you 
might not otherwise know, like which ones have robot players.

<br><p>
<center>
<table>
<tr><th>Server<th>Robots?&nbsp;&nbsp;<th>Type<th>RSS<th>Notes
<tr>
<tr><td><a href="http://pickled.netrek.org/">pickled.netrek.org</a>
    <td>Nope
    <td>Bronco Pick-up
    <td>
    <td>
<tr>
<tr><td><a href="http://continuum.us.netrek.org">continuum.us.netrek.org</a>
    <td>Dogfight
    <td>Bronco Pick-up
    <td><a href="http://continuum.us.netrek.org/blog/index.rss">Yes</a>
    <td>If you are the only player on the server, you can hit <font color="yellow">*</font> multiple 
        times to bring
        in practice robots to dogfight with, but they don't take
        planets or fight each other.
<tr>
<tr><td><a href="http://netrek.hwy.com.au">netrek.hwy.com.au</a>
    <td>
    <td>Bronco Pick-up
    <td>
    <td>Australian, but you don't have to be local to play there. 
<tr>
<tr><td><a href="http://netrek.pulsar-zone.net">netrek.pulsar-zone.net</a>
    <td>Yes
    <td>Bronco Pick-up
    <td>
    <td>Sundays are Twinky GA day.<br>
        SB rank is Lieutenent, so you can practice basing.<br> 
        Server has no continuousTorps; one torp per mouse click.
<tr>
<tr><td><a href="http://base-practice.psychosis.net">base-practice.psychosis.net</a>
    <td>
    <td>Base practice
    <td>
    <td>
<tr>
<tr><td><a href="http://netrek.warped.us">netrek.warped.us</a>
    <td>Yes
    <td>Sturgeon Pick-up&nbsp;&nbsp;
    <td><a href="http://netrek.warped.us/blog/index.rss">Yes</a>
    <td>

<tr><td>Home and Away.clue.netrek.org&nbsp;&nbsp;
    <td>No
    <td>INL
    <td>
    <td>Both go to same machine, they just go to the two different teams.<br>
    The server is only online when there is a game on. 
    If the game is between set teams, you should automatically connect as 
    an observer. 
<tr>
<tr><td><a href="http://hockey.tamu.edu">hockey.tamu.edu</a>
    <td>No
    <td>Hockey
    <td>
    <td>
</table>
</center>

<br><p>
The RSS feed for a server lists server events such as Wins (genos), Starbases destroyed, etc. 
<br><p>
Most servers will have administrator contact information on their MOTD screens,
visible when a client first logs on. Some will have that and other useful
information on their web pages as linked to above. Others just redirect to 
myspace.com. Really. 
<br><p>
The <a href="../about/">Netrek History</a> section has some information on
past servers and their configurations. 

<?
echo "</div>\n";
echo getFooter();
?>