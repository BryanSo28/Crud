    <script src="../assets/js/lib/jquery/jquery.min.js"></script>
	<script src="../assets/js/lib/tether/tether.min.js"></script>
	<script src="../assets/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="../assets/js/plugins.js"></script>

	<script type="text/javascript" src="../assets/js/lib/jqueryui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../assets/js/lib/lobipanel/lobipanel.min.js"></script>
	<script type="text/javascript" src="../assets/js/lib/match-height/jquery.matchHeight.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script>
		$(document).ready(function() {

			$('.panel').lobiPanel({
				sortable: true
			});
			$('.panel').on('dragged.lobiPanel', function(ev, lobiPanel){
				$('.dahsboard-column').matchHeight();
			});

			google.charts.load('current', {'packages':['corechart']});
			google.charts.setOnLoadCallback(drawChart);
			function drawChart() {
				var dataTable = new google.visualization.DataTable();
				dataTable.addColumn('string', 'Day');
				dataTable.addColumn('number', 'Values');
				// A column for custom tooltip content
				dataTable.addColumn({type: 'string', role: 'tooltip', 'p': {'html': true}});
				dataTable.addRows([
					['MON',  130, ' '],
					['TUE',  130, '130'],
					['WED',  180, '180'],
					['THU',  175, '175'],
					['FRI',  200, '200'],
					['SAT',  170, '170'],
					['SUN',  250, '250'],
					['MON',  220, '220'],
					['TUE',  220, ' ']
				]);

				var options = {
					height: 314,
					legend: 'none',
					areaOpacity: 0.18,
					axisTitlesPosition: 'out',
					hAxis: {
						title: '',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						textPosition: 'out'
					},
					vAxis: {
						minValue: 0,
						textPosition: 'out',
						textStyle: {
							color: '#fff',
							fontName: 'Proxima Nova',
							fontSize: 11,
							bold: true,
							italic: false
						},
						baselineColor: '#16b4fc',
						ticks: [0,25,50,75,100,125,150,175,200,225,250,275,300,325,350],
						gridlines: {
							color: '#1ba0fc',
							count: 15
						}
					},
					lineWidth: 2,
					colors: ['#fff'],
					curveType: 'function',
					pointSize: 5,
					pointShapeType: 'circle',
					pointFillColor: '#f00',
					backgroundColor: {
						fill: '#008ffb',
						strokeWidth: 0,
					},
					chartArea:{
						left:0,
						top:0,
						width:'100%',
						height:'100%'
					},
					fontSize: 11,
					fontName: 'Proxima Nova',
					tooltip: {
						trigger: 'selection',
						isHtml: true
					}
				};

				var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
				chart.draw(dataTable, options);
			}
			$(window).resize(function(){
				drawChart();
				setTimeout(function(){
				}, 1000);
			});
		});
	</script>
    <script src="../assets/js/app.js"></script>

	<script src="../assets/js/lib/select2/select2.full.min.js"></script>
	<script src="../assets/js/lib/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
	<script>
		$(document).ready(function() {
			$("input[name='demo1']").TouchSpin({
				min: 0,
				max: 100,
				step: 0.1,
				decimals: 2,
				boostat: 5,
				maxboostedstep: 10,
				postfix: '%'
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo2']").TouchSpin({
				min: -1000000000,
				max: 1000000000,
				stepinterval: 50,
				maxboostedstep: 10000000,
				prefix: '$'
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo_vertical']").TouchSpin({
				verticalbuttons: true
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo_vertical2']").TouchSpin({
				verticalbuttons: true,
				verticalupclass: 'glyphicon glyphicon-plus',
				verticaldownclass: 'glyphicon glyphicon-minus'
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo3']").TouchSpin();
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo4']").TouchSpin({
				postfix: "a button",
				postfix_extraclass: "btn btn-default"
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo4_2']").TouchSpin({
				postfix: "a button",
				postfix_extraclass: "btn btn-default"
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo6']").TouchSpin({
				buttondown_class: "btn btn-default-outline",
				buttonup_class: "btn btn-default-outline"
			});
		});
	</script>
	<script>
		$(document).ready(function(){
			$("input[name='demo5']").TouchSpin({
				prefix: "pre",
				postfix: "post"
			});
		});
	</script>
	<script src="../assets/js/lib/datatables-net/datatables.min.js"></script>

	<script>
		$(function() {
			$('#example').DataTable({
				responsive: true
			});
		});
	</script>
	<script src="../assets/js/lib/ladda-button/spin.min.js"></script>
	<script src="../assets/js/lib/ladda-button/ladda.min.js"></script>
	<script src="../assets/js/lib/ladda-button/ladda-button-init.js"></script>
	<script type="text/javascript" src="../assets/js/lib/jquery-contextmenu/jquery.contextMenu.min.js"></script>
	<script type="text/javascript" src="../assets/js/lib/jquery-contextmenu/jquery.ui.position.min.js"></script>
	<script>
		$(function() {
			$.contextMenu({
				selector: '.context-menu-one',
				callback: function(key, options) {
					var m = "clicked: " + key;
					window.console && console.log(m) || alert(m);
				},
				items: {
					"edit": {name: "Edit", icon: "edit"},
					"cut": {name: "Cut", icon: "cut", disabled: true},
					copy: {name: "Copy", icon: "copy"},
					"sep1": "---------",
					"paste": {name: "Paste", icon: "paste"},
					"delete": {name: "Delete", icon: "delete"},
					"sep2": "---------",
					"quit": {name: "Quit", icon: function(){
						return 'context-menu-icon context-menu-icon-quit';
					}}
				}
			});

			$('.context-menu-one').on('click', function(e){
				console.log('clicked', this);
			});

			$.contextMenu({
				selector: '.context-menu-submenus',
				callback: function(key, options) {
					var m = "clicked: " + key;
					window.console && console.log(m) || alert(m);
				},
				items: {
					"edit": {"name": "Edit", "icon": "edit"},
					"cut": {"name": "Cut", "icon": "cut"},
					"sep1": "---------",
					"quit": {"name": "Quit", "icon": "quit"},
					"sep2": "---------",
					"fold1": {
						"name": "Sub group",
						"items": {
							"fold1-key1": {"name": "Foo bar"},
							"fold2": {
								"name": "Sub group 2",
								"items": {
									"fold2-key1": {"name": "alpha", disabled: true},
									"fold2-key2": {"name": "bravo"},
									"fold2-key3": {"name": "charlie"}
								}
							},
							"fold1-key3": {"name": "delta"}
						}
					},
					"fold1a": {
						"name": "Other group",
						"items": {
							"fold1a-key1": {"name": "echo"},
							"fold1a-key2": {"name": "foxtrot"},
							"fold1a-key3": {"name": "golf"}
						}
					}
				}
			});
		});
	</script>