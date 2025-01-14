<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
//
//     Copyright (C) 2008 Johan Euphrosine <proppy@aminche.com>
//     Copyright (C) 2008 Loic Dachary <loic@dachary.org>
//
//     This program is free software: you can redistribute it and/or modify
//     it under the terms of the GNU General Public License as published by
//     the Free Software Foundation, either version 3 of the License, or
//     (at your option) any later version.
//
//     This program is distributed in the hope that it will be useful,
//     but WITHOUT ANY WARRANTY; without even the implied warranty of
//     MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//     GNU General Public License for more details.
//
//     You should have received a copy of the GNU General Public License
//     along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr" id="html">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Earthquake Poker</title>
	<link href="../css/jpoker.css" rel="stylesheet" type="text/css" />
	<script language="JavaScript" type="text/javascript" src="../jquery/jquery-1.2.6.js"></script>
	<script language="JavaScript" type="text/javascript" src="../jquery/ui/ui.core.js"></script>
	<script language="JavaScript" type="text/javascript" src="../jquery/ui/ui.draggable.js"></script>
	<script language="JavaScript" type="text/javascript" src="../jquery/ui/ui.resizable.js"></script>
	<script language="JavaScript" type="text/javascript" src="../jquery/ui/ui.dialog.js"></script>
	<script language="JavaScript" type="text/javascript" src="../jquery/ui/ui.slider.js"></script>
	<script language="JavaScript" type="text/javascript" src="../js/jquery.ajaxQueue.js"></script>
	<script language="JavaScript" type="text/javascript" src="../js/jquery.cookie.js"></script>
	<script language="JavaScript" type="text/javascript" src="../js/jquery.gettext.js"></script>
	<script language="JavaScript" type="text/javascript" src="../js/jquery.tablesorter.js"></script>
	<script language="JavaScript" type="text/javascript" src="../js/jquery.form.js"></script>
	<script language="JavaScript" type="text/javascript" src="../js/json2.js"></script>
	<script language="JavaScript" type="text/javascript" src="../js/jquery.jpoker.js"></script>
	<script language="JavaScript" type="text/javascript" src="../js/mockup.js"></script>
        <script language="JavaScript" type="text/javascript">
	$.jpoker.verbose = 2;
	$(document).ready(function() {
		$('#main').jpoker('sitngoTourneyList', '/POKER_REST', {link_pattern: 'tourneydetails.php?tourney_serial={tourney_serial}'});
	});
        </script>
</head>
<body>
	<div id="main"></div>
</body>
</html>
