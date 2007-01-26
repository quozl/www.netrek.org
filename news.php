<?php
// This is the WEB PAGE TEMPLATE FILE
//
// Rules:
// 1) Each file should set $pagetitle
// 2) Uncomment the Sidebars that are required for this page
// 3) The Header, Menu and Footer must remain untouched
// 4) Add your page content

require 'nhp.php';

doNhpHeader();

echo getSidebarHints();
// echo getSidebarNews();
// echo getSidebarColofon();

echo '</div><div id="content">';

echo "<h1>News Archive</h1>";

$months = array("01" => "Jan", 
		"02" => "Feb",
		"03" => "Mar",
		"04" => "Apr",
		"05" => "May",
		"06" => "Jun",
		"07" => "Jul",
		"08" => "Aug",
		"09" => "Sep",
		"10" => "Oct",
		"11" => "Nov",
		"12" => "Dec" );

$fd = fopen (NPH_LOC_FILEROOT."news.dat", "r");
while (!feof ($fd))
{
	$buffer = trim(fgets($fd, 4096));

	// Ignore comments and empty lines
	if (substr($buffer, 0, 1) != "#" && substr($buffer, 0, 1) != "")
	{
		$lines[] = $buffer;
	}
}
fclose ($fd);

$var = "\n";
$previousdatecode = "";

foreach ($lines as $entry)
{
	$datecode = substr($entry, 0, 8);
	$datestr = substr($entry, 6, 2)."-".$months[substr($entry, 4, 2)]."-".substr($entry, 0, 4);
	$msg = ltrim(substr($entry, 8));
	// dont allow identical id's
	if ($datecode == $previousdatecode)
	{
		$id = "";
	}
	else
	{
		$id = " id=\"$datecode\"";
	}
	$previousdatecode = $datecode;
	$var = $var."<p><h2$id>$datestr</h2>\n$msg</p>\n\n";
}

echo $var;

echo '</div>';
echo getFooter();
?>
