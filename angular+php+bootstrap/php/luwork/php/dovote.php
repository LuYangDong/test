<?php
	$q=$_REQUEST["q"];
	$dir = "../vote/vote.txt";
	$vote=file_get_contents($dir);
	$arrVote = explode("|",$vote);
	
	switch($q){
		case 1:
			$arrVote[0]++;
			break;
		case 2:
			$arrVote[1]++;
			break;
		case 3:
			$arrVote[2]++;
			break;
		case 4:
			$arrVote[3]++;
			break;
		case 5:
			$arrVote[4]++;
			break;
		case 6:
			$arrVote[5]++;
			break;
		case 7:
			$arrVote[6]++;
			break;
		case 8:
			$arrVote[7]++;
			break;
	}
	$str = implode("|",$arrVote);
	
	file_put_contents($dir,$str);
	
	
	
	$num = 0;
	for($i=0; $i<count($arrVote); $i++){
		$num= $num+$arrVote[$i];	
	}
	
	
?>

	<div class="page-header">
	   <h4>各菜系喜欢程度百分比</h4> 
	   <div><small>此数据来自<?php echo $num;?>的不完全统计</small></div>
    </div>
    <p>川菜（<?php echo round(($arrVote[0]/$num)*100,2);?>%）</p>
   <div class="progress">
	  <div class="progress-bar  <?php 
	  	$color1 = round(($arrVote[0]/$num)*100,2);
	  	if($color1<=25){
			echo "progress-bar-danger";
		}else if($color1<=50){
			echo "progress-bar-warning";
		}else if( $color1<=75){
			echo "progress-bar-info";
		}else{
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="<?php echo round(($arrVote[0]/$num)*100,2);?>%" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arrVote[0]/$num)*100,2);?>%">
	  </div>
	</div>
	 <p>鲁菜（<?php echo round(($arrVote[1]/$num)*100,2);?>%））</p>
   <div class="progress">
	  <div class="progress-bar <?php 
	  	$color2 = round(($arrVote[1]/$num)*100,2);
	 if($color2<=25){
			echo "progress-bar-danger";
		}else if($color2>25 && $color2<=50){
			echo "progress-bar-warning";
		}else if($color2>50 && $color2<=75){
			echo "progress-bar-info";
		}else if($color2>75){
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:  <?php echo round(($arrVote[1]/$num)*100,2);?>%">
	  </div>
	</div>
	 <p>粤菜（<?php echo round(($arrVote[2]/$num)*100,2);?>%）</p>
   <div class="progress">
	  <div class="progress-bar <?php 
	  	$color3 = round(($arrVote[2]/$num)*100,2);
	 	if($color3<=25){
			echo "progress-bar-danger";
		}else if($color3>25 && $color3<=50){
			echo "progress-bar-warning";
		}else if($color3>50 && $color3<=75){
			echo "progress-bar-info";
		}else if($color3>75){
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arrVote[2]/$num)*100,2);?>%">
	  </div>
	</div>
	 <p>苏菜（<?php echo round(($arrVote[3]/$num)*100,2);?>%）</p>
   <div class="progress">
	  <div class="progress-bar <?php 
	  	$color4 = round(($arrVote[3]/$num)*100,2);
	  	if($color4<=25){
			echo "progress-bar-danger";
		}else if($color4>25 && $color4<=50){
			echo "progress-bar-warning";
		}else if($color4>50 && $color4<=75){
			echo "progress-bar-info";
		}else if($color4>75){
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arrVote[3]/$num)*100,2);?>%">
	  </div>
	</div>
	 <p>浙菜（<?php echo round(($arrVote[4]/$num)*100,2);?>%）</p>
   <div class="progress">
	  <div class="progress-bar <?php 
	  	$color5 = round(($arrVote[4]/$num)*100,2);
	 	if($color5<=25){
			echo "progress-bar-danger";
		}else if($color5>25 && $color5<=50){
			echo "progress-bar-warning";
		}else if($color5>50 && $color5<=75){
			echo "progress-bar-info";
		}else if($color5>75){
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:  <?php echo round(($arrVote[4]/$num)*100,2);?>%">
	  </div>
	</div>
	 <p>闽菜（<?php echo round(($arrVote[5]/$num)*100,2);?>%）</p>
   <div class="progress">
	  <div class="progress-bar <?php 
	  	$color6= round(($arrVote[5]/$num)*100,2);
	  	if($color6<=25){
			echo "progress-bar-danger";
		}else if($color6>25 && $color6<=50){
			echo "progress-bar-warning";
		}else if($color6>50 && $color6<=75){
			echo "progress-bar-info";
		}else if($color6>75){
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width:  <?php echo round(($arrVote[5]/$num)*100,2);?>%">
	  </div>
	</div>
	 <p>湘菜（<?php echo round(($arrVote[6]/$num)*100,2);?>%）</p>
   <div class="progress">
	  <div class="progress-bar <?php 
	  	$color7 = round(($arrVote[6]/$num)*100,2);
	 	if($color7<=25){
			echo "progress-bar-danger";
		}else if($color7>25 && $color7<=50){
			echo "progress-bar-warning";
		}else if($color7>50 && $color7<=75){
			echo "progress-bar-info";
		}else if($color7>75){
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arrVote[6]/$num)*100,2);?>%">
	  </div>
	</div>
	 <p>徽菜（<?php echo round(($arrVote[7]/$num)*100,2);?>%)</p>
   <div class="progress">
	  <div class="progress-bar <?php 
	  	$color8 = round(($arrVote[7]/$num)*100,2);
	  	if($color8<=25){
			echo "progress-bar-danger";
		}else if($color8>25 && $color8<=50){
			echo "progress-bar-warning";
		}else if($color8>50 && $color8<=75){
			echo "progress-bar-info";
		}else if($color8>75){
			echo "progress-bar-success";
		}
	  ?> progress-bar-striped" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo round(($arrVote[7]/$num)*100,2);?>%">
	  </div>
	</div>  