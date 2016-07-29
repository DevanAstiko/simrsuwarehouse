            <div class="container-fluid">
                <div class="side-body">
                    <div class="page-title">
                        <span class="title">Etl Processing</span>
                        <div class="description">This page for setting extract transform and load database transaction to datawarehouse</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel fresh-color panel-info">
                                <div class="panel-heading">
                                    <h3>ETL Processing</h3>

                                </div>
                                 <form action="<?php echo base_url().'etlprocessing/dotransfer';?>" enctype="multipart/form-data" method="post" id="registrasitenant">
                               
                                <div class="panel-body">
                                    
                                    <div class="form-group">
                                        <h4 class=" col-md-12 control-label">Last date ETL : <?php foreach ($content -> result() as $value) {
                                        echo $value->etllast;
                                    }?></h4>
                                    </div>
                                   <div class="form-group">

                                        <h5 class=" col-md-offset-1 col-md-2 control-label">Mulai Tanggal</h5>
                                        <div class="col-md-8">
                                            <input type="text" id="startdate" class="form-control" name="startdate" placeholder="Start Date " required="required" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                                             <?php if($this->uri->segment(2) == 'dotransfer'){if($index=='gagal'){ ?>
                                                <div style=" color : red"><?php echo $startdatealert; ?></div> 
                                            <?php } }?>
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <h5 class="col-md-offset-1  col-md-2 control-label">Sampai Tanggal</h5>
                                        <div class="col-md-8">
                                            <input type="text" id="enddate" class="form-control" name="enddate" placeholder="Date End" required="required" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                                             <?php if($this->uri->segment(2) == 'dotransfer'){if($index=='gagal'){ ?>
                                                <div style=" color : red"><?php echo $enddatealert; ?></div> 
                                            <?php }}?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="col-md-offset-1  col-md-2 control-label" >Data Source</h5>
                                        <div class="col-md-8">
                                            <select name="datasource" id="datasource" class="form-control" >
                                                <option value=""></option>
                                                <option value="1">Px Rawat Jalan</option>
                                                <option value="2">Px Rawat Inap</option>
                                                <option value="3">Pharmacy</option>
                                            </select>
                                            <?php if($this->uri->segment(2) == 'dotransfer'){if($index=='gagal'){ ?>
                                                <div style=" color : red"><?php echo $datasourcealert; ?></div> 
                                        <?php }}?>
                                        </div>
                                    
                                         
                                        
                                    </div>
                                    <div class="form-group">
                                        <h5 class="col-md-offset-1  col-md-2 control-label" >DB Source</h5>
                                        <div class="col-md-8">
                                            <select name="fromsource" id="fromsource" class="form-control"  >
                                                <option value=""></option>
                                                <option value="1">My Sql</option>
                                                <option value="2">Oracle</option>
                                                <option value="3">Postgre</option>
                                            </select>
                                            <?php if($this->uri->segment(2) == 'dotransfer'){if($index=='gagal'){ ?>
                                                <div style=" color : red"><?php echo $fromsourcealert; ?></div> 
                                        <?php }} ?>
                                        </div>
                                      
                                        <div class="col-md-offset-10 col-md-2">
                                            <button type="submit" class="btn">GO Process</button>
      
                                        </div>
                                </div>
                            </div>
                            </form>
                          <?php if($this->uri->segment(2) == 'dotransfer'){if($index=='sukses'){?>
                            <div class="alert alert-success fade in" id="successMsg">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><strong>Proses ETL telah berhasil</strong></h4>
                                    <p>Data telah disimpan kedalam database datawarehouse</p>
                            </div>
                            <?php }} ?>
                            <?php if($this->uri->segment(2) == 'dotransfer'){if($index=='gagal'){ ?>
                            
                            <div class="alert alert-danger fade in" id="failedMsg">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    <h4><strong>Proses ETL tidak berhasil</strong></h4>
                                    <p>cek isi format form ETL anda</p>
                            </div>
                             <?php }} ?>
                        </div>
                    </div>
                </div>
            </div>