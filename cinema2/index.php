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

<h1>Netrek Cinema</h1>
<p>
The Netrek Cinema contains collections of Netrek game snapshots and
recordings submitted by various players over the years. If you would
like to submit your own recordings, please <a
href="mailto:Shadow.Hunter@netrek.org">let me know</a>.
</p>

<p><h2><a href="takefile/">The Netrek Take File</a></h2>
Adrian Moore submitted his Netrek Take File page to the
Netrek cinema. The Take Files contain a lot of cool animated GIFs that
show how to play the game. Check out <a href="takefile/">the Take File</a>
or the <a href="http://www.shadowhunter.org/takefile/">mirror</a> in
Europe.

<p><h2>Java Netrek</h2>
<p>
Theo Tonchev wrote a <a href="http://www.shadowhunter.org/javaviewer/">Java
client</a> to allow observing, recording, and playback of Netrek games.
A new Java client, called JTrek, was written
by Robert Temple, possibly based on Theo's original work. Take a look
at the <a href="http://ftp.netrek.org/pub/netrek/clients/jtrek/">JTrek
client</a>.
</p>

<p><h2>*SMACK!* Pack Recordings</h2>
These MPEGs were created by Steve Samorodin
(Sven, da Swedish Chef) during the Spring 1995 season. Descriptions
quoted from *SMACK!* Pack's homepage.

<ul>
	<li>
	Zephlin as a <a href="mpeg/Zephlin-1.mpg">rewly
	base defender</a> (57k MPEG (496x496)). Here you can see Zephlin
	making super-clue move eliminating 4 of the opposition with his
	selfless sacrifice. Also try viewing the <a
	href="mpeg/Zephlin-2.mpg">HUGE VERSION</a> (520k MPEG
	(1008x540)) the full tactical, galactic and message window to get the
	big picture on just how major a save this was.
	</li>

	<li>
	Zephlin's <a href="mpeg/Zephlin-3.mpg">rewly
	take</a> (350K MPEG (496x496)), under heavy pressure from the
	opposition he prevails.
	</li>
</ul>
Don't you love the melodrama!

<p><h2>Mojo Riser's Personal Doosh Snapshots</h2>
These snapshots were taken by Tom Holub (Mojo Riser)
using a beta 256 color Paradise client. He has kindly made them
available to the Cinema for your entertainment. Just watch him rewl
over (and get rewled by? :) his enemies...
<ul>
	<li><a href="jpg/tom1.jpg">Ogging base, teammate just blew.</a></li>
	<li><a href="jpg/tom2.jpg">Ogging base, SMACK denied!</a></li>
	<li><a href="jpg/tom3.jpg">Playing base, 2 oggers CRUSHED.</a></li>
	<li><a href="jpg/tom4.jpg">Playing base, lots of screen action.</a></li>
	<li><a href="jpg/tom5.jpg">Playing base, PHASER SHOT TO THE HEAD.</a></li>
	<li><a href="jpg/tom6.jpg">Base-on-base, outnumbered...</a></li>
	<li><a href="jpg/tom7.jpg">...and the result.</a></li>
	<li><a href="jpg/tom8.jpg">Revenge ogg.</a></li>
	<li><a href="jpg/tom9.jpg">Last Rites.</a></li>
	<li><a href="jpg/tom10.jpg">AGRI take, ogger uncloaking.</a></li>
	<li><a href="jpg/tom11.jpg">BUTT-TORP!</a></li>
	<li><a href="jpg/tom12.jpg">Ogger? What ogger?</a></li>
</ul>

<p><h2>Paradise Client Game Recordings</h2>
Woah!!! Check out some serious action! You can find
partial or entire game session recordings below.<br>

These movies use the Paradise client's &quot;Record
Game&quot; feature, so you'll need a <a
href="http://paradise.netrek.org/">Paradise client</a>
to view the game. Simply download the client for your architecture,
download the game recording (ending with a &quot;.prec&quot;), then
watch the show by invoking the client with the &quot;-F &quot; flag,
e.g. &quot;paradise -F mygame.prec&quot;.
<ul>
	<li>
	Zephlin's Collection - The following recordings have
	rather long sessions of pre-game warm-ups included, so you may wish to
	fast-forward over them. I'll edit them out eventually. I really sucked
	in a few of these games...
	<ul>
		<li>
		<a href="prec/TT_vs_World.prec.gz">Team
		Tuber lost to World - Oct 31, 1995</a>
		</li>

		<li>
		<a href="prec/GB_vs_World.prec.gz">Golden
		Bears lost to World - Nov 3, 1995</a>
		</li>

		<li>
		<a href="prec/TB_vs_R.prec.gz">The Babes
		defeated Rookies - Nov 5, 1995</a>
		</li>

		<li>
		<a href="prec/TB_vs_LU.prec.gz">The Babes
		defeated LaggU - Nov 7, 1995</a>
		</li>

	</ul>
	</li>

	<li>
	Fuzzy Bunny's (John Salomon) Netrek II: Paradise
	recordings
	<ul>
		<li>
		<a href="prec/fuzzy_ptwink1.prec.gz">Paradise Game 1</a>
		</li>

		<li>
		<a href="prec/fuzzy_ptwink2.prec.gz">Paradise
		Game 2</a>
		</li>

		<li>
		<a href="prec/fuzzy_ptwink3.prec.gz">Paradise
		Game 3</a>
		</li>

	</ul>
	</li>
</ul>

<p><h2>XSG (Server Tool) Recordings</h2>
The following game recordings were made with XSG. If you
are not familiar with XSG, please do not download these files. Each of
these files range in size from 12MB to 40MB.
<ul>
	<li>
	<a href="xsg/TT_vs_TB.xsg.Z">Fall 1995
	Playoffs: The Babes defeated Team Tuber</a> -
	Partial Recording (first 30 or so minutes)
	</li>

	<li>
	<a href="xsg/DFWI.xsg.Z">Fall 1995 Playoffs:
	LaggU defeated DFWI</a> - Complete Recording
	</li>
</ul>

<?
echo "</div>\n";
echo getFooter();
?>
