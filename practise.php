<?php
	
	$a=explode(",",$_GET['t1']);
	$b=explode(",",$_GET['t2']);
	$c=explode(",",$_GET['t3']);
	$d=explode(",",$_GET['t4']);
	$e=explode(",",$_GET['t5']);
	$f=explode(",",$_GET['t6']);
	$g=explode(",",$_GET['t7']);
	$h=explode(",",$_GET['t8']);
	$x=$_GET['t9'];
	$ch=$_GET['r'];

	class emp
	{
		var $code;
		var $name;
		var $desig;
		function emp($code,$name,$desig)
		{
			$this->code=$code;
			$this->name=$name;
			$this->desig=$desig;
		}
	}
	class emp_acc extends emp
	{
		var $accno;
		var $jd;
		function emp_acc($code,$name,$desig,$accno,$jd)
		{
			$this->emp($code,$name,$desig);
			$this->accno=$accno;
			$this->jd=$jd;
		}
	}
	class emp_sal extends emp_acc
	{
		var $pay;
		var $earnings;
		var $deduction;
		var $sal;
		function emp_sal($code,$name,$desig,$accno,$jd,$pay,$earnings,$deduction)
		{
			$this->emp_acc($code,$name,$desig,$accno,$jd);
			$this->pay=$pay;
			$this->earnings=$earnings;
			$this->deduction=$deduction;
		}
		
		function salary()
		{
			$sal=(($this->pay+$this->earnings)-$this->deduction);
			return $sal;
					
		}

		function display()
		{
	                echo "<table colspan='2'>";	
			echo "<tr><td><label>Employee code</label>".$this->code."</td></tr><br>";
			echo "<tr><td><label>Employee name</label>".$this->name."</td></tr><br>";
			echo "Employee designation:".$this->desig."<br>";
			echo "Employee account number:".$this->accno."<br>";
			echo "Employee joining date:".$this->jd."<br>";
			echo "Employee pay salary:".$this->pay."<br>";
			echo "Employee earnings:".$this->earnings."<br>";
			echo "Employee deduction:".$this->deduction."<br>";			
	                 echo"</table>";       
		        	
		}
	}
				for($i=0;$i<count($a);$i++)
				{	
				$ob[$i]=new emp_sal($a[$i],$b[$i],$c[$i],$d[$i],$e[$i],$f[$i],$g[$i],$h[$i]);
				$s[$i]=$ob[$i]->salary();			
				}

		
		switch($ch)
		{
			
			case 1:for($i=0;$i<count($a);$i++)
				{
					for($j=0;$j<count($a);$j++)
					{
						if($ob[$i]->code<$ob[$j]->code)
						{
							$t=$ob[$i]->code;
							$ob[$i]->code=$ob[$j]->code;
							$ob[$j]->code=$t;
						
							$t=$ob[$i]->name;
							$ob[$i]->name=$ob[$j]->name;
							$ob[$j]->name=$t;

							$t=$ob[$i]->desig;
							$ob[$i]->desig=$ob[$j]->desig;
							$ob[$j]->desig=$t;
							
							$t=$ob[$i]->accno;
							$ob[$i]->accno=$ob[$j]->accno;
							$ob[$j]->accno=$t;
			
							$t=$ob[$i]->jd;
							$ob[$i]->jd=$ob[$j]->jd;
							$ob[$j]->jd=$t;

							$t=$ob[$i]->pay;
							$ob[$i]->pay=$ob[$j]->pay;
							$ob[$j]->pay=$t;
		
							$t=$ob[$i]->earnings;
							$ob[$i]->earnings=$ob[$j]->earnings;
							$ob[$j]->earnings=$t;

							$t=$ob[$i]->deduction;
							$ob[$i]->deduction=$ob[$j]->deduction;
							$ob[$j]->deduction=$t;
		
							$t=$ob[$i]->salary();
							$ob[$i]->sal=$ob[$j]->salary();
							$ob[$j]->sal=$t;


						}
					}
					
				}
				for($i=0;$i<count($a);$i++)
				{
					$ob[$i]->display();
					echo "Salary:".$ob[$i]->sal;
					echo "<br>";
				}
				break;
			case 2:for($i=0;$i<count($a);$i++)
				{
					if($ob[$i]->code==$x)
					{
						
						$ob[$i]->display();
						echo "<br>Employee salary:";
						echo $ob[$i]->salary();
					}
				}
				break;
			case 3:echo "<br>Salary of employees are:";
				for($i=0;$i<count($a);$i++)
			{
				echo "<br>".$ob[$i]->salary();
			}
			break;
		}
	?>
