<!doctype html>
<html>
    <head>
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/foundation.css" />
    <style>
        body{
            background: rgb(231, 231, 231);
        }
    </style>
    </head>

    <body>

<?php
$redirect_uri = "http://localhost/agiliq_oauth/app.php";
$client_id= "nsTZ6zrknEP7bNrEcOtqhzI2vFuNYb4LvlUYd5RdwZnXA47gr9";
$client_secret = "fm3sR4FRsD7diDjmCuCbJBjfMFXHBNWb7I3ywNEOMq9oiZcIWC";
if(!$_GET) {
    header("Location: http://join.agiliq.com/oauth/app_authorize?redirect_uri=$redirect_uri&client_id=$client_id");
}
else {
    $code = $_GET['code'];

    $jsonurl = "http://join.agiliq.com/oauth/access_token?client_id=$client_id&redirect_uri=$redirect_uri&client_secret=$client_secret&code=$code";
    $json = file_get_contents($jsonurl,0,null,null);
    $json_output = json_decode($json,true);
    $access_token = $json_output['access_token'];
    $url = "http://join.agiliq.com/api/resume/upload/?access_token=$access_token";
    
    ?>  
    <h1>Agiliq Join Oauth app</h1>
    <div id="form">
            <form action=<?php echo $url;?> method="post" enctype="multipart/form-data">
                <label for="resume">Filename:</label>
                <input type="file" name="resume" id="resume" class="button">
                <label for="first_name">First Name</label><input type="text" id="first_name" name="first_name" value="Abhiram">
                <label for="last_name">Last Name:</label><input type="text" id="last_name" name="last_name" value="Ampabathina">
                <label for="projects_url">Github URL:</label><input type="text" id="projects_url" name="projects_url" value="https://github.com/mrabhiram" >
                <label for="code_url">Code URL:</label><input type="text" id="code_url" name="code_url" value="https://github.com/mrabhiram/agiliq_oauth"><br/>
                <input type="submit" class="button">
            </form>
        </div>
    <?php                         
}
?>
    </body>
</html>