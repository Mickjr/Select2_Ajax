<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'root';
    $dbName = 'autocomplete';

    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //get search term
    $searchTerm = $_GET['term'];

    //get matched data from skills table
    $result = $db->query("SELECT * FROM skills WHERE skill LIKE '%".$searchTerm."%' ORDER BY skill ASC");

    $dataArr['aaData'] = Array();

    if ($result)
    {


        foreach ($result as $row) {

            // $r = array();
            // $r['id']   = $row['skill'];
            // $r['name'] = $row['skill'];

            $dataArr['aaData'][] = array(
                'id'    => $row['skill'],
                'name'  => $row['skill']
            );

        }

    }

    header('Content-Type: application/json');
    echo json_encode($dataArr);
