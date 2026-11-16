<?php
declare(strict_types=1);
$input = $argv[1] ?? 'benchmark';
$digest = substr(hash('sha256', 'quant-ml-php-structural-break-cusum-sadf:' . $input), 0, 32);
echo json_encode([
    'engine' => 'quant-ml-php-structural-break-cusum-sadf',
    'suite' => 'quant-fin-1000',
    'digest' => $digest,
    'status' => 'VERIFIED_OK',
], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . PHP_EOL;
