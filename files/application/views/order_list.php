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
            <!-- Optionally, you can add icons to the links -->
			<li><a href="<?php echo base_url('admin');?>"><i class="fa fa-home"></i> <span>Início</span></a></li>
			<li class="active"><a href="<?php echo base_url('order_list');?>"><i class="fa fa-list"></i> <span>Listar Pedidos</span></a></li>
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
            <li><a href="#"><i class="fa fa-list"></i> Listar Pedidos</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
        
          <!--------------------------
            | Your Page Content Here |
            -------------------------->
            
          <!-- Hover Data Table -->
          <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Lista de Pedidos</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Bairro</th>
                        <th>Plano</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                          $i = 1;
                          foreach($listOrder->result() as $row){
                        ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $row->id_order ?></td>
                            <td><?= $row->name_clients ?></td>
                            <td><?= $row->mail ?></td>
                            <td><?= $row->tel ?></td>
                            <td><?= $row->street ?></td>
                            <td><?= $row->district ?></td>
                            <td><?= $row->item ?></td>
                        <?php
                          if($row->status == 0)
                            echo '<td><span class="label label-primary">Novo</span></td>';
                          elseif($row->status == 1)
                            echo '<td><span class="label label-warning">Cancelado</span></td>';
                          elseif($row->status == 2)
                            echo '<td><span class="label label-danger">Rembolso</span></td>';
                          elseif($row->status == 3)
                            echo '<td><span class="label label-warning">Aguardando Pagamento</span></td>';
						              elseif($row->status == 3)
                            echo '<td><span class="label label-warning">Aguardando recolhimento dos Itens</span></td>';
						              elseif($row->status == 3)
                            echo '<td><span class="label label-warning">Em processo de Lavagem</span></td>';
                            elseif($row->status == 3)
                            echo '<td><span class="label label-warning">Em processo de Secagem</span></td>';
                            elseif($row->status == 3)
                            echo '<td><span class="label label-warning">Em Processo de Passagem</span></td>';
                            elseif($row->status == 3)
                            echo '<td><span class="label label-warning">Aguardando retirada do Cliente</span></td>';
                            elseif($row->status == 3)
                            echo '<td><span class="label label-success">Concluído</span></td>';
                          else
                            echo '<td><span class="label label-primary"">Desconhecido</span></td>';
                        ?>
                            <td>  
                              <div class="btn-group">
							  	              <a><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-download" data-content="<?= $row->id_order?>"><i class="fa fa-download"></i></button></a>
								                <a><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-print" data-content="<?= $row->id_order?>"><i class="fa fa-print"></i></button></a>
                                <a><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-update" data-content="<?= $row->id_order?>"><i class="fa fa-edit"></i></button></a>
                                <a><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-delete"data-content="<?= $row->id_order?>"><i class="fa fa-trash-o"></i></button></a>
                              </div>
                            </td>
                        </tr>
                        <?php
                            $i++;
                          }
                        ?>                        
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Bairro</th>
                        <th>Plano</th>
                        <th>Status</th>
                        <th>Ações</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->        
            </div> 
          </div>     
		  <!--  Download Modal -->
          <div class="modal fade" id="modal-download">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form method="POST" action="<?= base_url('order_list/downloadOrder') ?>">
                    <div class="modal-header">
                      <input type="hidden" id="id_order_modal_download" name="id_order_download"/>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Download</h4>
                    </div>
                    <div class="modal-body">
                      Você tem certeza de que deseja realizar o download deste pedido?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">Download</button>
                    </div>
                  </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->  
		   <!-- Print Modal -->
          <div class="modal fade" id="modal-print">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form method="POST" action="<?= base_url('order_list/printOrder') ?>">
                    <div class="modal-header">
                      <input type="hidden" id="id_order_modal_print" name="id_order_print"/>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Imprimir Pedido</h4>
                    </div>
                    <div class="modal-body">
                      Você tem certeza de que deseja imprimir este pedido?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">Imprimir</button>
                    </div>
                  </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->  

          <!-- Update Modal -->
          <div class="modal fade" id="modal-update">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Atualizar Status</h4>
                  </div>
                  <form method="POST" action="<?= base_url('order_list/updateStatus')?>">
                    <div class="modal-body">
                      <div class="form-group">
                          <input type="hidden" id="id_order_modal_update" name="id_order_update"/>
                          <label>Status</label>
                          <select class="form-control" placeholder="Defina o status do pedido." name="status_modal_update">
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
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">Alterar</button>
                    </div>
                  </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

          <!-- Delete Modal-->
          <div class="modal fade" id="modal-delete">
              <div class="modal-dialog">
                <div class="modal-content">
                  <form method="POST" action="<?= base_url('order_list/deleteOrder') ?>">
                    <div class="modal-header">
                      <input type="hidden" id="id_order_modal_delete" name="id_order_delete"/>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Excluir Pedido</h4>
                    </div>
                    <div class="modal-body">
                      Você tem certeza de que deseja excluir esta pedido?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-danger">Excluir</button>
                    </div>
                  </form>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->            

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
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()."assets/dist/js/demo.js"?>"></script>
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