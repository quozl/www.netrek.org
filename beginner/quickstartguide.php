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

echo getSidebarDownload();
echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>

<center><h1>Quick Start Guide</h1></center>
<p>
</p>

<center><h3>Netrek is a pretty complicated game, so you probably should 
<a href="./newbie.php">read the newbieguide</a> 
for a step-by-step intro. <br>If you just can't wait, though,
here's the ultra-short version.</h3></center>
<br><p>
<center><img src="../img/gameshot-xp_2006_1_1-labeled-small.jpg" alt="xp 2006 screenshot with labels"></center>

<br><p>
<ol>
<li><a href="../download/">Download</a> and install a client.
<li>Run the client. It will show you a list of servers to try.
Click on one of the servers marked "Bronco". If no server has
any players on it, choose "netrek.pulsar-zone.net" (if it 
is listed), because it will have robots for you to play against.
<li>The server will ask for a login. Hit return to log in as "guest". 
<li>Choose a team and ship by putting the mouse over one of the
four races and pressing "c". If two races have players already,
choose the one with fewer players to help balance the teams. 
<li>You will now be dropped into the game in a new ship;
the screen will look something like the picture above, 
or 
<a href="../img/newbieguide/mactrek-talk-labeled.jpg">like this</a> 
if you are using a Mac.<br>
Left mouse button fires torpedos, middle fires phasers, 
right changes course. <br>0 thru 9 set speed to warp 0 thru warp 9. 
<br>Hitting "h" brings up a list of commands and what key does each comand
<li><a href="./messaging.php">Learn to read and send messages</a> 
This is really important. With the command list and being able to
ask questions and see what your team is talking about, you can learn
to play. Without reading and sending messages, you probably will not
figure out how to play, especially if you haven't read the 
<a href="./newbie.php">full Newbie Manual</a>
</ol>



<?
echo "</div>\n";
echo getFooter();
?>
