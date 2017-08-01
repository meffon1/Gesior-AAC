<?php
if(!defined('INITIALIZED'))
	exit;

if($action == "") {	

	$main_content .= '
		<center>
			<table>
				<tbody>
					<tr>
						<td><img src="'.$layout_name.'/images/global/content/headline-bracer-left.gif"></td>
						<td style="text-align:center;vertical-align:middle;horizontal-align:center;font-size:17px;font-weight:bold;">Server Information</td>
						<td><img src="'.$layout_name.'/images/global/content/headline-bracer-right.gif"></td>
					</tr>
				</tbody>
			</table>
		</center>
		<br>';
		
		$main_content .= '
			<style>
				ul.countdown {
				  list-style: none;
				  padding: 0;
				  display: block;
				  text-align: center;
				  margin-top:-15px;
				}
				
				ul.countdown li { display: inline-block; }
				
				ul.countdown li span {
				  font-size: 45px;
				  font-weight: 300;
				  line-height: 60px;
				  padding: 0 20px;
				  border-top: 1px solid #C0392B;
				  border-bottom: 1px solid #C0392B;
				  margin-left: -4px;
				}
				
				ul.countdown li p {
				  color: #a7abb1;
				  font-size: 14px;
				  text-transform: uppercase;
				  margin-top:-3px;
				}
				
				.hours {
				  background-color: #C0392B;
				  padding: 0 10px;
				  color: #fff;
				}
				
				.last { border-right: 1px solid #C0392B; }
			</style>';

			$main_content .= '<script>';
			$todayDate = mktime(06, 00, 0, date('n'), date('j'));
			if(time() < $todayDate) // it's before 2:45
			{
				$main_content .= 'var secondsToServerSave = ' . ($todayDate - time()) . '';
			}
			else // it's after 2:45
			{
				$main_content .= 'var secondsToServerSave = ' . (mktime(06, 00, 0, date('n'), date('j') + 1) - time()) . '';
			}
			$main_content .= '</script>';
		$main_content .= '
			<script>
			function updateServerSaveTimer()
{
	secondsToServerSave -= 1;
	if(secondsToServerSave < 0) {
		secondsToServerSave = 86400;
	}

	var horas = Math.floor(secondsToServerSave / 3600);
	var str;
	var minutos;
	var segundos;
	minutos = Math.floor((secondsToServerSave % 3600) / 60);
	segundos = (secondsToServerSave % 60);
	$(\'.hours\').html(horas);
	$(\'.minutes\').html(minutos);
	$(\'.seconds\').html(segundos);
}

$(function() {
	setInterval(\'updateServerSaveTimer()\', 1000);
});

			</script>';
		$main_content .= '	
			<h2><center>Time for server save</center></h2>
			<ul class="countdown">
				<li>
					<span class="hours">00</span>
					<p class="hours_ref">Hours</p>
				</li>
				<li>
					<span class="minutes">00</span>
					<p class="minutes_ref">Minutes</p>
				</li>
				<li>
					<span class="seconds last">00</span>
					<p class="seconds_ref">Seconds</p>
				</li>
			</ul>';
	
	$main_content .= '
		<div class="TableContainer">
			<div class="CaptionContainer">
				<div class="CaptionInnerContainer"> 
					<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
					<div class="Text">Information</div>
					<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span> 
					<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
					<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
					<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
				</div>
			</div>
			<table class="Table3" cellpadding="0" cellspacing="0">
				<tbody>
					<tr>
						<td>
							<div class="InnerTableContainer" >
								<table style="width:100%;" >
									<tr>
										<td>
											<div class="TableShadowContainerRightTop" >
												<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
											</div>
											<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
												<div class="TableContentContainer" >
													<table class="TableContent" width="100%">
														<tr style="background-color:#D4C0A1;" >
															<td width="30%" class="LabelV">PvP Protection:</td>
															<td>to level '.$config['server']['protectionLevel'].'</td>
														</tr>
														<tr style="background-color:#F1E0C6;" >
															<td class="LabelV">Exp Rate:</td>
															<td>';
														$stages = simplexml_load_file($config['site']['serverPath'].'/data/XML/stages.xml'); //carrega o arquivo XML e retornando um Array
														foreach($stages->stage as $stage)
															$main_content .= '<li>' . $stage['minlevel'] . ((empty($stage['maxlevel'])) ? '' : ' - ') . $stage['maxlevel'] . ', ' . $stage['multiplier'] . 'x</li>';
														$main_content .= '
															</td>
														</tr>
														<tr style="background-color:#D4C0A1;" >
															<td class="LabelV">Skill Rate:</td>
															<td>'.$config['server']['rateSkill'].'x</td>
														</tr>
														<tr style="background-color:#F1E0C6;" >
															<td class="LabelV">Magic Rate:</td>
															<td>'.$config['server']['rateMagic'].'x</td>
														</tr>
														<tr style="background-color:#D4C0A1;" >
															<td class="LabelV">Loot Rate:</td>
															<td>'.$config['server']['rateLoot'].'x</td>
														</tr>
														<tr style="background-color:#F1E0C6;" >
															<td class="LabelV">Kills to RedSkull:</td>
															<td>'.$config['server']['killsToRedSkull'].'x</td>
														</tr>
														<tr style="background-color:#D4C0A1;" >
															<td class="LabelV">Kills to BlackSkull:</td>
															<td>'.$config['server']['killsToBlackSkull'].'x</td>
														</tr>
														<tr style="background-color:#F1E0C6;" >
															<td class="LabelV">Free bless to level:</td>
															<td>50</td>
														</tr>
													</table>
												</div>
											</div>
											<div class="TableShadowContainer" >
												<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
													<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
													<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
												</div>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div><br>';

}