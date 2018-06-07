<!DOCTYPE html>
<html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Lavanderia | Lista de Pedidos</title>
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
	
    <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/skins/skin-blue.min.css"?>">

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <style>
      .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
      }

      .example-modal .modal {
        background: transparent !important;
      }
    </style>
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
			<li><a href="<?php echo base_url('admin');?>"><i class="fa fa-home"></i> <span>Início</span></a></li>
			<li><a href="<?php echo base_url('order_list');?>"><i class="fa fa-list"></i> <span>Listar Pedidos</span></a></li>
			<li><a href="<?php echo base_url('order_insert');?>"><i class="fa fa-plus-square"></i> <span>Inserir Pedidos</span></a></li>
			<li class="active"><a href="<?php echo base_url('order_update');?>"><i class="fa fa-edit"></i> <span>Atualizar Pedido</span></a></li>			
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
        <li><a href="#"><i class="fa fa-edit"></i> Atualizar Pedido</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <div class="col-md-6">    
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Atualizar Pedido</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="<?= base_url('Order_update/updateOrder') ?>">
              <div class="box-body">
                <div class="form-group">
                    <label>ID</label>
                    <input class="form-control" name="id_order"  value ="<?= $getNewId ?>" placeholder="Id do Pedido" type="text">
                </div>
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" name="name_clients" placeholder="Nome do Cliente" type="text">
                </div>
				        w<div class="form-group">
                    <label>E-mail</label>
                    <input class="form-control" name="mail" placeholder="Email do Cliente" type="text">
                </div>
				        <div class="form-group">
                    <label>Telefone</label>
                    <input class="form-control" name="tel" placeholder="Telefone do Cliente" type="text">
                </div>
				        <div class="form-group">
                    <label>Endereço</label>
                    <input class="form-control" name="street" placeholder="Endereço do Cliente" type="text">
                </div>
				        <div class="form-group">
                    <label>Bairro</label>
                    <input class="form-control" name="district" placeholder="Bairro do Cliente" type="text">
                </div>				
				           
                <div class="form-group">
                  <label>Roupas</label>                  
                  <div>
                    <select name="1">
                      <?php
                        for($i=0;$i<10;$i++){
                          echo "<option>".$i."</option>";
                        }
                      ?>
                    </select> Bermuda
                    <br>
                    <br>
                    <select name="2">
                      <?php
                        for($i=0;$i<10;$i++){
                          echo "<option>".$i."</option>";
                        }
                      ?>
                    </select> Blazer
                    <br>
                    <br>
                    <select name="3">
                      <?php
                        for($i=0;$i<10;$i++){
                          echo "<option>".$i."</option>";
                        }
                      ?>
                    </select> Blusa fem.simples
                    <br>
                    <br>
                    <select name="4">
                      <?php
                        for($i=0;$i<10;$i++){
                          echo "<option>".$i."</option>";
                        }
                      ?>
                    </select> Blusa fem.especial
                    <br>
                    <br>
                    <select name="5">
                      <?php
                        for($i=0;$i<10;$i++){
                          echo "<option>".$i."</option>";
                        }
                      ?>
                    </select> Blusão abrigo esportivo
                    <br>
                    <br>                                                                                                   
                  </div>
                </div>
                <div class="form-group">
                    <label>Mensagem</label>
                    <input class="form-control" name="msg" placeholder="Mensagem ou Recado." type="text">
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status" placeholder="Status do Pedido.">
                  <option value= 0>Novo</option>
                  <option value= 1>Cancelado</option>
                  <option value= 2>Rembolso</option>
                  <option value= 3>Aguardando Pagamento</option>
                  <option value= 3>Pagamento Conclúido</option>
                  <option value= 3>Aguardando recolhimento dos Itens</option>
                  <option value= 3>Em processo de Lavagem</option>
                  <option value= 3>Em processo de Secagem</option>
                  <option value= 3>Em Processo de Passagem</option>
                  <option value= 3>Aguardando retirada do Cliente</option>
                  <option value= 3>Concluído</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Data de Registro</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input class="form-control pull-right" name="datei" id="datepicker_tgl_laundry" type="text">
                    </div>
                  <!-- /.input group -->
                </div>
                <div class="form-group">
                  <label>Data de Entrega</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input class="form-control pull-right" name="datef" id="datepicker_tgl_selesai" type="text">
                    </div>
                  <!-- /.input group -->
                </div>
              </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <p class="help-block">Favor, conferir os dados antes de enviar.</p>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
        <!-- /.box -->
    </div>
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
<!-- Select2 -->
<script src="<?php echo base_url()."assets/bower_components/select2/dist/js/select2.full.min.js"?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url()."assets/plugins/input-mask/jquery.inputmask.js"?>"></script>
<script src="<?php echo base_url()."assets/plugins/input-mask/jquery.inputmask.date.extensions.js"?>"></script>
<script src="<?php echo base_url()."assets/plugins/input-mask/jquery.inputmask.extensions.js"?>"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url()."assets//bower_components/moment/min/moment.min.js"?>"></script>
<script src="<?php echo base_url()."assets/bower_components/moment/locale/pt-br.js"?>"></script>
<script src="<?php echo base_url()."assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url()."assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"?>"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker_tgl_laundry').datepicker({
      autoclose: true,
      format:'dd-mm-yyyy'
    })
        //Date picker
    $('#datepicker_tgl_selesai').datepicker({
      autoclose: true,
      format:'dd-mm-yyyy'
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>    
</body>
</html>