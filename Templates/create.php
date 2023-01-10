<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

<form action="/api.php/?f=create_Animal_Template" method="POST" name ="create_form">

<input type="text" placeholder="Species" name="input_species">
<input type="text" placeholder="Size" name="input_size">
<input type="text" placeholder="Type" name="input_type">
<input type="text" placeholder="Color" name="input_color">

<button type="submit" id="create_btn"> Cadastrar </button>

</form>



<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="/create_script.js"></script>
</body>
</html>
