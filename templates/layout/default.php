
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        
        <?= $this->fetch('title') ?>
    </title>
    

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['main.css','font-awesome.min.css','bootstrap-theme.css','bootstrap.min.css']) ?>
   
 
    

  
</head>
<body class="home">



    <?= $this->element('front/header')?>

	<main>
    <?= $this->fetch('content') ?>
    </main>
   

    

    <?= $this->element('front/footer')?>
  
    <?= $this->Html->script(['google-map.js','headroom.min.js','html5shiv.js','jQuery.headroom.min.js','respond.min.js','template.js']) ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</body>
</html>
