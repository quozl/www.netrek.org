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

<h2>Getting Started</h2>
<ul>
	<li>
	<a href="../beginner/newbie.php">Netrek Newbie Manual</a><br />
	A guide for the Newbie Netrek player. 
	</li>

	<li>
	<a href="http://cha.rlie.nl/dfmanual/">Charlie's Beginner's Guide to Dogfighting</a><br />
	A very good readable guide on the do's and dont's of dogfighting.
	</li>

       <li>
       <a href="../beginner/newbie-part2.php">Newbie Manual Appendices</a><br>
       The bits that were cut from the Newbie Manual to make it shorter. 

</ul>
<h2>Quick References</h2>
<ul>
        <li>
        <a href="../cached-sites/www.outfitters.com/~peter/gamer/netrekcm.htm">Keymap Quick Ref</a>. Default keymap for most clients. (<a href="http://outfitters.com/~peter/gamer/netrekcm.htm">Author's site</a>)

        <li>
        <a href="../beginner/macros.php#rcdtable">Table of Distress Calls</a>
        <br>From the <a href="../beginner/macros.php">Message and Macros Guide</a>

        <li>
        <a href="./ships/">Ships of Netrek</a><br>
        A brief overview of all the standard ship types, and links to specific
        clue files for each ship type. 

        <li>
	<a href="../glossary.php">Netrek Glossary</a><br />
	This is a list of all the terms and abbreviations used in the game of Netrek.
	Very helpful if you try to find out what everyone is sending to the team message board!</li>


</ul>

<h2>Getting Clued</h2>
Want to get clued? Here are some great resources on how
to get better at Netrek game play. <br>Also, don't forget about 
observer mode; watching can be a good way to pick up clue. 

<ul>
<!--	<li>
	<a href="http://www.netrek.org/tychay/">Netrek Clue
	Archive</a><br />
	Terry Chay and Vincent Louie began overhauling the
	JCH archives (see below) to provide one location for the collection of
	hints and help files covering just about every aspect of Netrek play.
	Guides written by veteran players can help you improve your skills and
	clue level. This is a great starting point for beginners and
	intermediate players. Note: this site is still under construction.
	</li>-->


	<li>
	<a href="./dantesdogfightguide.php">Dantes Dogfight Guide</a><br />
	Basics, Mechanics and strategy are all covered.
	</li>

	<li>
	<a href="./kiaclueguide.php">KIA's Clue Guide</a><br />
	Valuable advice from Jan Sandorf, one of Europe's best players. A good
	read for the novice player, covering all basic situations in Netrek; 
        Ogging, Taking, Basing, Bombing, LPS and more are concisely discussed.
	</li>

        <li><a href="./greyelf.php">Grey Elf's Guide to Planet Taking</a><br>
        is a very extensive guide. (It's around 350 lines of text, 20k).

        <li><a href="./hammond-dfguide.php">Lance's Dogfight Guide</a><br>
        formerly the standard dogfighting intro, still has a lot to offer,
        assumes little game knowledge.

	<li>
	<a href="../cinema2/takefile/">The
	Netrek Take File</a> (mirror <a
	href="http://www.shadowhunter.org/takefile/">here</a>)<br />
	This site has a number of animated GIFs that show how to improve one's play.
	Quoted from the page, &quot;This page is provided for all those people
	who want some examples of Netrek play to discuss. Whether the plays are
	largely good or bad is irrelevant. The examples are not presented as
	templates to follow during play, instead they may be considered by
	players wishing to look in more detail at the way team strategies work
	(or don't) in the heat of battle. Alternatively this may be a useful
	resource for getting on a learning curve.&quot;
	</li>

	<li>
        <a href="../beginner/macros.php">Message and Macros Guide</a><br>
        This guide explains more than you ever wanted to know about
        distress calls and message macros and how to customize them.
	</li>

	<li>
	Red Shirt/Bert Enderton wrote a nice <a href="./redshirtguides/">series of clue guides</a>. 
        Includes:
        <br><br><ul>
        <li>A (slightly out of date) <a href="./redshirtguides/clueoutlines.php">outline list of Clues for Beginners</a>
        <li>Solid <a href="./redshirtguides/advice.php">Strategic advice</a>
        <li>Two "game plans" used to prepare for league games; one is a <a href="./redshirtguides/jihadgameplan.php">game plan for the "Buddhist Jihad" team</a>, <br>the other is simply called <a href="./redshirtguides/antibombinggameplan.php">Game-plan with Anti-bombing</a>
        </ul>
        There's also a glossary, a fortune cookie quotes file, a note 
        entitled "Dao of Netrek" which is more about life than Netrek, 
        and a document on game mechanics.
	</li>


	<li>
	<a href="http://www.shadowhunter.org/clue/">Get a Clue!
	Archive</a><br />
	Quote: &quot;Clue is the word that Netrek players
	use to indicate how much understanding one has of the game. Players
	that know what to do in different situations are considered cluefull,
	players that fool around are often called clueless twinks. These pages
	contain articles and notes that might help you to raise your
	clue-level. &quot;
	</li>

	<li>
	<a href="http://www.shadowhunter.org/jch/README.html">JCH's
	Netrek Information Archive</a><br />
	This archive, although a bit old (1996 and earlier), 
        contains a lot of info on Netrek.
	</li>

	<li>
	<a href="http://www.continuum.us.netrek.org/">Netrek Continuum</a><br />
	 Big collection of netrek stuff, much of it derived from the JCH materials. 
	</li>

       <li>And More! 
       <a href="./jthirsk-netrek_strategy.html">mifiq's Team Strategy Guide</a>,
       <a href="./ogging-101.html">Ogging 101</a>, 
       </li>
       </ul>

<h2>Client Documentation</h2>
       <ul>
       <li><a name="cowdocs"</a>Documentation for the COW client<br>
       <ul>
       <li><a href="cowdocs/cow1998.html">The COW Manual</a> <br>
       Note that the Windows clients are based off of the COW client, so this
       manual, while slightly dated, may be the most detailed configuration 
       guide available for Windows players. 
       <li><a href="cowdocs/COW.DOC.txt">COW.DOC.txt</a>, some additional documentation notes. 
       <li>older default <a href="cowdocs/XTREKRC">XTREKRC</a> configuration file
       <li>older fully annotated example <a href="cowdocs/XTREKRC.example">XTREKRC</a> configuration file
       <li>READMEs for Versions 
<a href="cowdocs/README.1.01">1.02</a>
<a href="cowdocs/README.1.03">1.03</a> 
<a href="cowdocs/README.2.00">2.00</a>
<a href="cowdocs/README.2.02">2.02</a>
<a href="cowdocs/README.3.00">3.00</a>
<a href="cowdocs/README.html">3.01</a>
       <li><a href="cowdocs/CHANGES">CHANGES</a> through version 2.99, <a href="cowdocs/ChangeLog">ChangeLog</a> through version 3.2
       </ul>
       </li>
       </ul>



<?
echo "</div>\n";
echo getFooter();
?>
