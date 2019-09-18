<? if($keywordsPagina){ ?>
	<meta name="keywords" content="<?= $keywordsPagina ?>" />
<? }else { ?>
	<meta name="keywords" content="" />
<? } ?>
<? if($descriptionPagina){ ?>
	<meta name="description" content="<?= $descriptionPagina; ?>" />
<? }else{ ?>
	<meta name="description" content="" />
<? } ?>
<!-- Metas Facebook -->
<meta property="og:site_name" content="" />
<? if(!$metasFacebook) { ?>    
    <!-- <meta property="og:title" content="" /> <!-- Título da Página -->
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="200" />
	<meta property="og:image:height" content="200" />
<? }else { echo $metasFacebook; } ?>
<!-- Fim Metas Facebook -->
<!-- Metas Twitter -->
<meta name="twitter:card" value="summary" />
<meta name="twitter:site" content="" /><!-- Conta do Twitter do site (incluindo arroba) -->
<? if(!$metasTwitter) { ?>    
    <!--<meta name="twitter:title" content="" /><!-- Título da página -->
    <!--<meta name="twitter:creator" content="" /> <!-- Conta do Twitter do autor do texto (incluindo arroba) -->
    <meta name="twitter:description" content="" />
    <meta name="twitter:image" content="" />
<? }else { echo $metasTwitter; } ?>
<!-- Fim Metas Twitter -->