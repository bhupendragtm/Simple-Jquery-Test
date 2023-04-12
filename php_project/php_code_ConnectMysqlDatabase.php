<?php
        $dsn = "localhost";
        $username = "root";
        $password = "";


        $db = new PDO("mysql:host=$dsn;dbname=data_switch", $username, $password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        foreach ($db->query("select * from data") as $row)
        {
           $dataname = $row['dataname'];
           $host = $row['host'];
           $dbuser = $row['dbuser'];
           $dbpwd = $row['dbpwd'];
           $dbname = $row['dbname'];

          $connection_array['data1'][] = array(

              'dataname' => $dataname,
              'host' => $host,
              'dbuser' => $dbuser,
              'dbpwd' => $dbpwd,
              'dbname' => $dbname
           );

        }
        echo "<pre>";
        print_r($connection_array);

       $dbh = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpwd);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
