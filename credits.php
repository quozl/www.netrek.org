<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require 'set_my_root.php';
require 'nhp.php';

doNhpHeader();

echo getSidebarHints();
// echo getSidebarNews();
echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";
?>


<p>
<h1>Website Credits</h1>
This website could not have been created without the help of many volunteers
and contributers. In particular We'd like to thank the following persons:
</p>

<p>
<h2>Dave Ahn</h2>
For providing so generously server hardware and bandwith on which so much of
all netrek resources run.
</p>


<br><p>
<h2>Netrek Authors and Contributors</h2>

Wall of Contributers:
<br>
<ul>
<li>	Dave Ahn (hosting, web stuff, sysadmin, TedTurner)
<li>	Karthik Arumugham (servergod, Vanilla, BRMH, DL)
<li>    Bill Balcerski (XP 2006 client, Vanilla)
<li>	Kevin Bernatz
<li>    Andrew K Bressen (website stuff)
<li>	James Cameron (servergod, sysadmin, Vanilla, COW, metaserver)
<li>	Terence Chay (doc)
<li>	Terence Chung
<li>	Lee Crawford
<li>	Greg Dearing (INL)
<li>	Jonathan Ellis (doc)
<li>	Bert Enderton (doc)
<li>	Chris Guthrie
<li>	Alec Habig
<li>	Tedd Hadley
<li>	Jonathan Hardwick
<li>	Erik Hietbrink (web stuff)
<li>	Tom Holub (INL,doc)
<li>	Vincent Louie (doc)
<li>	Andy McFadden (doc, Vanilla)
<li>	Eric Mehlhaff
<li>    Matt Mondor (servergod)
<li>	Adrian Moore (doc)
<li>	Jeff Nowakowski
<li>	J. Mark Noworolski
<li>	Kevin Oconnor (Vanilla)
<li>	Trent Piepho (paradise 2000)
<li>    Stas Pirogov (XP Mod client)
<li>	Jonathan Shekter
<li>	Steve Sheldon
<li>	Sam Shen (RSA)
<li>	Kurt Siegl (Vanilla, COW)
<li>	Kevin P. Smith
<li>	Scott Silvey
<li>	David Swasey (DL)
<li>	Bob Tanner (servergod, doc, Vanilla, hosting services)
<li>	Robert Temple (JTrek)
<li>	Nick Trown (servergod, doc, Vanilla, RSA)
<li>	Carlos Y. Villalpando (Vanilla, RSA, sysadmin)
<li>	Heiko Wengler
</ul>
<p>This list is by its nature incomplete; feel free to point out folks
who were inadvertantly left out. 
</p>
<p>
Notes:
<ul>
<li>[Vanilla] - Vanilla server source
<li>[COW] - COW client source
<li>[BRMH] - BRMH client source
<li>[INL] - International Netrek League, sTaTbOy!
<li>[DL] - Draft League
<li>[servergod] - Pickup or league server admin
<li>[JTrek] - JTrek client source
<li>[RSA] - RSA verification system
</ul>
  

<?
echo "</div>\n";
echo getFooter();
?>
