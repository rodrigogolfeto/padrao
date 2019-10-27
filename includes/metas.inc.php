<?php if(!empty($keywordsPagina)){ ?>
	<meta name="keywords" content="<?= $keywordsPagina ?>" />
<?php }else { ?>
	<meta name="keywords" content="" />
<?php } ?>
<?php if(!empty($descriptionPagina)){ ?>
	<meta name="description" content="<?= $descriptionPagina; ?>" />
<?php }else{ ?>
	<meta name="description" content="" />
<?php } ?>
<!-- Metas Facebook -->
<meta property="og:site_name" content="" />
<?php if(empty($metasFacebook)) { ?>    
    <!-- <meta property="og:title" content="" /> <!-- Título da Página -->
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="200" />
	<meta property="og:image:height" content="200" />
<?php }else { echo $metasFacebook; } ?>
<!-- Fim Metas Facebook -->
<!-- Metas Twitter -->
<meta name="twitter:card" value="summary" />
<meta name="twitter:site" content="" /><!-- Conta do Twitter do site (incluindo arroba) -->
<?php if(empty($metasTwitter)) { ?>    
    <!--<meta name="twitter:title" content="" /><!-- Título da página -->
    <!--<meta name="twitter:creator" content="" /> <!-- Conta do Twitter do autor do texto (incluindo arroba) -->
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />
<?php }else { echo $metasTwitter; } ?>
<!-- Fim Metas Twitter -->