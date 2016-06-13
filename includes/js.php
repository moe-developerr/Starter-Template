<script src="dist/scripts/vendors/jquery.min.js"></script>
<script src="dist/scripts/vendors/baseliner.min.js"></script>
<script>
	window.onload = function() {
	  baseliner = new Baseliner({
	  	gridHeight: 12,
	  	gridColor: 'red',
	  	gridOpacity: 100
	  });
	  baseliner.toggle();
	}
</script>