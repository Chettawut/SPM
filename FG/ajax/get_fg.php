<?php     
	header('Content-Type: application/json');
    include_once('../../conn.php');

   
    
    $strSQL = "SELECT top 100 [group],charge,coilno,pdate,diam,nospec,tensile,yield,pass FROM Product ";
    // $strSQL = "SELECT  STCODE, STNAME1,STONHAND,STMAX,STMIN,STLAYOUT,STUNIT FROM  STOCK ORDER BY STCODE";

    $obj=odbc_exec(sql_connect(),$strSQL) ;
	
    
    $json_result = array(            
        "group" => array(),
        "charge" => array(),
        "coilno" => array(),
        "pdate" => array(),
        "diam" => array(),
        "nospec" => array(),
        "tensile" => array(),
        "yield" => array(),
        "pass" => array()
        );
   
		
        while(odbc_fetch_array($obj))
        {
            array_push($json_result['group'],iconv("tis-620","UTF-8",odbc_result($obj, "group")));
            array_push($json_result['charge'],iconv("tis-620","UTF-8",odbc_result($obj, "charge")));
            array_push($json_result['coilno'],iconv("tis-620","UTF-8",odbc_result($obj, "coilno")));
            array_push($json_result['pdate'],iconv("tis-620","UTF-8",odbc_result($obj, "pdate")));
            array_push($json_result['diam'],iconv("tis-620","UTF-8",odbc_result($obj, "diam")));
            array_push($json_result['nospec'],iconv("tis-620","UTF-8",odbc_result($obj, "nospec")));
            array_push($json_result['tensile'],iconv("tis-620","UTF-8",odbc_result($obj, "tensile")));
            array_push($json_result['yield'],iconv("tis-620","UTF-8",odbc_result($obj, "yield")));
            array_push($json_result['pass'],iconv("tis-620","UTF-8",odbc_result($obj, "pass")));
			
        }

        echo json_encode($json_result);
            
            // odbc_close_all();

           
?>