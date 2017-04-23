<?php
require_once('pdf2text.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
     $array = array();
    $i = $_POST['register_no'];
    $sem = $_POST['sem'];
    if ($sem == 's1') {
        $result = pdf2text ("assets/pdf/s1s2/$i.pdf");
        $fields = preg_split('/\s+/', $result);

        if($fields[25] == 'Register')
        {
                      
            $Total = ($fields[56] + $fields[57]) + ($fields[63] + $fields[64]) + ($fields[73] + $fields[74]) + ($fields[80] + $fields[81]) + ($fields[87] + $fields[88]) + ($fields[95] + $fields[96]) + ($fields[103] + $fields[104]) + ($fields[111] + $fields[112]) + ($fields[122] + $fields[123]) + ($fields[129]) + ($fields[138]);
            $Average = ($Total/1500)*100;
            $Average = round($Average)."%";

            if($fields[145] == 'P'){
                $remark = 'PASS';
            }
            else if($fields[145]=='F'){
                $remark = "FAIL";
            }
        }
        elseif ($fields[26] == 'Register') {
            $Total = ($fields[57] + $fields[58]) + ($fields[65] + $fields[66]) + ($fields[74] + $fields[75]) + ($fields[81] + $fields[82]) + ($fields[88] + $fields[89]) + ($fields[96] + $fields[97]) + ($fields[104] + $fields[105]) + ($fields[112] + $fields[113]) + ($fields[123] + $fields[124]) + ($fields[130]) + ($fields[139]);
            $Average = ($Total/1500)*100;
            $Average = round($Average)."%";
            if($fields[146] == 'P'){
                $remark = 'PASS';
            }else if($fields[146]=='F'){
                $remark = 'FAIL';
            }
        }
    }
    elseif($sem == 's3')
    {
        $result = pdf2text ("assets/pdf/s3/$i.pdf");
        $fields = preg_split('/\s+/', $result);

        if($fields[25] == 'Register')
        {
                      
            $Total = ($fields[54] + $fields[55]) + ($fields[63] + $fields[64]) + ($fields[73] + $fields[74]) + ($fields[80] + $fields[81]) + ($fields[90] + $fields[91]) + ($fields[99] + $fields[100]) + ($fields[106] + $fields[107]) + ($fields[114] + $fields[115]);
            $Average = ($Total/1200)*100;
            $Average = round($Average)."%";
            if($fields[121] == 'P'){
                $remark = 'PASS';
            }
            else if($fields[121]=='F'){
                $remark = "FAIL";
            }
        }
        elseif ($fields[26] == 'Register') {
            $Total = ($fields[55] + $fields[56]) + ($fields[64] + $fields[65]) + ($fields[74] + $fields[75]) + ($fields[81] + $fields[82]) + ($fields[91] + $fields[92]) + ($fields[100] + $fields[101]) + ($fields[107] + $fields[108]) + ($fields[115] + $fields[116]);
            $Average = ($Total/1200)*100;
            $Average = round($Average)."%";
            if($fields[122] == 'P'){ 
                $remark = 'PASS';
            }
            else if($fields[122] == 'F'){
                $remark = "FAIL";
            }
        }
    }
    elseif($sem == 's4')
    {
        $result = pdf2text ("assets/pdf/s4/$i.pdf");
        $fields = preg_split('/\s+/', $result);

        if($fields[25] == 'Register')
        {              
                $Total = ($fields[54] + $fields[55]) + ($fields[62] + $fields[63]) + ($fields[71] + $fields[72]) + ($fields[80] + $fields[81]) + ($fields[87] + $fields[88]) + ($fields[95] + $fields[96]) + ($fields[103] + $fields[104]) + ($fields[111] + $fields[112]);
                $Average = ($Total/1200)*100;
            $Average = round($Average)."%";
            if($fields[118] == 'P'){ 
                $remark = 'PASS';
            }
            else if($fields[118]=='F'){
                $remark = "FAIL";
            }
        }
        elseif ($fields[26] == 'Register') {
            $Total = ($fields[55] + $fields[56]) + ($fields[63] + $fields[64]) + ($fields[72] + $fields[73]) + ($fields[81] + $fields[82]) + ($fields[88] + $fields[89]) + ($fields[96] + $fields[97]) + ($fields[104] + $fields[105]) + ($fields[112] + $fields[113]);
            $Average = ($Total/1200)*100;
            $Average = round($Average)."%";
            if($fields[119] == 'P'){ 
                $remark = 'PASS';
            }else if($fields[119]=='F'){
                $remark = "FAIL";
            }
        }
    }
    elseif($sem == 's5')
    {
        $result = pdf2text ("assets/pdf/s5/$i.pdf");
        $fields = preg_split('/\s+/', $result);

        if($fields[25] == 'Register')
        {
                  
            $Total = ($fields[54] + $fields[55]) + ($fields[62] + $fields[63]) + ($fields[70] + $fields[71]) + ($fields[78] + $fields[79]) + ($fields[85] + $fields[86]) + ($fields[94] + $fields[95]) + ($fields[101] + $fields[102]) + ($fields[110] + $fields[111]);
            $Average = ($Total/1200)*100;
            $Average = round($Average)."%";

            if($fields[117] == 'P'){ 
                $remark = 'PASS';
            }
            else{ $remark = "FAIL";}
        }
        elseif ($fields[26] == 'Register') {
            $Total = ($fields[55] + $fields[56]) + ($fields[63] + $fields[64]) + ($fields[71] + $fields[72]) + ($fields[79] + $fields[80]) + ($fields[86] + $fields[87]) + ($fields[95] + $fields[96]) + ($fields[102] + $fields[103]) + ($fields[111] + $fields[112]);
            $Average = ($Total/1200)*100;
            $Average = round($Average)."%";
            if($fields[118] == 'P'){ 
                $remark = 'PASS';
            }else{ $remark = "FAIL";}
        }
    }
    elseif($sem == 's6')
    {
        $result = pdf2text ("assets/pdf/s6/$i.pdf");
        $fields = preg_split('/\s+/', $result);

        if($fields[25] == 'Register')
        {
            if ($fields[85]=='Unix') {
                $Total = ($fields[56] + $fields[57]) + ($fields[61] + $fields[62]) + ($fields[68] + $fields[69]) + ($fields[73] + $fields[74]) + ($fields[80] + $fields[81]) + ($fields[88] + $fields[89]) + ($fields[96] + $fields[97]) + ($fields[103] + $fields[104]);
            }
        else{
        $Total = ($fields[56] + $fields[57]) + ($fields[61] + $fields[62]) + ($fields[68] + $fields[69]) + ($fields[73] + $fields[74]) + ($fields[80] + $fields[81]) + ($fields[87] + $fields[88]) + ($fields[95] + $fields[96]) + ($fields[102] + $fields[103]);
        }
            $Average = ($Total/1200)*100;
            $Average = round($Average)."%";
            if($fields[109] == 'P'){ 
                $remark = 'PASS';
            }
            else if($fields[109]=='F'){
                $remark = "FAIL";
            }
        }
        elseif ($fields[26] == 'Register') {
            if ($fields[86]=='Unix') {
                $Total = ($fields[57] + $fields[58]) + ($fields[62] + $fields[63]) + ($fields[69] + $fields[70]) + ($fields[74] + $fields[75]) + ($fields[81] + $fields[82]) + ($fields[89] + $fields[90]) + ($fields[97] + $fields[98]) + ($fields[104] + $fields[105]);
            }
            else {
                $Total = ($fields[57] + $fields[58]) + ($fields[62] + $fields[63]) + ($fields[69] + $fields[70]) + ($fields[74] + $fields[75]) + ($fields[81] + $fields[82]) + ($fields[88] + $fields[89]) + ($fields[96] + $fields[97]) + ($fields[103] + $fields[104]);
            }
            $Average = ($Total/1200)*100;
            $Average = round($Average)."%";
            if($fields[110] == 'P'){ $remark = 'PASS';}
            else if($fields[110]=='F'){ $remark = "FAIL";}
        }
    }
    elseif($sem == 's7')
    {
        $result = pdf2text ("assets/pdf/s7/$i.pdf");
        $fields = preg_split('/\s+/', $result);

        if($fields[25] == 'Register')
        {
            $Total = ($fields[53] + $fields[54]) + ($fields[60] + $fields[61]) + ($fields[67] + $fields[68]) + ($fields[77] + $fields[78]) + ($fields[86] + $fields[87]) + ($fields[96] + $fields[97]) + ($fields[104] + $fields[105]) + ($fields[109] + $fields[110]) + $fields[115] + $fields[121];
            $Average = ($Total/1300)*100;
            $Average = round($Average)."%";
            if($fields[128] == 'P'){ $remark = 'PASS';}else if($fields[128]=='F'){ $remark = "FAIL";}
        }
        elseif ($fields[26] == 'Register') {
            $Total = ($fields[54] + $fields[55]) + ($fields[61] + $fields[62]) + ($fields[68] + $fields[69]) + ($fields[78] + $fields[79]) + ($fields[87] + $fields[88]) + ($fields[97] + $fields[98]) + ($fields[105] + $fields[106]) + ($fields[110] + $fields[111]) + $fields[116] + $fields[122];
            $Average = ($Total/1200)*100;
            $Average = round($Average)."%";
            if($fields[129] == 'P'){ $remark = 'PASS';}else if($fields[129]){ $remark = "FAIL";}
        }
    }

    array_push($array,
        array('percent'=>$Average,
              'total'=>$Total,
              'remark'=>$remark
    ));
}
    header('Content-Type:Application/json; charset=utf-8');
    echo json_encode(array("mark"=>$array));