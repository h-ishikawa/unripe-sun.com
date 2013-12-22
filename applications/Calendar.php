<?

/*
 ** Calendar
 */
class Calendar 
{
  public function get($year = '', $month = '') {
function repeat($n) {
	return str_repeat("\t\t<td> </td>\n", $n);
}
	if(empty($year) && empty($month)) {
		$year = date("Y");
		$month = date("n");
	}
	//月末の取得
	$l_day = date("j", mktime(0, 0, 0, $month + 1, 0, $year));

	$tmp = <<<EOM
<table>
	<caption>{$year}年{$month}月</caption>
	<tr>
		<th class="sun">sun</th>
		<th>mon</th>
		<th>tue</th>
		<th>wed</th>
		<th>thu</th>
		<th>fri</th>
		<th class="sat">sat</th>
	</tr>\n
EOM;

	$lc = 0;

	for ($i = 1; $i < $l_day + 1;$i++) {
		$week = date("w", mktime(0, 0, 0, $month, $i, $year));

		if ($week == 0) {
			$tmp .= "\t<tr>\n";
			$lc++;
		}

		if ($i == 1) {
			if($week != 0) {
				$tmp .= "\t<tr>\n";
				$lc++;
			}

			$tmp .= repeat($week);
		}

		if ($i == date("j") && $year == date("Y") && $month == date("n")) {
			$tmp .= "\t\t<td class=\"today\">{$i}</td>\n";
    }
    
    else {
			$tmp .= "\t\t<td>{$i}</td>\n";
		}

		if ($i == $l_day) {
			$tmp .= repeat(6 - $week);
		}

		if($week == 6) {
			$tmp .= "\t</tr>\n";
		}
	}

	if($lc < 6) {
		$tmp .= "\t<tr>\n";
		$tmp .= repeat(7);
		$tmp .= "\t</tr>\n";
	}

	if($lc == 4) {
		$tmp .= "\t<tr>\n";
		$tmp .= repeat(7);
		$tmp .= "\t</tr>\n";
	}

	$tmp .= "</table>\n";

	return $tmp;
  }
}
