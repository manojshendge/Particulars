<?php 

$host='localhost';
$username = 'root';
$password='';
$db = 'particulars';

$con = mysqli_connect($host, $username, $password,$db);
    if(!$con){
        die("connection failed ". mysqli_connect_error());
    }

        $FullNameofStudent=$_POST['FullNameofStudent'];
        $AdmissionFee=$_POST['AdmissionFee'];
        $TuitionFee=$_POST['TuitionFee'];
        $ComputerFee=$_POST['ComputerFee'];
        $LabFee=$_POST['LabFee'];
        $Fine=$_POST['Fine'];
        $TransferCertificate=$_POST['TransferCertificate'];
        $BookFee=$_POST['BookFee'];
        $BoardRgs_Fee=$_POST['BoardRgs_Fee'];
        $AnnualChargesAp=$_POST['AnnualChargesAp'];
        $AnnualChargesSep=$_POST['AnnualChargesSep'];
        $BusFee=$_POST['BusFee'];
        $OtherFee=$_POST['OtherFee'];
        $PreviousBal=$_POST['PreviousBal'];
        $MonthlyFixDiscount=$_POST['MonthlyFixDiscount'];
        $Total=$_POST['Total'];
        $sql_query="INSERT INTO fees (FullNameofStudent,AdmissionFee,TuitionFee,ComputerFee,LabFee,Fine,TransferCertificate,BookFee,BoardRgs_Fee,AnnualChargesAp,AnnualChargesSep,BusFee,OtherFee,PreviousBal,MonthlyFixDiscount,Total) 
        VALUES ('$FullNameofStudent','$AdmissionFee','$TuitionFee','$ComputerFee','$LabFee','$Fine',' $TransferCertificate','$BookFee','$BoardRgs_Fee','$AnnualChargesAp','$AnnualChargesSep','$BusFee','$OtherFee','$PreviousBal','$MonthlyFixDiscount','$Total')";

        $rs=mysqli_query($con, $sql_query);
        if($rs){
                echo " 
                <body style='background-color:salmon; '>
                <center>
                <h1>YOUR COLLEGE FEE  DETAILES</h1>
                    <h3>Name Of Student:</h3><span><h2 style='margin-bottom:2%;' >$FullNameofStudent</h2></span>
                    <table style='text-align:center; border:2px solid black; width:50%; height:200px; background-color:white; '>
                    <tr>
                    <th>s.no</th>
                    <th>Particulars</th>
                    <th>Amount<br>(Rs.)</th>
                </tr>
                        <tr  style='border:2px solid black; '>
                            <td  style='border:2px solid black;width:30% padding:10px; '>1
                            <td  style='border:2px solid black;padding:10px; '>ADMISSION FEE :<span><td  style='padding:10px; border:2px solid black;width:30% padding:10px; '>&nbsp  $AdmissionFee</span>
                        </tr>
                        <tr  style='border:2px solid black; '>
                        <td  style='border:2px solid black;width:30% padding:10px; '>2
                        <td  style='border:2px solid black; padding:10px; '>TUITION FEE :<span><td  style=' padding:10px; border:2px solid black;width:30% padding:10px; '>&nbsp  $TuitionFee</span>
                    </tr>
                    <tr  style='border:2px solid black; '>
                    <td  style='border:2px solid black;width:30% padding:10px; '>3
                    <td  style='border:2px solid black; padding:10px; '>COMPUTERS FEE:<span><td  style=' padding:10px; border:2px solid black;width:30% padding:10px; '>&nbsp   $ComputerFee</span>
                </tr>
                <tr  style='border:2px solid black; '>
                <td  style='border:2px solid black;width:30% padding:10px; '>4
                <td  style='border:2px solid black; padding:10px; '>LAB FEE :<span><td  style=' padding:10px; border:2px solid black;width:30% padding:10px; '>&nbsp   $LabFee</span>
            </tr>
            <tr  style='border:2px solid black; '>
            <td  style='border:2px solid black;width:30% padding:10px; '>5
            <td  style='border:2px solid black; padding:10px; '>FINE :<span><td  style=' padding:10px; border:2px solid black;width:30% padding:10px; '>&nbsp   $Fine </span>
        </tr>       
        <tr  style='border:2px solid black; '>
        <td  style='border:2px solid black;width:30% padding:10px; '>6
        <td  style='border:2px solid black; padding:10px; '>TRANSFER CERTIFICATE:<span><td  style= ' padding:10px; border:2px solid black;width:30% padding:10px; '>&nbsp   $TransferCertificate</span>
    </tr>


    <tr  style='border:2px solid black; '>
    <td  style='border:2px solid black;width:30% padding:10px; '>7
    <td  style='border:2px solid black; padding:10px; '>BOOK FEE :<span><td  style=' padding:10px; border:2px solid black;width:30% padding:10px; '>&nbsp $BookFee</span>
</tr>
<tr  style='border:2px solid black; '>
<td  style='border:2px solid black;width:30% padding:10px; '>8
<td  style='border:2px solid black; padding:10px;'>BOARD RGS.FEE :<span><td  style=' padding:10px;border:2px solid black;width:30% padding:10px; '>&nbsp $BoardRgs_Fee</span> 
</tr>
<tr  style='border:2px solid black; '>
<td  style='border:2px solid black;width:30% padding:10px; '>9
<td  style='border:2px solid black; padding:10px; '>ANNUAL CHARGES APR :<span><td  style=' padding:10px;border:2px solid black;width:30% padding:10px; '>&nbsp  $AnnualChargesAp</span>
</tr>
<tr  style='border:2px solid black; '>
<td  style='border:2px solid black;width:30% padding:10px; '>10
<td  style='border:2px solid black; padding:10px; '>ANNUAL CHARGES SEP :<span><td  style=' padding:10px; border:2px solid black;width:30% padding:10px; '>&nbsp  $AnnualChargesSep</span>
</tr>
<tr  style='border:2px solid black; '>
<td  style='border:2px solid black;width:30% padding:10px; '>11
<td  style='border:2px solid black; padding:10px; '>BUS FEE :<span><td  style=' padding:10px;border:2px solid black;width:30% padding:10px; '>&nbsp  $BusFee</span>
</tr>
<tr  style='border:2px solid black; '>
<td  style='border:2px solid black;width:30% padding:10px; '>12
<td  style='border:2px solid black; padding:10px;'>OTHER FEE :<span><td  style=' padding:10px; border:2px solid black;width:30% padding:10px; '>&nbsp $OtherFee</span>
</tr>
<tr  style='border:2px solid black; '>
<td  style='border:2px solid black;width:30% padding:10px; '>13
<td  style='border:2px solid black; padding:10px; '>PREVIOUS BALANCE :<span><td  style=' padding:10px; border:2px solid black;width:30% padding:10px; '>&nbsp  $PreviousBal</span>
</tr>
<tr  style='border:2px solid black; '>
<td  style='border:2px solid black;width:30% padding:10px;padding:10px;  '>14
<td  style='border:2px solid black;padding:10px;  '>MONTHLY FIXED DISCOUNT :<span><td  style=' padding:10px; border:2px solid black;width:30% padding:10px; '>&nbsp  $MonthlyFixDiscount</span>
</tr>
<tr  style='border:2px solid black; '>
<td  style='border:2px solid black;width:30% padding:10px; '>15
<td  style='border:2px solid black; padding:10px; '>TOTAL :<span><td  style=' padding:10px;border:2px solid black;width:30% padding:10px; '>&nbsp  $Total</span>
</tr>

                    </table>
                    <button style='margin:40px; padding:20px; border:none; background-color:#02198b '><a style='text-decoration:none; font-size:20px; border:none; color:white;'  href='http://localhost/particulars/index.html'>Go back to Particulars</a></buttton>
</body>
                ";
                // header("Location:http://localhost/particulars/index.html ");
                }
        
    
?>