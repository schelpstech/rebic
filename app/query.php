<?php
if (file_exists('../../controller/start.inc.php')) {
    include '../../controller/start.inc.php';
} elseif (file_exists('../controller/start.inc.php')) {
    include '../controller/start.inc.php';
} else {
    include './controller/start.inc.php';
};



//Select All Sermons
$tblName = 'sermon_repo_tbl';
$conditions = array(
    'order_by' => 'sermon_rectime DESC',
    'joinl' => array(
        'assembly_tbl' => ' on sermon_repo_tbl.assembly_id = assembly_tbl.assembly_id',
    ),
);
$sermon_list = $model->getRows($tblName, $conditions);

//Select All Sermons
$tblName = 'sermon_repo_tbl';
$conditions = array(
    'return_type' => 'single',
    'where' => array(
        'sermon_status' => 1,
    ),
);
$featured_sermon = $model->getRows($tblName, $conditions);


//Select All Born this month 
$tblName = 'member_list';
$conditions = array(
    'where' => array(
        'substr(dateofbirth,6,2)' => date("m"),
    ),
    'order_by' => 'substr(dateofbirth,9,2) ASC',
    'joinl' => array(
        'assembly_tbl' => ' on member_list.assemblyid = assembly_tbl.assembly_id',
    ),
);
$monthly_celebrant = $model->getRows($tblName, $conditions);