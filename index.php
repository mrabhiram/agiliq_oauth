<?php ?>
<html>
<head>
	<title>Agiliq Resume Upload via oAuth</title>
</head>
<body>
<form action=" http://join.agiliq.com/api/resume/upload/?access_token=m4puCbI8eRcwVaG7r7aKKSfk1XMF02lUmsepqIekgogHUr9CB2" method="POST" enctype="multipart/form-data">
<label for="first_name">First Name</label>	
<input type="text" name="first_name" ><br>
<label for="last_name">Last Name</label>	
<input type="text" name="last_name"><br>
<label for="projects_url">Github URL</label>	
<input type="text" name="projects_url"><br>
<label for="code_url">Source_code_url</label>	
<input type="text" name="code_url"><br>
<label for="resume">Resume</label>	
<input type="file" name="resume"><br>

<input type="submit">
</form>

</body>

</html>