<html>
<head>
	<title>Subir imagen al servidor</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>

<div class="row">
	<div class="card">
		<div class="card-header"></div>
		<div class="card-body">
			<form action="" enctype="multipart/form-data">
				<input type="file" id="image" onchange="SubirImagen()">
			</form>

			<div class="row">
				
				<img src="" alt="" id="imagensubida">
			</div>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script>
    	function SubirImagen() {
    	var formData = new FormData();
        var files = $('#image')[0].files[0];
        formData.append('file',files);
        $.ajax({
            url: 'subirimagen.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
          
            success: function(response) {
               console.log(response);
               $("#imagensubida").attr('src',response);

            }
        });
    	}
    </script>

</body>


</html>