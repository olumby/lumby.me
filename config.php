<?php

return [
    'build' => [
        'destination' => 'public',
    ],
    'production' => false,
    'collections' => [
        'posts' => [
            'sort' => ['-date'],
            'path' => function ($item) {
                list($year, $month, $day) = parseDate($item->date);
                return sprintf('%s/%s/%s/%s', $year, $month, $day, str_slug($item['title']));
            }
        ]
    ]
];


function parseDate($timestamp)
{
    $date = DateTime::createFromFormat('U', $timestamp);
    return [
        $date->format('Y'),
        $date->format('m'),
        $date->format('d'),
    ];
}
