<?
require $_SERVER["DOCUMENT_ROOT"]."/App.php";

$app = new App;
$app->setTitle("Yuupeeeee");
?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><? $app->showTitle() ?></title>
</head>
<body>
  
  <? $app->includeComponent("test", array("123",4545,"dfsdf")) ?>

</body>
</html>
