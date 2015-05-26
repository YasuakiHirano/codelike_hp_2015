<?php

// 仕事予定配列作成
function getWorkDate($inputMonth = "",&$work_dates){
    if (empty($year) && empty($month)) {
        $year = date('Y');
        $month = date('n');
    }
    if($inputMonth != ""){
        $month = $inputMonth;
    }
    
    //月末の取得
    $l_day = date('j', mktime(0, 0, 0, $month + 1, 0, $year));
    $lc = 0;

    //月末分繰り返す
    for ($i = 1; $i < $l_day + 1;$i++) {
		if(($month == 1 && $i == 1) || ($month == 1 && $i == 2)){
			// さすがに正月はお休み
			continue;
		}
		// 10月以降は仕事ない予定
		if(10 <= $month){
			break;	
		}

		// 仕事日配列にインサート
		$date = $year."-".$month."-".sprintf("%02d",$i);
		$work_dates[] = $date;
	}
}

function showCalenderList($inputMonth = "", $work_dates){
    if (empty($year) && empty($month)) {
        $year = date('Y');
        $month = date('n');
    }
    if($inputMonth != ""){
        $month = $inputMonth;
    }
    
    //月末の取得
    $l_day = date('j', mktime(0, 0, 0, $month + 1, 0, $year));

    $lc = 0;

    //月末分繰り返す
    for ($i = 1; $i < $l_day + 1;$i++) {
		$date = $year."-".$month."-".sprintf("%02d",$i);
		$datetime = date_create($date);
		// 1 => "日", 2 => "月", 3 => "火", 4 => "水", 5 => "木", 6 => "金", 7 => "土"
		$week = array(1,2,3,4,5,6,7);
		$w = (int)$datetime->format('w');

        if ($i == date('j') && $year == date('Y') && $month == date('n')) {
            echo brPt('<span id="now_day">'.sprintf("%02d",$i)."</span>", $week[$w],$work_dates,$date);
        } else {
            echo brPt(sprintf("%02d",$i), $week[$w],$work_dates,$date);
        }
    }
}
function brPt($day_str, $day_type,$work_dates,$date){
	if($day_type == 1 || $day_type == 7){
		// 休日
    	echo '<div class="date_box_holiday">'.$day_str.'</div>';
	} else if(in_array($date, $work_dates)){
		// 平日でも残念ながら仕事の日
    	echo '<div class="date_box_work">'.$day_str.'</div>';
	} else {
		// 平日 
    	echo '<div class="date_box">'.$day_str.'</div>';
	}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="./css/tooltipster.css" />
        <link rel="stylesheet" type="text/css" href="./css/main.css" />
    	<link rel="icon" href="favicon.ico">
        <script src="./js/jquery-2.1.4.min.js"></script>
        <script src="./js/jQueryRotate.js"></script>
        <script src="./js/jquery.jrumble.1.3.min.js"></script>
        <script src="./js/jquery.tooltipster.js"></script>
        <script src="./js/main.js"></script>
        <title>CodeLike | Web・ソフトウェア・モバイルアプリ開発 / 個人事業・フリーランス</title>
    </head>
    <body>
		<?php require 'menu_area.php'; ?>
        <div id="main_area">
           <div id="codelike_other_area">
               <img src="./images/codelike_logo.png" width="125" />
           </div>
        	<div class="head_title">Calender</div>
			<div id="calender_main">
				<div id="calender_title">お仕事状況(平野靖朗)</div>
				<div id="calender_text">
					背景色にて、仕事の状況を把握できます。<br />
					・背景:白色=>予定のない平日です。(お仕事募集中の日)<br />
					・背景:青色=>日中仕事をしています。(9:00〜18:00)<br />
					・背景:ピンク色=>休日です。<br />
					・背景:赤色=>予定でいっぱいいっぱいの休日です。<br />
					・文字:赤色=>今日です。
				</div>
				<?php 
				$work_dates = array();
				$i = 1;
				for($i = 1; $i <= 12; $i++){
					echo '<div class="one_month_cal">';
					echo '<div class="month_title">'.$i."月"."</div>";
					getWorkDate($i, $work_dates);
					showCalenderList($i, $work_dates); 
					echo '</div>';
				}
				?>
			</div>
        </div>
    </body>
</html>
