<?php
    namespace Mobile;

    // ===================================
    class Report
    {
        public const CASHIER_REPORT_TYPE = 1;
        public const TOP_REPORT_TYPE = 2;

        // -----------------
        public static function getReportNameByType(int $type): string {
            switch ($type) {
                case self::CASHIER_REPORT_TYPE:
                    $name = 'Кассовый отчет';
                    break;
                case self::TOP_REPORT_TYPE:
                    $name = 'Отчет для начальства';
                    break;
                default:
                    $name = 'Неизвестный отчет';
            }
            return $name . ' Mobile';
        }
    }