<script src="/public/js/jquery-3.2.1.min.js"></script>
<script>
	var a = $('a[go]');

	a.on('click', function () {
		push(a.attr('href'));
		return false;
	});

	$(window).on('popstate', function () {
		$('div[load]').load((location.href + ' div[load] > *'), function () {
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
