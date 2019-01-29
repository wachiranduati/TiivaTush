<?php
$things = "100, 29, 13, 50, 12, 1,20, 35, 45, 22, 1,70";
?>
<!DOCTYPE html>
<html>
<title>Tiiva | Misc</title>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php require 'templates/resourcelinks/headerlinks.php';?>
        <script src="chartjs/chart.bundle.js"></script>
    
    
</head>
    <body onload="secondgraph();">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <canvas id="myChart"></canvas>
                </div>
               
            </div>
            <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <canvas id="myChart2" width="200" height="150"></canvas>
                </div>
                <div id="chartvalues">100, 29, 13, 50, 12, 1,20, 35, 45, 22, 1,70</div>

            </div>
            
                
                <script>
	var ctx = document.getElementById('myChart');
	var myChart = new Chart(ctx, {
		type:'line',
		data: {
			labels: ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday","Wednesday","Thursday","Friday","Saturday","Sunday"],
			datasets: [{
				label:'No of Votes',
				data: [12, 19, 3, 5, 2, 21,250, 3, 5, 2, 21,250],
				backgroundColor:[
					'rgba(255,99,132,0.2)',
					'rgba(54,162,235,0.2)',
					'rgba(255,206,86,0.2)',
					'rgba(75,192,192,0.2)',
					'rgba(75,2,192,0.2)',
					'rgba(153,102,255,0.2)',
					'rgba(255,159,64,0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54,162,235,1)',
					'rgba(255,206,86,1)',
					'rgba(75,192,192,1)',
					'rgba(75,2,192,1)',
					'rgba(153,102,255,1)',
					'rgba(255,159,64,1)'
					],
					borderWidth:1
					
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
		
		
		
		
		
		
		
	});
</script>
             <script>
                    function secondgraph(){
                        var chartvalues = document.getElementById('chartvalues').innerHTML;
                        //alert(chartvalues);
                        console.log(chartvalues);
                        //var items = [100, 29, 13, 50, 12, 1,20, 35, 45, 22, 1,70];
                        var items = [100, 29, 13, 50, 12, 1,20, 35, 45, 22, 1,70];
                        //alert(items);
                        var ctx2 = document.getElementById('myChart2');
	var myChart2 = new Chart(ctx2, {
		type:'line',
		data: {
			labels: ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday","Wednesday","Thursday","Friday","Saturday","Sunday"],
			datasets: [{
				label:'No of Votes',
				//data: [items[0],items[1],items[2],items[3],items[4],items[5],items[6],items[7],items[8],items[9]],
				data: [<?php echo $things;?>],
				backgroundColor:[
					'rgba(255,99,132,0.2)',
					'rgba(54,162,235,0.2)',
					'rgba(255,206,86,0.2)',
					'rgba(75,192,192,0.2)',
					'rgba(75,2,192,0.2)',
					'rgba(153,102,255,0.2)',
					'rgba(255,159,64,0.2)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54,162,235,1)',
					'rgba(255,206,86,1)',
					'rgba(75,192,192,1)',
					'rgba(75,2,192,1)',
					'rgba(153,102,255,1)',
					'rgba(255,159,64,1)'
					],
					borderWidth:1
					
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
		
		
		
		
		
		
		
	});
                    }
            </script>
        </div>
    </body>
</html>