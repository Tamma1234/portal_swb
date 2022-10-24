<?php
$data = [
    'campus' => [1, 8, 14],
    'campus_detail' => [
        '1' => 'Hà Nội',
        '14' => 'Hồ Chí Minh',
    ]
];
$data = json_encode($data);
$data = json_decode($data, false);

return $data;
