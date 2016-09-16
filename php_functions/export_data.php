<?php
$organisationDetails = array(
    10 => array(
        'name' => 'weboniseLab',
        'jobRole' => array(
            '11' => array(
                'name' => 'devloper',
                'created' => '2016-02-01',
            ),
            '12' => array(
                'name' => 'sr. developer',
                'created' => '2016-02-10',
            ),
        ),
        'cfa' => array(
            '11' => array(
                'name' => 'php',
                'created' => '2016-03-10',
            ),
            '12' => array(
                'name' => 'ruby',
                'created' => '2016-04-15',
            ),
        )
    ),
    11 => array(
        'name' => 'Hartley Lab',
        'jobRole' => array(
            '11' => array(
                'name' => 'foront end',
                'created' => '2016-03-01',
            ),
            '12' => array(
                'name' => 'design',
                'created' => '2016-03-10',
            ),
        ),
        'cfa' => array(
            '11' => array(
                'name' => 'UI',
                'created' => '2016-02-01',
            ),
            '12' => array(
                'name' => 'UX',
                'created' => '2016-01-01',
            ),
        )
    ),
    15 => array(
        'name' => 'Hartley Lab',
        'jobRole' => array(
            '11' => array(
                'name' => 'foront end',
                'created' => '2016-03-01',
            ),
            '12' => array(
                'name' => 'design',
                'created' => '2016-03-10',
            ),
        )
    )
);


foreach($organisationDetails as $c=>$organisationDetail) {
    foreach($organisationDetail as $a) {
        foreach($a as $key=>$b){
            echo $b['created'].'|'.$organisationDetail['name'].'|'.$b['name'].'|'.$key.'|'.$c.'<br/>';

        }

    }
}