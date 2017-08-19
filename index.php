<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>NHSO - Dashboard Open Data</title>
  <meta name="description" content="Responsive, Bootstrap, BS4" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="css/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="css/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/material-design-icons/material-design-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/ionicons/css/ionicons.min.css" type="text/css" />
  <link rel="stylesheet" href="css/simple-line-icons/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.min.css" type="text/css" />

  <!-- build:css css/styles/app.min.css -->
  <link rel="stylesheet" href="css/styles/app.css" type="text/css" />
  <link rel="stylesheet" href="css/styles/style.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="css/styles/font.css" type="text/css" />
</head>
<body>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside fade nav-dropdown black">
    <!-- fluid app aside -->
    <div class="navside dk" data-layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a href="index.php" class="navbar-brand">
        	<div data-ui-include="'images/logo.svg'"></div>
        	<img src="images/logo.png" alt="." class="hide">
        	<span class="hidden-folded inline">NHSO</span>
        </a>
        <!-- / brand -->
      </div>
      <div data-flex class="hide-scroll">
          <nav class="scroll nav-stacked nav-stacked-rounded nav-color">
            
            <ul class="nav" data-ui-nav>
              <li class="nav-header hidden-folded">
                <span class="text-xs">Main</span>
              </li>
              <li>
                <a href="index.php" class="b-danger">
                  <span class="nav-icon text-white no-fade">
                    <i class="ion-filing"></i>
                  </span>
                  <span class="nav-text">Dashboard</span>
                </a>
              </li>
              
            </ul>
          </nav>
      </div>
      <div data-flex-no-shrink>
        <div class="nav-fold dropup">
          <a data-toggle="dropdown">
              <div class="pull-left">
                <div class="inline"><span class="avatar w-40 grey">NH</span></div>
                <img src="images/a0.jpg" alt="..." class="w-40 img-circle hide">
              </div>
              <div class="clear hidden-folded p-x">
                <span class="block _500 text-muted">Jean Reyes</span>
                <div class="progress-xxs m-y-sm lt progress">
                    <div class="progress-bar info" style="width: 15%;">
                    </div>
                </div>
              </div>
          </a>
          <div class="dropdown-menu w dropdown-menu-scale ">
            <a class="dropdown-item" href="profile.html">
              <span>Profile</span>
            </a>
            <a class="dropdown-item" href="setting.html">
              <span>Settings</span>
            </a>
            <a class="dropdown-item" href="app.inbox.html">
              <span>Inbox</span>
            </a>
            <a class="dropdown-item" href="app.message.html">
              <span>Message</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="docs.html">
              Need help?
            </a>
            <a class="dropdown-item" href="signin.html">Sign out</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container black" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">Dashboard</div>
                <!-- nabar right -->
                <ul class="nav navbar-nav pull-right">
                  <li class="nav-item dropdown pos-stc-xs">
                    <a class="nav-link" data-toggle="dropdown">
                      <i class="ion-android-search w-24"></i>
                    </a>
                    <div class="dropdown-menu text-color w-md animated fadeInUp pull-right">
                      <!-- search form -->
                      <form class="navbar-form form-inline navbar-item m-a-0 p-x v-m" role="search">
                        <div class="form-group l-h m-a-0">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search projects...">
                            <span class="input-group-btn">
                              <button type="submit" class="btn white b-a no-shadow"><i class="fa fa-search"></i></button>
                            </span>
                          </div>
                        </div>
                      </form>
                      <!-- / search form -->
                    </div>
                  </li>
                  <li class="nav-item dropdown pos-stc-xs">
                    <a class="nav-link clear" data-toggle="dropdown">
                      <i class="ion-android-notifications-none w-24"></i>
                      <span class="label up p-a-0 danger"></span>
                    </a>
                    <!-- dropdown -->
                    
                    <!-- / dropdown -->
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link clear" data-toggle="dropdown">
                      <span class="avatar w-32">
                        <img src="images/a3.jpg" class="w-full rounded" alt="...">
                      </span>
                    </a>
                    <div class="dropdown-menu w dropdown-menu-scale pull-right">
                      <a class="dropdown-item" href="profile.html">
                        <span>Profile</span>
                      </a>
                      <a class="dropdown-item" href="setting.html">
                        <span>Settings</span>
                      </a>
                      <a class="dropdown-item" href="app.inbox.html">
                        <span>Inbox</span>
                      </a>
                      <a class="dropdown-item" href="app.message.html">
                        <span>Message</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="docs.html">
                        Need help?
                      </a>
                      <a class="dropdown-item" href="signin.html">Sign out</a>
                    </div>
                  </li>
                </ul>
                <!-- / navbar right -->
          </div>
    </div>
    <div class="app-footer white bg p-a b-t">
      <div class="pull-right text-sm text-muted">Version 1.0.1</div>
      <span class="text-sm text-muted">NHSO &copy; Copyright <script>document.write(new Date().getFullYear())</script></span>
    </div>
    <div class="app-body">

<!-- ############ PAGE START-->
<div class="row-col">
	<div class="col-lg b-r">
		<div class="row no-gutter">
			<div class="col-xs-6 col-sm-3 b-r b-b">
				<div class="padding">
					<div>
						<span class="pull-right"><i class="fa fa-caret-down text-danger m-y-xs"></i></span>
						<span class="text-muted l-h-1x"><i class="ion-ios-grid-view text-muted"></i></span>
					</div>
					<div class="text-center">
						<h2 class="text-center _600">161.1 M</h2>
						<p class="text-muted m-b-md">Out-Patient Dept.</p>
						<div>
							<span data-ui-jp="sparkline" data-ui-options="[2,3,2,2,1,3,6,3,2,1], {type:'line', height:20, width: '60', lineWidth:1, valueSpots:{'0:':'#818a91'}, lineColor:'#818a91', spotColor:'#818a91', fillColor:'', highlightLineColor:'rgba(120,130,140,0.3)', spotRadius:0}" class="sparkline inline"></span>
						</div>
					</div>
				</div>
	        </div>
	        <div class="col-xs-6 col-sm-3 b-r b-b">
				<div class="padding">
					<div>
						<span class="pull-right"><i class="fa fa-caret-down text-danger m-y-xs"></i></span>
						<span class="text-muted l-h-1x"><i class="ion-document text-muted"></i></span>
					</div>
					<div class="text-center">
						<h2 class="text-center _600">0.120 M</h2>
						<p class="text-muted m-b-md">In-Patient Dept.</p>
						<div>
							<span data-ui-jp="sparkline" data-ui-options="[1,1,0,2,3,4,2,1,2,2], {type:'line', height:20, width: '60', lineWidth:1, valueSpots:{'0:':'#818a91'}, lineColor:'#818a91', spotColor:'#818a91', fillColor:'', highlightLineColor:'rgba(120,130,140,0.3)', spotRadius:0}" class="sparkline inline"></span>
						</div>
					</div>
				</div>
	        </div>
	        <div class="col-xs-6 col-sm-3 b-r b-b">
				<div class="padding">
					<div>
						<span class="pull-right"><i class="fa fa-caret-up text-primary m-y-xs"></i></span>
						<span class="text-muted l-h-1x"><i class="ion-pie-graph text-muted"></i></span>
					</div>
					<div class="text-center">
						<h2 class="text-center _600">147.7 M</h2>
						<p class="text-muted m-b-md">NHSO Fund</p>
						<div>
							<span data-ui-jp="sparkline" data-ui-options="[9,2,5,5,7,4,4,3,2,2], {type:'line', height:20, width: '60', lineWidth:1, valueSpots:{'0:':'#818a91'}, lineColor:'#818a91', spotColor:'#818a91', fillColor:'', highlightLineColor:'rgba(120,130,140,0.3)', spotRadius:0}" class="sparkline inline"></span>
						</div>
					</div>
				</div>
	        </div>
	        <div class="col-xs-6 col-sm-3 b-b">
				<div class="padding">
					<div>
						<span class="pull-right"><i class="fa fa-caret-up text-primary m-y-xs"></i></span>
						<span class="text-muted l-h-1x"><i class="ion-paper-airplane text-muted"></i></span>
					</div>
					<div class="text-center">
						<h2 class="text-center _600">91.11%</h2>
						<p class="text-muted m-b-md">Satisfaction Rate</p>
						<div>
							<span data-ui-jp="sparkline" data-ui-options="[3,3,1,62,4,3,7,3,2,5], {type:'line', height:20, width: '60', lineWidth:1, valueSpots:{'0:':'#818a91'}, lineColor:'#818a91', spotColor:'#818a91', fillColor:'', highlightLineColor:'rgba(120,130,140,0.3)', spotRadius:0}" class="sparkline inline"></span>
						</div>
					</div>
				</div>
	        </div>
        </div>
		<div class="padding">
			<div class="row">
			    <div class="col-sm-4">
			        <div class="box">
			          <div class="box-header">
			            <h3>Out-Patient Dept.</h3>
			            <small>A total out-patients</small>
			          </div>
			          <div class="box-tool">
				        <ul class="nav">
				          <li class="nav-item inline">
				            <a class="nav-link">
				              <i class="ion-android-sync m-x-xs"></i>
				            </a>
				          </li>
				          <li class="nav-item inline dropdown">
				            <a class="nav-link" data-toggle="dropdown">
				              <i class="ion-android-menu m-x-xs"></i>
				            </a>
				            <div class="dropdown-menu dropdown-menu-scale pull-right">
				              <a class="dropdown-item" href="#">This week</a>
				              <a class="dropdown-item" href="#">This month</a>
				              <a class="dropdown-item" href="#">This week</a>
				              <div class="dropdown-divider"></div>
				              <a class="dropdown-item">Today</a>
				            </div>
				          </li>
				        </ul>
				      </div>
				      	<div>
			            <canvas data-ui-jp="chart" data-ui-options="
				            {
				              type: 'line',
				              data: {
				                  labels: ['2552', '2553', '2554', '2555', '2556', '2557', '2558'],
				                  datasets: [
				                      {
				                          label: 'Dataset',
				                          data: [147.6, 146, 146.3, 148.8, 151.9, 161.5, 161.1],
				                          fill: true,
				                          backgroundColor: '#2196f3',
				                          borderColor: '#2196f3',
				                          borderWidth: 2,
				                          borderCapStyle: 'butt',
				                          borderDash: [],
				                          borderDashOffset: 0.0,
				                          borderJoinStyle: 'miter',
				                          pointBorderColor: '#2196f3',
				                          pointBackgroundColor: '#fff',
				                          pointBorderWidth: 2,
				                          pointHoverRadius: 4,
				                          pointHoverBackgroundColor: '#2196f3',
				                          pointHoverBorderColor: '#fff',
				                          pointHoverBorderWidth: 2,
				                          pointRadius: [0,4,4,4,4,4,0],
				                          pointHitRadius: 10,
				                          spanGaps: false
				                      }
				                  ]
				              },
				              options: {
				              	scales: {
				              		xAxes: [{
					                   display: false
					                }],
					                yAxes: [{
					                   display: false,
					                   ticks:{
					                   	 min: 0,
					                   	 max: 200
					               	   }
					                }]
				              	},
				              	legend: {
				              		display: false
				              	}
				              }
				            }
				            " height="150">
				            </canvas>
				      	</div>
				        <div class="box-body info text-center p-b-md">
				        	<span class="dark-white rounded m-r p-x p-y-xs text-info"><i class="fa fa-caret-down"></i> 0.24%</span>
				        	<span>Over last year</span>
				        </div>
			        </div>
			    </div>
			    <div class="col-sm-4">
			    	<div class="box">
			          <div class="box-header">
			            <h3>In-Patients Dept.</h3>
			            <small>A total in-patients</small>
			          </div>
			          <div class="box-tool">
				        <ul class="nav">
				          <li class="nav-item inline">
				            <a class="nav-link">
				              <i class="ion-android-sync m-x-xs"></i>
				            </a>
				          </li>
				          <li class="nav-item inline dropdown">
				            <a class="nav-link" data-toggle="dropdown">
				              <i class="ion-android-menu m-x-xs"></i>
				            </a>
				            <div class="dropdown-menu dropdown-menu-scale pull-right">
				              <a class="dropdown-item" href="#">This week</a>
				              <a class="dropdown-item" href="#">This month</a>
				              <a class="dropdown-item" href="#">This week</a>
				              <div class="dropdown-divider"></div>
				              <a class="dropdown-item">Today</a>
				            </div>
				          </li>
				        </ul>
				      </div>
				        <div>
			            <canvas data-ui-jp="chart" data-ui-options="
				            {
				              type: 'line',
				              data: {
				                  labels: ['2552', '2553', '2554', '2555', '2556', '2557', '2558'],
				                  datasets: [
				                      {
				                          label: 'Dataset',
				                          data: [5.29, 5.55, 5.53, 5.62, 5.82, 5.74, 5.78],
				                          fill: true,
				                          backgroundColor: '#ef193c',
				                          borderColor: '#ef193c',
				                          borderWidth: 2,
				                          borderCapStyle: 'butt',
				                          borderDash: [],
				                          borderDashOffset: 0.0,
				                          borderJoinStyle: 'miter',
				                          pointBorderColor: '#ef193c',
				                          pointBackgroundColor: '#fff',
				                          pointBorderWidth: 2,
				                          pointHoverRadius: 4,
				                          pointHoverBackgroundColor: '#ef193c',
				                          pointHoverBorderColor: '#fff',
				                          pointHoverBorderWidth: 2,
				                          pointRadius: [0,4,4,4,4,4,0],
				                          pointHitRadius: 10,
				                          spanGaps: false
				                      }
				                  ]
				              },
				              options: {
				              	scales: {
				              		xAxes: [{
					                   display: false
					                }],
					                yAxes: [{
					                   display: false,
					                   ticks:{
					                   	 min: 0,
					                   	 max: 10
					               	   }
					                }]
				              	},
				              	legend: {
				              		display: false
				              	}
				              }
				            }
				            " height="150">
				            </canvas>
				      	</div>
				        <div class="box-body danger text-center p-b-md">
				        	<span class="dark-white rounded m-r p-x p-y-xs text-danger"><i class="fa fa-caret-up"></i> 0.67%</span>
				        	<span>Over last year</span>
				        </div>
			        </div>
			    </div>
			    <div class="col-sm-4">
			    	<div class="box">
			          <div class="box-header">
			            <h3>NHSO Funding</h3>
			            <small>From year 2552-2559</small>
			          </div>
			          <div class="box-tool">
				        <ul class="nav">
				          <li class="nav-item inline">
				            <a class="nav-link">
				              <i class="ion-android-sync m-x-xs"></i>
				            </a>
				          </li>
				          <li class="nav-item inline dropdown">
				            <a class="nav-link" data-toggle="dropdown">
				              <i class="ion-android-menu m-x-xs"></i>
				            </a>
				            <div class="dropdown-menu dropdown-menu-scale pull-right">
				              <a class="dropdown-item" href="#">This week</a>
				              <a class="dropdown-item" href="#">This month</a>
				              <a class="dropdown-item" href="#">This week</a>
				              <div class="dropdown-divider"></div>
				              <a class="dropdown-item">Today</a>
				            </div>
				          </li>
				        </ul>
				      </div>
				        <div>
			            <canvas data-ui-jp="chart" data-ui-options="
				            {
				              type: 'line',
				              data: {
				                  labels: ['2552', '2553', '2554', '2555', '2556', '2557', '2558'],
				                  datasets: [
				                      {
				                          label: 'Dataset',
				                          data: [121.1, 121.4, 133.1, 133.4, 141.4, 140.7, 147.7],
				                          fill: true,
				                          backgroundColor: '#22b66e',
				                          borderColor: '#22b66e',
				                          borderWidth: 2,
				                          borderCapStyle: 'butt',
				                          borderDash: [],
				                          borderDashOffset: 0.0,
				                          borderJoinStyle: 'miter',
				                          pointBorderColor: '#22b66e',
				                          pointBackgroundColor: '#fff',
				                          pointBorderWidth: 2,
				                          pointHoverRadius: 4,
				                          pointHoverBackgroundColor: '#22b66e',
				                          pointHoverBorderColor: '#fff',
				                          pointHoverBorderWidth: 2,
				                          pointRadius: [0,4,4,4,4,4,0],
				                          pointHitRadius: 10,
				                          spanGaps: false
				                      }
				                  ]
				              },
				              options: {
				              	scales: {
				              		xAxes: [{
					                   display: false
					                }],
					                yAxes: [{
					                   display: false,
					                   ticks:{
					                   	 min: 0,
					                   	 max: 180
					               	   }
					                }]
				              	},
				              	legend: {
				              		display: false
				              	}
				              }
				            }
				            " height="150">
				            </canvas>
				      	</div>
				        <div class="box-body success text-center p-b-md">
				        	<span class="dark-white rounded m-r p-x p-y-xs text-success"><i class="fa fa-caret-up"></i> 4.2%</span>
				        	<span>Over last year</span>
				        </div>
			        </div>
			    </div>
			</div>

	        <div class="box">
	        	<div class="box-header b-b">
	        		<h3>Overview Results In-Patient Dept.</h3>
	        	</div>
	        	<div class="box-tool">
					<div class="dropdown">
			            <a data-toggle="dropdown" class="btn btn-xs rounded white dropdown-toggle">Today</a>
			            <div class="dropdown-menu pull-right">
			              <a class="dropdown-item" href="#">Last 24 hours</a>
			              <a class="dropdown-item" href="#">Last 7 days</a>
			              <a class="dropdown-item" href="#">Last month</a>
			              <a class="dropdown-item" href="#">Last Year</a>
			              <div class="dropdown-divider"></div>
			              <a class="dropdown-item">Today</a>
			            </div>
			         </div>
	        	</div>
	        	<div>
	        		<div class="row-col">
	        			<div class="col-sm-4 b-r light lt">
	        				<div class="p-a-md">
				                <span class="pull-right text-success">5.40%</span>
				                <small>Other Intestinal Infectious Diseases</small>
					            <div class="progress progress-xs m-t-sm white bg">
					              <div class="progress-bar success" data-toggle="tooltip" data-original-title="60%" style="width: 60%"></div>
					            </div>
					            <span class="pull-right text-info">4.79%</span>
					            <small>Complication of Pregnancy</small>
					            <div class="progress progress-xs m-t-sm white bg">
					              <div class="progress-bar info" data-toggle="tooltip" data-original-title="55%" style="width: 55%"></div>
					            </div>
					            <span class="pull-right text-danger">4.46%</span>
					            <small>Other Diseases of The Digastive System</small>
					            <div class="progress progress-xs m-t-sm white bg">
					              <div class="progress-bar danger" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
					            </div>
                      <span class="pull-right text-info">4.40%</span>
                      <small>Pneumonia</small>
                      <div class="progress progress-xs m-t-sm white bg">
                        <div class="progress-bar info" data-toggle="tooltip" data-original-title="45%" style="width: 45%"></div>
                      </div>
                      <span class="pull-right text-info">4.13%</span>
                      <small>Symptoms, Signs & Abnormal Clinical & Laboratory Findings</small>
                      <div class="progress progress-xs m-t-sm white bg">
                        <div class="progress-bar danger" data-toggle="tooltip" data-original-title="40%" style="width: 40%"></div>
                      </div>
                      <span class="pull-right text-info">4.12%</span>
                      <small>Other Disorders Originating in the Perinatal Period</small>
                      <div class="progress progress-xs m-t-sm white bg">
                        <div class="progress-bar success" data-toggle="tooltip" data-original-title="40%" style="width: 35%"></div>
                      </div>
                      <span class="pull-right text-info">3.75%</span>
                      <small>Diseases of the Eye and Adnexa</small>
                      <div class="progress progress-xs m-t-sm white bg">
                        <div class="progress-bar info" data-toggle="tooltip" data-original-title="40%" style="width: 30%"></div>
                      </div>
                      <span class="pull-right text-info">2.83%</span>
                      <small>Other diseases of the respiratory system</small>
                      <div class="progress progress-xs m-t-sm white bg">
                        <div class="progress-bar danger" data-toggle="tooltip" data-original-title="40%" style="width: 25%"></div>
                      </div>
                      <span class="pull-right text-info">2.79%</span>
                      <small>Single Spontaneous Delivery</small>
                      <div class="progress progress-xs m-t-sm white bg">
                        <div class="progress-bar success" data-toggle="tooltip" data-original-title="40%" style="width: 20%"></div>
                      </div>
					            <p class="text-muted m-t-md text-sm">“Universal Health Coverage” is a system of life security which gives a person confidence that they will be able to indulge in appropriate health behavior.</p>
					        </div>
	        			</div>
	        			<div class="col-sm-8">
	        				<div class="p-a">
				        		<canvas data-ui-jp="chart" data-ui-options="
					              {
					                type: 'bar',
					                data: {
					                    labels: ['2552', '2553', '2554', '2555', '2556', '2557', '2558'],
					                    datasets: [
					                      {
					                          label: 'Dataset1',
					                          type: 'bubble',
					                          data: [
					                          	{
					                                x: 10,
					                                y: 30,
					                                r: 25
					                            },
					                            {
					                                x: 20,
					                                y: 20,
					                                r: 8
					                            },
					                            {
					                                x: 30,
					                                y: 12,
					                                r: 5
					                            },
					                            {
					                                x: 40,
					                                y: 37,
					                                r: 4
					                            },
					                            {
					                                x: 50,
					                                y: 30,
					                                r: 10
					                            },
					                            {
					                                x: 60,
					                                y: 20,
					                                r: 8
					                            },
					                            {
					                                x: 70,
					                                y: 30,
					                                r: 15
					                            }
					                          ],
					                          backgroundColor: [
					                              '#22b66e',
					                              '#FF6384',
					                              '#4BC0C0',
					                              '#E7E9ED',
					                              '#36A2EB',
					                              '#FFCE56',
					                              '#FF6384',
					                              '#36A2EB'
					                          ]
					                      },
					                      {
					                          label: 'Dataset2',
					                          type: 'bar',
					                          data: [31, 32, 33, 34, 32, 34, 35],
					                          backgroundColor: 'rgba(120,130,140,0.2)',
					                          borderColor: 'rgba(120,130,140,0.2)',
					                          borderWidth: 1,
					                          borderJoinStyle: 'miter'
					                      }
					                    ]
					                },
					                options: {
					                  scales: {
					                  	xAxes:[
					                  		{
					                  			barPercentage: 0.4
					                  		}
					                  	],
					                  	yAxes:[
					                  		{
					                  			display: false
					                  		}
					                  	]
						              },
						              legend: {
						              	position: 'bottom'
						          	  }
					                }
					              }
					              " height="200">
					            </canvas>
				            </div>
	        			</div>
	        		</div>
	        	</div>
	        </div>
			<div class="row">
			    <div class="col-sm-12">
			        <div class="box">
			            <div class="box-header">
			              <span class="label success pull-right">52</span>
			              <h3>Most Visitor Hospitals</h3>
			            </div>
			            <div class="p-b-sm">
				            <ul class="list no-border m-a-0">
				              <li class="list-item">
				                <a href="#" class="list-left">
				                	<span class="w-40 avatar danger">
					                  <span>L</span>
					                  <i class="on b-white bottom"></i>
					                </span>
				                </a>
				                <div class="list-body">
				                  <div><a href="#">Lert Sin Hospital</a></div>
				                  <small class="text-muted text-ellipsis">Bangkok, Thailand</small>
				                </div>
				              </li>
				              <li class="list-item">
				                <a href="#" class="list-left">
				                  <span class="w-40 avatar purple">
					                  <span>B</span>
					                  <i class="on b-white bottom"></i>
					              </span>
				                </a>
				                <div class="list-body">
				                  <div><a href="#">Bhumibol Adulyadej Hospital</a></div>
				                  <small class="text-muted text-ellipsis">Bangkok, Thailand</small>
				                </div>
				              </li>
				              <li class="list-item">
				                <a href="#" class="list-left">
				                  <span class="w-40 avatar info">
					                  <span>J</span>
					                  <i class="off b-white bottom"></i>
					              </span>
				                </a>
				                <div class="list-body">
				                  <div><a href="#">Rajavithi Hospital</a></div>
				                  <small class="text-muted text-ellipsis">Bangkok, Thailand</small>
				                </div>
				              </li>
				              <li class="list-item">
				                <a href="#" class="list-left">
				                  <span class="w-40 avatar warning">
					                  <span>R</span>
					                  <i class="on b-white bottom"></i>
					              </span>
				                </a>
				                <div class="list-body">
				                  <div><a href="#">Kluaynamthai Hospital</a></div>
				                  <small class="text-muted text-ellipsis">Bangkok, Thailand</small>
				                </div>
				              </li>
				              <li class="list-item">
				                <a href="#" class="list-left">
				                	<span class="w-40 avatar success">
					                  <span>K</span>
					                  <i class="away b-white bottom"></i>
					                </span>
				                </a>
				                <div class="list-body">
				                  <div><a href="#">Hua Chiew Hospital</a></div>
				                  <small class="text-muted text-ellipsis">Bangkok, Thailand</small>
				                </div>
				              </li>
				            </ul>
			            </div>
			        </div>
			    </div>
			    
			</div>

		</div> <!-- end padding-->
	</div>
	
</div>

<div class="modal fade inactive" id="chat" data-backdrop="false">
  <div class="modal-right w-xxl dark-white b-l">
  	  <div class="row-col">
  	    <a data-dismiss="modal" class="pull-right text-muted text-lg p-a-sm m-r-sm">&times;</a>
  	    <div class="p-a b-b">
  	      <span class="h5">Chat</span>
  	    </div>
  	    <div class="row-row light">
  	      <div class="row-body scrollable hover">
  	        <div class="row-inner">
  	          <div class="p-a-md">
  	            <div class="m-b">
  	              <a href="#" class="pull-left w-40 m-r-sm"><img src="images/a2.jpg" alt="..." class="w-full img-circle"></a>
  	              <div class="clear">
  	                <div class="p-a p-y-sm dark-white inline r">
  	                  Hi John, What's up...
  	                </div>
  	                <div class="text-muted text-xs m-t-xs"><i class="fa fa-ok text-success"></i> 2 minutes ago</div>
  	              </div>
  	            </div>
  	            <div class="m-b">
  	              <a href="#" class="pull-right w-40 m-l-sm"><img src="images/a3.jpg" class="w-full img-circle" alt="..."></a>
  	              <div class="clear text-right">
  	                <div class="p-a p-y-sm success inline text-left r">
  	                  Lorem ipsum dolor soe rooke..
  	                </div>
  	                <div class="text-muted text-xs m-t-xs">1 minutes ago</div>
  	              </div>
  	            </div>
  	            <div class="m-b">
  	              <a href="#" class="pull-left w-40 m-r-sm"><img src="images/a2.jpg" alt="..." class="w-full img-circle"></a>
  	              <div class="clear">
  	                <div class="p-a p-y-sm dark-white inline r">
  	                  Good!
  	                </div>
  	                <div class="text-muted text-xs m-t-xs"><i class="fa fa-ok text-success"></i> 5 seconds ago</div>
  	              </div>
  	            </div>
  	            <div class="m-b">
  	              <a href="#" class="pull-right w-40 m-l-sm"><img src="images/a3.jpg" class="w-full img-circle" alt="..."></a>
  	              <div class="clear text-right">
  	                <div class="p-a p-y-sm success inline text-left r">
  	                  Dlor soe isep..
  	                </div>
  	                <div class="text-muted text-xs m-t-xs">Just now</div>
  	              </div>
  	            </div>
  	          </div>
  	        </div>
  	      </div>
  	    </div>
  	    <div class="p-a b-t">
  	      <form>
  	        <div class="input-group">
  	          <input type="text" class="form-control" placeholder="Say something">
  	          <span class="input-group-btn">
  	            <button class="btn white b-a no-shadow" type="button">SEND</button>
  	          </span>
  	        </div>
  	      </form>
  	    </div>
  	  </div>
  </div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

  
  <!-- ############ SWITHCHER START-->

  <!-- ############ SWITHCHER END-->

<!-- ############ LAYOUT END-->
  </div>

<!-- build:js scripts/app.min.js -->
<!-- jQuery -->
  <script src="libs/jquery/dist/jquery.js"></script>
<!-- Bootstrap -->
  <script src="libs/tether/dist/js/tether.min.js"></script>
  <script src="libs/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
  <script src="libs/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="libs/PACE/pace.min.js"></script>
  <script src="libs/jquery-pjax/jquery.pjax.js"></script>
  <script src="libs/blockUI/jquery.blockUI.js"></script>
  <script src="libs/jscroll/jquery.jscroll.min.js"></script>

  <script src="scripts/config.lazyload.js"></script>
  <script src="scripts/ui-load.js"></script>
  <script src="scripts/ui-jp.js"></script>
  <script src="scripts/ui-include.js"></script>
  <script src="scripts/ui-device.js"></script>
  <script src="scripts/ui-form.js"></script>
  <script src="scripts/ui-modal.js"></script>
  <script src="scripts/ui-nav.js"></script>
  <script src="scripts/ui-list.js"></script>
  <script src="scripts/ui-screenfull.js"></script>
  <script src="scripts/ui-scroll-to.js"></script>
  <script src="scripts/ui-toggle-class.js"></script>
  <script src="scripts/ui-taburl.js"></script>
  <script src="scripts/app.js"></script>
  <script src="scripts/ajax.js"></script>
<!-- endbuild -->
</body>
</html>
