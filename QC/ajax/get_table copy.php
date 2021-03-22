<?php
	header('Content-Type: application/json');
    include('/../../../const.php');
    include('/../../../func_pae_php.php');
    ini_set("memory_limit","12M");
    $conn= sql_connect() ;
    $strSQL = "SELECT prodGroup,prodsize,isnull(sum(plWeek5),0) as plWeek5,
    isnull(sum(plWeek6),0) as plWeek6,isnull(sum(plWeek7),0) as plWeek7
    ,isnull(sum(plWeek8),0) as plWeek8 from 
    (select prodGroup,prodsize,case when pdate>='20210201' and pdate<='20210207' 
    then sum(pweight) end as plWeek5,case when pdate>='20210208' and pdate<='20210214' 
    then sum(pweight) end as plWeek6,case when pdate>='20210215' and pdate<='20210221' 
    then sum(pweight) end as plWeek7,case when pdate>='20210222' and pdate<='20210228' 
    then sum(pweight) end as plWeek8 from fgshowonreport a 
    left outer join rp_produce_planweek b on a.prodcode=b.procode 
    where left(pdate,6)='202102' group by prodgroup,prodsize,pdate) 
    A left outer join fggroup B on A.prodGroup=B.gcode 
    group by prodGroup,prodsize,gorder order by gorder";
    // $strSQL = "SELECT  STCODE, STNAME1,STONHAND,STMAX,STMIN,STLAYOUT,STUNIT FROM  STOCK ORDER BY STCODE";

    $obj=odbc_exec($conn,$strSQL) ;
	
    
    $json_result = array(            
        "prodGroup" => array(),
        "prodsize" => array()
        );
    
    for ($row = 0; $row < count($week); $row++)
    {
        $array2 = array(        
            "plWeek".$week[$row] => array()
            );

        $json_result =array_merge($json_result, $array2);    
    }
		
        while(odbc_fetch_array($obj))
        {
            array_push($json_result['prodGroup'],iconv("tis-620","UTF-8",odbc_result($obj, "prodGroup")));
            array_push($json_result['prodsize'],iconv("tis-620","UTF-8",odbc_result($obj, "prodsize")));
            array_push($json_result['plWeek5'],iconv("tis-620","UTF-8",odbc_result($obj, "plWeek5")));
            array_push($json_result['plWeek6'],iconv("tis-620","UTF-8",odbc_result($obj, "plWeek6")));
            array_push($json_result['plWeek7'],iconv("tis-620","UTF-8",odbc_result($obj, "plWeek7")));
            array_push($json_result['plWeek8'],iconv("tis-620","UTF-8",odbc_result($obj, "plWeek8")));
			
        }

        echo json_encode($json_result);
            
            // odbc_close_all();
?>