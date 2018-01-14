<script src="/public/js/jquery-3.2.1.min.js"></script>
<script src="/public/js/popper.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/main.js"></script>

<script src="/public/js/plugins/pace.min.js"></script>

<script type="text/javascript" src="/public/js/plugins/chart.js"></script>
<script type="text/javascript">
	let data = {
		labels: ["January", "February", "March", "April", "May"],
		datasets: [
			{
				label: "My First dataset",
				fillColor: "rgba(220,220,220,0.2)",
				strokeColor: "rgba(220,220,220,1)",
				pointColor: "rgba(220,220,220,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(220,220,220,1)",
				data: [65, 59, 80, 81, 56]
			},
			{
				label: "My Second dataset",
				fillColor: "rgba(151,187,205,0.2)",
				strokeColor: "rgba(151,187,205,1)",
				pointColor: "rgba(151,187,205,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(151,187,205,1)",
				data: [28, 48, 40, 19, 86]
			}
		]
	};
	let pdata = [
		{
			value: 300,
			color: "#46BFBD",
			highlight: "#5AD3D1",
			label: "Complete"
		},
		{
			value: 50,
			color: "#F7464A",
			highlight: "#FF5A5E",
			label: "In-Progress"
		}
	];

	let ctxl = $("#lineChartDemo").get(0).getContext("2d");
	let lineChart = new Chart(ctxl).Line(data);

	let ctxp = $("#pieChartDemo").get(0).getContext("2d");
	let pieChart = new Chart(ctxp).Pie(pdata);

	function log(...data) {
		data.map((el) => console.log(el))
	}
</script>

<script>
	let a = $('a[go]');

	a.on('click', function () {
		push(a.attr('href'));

		return false;
	});

	$(window).on('popstate', () => {
		$('div[load]').load((location.href + ' div[load] > *'), () => {
			a.off('click');

			a = $('a[go]');

			a.on('click', function () {
				push(a.attr('href'));

				return false;
			});
		});
	});

	function push(href) {
		history.pushState(null, null, href);
		$(window).trigger('popstate')
	}
</script>
