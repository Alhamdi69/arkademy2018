<?php 
function create_random()
{
    $data = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $string = '';
		for($i = 0; $i < 16; $i++) 
		{
			$pos = rand(0, strlen($data)-1);
			$string .= $data{$pos};
			if ($i == 2)
			{
				
				$string .= $data{$pos}.'-';
			}
			if ($i == 5)
			{
				
				$string .= $data{$pos}.'-';
			}
			if ($i == 8)
			{
				
				$string .= $data{$pos}.'-';
			}
			if ($i == 11)
			{
				
				$string .= $data{$pos}.'-';
			}
			
		}
	
    return $string;
	
	
}

for($i=1;$i<=300;$i++){

$sn=create_random();
echo "$i.$sn <br />";

}

?>
