<?php
if(!defined('INITIALIZED'))
	exit;
$getCasts = $SQL->query("SELECT * FROM `live_casts` ORDER BY `spectators` DESC")->fetchAll();
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
													<tr bgcolor="'.$config['site']['darkborder'].'">
														<td class="LabelV" >Status</td>
														<td style="width:90%;" >'.(($config['status']['serverStatus_online'] == 1) ? 'Online' : 'Offline').'</td>
													</tr>
													<tr bgcolor="'.$config['site']['lightborder'].'">
														<td class="LabelV" >Players in Cast</td>
														<td style="width:90%;" >'.count($getCasts).'</td>
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
	</div>
	
	
	<p>Currently our server has a unique Cast system.</p>
	<p>You can watch our players just by clicking to enter the account without entering the account, let alone the password. A list of the players that are broadcasting will be shown, so choose one and click to enter. After entering the cast of the player, you can interact with him using Spectator Chat, a chat where you can talk to the player and other spectators.</p>
	<p>If you are a player and want to broadcast your game, enter your character and use the command <strong>!cast</strong>, If you want to put a password in your cast type the command <strong>!cast password</strong>, The word "password" will be your cast password.</p>';
	
$main_content .= '
	<div class="TableContainer">
		<div class="CaptionContainer">
			<div class="CaptionInnerContainer"> 
				<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
				<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span> 
				<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span> 
				<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
				<div class="Text">Players in Cast</div>
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
													<tr bgcolor="'.$config['site']['darkborder'].'">
														<td class="LabelV"  width="4%">Outfit</td>
														<td class="LabelV" width="90%">Name</td>
														<td class="LabelV" width="3%" >Spectators</td>
														<td class="LabelV" width="3%"></td>
													</tr>';
											$cast_number = 0;
										if(count($getCasts) > 0)
											foreach($getCasts as $cast) {
												
												$player = new Player();
												$player->loadById($cast['player_id']);
												
												$bgcolor = (($cast_number++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
												$main_content .= '
													<tr bgcolor="'.$bgcolor.'">
														<td width="32px" style="position:relative;"><span style="display:block; position:absolute; top:-30px; left:-20px;"><img src="outfit.php?id='.$player->getLookType().'&addons='.$player->getLookAddons().'&head='.$player->getLookHead().'&body='.$player->getLookBody().'&legs='.$player->getLookLegs().'&feet='.$player->getLookFeet().'&mount=500&direction=3"/></span></td>
														<td><a href="?subtopic=characters&name='.urlencode($player->getName()).'">'.htmlspecialchars($player->getName()).'</a><br><small>(' . htmlspecialchars($vocation_name[$player->getVocation()]) . ' - Level '.$player->getLevel().')</small></td>
														<td width="32px">'.$cast['spectators'].'</td>
														<td width="32px" align="center">'.(($cast['password'] == 1) ? '<img src="images/lockcast.png" width="32px" alt="Cast Locked">' : '').'</td>
													</tr>';
											}
										else {
												$main_content .= '
													<tr>
														<td colspan="6" bgcolor="'.$config['site']['lightborder'].'">No cast at the moment.</td>
													</tr>';
										}
											$main_content .= '
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
	</div>';