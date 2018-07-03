<?php 



    $requestURI = explode("/", $_SERVER["REQUEST_URI"]);
    $scriptName = explode("/",$_SERVER["SCRIPT_NAME"]);
     
    for($i= 0;$i < sizeof($scriptName);$i++)
           {
          if ($requestURI[$i]     == $scriptName[$i])
                  {
                   unset($requestURI[$i]);
                }
          }
     
    $command = array_values($requestURI);




$url =base64_decode($command[0]); //base64_decode($_GET['url']);
$image = base64_decode($command[1]);// base64_decode($_GET['image']);
$title = base64_decode($command[2]);//base64_decode($_GET['title']);

$metaDesc = " ";

if(count($command) >= 4)
{
 $metaDesc = base64_decode($command[3]);//base64_decode($_GET['title']);
}
?> 

<html>
<head>
	<meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?=$title?>">
	<meta name="twitter:description" content="<?=$title?>">
    <meta name="twitter:image" content="<?=$image?>">
    <meta property="og:image" content="<?=$image?>" />

    <title><?=$title?></title>
	<meta name="description" content="<?=$metaDesc?>" />
</head>
<body>
    <div>


        <img src="<?=$image?>">


        <script language="JavaScript" type="text/JavaScript">


            setTimeout(function () {


                window.location.replace("<?=$url?>");



            }, 1);



        </script>

    </div>
</body>
</html>
