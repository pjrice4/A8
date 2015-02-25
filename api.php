<?php
if(isset($_REQUEST['cat'])) {
	switch($_REQUEST['cat']) {
		case "length":
			include('HikesByLength.json');
			break;
		default:
			include('HikesByElevation.json');
	}
} else {
	echo "Incorrect parameter sent";
}