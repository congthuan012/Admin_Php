<html>	
	<head>
		<script src="http://code.jquery.com/jquery-2.1.2.min.js"></script>
		<script>
			var PUBLIC = 'http://localhost:81/ckdemo/';
		</script>
		<script src="ckeditor/ckeditor.js"></script>
		<script src="ckfinder/ckfinder.js"></script>
		<script src="myscript.js"></script>
	</head>
	<body>
		<form method="post">
			hinh dai dien:
			<div>
				<img width="100"/>
				<input type="hidden" name="hinh" id="hinh1"/>
				<button type="button" onclick="openfile('hinh1')" >Chọn file</button>				
			</div>
			text editor:
			<textarea name="editor" id="editor"></textarea>
			<script>CKEDITOR.replace('editor')</script>
		</form>
	</body>
</html>