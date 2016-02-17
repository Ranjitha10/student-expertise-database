<HTML>
<BODY>
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$USN= $_POST ['USN'];
$sql = 'SELECT*
FROM student
JOIN hss
    ON student.USN = hss.USN';

mysql_select_db('student_expertize');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
?>
<h1 align="center" color="FF0000">Performing HSS Evaluation for<?php echo $USN;?></h1>
<br><br><br>
<?php
$sum=0;
$count=0;
$flag1=0;
$flag2=0;
$flag3=0;
$flag4=0;
$flag5=0;
$flag6=0;
$ulflag=array();
$i=0;
while($row = mysql_fetch_array($retval))
{
		if(($row["USN"]==$USN))
		{
			$count=$count+1;
			$level=$row["level"];
    echo "USN:{$row['USN']}  <br> ".
         "Name: {$row['Fname']} <br> ".
         "Certificate Name: {$row['CertificateName']} <br> ".
		 "level: {$row['level']} <br> ".
		 "	Academic Year: {$row['AcademicYear']} <br> ".
		 
         "--------------------------------<br>";
		 if($count==1)
		 {
		/* switch($level)
		 {
		 case 'L1':$sum=$sum+90;break;
		 case 'L2':$sum=$sum+75;break;				
		 case 'L3':$sum=$sum+60;break;
		 case 'L4':$sum=$sum+50;break;
		 case 'L5':$sum=$sum+45;break;
		 case 'L6':$sum=$sum+40;break;

		}*/
		if($level=='L1'){$sum=$sum+90;}
		else if($level=='L2'){$sum=$sum+75;$flag2=1;}
			else if($level=='L3'){$sum=$sum+60;$flag3=1;}
				else if($level=='L4'){$sum=$sum+50;$flag4=1;}
					else if($level=='L5'){$sum=$sum+45;$flag5=1;}
						else if($level=='L6'){$sum=$sum+40;$flag6=1;}
			
		 }
		 else  if($count>1)
		 {
			/* switch($level)
		 {
			
		 case 'L1':$sum=$sum+(90*0.1);break;		
		 case 'L2':$sum=$sum+(75*0.1);break;
		 case 'L3':$sum=$sum+(60*0.1);break;
		 case 'L4':$sum=$sum+(50*0.1);break;
		 case 'L5':$sum=$sum+(45*0.1);break;
		 case 'L6':$sum=$sum+(40*0.1);break;

		 }*/
			if($level=='L1'){
				/*if($flag1==1)
				
				$sum+90*0.1;
				else 
					$sum=$sum+90;*/
				if($sum<90)
				{
					
					$sum=$sum*0.1;
					$ulflag[$i++]=$sum;
					$sum=$sum+90;
					
					
					}
					else
					{
						$sum=$sum+(0.1*90);
					}
				}
				
				
			
				
				
		if($level=='L2'){
				if($sum<75)
				{
				
					$sum=$sum*0.1;$ulflag[$i++]=$sum;
					$sum=$sum+75;
				}
				else
					{
						$sum=$sum+(0.1*75);
					}
				
				}
				if($level=='L3'){
				if($sum<60)
				{
					$sum=$sum*0.1;$ulflag[$i++]=$sum;
					$sum=$sum+60;
				}
				else
					{
						$sum=$sum+(0.1*60);
					}
				}
				if($level=='L4'){
				if($sum<50)
				{
					$sum=$sum*0.1;$ulflag[$i++]=$sum;
					$sum=$sum+50;
				}
				else
					{
						$sum=$sum+(0.1*50);
					}
				}
				if($level=='L5'){
				if($sum<45)
				{
					$sum=$sum*0.1;$ulflag[$i++]=$sum;
					$sum=$sum+45;
				}
				else
					{
						$sum=$sum+(0.1*45);
					}
				}
				if($level=='L6'){
					if($sum<40)
					{
					$sum=$sum*0.1;$ulflag[$i++]=$sum;
					$sum=$sum+40;
				}
				else
					{
						$sum=$sum+(0.1*40);
					}
				}
		 
		 
		 
		 }
	 	 
} 

	
}
for($j=0;$j<$i-1;$j++)
{
	$sum=$sum+$ulflag[$j];
}
if($sum<100)
{
echo "The marks obtained in HSS Evaluation is:";echo $sum;}
else
{echo "The marks obtained in HSS Evaluation is:100";	}
?>



	

</html>
</body>
