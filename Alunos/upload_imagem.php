

<h1> Carregar a foto</h1>

<form action="proc_upload.php" method="POST"  enctype="multipart/form-data">

			<img style="width: 250px; height: 250px;"><br><br>
			<input type="file" name="arquivo" id="imagem" onchange="previewImagem()"><br><br>
nome: <input  type="text" name="frm_name"><br><br>

	
	<input type="submit" value="Cadastrar">
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script>
			function previewImagem(){
				var arquivo = document.querySelector('input[name=arquivo]').files[0];
				var preview = document.querySelector('img');
				
				var reader = new FileReader();
				
				reader.onloadend = function () {
					preview.src = reader.result;
				}
				
				if(arquivo){
					reader.readAsDataURL(arquivo);
				}else{
					preview.src = "";
				}
			}
		</script>
