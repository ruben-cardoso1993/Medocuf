<?php
    $con = mysqli_connect("localhost","root","");
    if(!$con){
        echo"Not connect to Server";
    }
    if(!mysqli_select_db($con,'newusers')){
        echo 'Database not select';
    }
    $dateToday = date("Y-m-d");


    $datePlusYear = date('Y-m-d', strtotime("+1 year"));
    $datePlus11Month = date('Y-m-d', strtotime("+11 months"));
    $count = 0;
   // $countOcasional = 0;
    $sql1 ="SELECT ID_colaborador, DataConsulta, DataNasc, DCO from colaboradores ";
    $result1=mysqli_query($con,$sql1) or die("Query incorrecta: $sql1");

    while($row1=mysqli_fetch_assoc($result1)){
       
        $dataConsulta = $row1["DataConsulta"];
        $dataNascimento =$row1["DataNasc"];
        $dataConsultaOcasional = $row1["DCO"];

        if($dataConsultaOcasional != "" && $dataConsultaOcasional != NULL  && $dataConsulta != "" && $dataConsulta != NULL  ){
            $DataConsulta_notificacao = date("Y-m-d", strtotime(date("Y-m-d", strtotime($dataConsulta)) . " -1 months"));
			//$DataConsulta_notificacao = date("Y-m-d", strtotime(date("Y-m-d", strtotime($dataNascimento)) ));
            //$DataConsultaOcasional_notificacao = date("Y-m-d", strtotime(date("Y-m-d", strtotime($dataConsultaOcasional)) . " -1 months"));
            
			$diasquefaltam= (int)((strtotime($dataConsulta) - strtotime($dateToday))/(60*60*24));
			
            if( $diasquefaltam<=30 && $diasquefaltam>=0){
                $count++;
            }
            /*else{
                if($dataConsulta < $dateToday ){
                    if($dataConsulta != "" && $dataConsulta != NULL  ){
                        if(date($dateToday) - date($dataNascimento)<=49){
                        $dataConsulta_2Years = date("Y-m-d", strtotime(date("Y-m-d", strtotime($dataConsulta)) . "+2 year"));
                        $sql2='UPDATE colaboradores set DataConsulta = "'.$dataConsulta_2Years.'" where ID_colaborador = '.$row1["ID_colaborador"].' ';
                        $result2=mysqli_query($con,$sql2) or die("Query incorrecta: $sql2");
						}	
                        else{
                            if(date($dateToday) - date($dataNascimento)>49){
                                $dataConsulta_1Year = date("Y-m-d", strtotime(date("Y-m-d", strtotime($dataConsulta)) . "+1 year"));
                                $sql2='UPDATE colaboradores set DataConsulta = "'.$dataConsulta_1Year.'" where ID_colaborador = '.$row1["ID_colaborador"].' ';
                                $result2=mysqli_query($con,$sql2) or die("Query incorrecta: $sql2");
							}	
						}
                    }    
                }
            }*/
			//$daaf_notificacao = date("Y-m-d", strtotime(date("Y-m-d", strtotime($datalimite)) . " -1 months"));
			//$diasquefaltam_Ocasional= (int)((strtotime($dataConsultaOcasional) - strtotime($dateToday))/(60*60*24));
            //if($diasquefaltam_Ocasional<=30 && $diasquefaltam_Ocasional>=0 ){
                //$countOcasional++;
            //}

        }
    }
    $array = array(
        "Contador" => $count,
        //"ContadorOcasional" => $countOcasional,
        
    );
    echo json_encode($array);

?>