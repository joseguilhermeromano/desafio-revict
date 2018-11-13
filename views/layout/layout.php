<html>
    <head>
        <meta charset="utf-8">
         <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    
    <body>
<nav class="navbar navbar-default">
 <div class="container-fluid">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="index.php?controller=main&action=home">Atividade 01</a>
  </div>
  <div id="navbar" class="navbar-collapse collapse">
   <ul class="nav navbar-nav navbar-right">
   <li class="active"><a href="index.php?controller=main&action=home">Documentação Visual<span class="sr-only">(current)</span></a></li>
   <li><a href="./documentacao/">Documentação do PHPDOC</a></li>
   </ul>
  </div>
 </div>
</nav>
        
        <div id="main" class="container-fluid" style="margin-top: 20px">
            <div id="top" class="row">
		<div class="col-sm-12">
                    <?php include_once 'Util/router.php'; ?>
                </div>
            </div>
        </div>
        <!--<footer style="background-color:lightblue; height:100px; width:100%; position:fixed;left:0px; bottom:0px"></footer>-->
    <br>
    <footer class="container-fluid text-center">
        <hr></hr>
            <em>&copy; José Guilherme Romano,146.227-X <br>30/03/2016</em>
    </footer>
    </body>
</html>

