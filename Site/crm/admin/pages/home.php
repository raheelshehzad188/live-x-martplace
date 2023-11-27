
<?php
    $totalClicks = mysqli_fetch_array(mysqli_query($con,"SELECT count(count) as tot FROM `tbl_count`"));
?>
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content sm-gutter">
      <div class="page-title">
      </div>
	   <!-- BEGIN DASHBOARD TILES -->
	  <div class="row">	 
		<div class="col-md-3 col-vlg-3 col-sm-6">
			<div class="tiles green m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title text-black">Overall Visitors </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
                      <?php $ov=mysqli_query($con,"select * from usercheck");
					  $num=mysqli_num_rows($ov);
					  ?>
						<span class="item-title">Overall Visitors</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $num;?>" data-animation-duration="700">0</span>
					  </div>
                    </div>
                  
                    
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
                        <?php
					   $tdate=date("Y/m/d");
					  
					    $tv1=mysqli_query($con,"select * from usercheck where logindate='$tdate'");
					  $num11=mysqli_num_rows($tv1);
					  ?>
									
									
						
						<span class="item-title">Today</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $num11;?>" data-animation-duration="700">0</span> <?php									
									
									?>
					 </div>
                    </div>
                   
                   
			  </div>			
			</div>	
	

		</div>
		<div class="col-md-3 col-vlg-3 col-sm-6">
			<div class="tiles blue m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title text-black">Registered Users  </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent">
                      <?php $rt=mysqli_query($con,"select * from user");
					  $rw=mysqli_num_rows($rt);?> 
						<span class="item-title">Registered Users</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $rw;?>" data-     animation-duration="700">0</span>
					  </div>
                    </div>
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
                      <?php 
					  $utd=date('Y-m-d');
					  $rt1=mysqli_query($con,"select * from user where posting_date='$utd'");
					  $rw1=mysqli_num_rows($rt1);?>
						<span class="item-title">Today's</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $rw1;?>" data-animation-duration="700">0</span> 
					 </div>
                    </div>
			  </div>			
			</div>	
		</div>
		<div class="col-md-4 col-vlg-3 col-sm-6">
			<div class="tiles purple m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title text-black">Quote Requests </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
                      <?php
                      $qr=mysqli_query($con,"select * from prequest");
					  $oq=mysqli_num_rows($qr);
					  ?>
						<span class="item-title">Overall Quotes</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $oq?>" data-animation-duration="700">0</span>
					  </div>
                    </div>
                    <div class="widget-stats">
                      <div class="wrapper transparent">
                       <?php
                      $qr1=mysqli_query($con,"select * from prequest where status='0'");
					  $oq1=mysqli_num_rows($qr1);
					  ?>
						<span class="item-title">New Quotes's</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $oq1;?>" data-animation-duration="700">0</span> 
					  </div>
                    </div>
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
                       <?php
                      $qr2=mysqli_query($con,"select * from prequest where status='1'");
					  $oq2=mysqli_num_rows($qr2);
					  ?>
						<span class="item-title">In Progress</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $oq2;?>" data-animation-duration="700">0</span> 
					 </div>
                    </div>
                  
                    
			  </div>			
			</div>	
		</div>	
        
        
        
        
   <div class="row">	 
		<div class="col-md-3 col-vlg-3 col-sm-6">
			<div class="tiles red m-b-10">
              <div class="tiles-body">
			  <div class="controller"> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                <div class="tiles-title text-black">Overall Tickets </div>
			         <div class="widget-stats">
                      <div class="wrapper transparent"> 
                      <?php $vt=mysqli_query($con,"select * from ticket");
					  $ovt=mysqli_num_rows($vt);
					  ?>
						<span class="item-title">All Tickets</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $ovt;?>" data-animation-duration="700">0</span>
					  </div>
                    </div>
                  
                    
                    <div class="widget-stats ">
                      <div class="wrapper last"> 
                        <?php
					   $tdate=date("Y/m/d");
					  
					    $otv=mysqli_query($con,"select * from ticket where status='Open'");
					  $otv1=mysqli_num_rows($otv);
					  ?>
									
									
						
						<span class="item-title">Pending Tickets</span> <span class="item-count animate-number semi-bold" data-value="<?php echo $otv1;?>" data-animation-duration="700">0</span> <?php									
									
									?>
					 </div>
                    </div>
                   
                   
			  </div>			
			</div>	
	

		</div>
	
        </div>     
		
	 </div>
	  <!-- END DASHBOARD TILES -->
           <!-- START DASHBOARD CHART -->



                    <div class="col-lg-12">
                        <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Total Clicks </h3>
                        <p><?= $totalClicks['tot']; ?></p>
                        	<script type="text/javascript">
								var visitorsCount = [];
								var myCat =[];
								</script>
                        	<?php 
                        	$totaldays = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y")); 
                        		$month_array=array();
								for($i=1; $i<=$totaldays; $i++)
								{
									if(!array_key_exists($i,$month_array))
									{
										$key = '';
										if($i<10)
										{
											$key = '0'.$i;
											$month_array[$key] = 0;
										}
										else
										{
											$month_array[$i] = 0;
										}
										?>
										<script type="text/javascript">
										var myKey = "Day " + '<?php echo $i; ?>';
										
										myCat.push(myKey);
										</script>
										<?php
										
									}
									
									
								}
								// print_r($month_array);
								$results = mysqli_query($con,"SELECT date FROM tbl_count");
					                //$f2=mysql_num_rows($a2);
									
									if(mysqli_num_rows($results) >0)
									{
										while($row = mysqli_fetch_row($results))
										{
											$user_date = $row[0];
											$dateArray = explode('/',$user_date);
											$year = $dateArray[0];
											 $monthName = date("M", mktime(0, 0, 0, $dateArray[1], 10));
											 $currentMonth = date('m',mktime(0, 0, 0, $dateArray[1], 10));
											// echo $monthName; 
											//$month = date("M", strtotime($user_date));
											//echo $month;
											
											
											//echo $month.'<br/>';
											
											//$day = date('d',$dateArray));
											
											if($year == date("Y") && $currentMonth == date("m"))
											{
												
												if(array_key_exists($dateArray[2],$month_array))
												{
													$month_array[$dateArray[2]] = $month_array[$dateArray[2]] + 1;
												}
											}											
										}
									}
										//print_r($month_array);
									foreach($month_array as $key=>$value)
									{
									?>
									<script type="text/javascript">
									visitorsCount.push(<?php echo $value;?>);
									</script>
									<?php									
									}
									?>
									<script type="text/javascript">
								var d = new Date();
								var month = new Array();
								month[0] = "January";
								month[1] = "February";
								month[2] = "March";
								month[3] = "April";
								month[4] = "May";
								month[5] = "June";
								month[6] = "July";
								month[7] = "August";
								month[8] = "September";
								month[9] = "October";
								month[10] = "November";
								month[11] = "December";
								var n = month[d.getMonth()];
								$(function () {
								$('#container1').highcharts({
									title: {
										text: 'Daily Visitors Chart of ' + n,
										x: -20 //center
									},
									subtitle: {
										text: '',
										x: -20
									},
									xAxis: {
										categories: myCat
									},
									yAxis: {
										min:0,
										title: {
											text: 'Visitors Count'
										},
										plotLines: [{
											value: 0,
											width: 1,
											color: '#808080'
										}]
									},
									tooltip: {
										valueSuffix: ' Users'
									},
									legend: {
										layout: 'vertical',
										align: 'right',
										verticalAlign: 'middle',
										borderWidth: 0
									},
									series: [{
										name: 'visitorsCount',
										data: visitorsCount
									}]
								});
							});
								</script>
								
									<div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                    <div class="col-lg-12" style="min-height:280px;">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> All User Visit </h3>
								
								<script type="text/javascript">
								var visitorsCount = [];
								var myCat =[];
								</script>
								<?php
								$totaldays = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y")); 
								
								$month_array=array();
								for($i=1; $i<=$totaldays; $i++)
								{
									if(!array_key_exists($i,$month_array))
									{
										$key = '';
										if($i<10)
										{
											$key = '0'.$i;
											$month_array[$key] = 0;
										}
										else
										{
											$month_array[$i] = 0;
										}
										?>
										<script type="text/javascript">
										var myKey = "Day " + '<?php echo $i; ?>';
										
										myCat.push(myKey);
										</script>
										<?php
										
									}
									
									
								}
								//print_r($month_array);
								$results = mysqli_query($con,"SELECT logindate FROM usercheck");
					                //$f2=mysql_num_rows($a2);
									
									if(mysqli_num_rows($results) >0)
									{
										while($row = mysqli_fetch_row($results))
										{
											$user_date = $row[0];
											$dateArray = explode('/',$user_date);
											$year = $dateArray[0];
											 $monthName = date("M", mktime(0, 0, 0, $dateArray[1], 10));
											 $currentMonth = date('m',mktime(0, 0, 0, $dateArray[1], 10));
											// echo $monthName; 
											//$month = date("M", strtotime($user_date));
											//echo $month;
											
											
											//echo $month.'<br/>';
											
											//$day = date('d',$dateArray));
											
											if($year == date("Y") && $currentMonth == date("m"))
											{
												
												if(array_key_exists($dateArray[2],$month_array))
												{
													$month_array[$dateArray[2]] = $month_array[$dateArray[2]] + 1;
												}
											}											
										}
									}
									//print_r($month_array);
									foreach($month_array as $key=>$value)
									{
									?>
									<script type="text/javascript">
									visitorsCount.push(<?php echo $value;?>);
									</script>
									<?php									
									}
									?>
									
								
										
							
								<script type="text/javascript">
								var d = new Date();
								var month = new Array();
								month[0] = "January";
								month[1] = "February";
								month[2] = "March";
								month[3] = "April";
								month[4] = "May";
								month[5] = "June";
								month[6] = "July";
								month[7] = "August";
								month[8] = "September";
								month[9] = "October";
								month[10] = "November";
								month[11] = "December";
								var n = month[d.getMonth()];
								$(function () {
								$('#container').highcharts({
									title: {
										text: 'Daily Visitors Chart of ' + n,
										x: -20 //center
									},
									subtitle: {
										text: '',
										x: -20
									},
									xAxis: {
										categories: myCat
									},
									yAxis: {
										min:0,
										title: {
											text: 'Visitors Count'
										},
										plotLines: [{
											value: 0,
											width: 1,
											color: '#808080'
										}]
									},
									tooltip: {
										valueSuffix: ' Users'
									},
									legend: {
										layout: 'vertical',
										align: 'right',
										verticalAlign: 'middle',
										borderWidth: 0
									},
									series: [{
										name: 'visitorsCount',
										data: visitorsCount
									}]
								});
							});
								</script>
								<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
								
                            </div>
                            <div class="panel-body">
                                <div id="morris-line-chart"></div>
                                <div class="text-right">
                                    <a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
             
                    <!-- END DASHBOARD CHART --> 
			
               