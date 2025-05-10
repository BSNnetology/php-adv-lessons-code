<?php
    declare(strict_types=1);
    require_once 'autoload.php';

    use App\Report as AppReport;
    use Mobile\Report as MobileReport;

    echo 'App.1: ' . AppReport::getReportNameByType(1) . PHP_EOL;
    echo 'Mob.0: ' . MobileReport::getReportNameByType(0) . PHP_EOL;
