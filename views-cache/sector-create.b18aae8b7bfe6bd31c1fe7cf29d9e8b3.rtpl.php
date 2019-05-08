<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Lista de Sector
    </h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-tachometer-alt"></i> Home</a></li>
      <li><a href="/admin/sector">Sector</a></li>
      <li class="active"><a href="/admin/sector/create">Cadastrar</a></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
  
    <div class="row">
      <div class="col-md-12">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Novo Sector</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="/admin/sector/create" method="post">
            <div class="box-body">
              <div class="form-group">
                <label for="dtnome">Nome do Sector</label>
                <input type="text" class="form-control" id="dtnome" name="dtnome" placeholder="Digite o nome do Sector">
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->