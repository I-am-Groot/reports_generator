<?php

require '../vendor/autoload.php';

use App\ReportGenerator;
use App\ReportMailer;


if (! isset($_GET['action'])) {
	echo json_encode([
		'no action specified',
	]);

	die();
}

if ($_GET['action'] == 'generate-record') {
	$generateRecordPDF = new ReportGenerator();
	$generateRecordPDF->init();
}
elseif ($_GET['action'] == 'dispatch-record') {
	$sendReport = new ReportMailer();
	$sendReport->commenceDispatch();
}