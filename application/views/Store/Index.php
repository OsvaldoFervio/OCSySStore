<!-- page content -->
<div class="right_col" role="main">
  <div class="">
  <div class="row" style="display: inherit;" >
  <div class="tile_count">
    <div class="col-lg-3 col-md-3 col-sm-3  tile_stats_count">
      <span class="count_top"><i class="fa fa-users"></i> Total de Registros</span>
      <div class="count"><?= $totals->Register ?></div>
      <span class="count_bottom"><i class="green">Capturados </i></span>
    </div>
    <!-- <div class="col-md-2 col-sm-4  tile_stats_count">
      <span class="count_top"><i class="fa fa-users"></i> Total de aspirantes</span>
      <div class="count">30</div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> Última semana</span>
    </div> -->
    <div class="col-lg-3 col-md-3 col-sm-3  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Subtotal</span>
      <div class="count">$<?= (number_format($totals->Cost ?? 0, 2)) ?></div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>Ingresos</i></span>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> I.V.A.</span>
      <div class="count">$<?= number_format($totals->Tax ?? 0, 2) ?></div>
        <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i>Ingresos </i></span>
    </div>    
    <div class="col-lg-3 col-md-3 col-sm-3  tile_stats_count">
      <span class="count_top"><i class="fa fa-user"></i> Total </span>
      <div class="count green">$<?= number_format($totals->Total ?? 0, 2) ?></div>
      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> Ingresos</i></span>
    </div> 
    
  </div>
  </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <div class="col-md-6">
              <h3>Registro <small> Productos</small></h3>
            </div>
            <div class="col-md-6">
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
          </div>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="row">
              <div class="col-sm-12">
                <div class="card-box table-responsive">                  
                  <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                      <tr>                        
                        <th>Code</th>
                        <th>Description</th>
                        <th>Section</th>
                        <th>Brand</th>
                        <th>Line</th>
                        <th>Serie</th>
                        <th>Status</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data as $item): ?>
                      <tr>
                        <td><?= $item->Code ?></td>
                        <td><?= $item->Description ?></td>
                        <td><?= $item->Section ?></td>
                        <td><?= $item->Brand ?></td>
                        <td><?= $item->Line ?></td>
                        <td><?= $item->Serie ?></td>
                        <td><?= $item->Status ?></td>
                        <td><?= $item->Stock ?></td>
                        <td>$<?= $item->Price ?></td>
                        <td>N/A</td>
                      </tr>
                      <?php endforeach; ?> 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>          
    </div>
  </div>
</div>
<!-- /page content -->