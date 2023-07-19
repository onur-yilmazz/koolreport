<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/SaleReport.php';
$report = new SaleReport;
$report->run()->render();