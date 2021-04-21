<script type="text/javascript">

	$(document).ready(function() {
			setInterval(function () {
				$('#voltage').load('voltage/realvoltage.php')
			}, 10);
		});
		
    $(document).ready(function() {
			setInterval(function () {
				$('#voltageforday').load('voltage/voltageforday.php')
			}, 10);
    });
    
    $(document).ready(function() {
			setInterval(function () {
				$('#voltageformonth').load('voltage/voltageformonth.php')
			}, 10);
		});

    $(document).ready(function() {
			setInterval(function () {
				$('#temperature').load('dht/temperature.php')
			}, 10);
		});

    $(document).ready(function() {
			setInterval(function () {
				$('#humidity').load('dht/humidity.php')
			}, 10);
		});

    $(document).ready(function() {
			setInterval(function () {
				$('#powerforday').load('power/powerforday.php')
			}, 10);
		});

    $(document).ready(function() {
			setInterval(function () {
				$('#powerformouth').load('power/powerformonth.php')
			}, 10);
		})

    $(document).ready(function() {
			setInterval(function () {
				$('#kilowatthoursforday').load('kilowatthours/kilowatthoursforday.php')
			}, 10);
		})

    $(document).ready(function() {
			setInterval(function () {
				$('#kilowatthoursformouth').load('kilowatthours/kilowatthoursformouth.php')
			}, 10);
		})

    $(document).ready(function() {
			setInterval(function () {
				$('#balanceformouth').load('balance/balanceformouth.php')
			}, 10);
		})

    $(document).ready(function() {
			setInterval(function () {
				$('#joule').load('joule/jouleformonth.php')
			}, 10);
		})

    $(document).ready(function() {
			setInterval(function () {
				$('#stepformonth').load('step/stepformonth.php')
			}, 10);
		})

    $(document).ready(function() {
			setInterval(function () {
				$('#stepforday').load('step/stepforday.php')
			}, 10);
		})
</script>