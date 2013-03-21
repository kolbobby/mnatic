<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $title; ?></title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#submit').click(function() {
					alert('asdf');
					$.post('/post', { content: $('#post').val() }, function(r) {
						alert(r);
					});
				});
			})
		</script>
	</head>
	
	<body>
		<div><?php $this->load->view($content); ?></div>
	</body>
</html>