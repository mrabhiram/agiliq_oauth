<?php ?>
<html>
<head>
	<title>Agiliq Resume Upload via oAuth</title>
</head>
<body>
<form action=" http://join.agiliq.com/api/resume/upload/?access_token=kJM9B2Gn0nPEMMT4E5PACMfps3Lh7jxi5wcbXZN0orXDUmdjvr">
<label for="first_name">First Name</label>	
<input type="text" id="first_name"><br>
<label for="last_name">Last Name</label>	
<input type="text" id="last_name"><br>
<label for="projects_uri">Github URL</label>	
<input type="text" id="projects_uri"><br>
<label for="code_url">Source_code_url</label>	
<input type="text" id="code_url"><br>
<label for="resume">Resume</label>	
<input type="file" id="resume"><br>

<input type="submit">
</form>

</body>

</html>