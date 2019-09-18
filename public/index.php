<?php

require '../vendor/autoload.php';

use App\ReportGenerator;

$generateRecordPDF = new ReportGenerator();
$generateRecordPDF->init();