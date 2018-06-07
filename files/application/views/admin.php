<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Lavanderia | Início</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/bootstrap/dist/css/bootstrap.min.css"?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/font-awesome/css/font-awesome.min.css"?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/Ionicons/css/ionicons.min.css"?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"?>">  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/AdminLTE.min.css"?>">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/skins/skin-blue.min.css"?>">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url()."admin"?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E-</b>Lav</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>E-</b>Lavanderia</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU ADMIN</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-home"></i> <span>Início</span></a></li>
		<li><a href="<?php echo base_url('order_list');?>"><i class="fa fa-list"></i> <span>Listar Pedidos</span></a></li>
        <li><a href="<?php echo base_url('order_insert');?>"><i class="fa fa-plus-square"></i> <span>Inserir Pedidos</span></a></li>
		<li><a href="<?php echo base_url('order_update');?>"><i class="fa fa-edit"></i> <span>Atualizar Pedido</span></a></li>		
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bem vindo ao E-Lavanderia!
        <small>Nosso Slogam aqui!</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Início</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
 
      <!--------------------------
        | Your Page Content Here |
        -------------------------->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      31/05/2018
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Luiz Felipe e Gabriel</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url()."assets/bower_components/jquery/dist/jquery.min.js"?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."assets/bower_components/bootstrap/dist/js/bootstrap.min.js"?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/dist/js/adminlte.min.js"?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url()."assets/bower_components/datatables.net/js/jquery.dataTables.min.js"?>"></script>
<script src="<?php echo base_url()."assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()."assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets/bower_components/fastclick/lib/fastclick.js"?>"></script>
<script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
			"language": { 
				"sEmptyTable": "Nenhum registro encontrado",
				"sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
				"sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
				"sInfoFiltered": "(Filtrados de _MAX_ registros)",
				"sInfoPostFix": "",
				"sInfoThousands": ".",
				"sLengthMenu": "_MENU_ resultados por página",
				"sLoadingRecords": "Carregando...",
				"sProcessing": "Processando...",
				"sZeroRecords": "Nenhum registro encontrado",
				"sSearch": "Pesquisar",
				"oPaginate": {
					"sNext": "Próximo",
					"sPrevious": "Anterior",
					"sFirst": "Primeiro",
					"sLast": "Último"
				},
				"oAria": {
					"sSortAscending": ": Ordenar colunas de forma ascendente",
					"sSortDescending": ": Ordenar colunas de forma descendente"
				}
		  },
		  'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
	  $(document).ready(function(){
        $('#modal-download').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var dataId = button.data('content');
          $('#id_order_modal_download').val(dataId);
        })
      })
	  $(document).ready(function(){
        $('#modal-print').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var dataId = button.data('content');
          $('#id_order_modal_print').val(dataId);
        })
      })
      $(document).ready(function(){
        $('#modal-update').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget);
          var dataId = button.data('content');
          $('#id_order_modal_update').val(dataId);
        })
      })
      $(document).ready(function(){
          $('#modal-delete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var dataId = button.data('content');
            $('#id_order_modal_delete').val(dataId);
          })
      })
    </script>       
</body>
</html>