<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Oriovaldo Fialho">
    <meta name="description" content="<?php echo $this->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
    <title><?php echo $this->getTitle(); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo DIRCSS ?>style.css">
    <?php echo $this->addHead(); ?>

</head>

<body>

    <nav class="nav">
        <a class="nav-link" href="<?php echo DIRPAGE; ?>">Home</a>
        <a class="nav-link" href="<?php echo DIRPAGE . "contato"; ?>">Contato</a>
        <a class="nav-link" href="<?php echo DIRPAGE . "cadastro"; ?>">Cadastro</a>

    </nav>
    <div class="header">
        <img src="<?php echo DIRIMG . "header.jpg" ?>" alt="" class="img-header">
        <div class="container-fluid">
            <?php
            $breadCrumb = new Src\Classes\Breadcrumb();
            $breadCrumb->addBreadcrumb();
            ?>
            <?php echo $this->addHeader(); ?>
        </div>
    </div>

    <div class="container-fluid main">
        <?php echo $this->addMain(); ?>
    </div>

    <div class="footer">
        <div class="container-fluid">
            <?php echo date('Y') ?> - Todos os direitos reservados Oriovaldo Fialho
            <?php echo $this->addFooter(); ?>
        </div>
    </div>
    
</body>

</html>