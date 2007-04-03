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
echo getSidebarNews();
echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";
?>

<center><h2>Sending Messages Inside the Game</h2></center>
<br><p>

<center><img src="../img/gameshot-xp_2006_1_1-labeled-small.jpg" alt="xp 2006 screenshot with labels"></center>
<p><p>
The picture above is pretty close to what a Windows or Linux user will see.
The <a href="../img/newbieguide/mactrek-talk-labeled.jpg">mac client looks a bit different</a>.

<p>

How to send Messages: Type 'm' or put your mouse cursor in the
outgoing message window.  On the Windows and Linux clients, it is 
the upper of the two thin one-line windows labeled "Typing" in the
above diagram. This will be right below either the galactic or
the tactical screen in most layouts. MacTrek has a text entry box
in the middle of the right side of the screen.
<br><br>
<center>
Type the letter for who you want to send to:

	<table border="0" bgcolor="#444444">
        <tr><td width="60"><b>A</b></td><td>Send to All (Everyone!)</td></tr>
        <tr bgcolor="#333333"><td><b>t</b></td><td>Send to your own team</td></tr>
	<tr><td><b>0</b>-<b>9</b>, <b>a</b>-<b>j</b></td><td>Message is sent to player of that number/letter</td></tr>
        <tr bgcolor="#333333"><td><b>F</b>,<b>K</b>,<b>R</b>,<b>O</b></td><td>Send to <b>F</b>ederation, <b>K</b>lingons, <b>R</b>omulans or <b>O</b>rions</td></tr>
	</table>
<center>
<br><p>
Type now your message followed by enter. Use the Esc key to cancel a message before sending it.

<br><p>
In most clients, you also can start a team message by putting your mouse
pointer in the team message window,<br> and an "All" message by putting the
pointer in the "All" window. 

<br><p>
In Windows clients, you can start a message to a player by putting your mouse
pointer over that player's entry in the playerlist window. 

<?
echo "</div>\n";
echo getFooter();
?>
