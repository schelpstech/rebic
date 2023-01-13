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
        'sermon_status ' => 1,
    ),
);
$featured_sermon = $model->getRows($tblName, $conditions);
