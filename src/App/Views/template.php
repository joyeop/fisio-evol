<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="src/App/Assets/css/semantic.min.css">
        <title>Fisio Evol</title>
    </head>
    <body>
  <?php $this->loadViewInMenu($viewName, $viewData);?>
<div class="ui container">
  <?php $this->loadViewInTemplate($viewName, $viewData);?>
</div>
  <?php $this->loadViewInFooter($viewName, $viewData);?>
 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="src/App/Assets/js/semantic.min.js">
    </script>
    </body>
</html>