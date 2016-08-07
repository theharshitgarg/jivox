	$(document).ready(function(){
	$.ajax({
		url: "http://localhost/cen/admin/BarChart/datadist.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var state = new Array();
			var count = [];
            var data1 = JSON.parse(data);
			console.log(data1);
			console.log(typeof data1);
			console.log(typeof data);
			console.log(data.length);
			for(var i = 0; i < data1.length; i++) {
				console.log(data1[i]);
				console.log(data1[i].state);
				state[i] = data1[i].state;
				count[i] = data1[i].count;
				console.log(state);
			}
			

			var chartdata = {
				labels: state,
				datasets : [
					{
						label: 'District Wise Population',
						backgroundColor:  [
							'rgba(255,99,132,1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)',
							'rgba(240, 139, 82, 1)'
						],
						borderColor: 'rgba(200, 200, 200, 0.75)',
						hoverBackgroundColor: [
							'rgba(255,99,132,1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)',
							'rgba(240, 139, 100, 1)'
						],
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: count
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
				options: {
					scales: {
						yAxes: [{
							ticks: {
								min: 0,
								beginAtZero: true
							}
						}]
					}
				}
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
