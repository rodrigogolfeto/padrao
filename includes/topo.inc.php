<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title><?php echo $titPag; ?></title>
    <?php include('includes/metas.inc.php'); ?>
    <base href="<?php echo $config['urlSite']; ?>" />
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/styles.css<?=(!empty($config['cacheFiles']))? '?cacheFile=' . $config['cacheFiles']:'';?>" type="text/css" media="screen" /> 
</head>

<body>
	
    <div id="root">
        
        <header class="topo">
            
        </header><!-- topo -->