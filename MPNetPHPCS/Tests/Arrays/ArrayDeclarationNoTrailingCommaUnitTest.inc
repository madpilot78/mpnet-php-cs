<?php

function test()
{
    $a = array();

    $b = Array ();

    $c = Array(
        'a' => 1,
    );

    $d = Array(
        'a' => 1
    );
}

function test()
{
    $a = [];

    $b = [];

    $c = [
        'a' => 1,
    ];

    $d = [
        'a' => 1
    ];
}

class TestClass
{
    public $good = array(
        'width'  => '',
        'height' => ''
    );

    private $_bad = Array(
        'width' => '',
        'height' => '',
    );


    public function test()
    {
        $truck = array(
            'width' => '',
            'height' => ''
        );

        $bus = array(
            'width'  => '',
            'height' => '',
        );

        $train = array  (
            TRUE,
            FALSE,
            'aaa'
        );

        $bigone = array(
            'name' => 'bigone',
            'children' => Array(
                '1a' => 'child',
                '11b' => 'child',
                '111c' => 'child',
                'children' => Array(
                    'child' => 'aaa',
                ),
            ),
            'short_name' => 'big'
        );
    }
}//end class

class TestClassOth
{
    public $good = [
        'width'  => '',
        'height' => ''
    ];

    private $_bad = [
        'width' => '',
        'height' => '',
    ];


    public function test()
    {
        $truck = [
            'width' => '',
            'height' => ''
        ];

        $bus = [
            'width'  => '',
            'height' => '',
        ];

        $train = [
            TRUE,
            FALSE,
            'aaa'
        ];

        $bigone = [
            'name' => 'bigone',
            'children' => [
                '1a' => 'child',
                '11b' => 'child',
                '111c' => 'child',
                'children' => [
                    'child' => 'aaa',
                ],
            ],
            'short_name' => 'big'
        ];
    }
}

$value = array(
    '1'=> TRUE,
    FALSE,
);

$value = array(
    TRUE,
    '1' => FALSE
);

$value = array(
    1 => $one,
    2 => $two,
    3 => $three
);

$value = array(
    1 => $one,
    2 => $two,
    3 => $three,
);

$value = [
    '1'=> TRUE,
    FALSE,
];

$value = [
    TRUE,
    '1' => FALSE
];

$value = [
    1 => $one,
    2 => $two,
    3 => $three
];

$value = [
    1 => $one,
    2 => $two,
    3 => $three,
];
