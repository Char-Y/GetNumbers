<?php
    $UN = filter_input(INPUT_POST, 'User_number',FILTER_VALIDATE_FLOAT);
    $ND_DP= $_POST['Digits'];
    $n = strlen($UN) - strrpos($UN, '.') - 1;
    if(!isset($_POST['SubmitNumber'])){
    exit();
    }else if($UN===FALSE){
    $error_message = 'Please input a valid number.';
    } else if ($n>4){
    $error_message= 'Digits must be less than 4.';
    }else {
    $error_message = '';
    }
 
    if($ND_DP==1){
        $SN =number_format($UN,1);
    }else if($ND_DP==2){
        $SN =number_format($UN,2);
    } else{
     $SN =number_format($UN,3);
    }
    
    $num = (string)$SN;  
    $reverse = strrev($num);    
  
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="a2.css"/>
</head>
    <body>
        <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?><br/><br/>
        <?php echo '<a href="index.html">index.html</a>';
            exit ();?>
        </p>
        <?php } ?>
        <main>
        The number you input is <?php echo $UN; ?><br/><br/>
        Your number transformed : <?php echo $SN; ?> <br/> <br/>        
        Your number reversed : <?php echo $reverse; ?><br/><br/>
        <?php echo '<a href="index.html">index.html</a>'; ?>    
        </main>

        </body>
    </html>