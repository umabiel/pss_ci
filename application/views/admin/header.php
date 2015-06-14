<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <title>Directorio - Peru Service Summit</title>
<!-- <link href="css/bootstrap-theme.min.css" rel="stylesheet"> -->
<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css" />
  <style type="text/css">
    @font-face {
        font-family: BreePeru_Bold;
        src: url(font/BreePeru_Bold_0.otf);
    }

    body{
      font-family: BreePeru_Bold;
    }
  </style>
</head>
<body>

<style type="text/css">
  /* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  padding-bottom: 20px;
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
</style>
    <div class="container">

      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a id="btnCategorias" class="btnCategorias" href="<?php echo base_url() . "index.php/admin/categorias"; ?>">Categorias</a></li>
            <li role="presentation"><a id="btnEmpresas" class="btnEmpresas" href="<?php echo base_url() . "index.php/admin/empresas"; ?>">Empresas</a></li>
            <li role="presentation"><a href="<?php echo base_url() . "index.php/admin/logout" ?>">Salir</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">PSS - Admin</h3>
        <span><?php echo $this->session->userdata('cargo'); ?></span>
      </div>