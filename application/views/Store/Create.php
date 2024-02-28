<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Registrar Producto</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <div class="row">
              <div class="col-md-8 col-sm-12">
                <div class="col-md-12 col-sm-12 ">
                  <div class="profile_title">
                    <div class="col-md-6">
                    </div>
                    
                  </div>

                    <form id="form"  method="POST" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="code">Código <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6" id="code">
                          <input type="text" name="code" required="required" class="form-control ">
                          <div class="invalid-feedback"></div>
                        </div >
                      </div>   
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="description">Descripción<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6" id="description">
                          <input type="text" name="description" required="required" class="form-control ">
                          <div class="invalid-feedback"></div>
                        </div >
                      </div>                                           
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="section">Selecciona Sección<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 " id="section">
                          <select class="form-control" name="section">
                            <option value="0">Selecciona una opción</option>
                            <?php foreach($sections as $section) : ?>
                            <option value="<?= $section->SectionId?>"><?= $section->Description?></option>
                            <?php endforeach; ?>
                          </select>
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="brand">Selecciona Marca<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 " id="brand">
                          <select class="form-control" name="brand">
                            <option value="0">Selecciona una opción</option>
                            <?php foreach($brands as $brand) : ?>
                            <option value="<?= $brand->BrandId?>"><?= $brand->Description?></option>
                            <?php endforeach; ?>
                          </select>
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="line">Selecciona Linea<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 " id="line">
                          <select class="form-control" name="line">
                            <option value="0">Selecciona una opción</option>
                            <?php foreach($lines as $line) : ?>
                            <option value="<?= $line->LineId?>"><?= $line->Description?></option>
                            <?php endforeach; ?>
                          </select>
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="serie">Selecciona Serie<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 " id="serie">
                          <select class="form-control" name="serie">
                            <option value="0">Selecciona una opción</option>
                            <?php foreach($series as $serie) : ?>
                            <option value="<?= $serie->SerieId?>"><?= $serie->Description?></option>
                            <?php endforeach; ?>serie
                          </select>
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="status">Selecciona Status<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 " id="status">
                          <select class="form-control" name="status">
                            <option value="0">Selecciona una opción</option>
                            <?php foreach($status as $status) : ?>
                            <option value="<?= $status->StatusId?>"><?= $status->Description?></option>
                            <?php endforeach; ?>status
                          </select>
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      

                      <!-- TODO: change to select -->
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="stock">Existencia <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="label" id="stock" name="stock" required="required" class="form-control">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="price">Precio <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="label" id="price" name="price" required="required" class="form-control">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="tax">I.V.A <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                          <input type="label" id="tax" name="tax" required="required" readonly class="form-control">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="currency">Selecciona Moneda<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 " id="currency">
                          <select class="form-control" name="currency">
                            <option value="0">Selecciona una opción</option>
                            <?php foreach($currencies as $currency) : ?>
                            <option value="<?= $currency->CurrencyId?>"><?= $currency->Description?></option>
                            <?php endforeach; ?>currency
                          </select>
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>                                            
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                          <button class="btn btn-primary" type="button">Cancelar</button>
                          <!-- <button class="btn btn-primary" type="reset">Reset</button> -->
                          <button type="button" onclick="SaveProduct(event);" class="btn btn-success">Guardar</button>
                        </div>
                      </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>