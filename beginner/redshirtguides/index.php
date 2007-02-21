<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Correct the path of the "require 'nhp.php'" if necessary
// 2) Uncomment the Sidebars that are required for this page (at least 1)
// 3) The Header and Footer must remain untouched
// 4) add your file to the $siteparentlist array in nhp.php.
// 5) Add your page content

require '../../nhp.php';

doNhpHeader();

echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo "</div>\n\n<div id=\"content\">";

?>


<h1>Red Shirt's Guides to Netrek</h1>
<p>
Netrek is a 16-player video game played across the internet. It was
written for X and UNIX, and adapted for other platforms as well. It's
quite old now, and the graphics never were much to look at, but it's
still an interesting game because of the strategy and teamwork. As "Red
Shirt" I made Rear Admiral on bronco and played on a few championship
INL teams. But I haven't played at all for a year or two now.
</p>

<p>
For an introduction to netrek see the <a href="../../">netrek home page</a>.
</p>

<p>
Red Shirt's Guides to Netrek, most recent first:
<ul>
<li><a href="glossary.txt">Glossary</a></li>
<li><a href="advice.php">Strategic advice</a></li>
<li><a href="gameworkings.php">Game workings</a></li>
<li><a href="jihadgameplan.php">Buddhist Jihad game-plan</a></li>
<li><a href="clueoutlines.php">Outline of clues for beginners</a></li>
<li><a href="antibombinggameplan.php">Game-plan with anti-bombing</a></li>
<li><a href="proverbs.php">Proverbs</a></li>
<li><a href="tao.php">Tao of netrek</a></li>
</ul>
</p>

<p>
<a href="http://www.cs.cmu.edu/~hde/">Bert Enderton</a><br />(Red Shirt)
</p>


<?
echo "</div>\n";
echo getFooter();
?>
