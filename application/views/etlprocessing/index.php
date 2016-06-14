            <div class="container-fluid">
                <div class="side-body">
                    <div class="page-title">
                        <span class="title">ETL Processing</span>
                        <div class="description">Ectract, Transform, Load data forom data source to data warehouse</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel fresh-color panel-info">
                                <div class="panel-heading">
                                    <h3>ETL Processing </h3>
                                </div>
                                <div class="panel-body">
                                    <form action="<?php echo base_url(); ?>jobvacancy/register"  method="post" enctype="multipart/form-data" id="registrasiJobVacancy">        
                                    
                                    <div class="form-group">

                                        <h5 class=" col-md-offset-1 col-md-2 control-label">Mulai Tanggal</h5>
                                        <div class="col-md-8">
                                            <input type="text" id="startdate" class="form-control" name="startdate" placeholder="Start Date " required="required" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                                            <p id="startdatealert" style="dislay: none; color: red;"></p>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <h5 class="col-md-offset-1  col-md-2 control-label">Sampai Tanggal</h5>
                                        <div class="col-md-8">
                                            <input type="text" id="enddate" class="form-control" name="enddate" placeholder="Date End" required="required" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                                            <p id="enddatealert" style="dislay: none; color: red;"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5 class="col-md-offset-1  col-md-2 control-label" >Data Source</h5>
                                        <div class="col-md-8">
                                            <select name="datasource" id="datasource" class="form-control" >
                                                <option value=""></option>
                                                <option value="pxrajal">Px Rawat Jalan</option>
                                                <option value="pxrajal">Px Rawat Inap</option>
                                                <option value="pxrajal">Pharmacy</option>
                                            </select>
                                            <p class="col-md-12 control-label" id="datasourcealert" style="dislay: none; color: red;"></p>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <h5 class="col-md-offset-1  col-md-2 control-label" >DB Source</h5>
                                        <div class="col-md-8">
                                            <select name="fromsource" id="fromsource" class="form-control" >
                                                <option value=""></option>
                                                <option value="pxrajal">My Sql</option>
                                                <option value="pxrajal">Oracle</option>
                                                <option value="pxrajal">Postgre</option>
                                            </select>
                                            <p class="col-md-12 control-label" id="fromsourcealert" style="dislay: none; color: red;"></p>
                                        </div>
                                        <div class="col-md-offset-10 col-md-2">
                                            <button type="submit" class="btn">GO Process</button>
      
                                        </div>
                                        
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        
                                        
                                    </div>
                                    
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


