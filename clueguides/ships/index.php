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


<h1>Ship Types</h1>
<p>
<blink>This section is still under construction! Request to all old farths:
open up your treasue troves and send in some pearls of wisdom.<br />
Website writers wanted too...</blink>
</p>


<p>
<h2>SC - Scout</h2>
<ul>
<li><a href="playing_sc.txt">playing_sc.txt</a><br /></li>
<li><a href="sunscreamer_scout_lessons.txt">sunscreamer_scout_lessons.txt</a><br /></li>
</ul>
</p>

<p>
<h2>DD - Destroyer</h2>
<ul>
<li><a href="playing_dd.txt">playing_dd.txt</a><br /></li>
<li><a href="playing_dd_alt.txt">playing_dd_alt.txt</a><br /></li>
<li><a href="philosophical_guide_to_dd.txt">philosophical_guide_to_dd.txt</a><br /></li>
</ul>
</p>

<p>
<h2>CA - Cruiser</h2>
<ul>
<li><a href="playing_ca.txt">playing_ca.txt</a><br /></li>
<li><a href="ca_exercises_part1.txt">ca_exercises_part1.txt</a><br /></li>
<li><a href="ca_exercises_part2.txt">ca_exercises_part2.txt</a><br /></li>
</ul>
</p>

<p>
<h2>BB - Battle Ship</h2>
<ul>
<li><a href="playing_bb.txt">playing_bb.txt</a><br /></li>
<li><a href="zex_bb_advise.txt">zex_bb_advise.txt</a><br /></li>
</ul>
</p>

<p>
<h2>AS - Assault Ship</h2>
<ul>
<li><a href="playing_as.txt">playing_as.txt</a><br /></li>
</ul>
</p>

<p>
<h2>SB - Star Base</h2>
<ul>
<li><a href="playing_sb.txt">playing_sb.txt</a><br /></li>
<li><a href="team_play_with_bases.txt">team_play_with_bases.txt</a><br /></li>
<li><a href="working_with_starbases.txt">working_with_starbases.txt</a><br /></li>

</ul>
</p>

<?
echo "</div>\n";
echo getFooter();
?>
