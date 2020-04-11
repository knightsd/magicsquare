<?php
$square=$_POST['square'];
//테이블 생성 함수 table()
function table()
{
	global $square;
	global $sq;
	$i = 0;
	$j = 0;
	$sum = 0 ;
	for ( $i=0 ; $i < $square ; $i++ )
	{
		$sum = $sum + $sq[$i][$square-$i-1] ;
	}
?>
	<table align="center" border="0" cellpadding="0" cellspacing="0" style="border: currentColor; border-image: none; font-family: &quot;맑은 고딕&quot;,sans-serif; font-size: 18px; border-collapse: collapse;">
		<tr>
			<td colspan="<?= $square ?>" align="center" style="border-top-color: rgb(0, 0, 0); border-right-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid;">
				<?= $square ?>차
			</td>
			<td align="center" style="border-top-color: rgb(0, 0, 0); border-right-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid;">
				<?= $sum ?>
			</td>
		</tr>
		<tr>
			<td rowspan="<?= $square ?>" colspan="<?= $square ?>" align="center" style="border-top-color: rgb(0, 0, 0); border-right-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid;">
				<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border: currentColor; border-image: none; font-family: &quot;맑은 고딕&quot;,sans-serif; font-size: 18px; border-collapse: collapse;">
<?php
	for ( $i=0 ; $i < $square ; $i++ )
	{
?>
					<tr>
<?php
		for ( $j=0 ; $j < $square ; $j++ )
		{
?>
						<td align="center" style="border-top-color: rgb(0, 0, 0); border-right-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid;" width="<?= (100/$square) ?>%">
							<?= $sq[$i][$j] ?>
						</td>
<?php
		}
?>
					</tr>
<?php
	}
?>
				</table>
			</td>
<?php
	for ( $i=0 ; $i < $square ; $i++ )
	{
?>
			<td align="center" style="border-top-color: rgb(0, 0, 0); border-right-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid;">
<?php
		$sum = 0 ;
		for ( $j=0 ; $j < $square ; $j++ )
		{
			$sum = $sum + $sq[$i][$j] ;
		}
?>
				<?= $sum ?>
			</td>
		</tr>
		<tr>
<?php
	}
	for ( $i=0 ; $i < $square ; $i++ )
	{
?>
			<td align="center" style="border-top-color: rgb(0, 0, 0); border-right-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid;">
<?php
		$sum = 0 ;
		for ( $j=0 ; $j < $square ; $j++ )
		{
			$sum = $sum + $sq[$j][$i] ;
		}
?>
				<?= $sum ?>
			</td>
<?php
	}
?>
			<td align="center" style="border-top-color: rgb(0, 0, 0); border-right-color: rgb(0, 0, 0); border-bottom-color: rgb(0, 0, 0); border-left-color: rgb(0, 0, 0); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-left-style: solid;">
<?php
	$sum = 0 ;
	for ( $i=0 ; $i < $square ; $i++ )
	{
		$sum = $sum + $sq[$i][$i] ;
	}
?>
				<?= $sum ?>
			</td>
		<tr>
	</table>
<?php
}
//마방진 생성 조건 불만족시 메세지
if( ($square <= 2) or ($square != intval($square)) )
{
?>
	<p align="center">
		3이상의 자연수를 입력하여 주세요!
	</p>
<?php
}
//마방진 계산식 공통
else
{
?>
	<p align="center">
		제 <?= $square ?>차 완전마방진!<br />
		한 구역의 합은 <?= (($square*$square+1)*$square/2) ?>입니다.
	</p>
<?php
  //홀수마방진 계산식
	if ( $square%2 == 1 )
	{
		$i = ($square-1)/2 + 1 ;
		$j = ($square-1)/2 ;
		for( ($k = 1) ; ($k <= ($square*$square)) ; $k++ )
		{
			$sq[$i][$j] = $k ;
			if ( $k % $square == 0 )
			{
				$i = $i + 2 ;
			}
			else
			{
				$i++ ;
				$j++ ;
			}
			if ( $i >= $square )
			{
				$i = $i - $square ;
			}
			elseif ( $j >= $square )
			{
				$j = $j - $square ;
			}
		}
	}
	//4배수마방진 계산식
	elseif ( $square%4 == 0 )
	{
		//세로좌표
		$k = 1 ;
		for ( $i=0 ; $i < $square ; $i++ )
		{
			//가로좌표
			for ( $j=($square-1) ; $j >= 0 ; $j-- )
			{
				if ((($i%4 == 1) or ($i%4 == 2)) xor (($j%4 == 1) or ($j%4 == 2)))
				{
					$sq[$i][$j] = $square*$square-$k+1 ;
				}
				else 
				{
					$sq[$i][$j] = $k ;
				}
				$k++ ;
			}
		}
	}
	//4배수+2마방진 계산식
	else
	{
		//세로좌표
		$k = 1 ;
		for ( $i=0 ; $i < $square ; $i++ )
		{
			//가로좌표
			for ( $j=($square-1) ; $j >= 0 ; $j-- )
			{
				if (($i == $j ) or ($i+$j+1 == $square))
				{
					$sq[$i][$j] = $k ;
				}
				elseif (((($i+$j)%2 == 0) and ((($i+$j >= $square) and ($j < $square/2)) or (($i-$j > 0) and ($i < $square/2) and ($i > 2)) or (($j-$i > 0) and ($i >= $square/2)) or (($i+$j < $square) and ($j >= $square/2) and ($i > 1)))) or ((($i+$j)%2 == 1) and ((($i+$j < $square) and ($i >= $square/2)) or (($j-$i > 0) and ($j < $square/2) and ($i > 1)) or (($i-$j > 0) and ($j >= $square/2)) or (($i+$j > $square) and ($i < $square/2) and ($i > 2)))))
				{
					$sq[$i][$j] = $square*$square-$k+$square-$j*2 ;
				}
				elseif (((($i+$j)%2 == 0) and ((($j-$i > 0) and ($j < $square/2)) or (($i+$j >= $square) and ($i < $square/2) and ($j < $square-2)) or (($i+$j < $square) and ($i >= $square/2)) or (($i-$j > 0) and ($j >= $square/2) and ($j < $square-3)))) or ((($i+$j)%2 == 1) and ((($i-$j > 0) and ($i < $square/2)) or (($i+$j < $square) and ($j >= $square/2) and ($j < $square-3)) or (($i+$j >= $square) and ($j < $square/2)) or (($j-$i > 0) and ($i >= $square/2) and ($j < $square-2)))))
				{
					$sq[$i][$j] = ($i*2+1)*$square-$k+1 ;
				}
				else 
				{
					$sq[$i][$j] = $square*$square-$k+1 ;
				}
				$k++ ;
			}
		}
	}
	//마방진 테이블 생성
	table();
}
?>
