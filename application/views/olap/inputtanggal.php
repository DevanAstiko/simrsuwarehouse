             <div class="container-fluid">
                <div class="side-body">
                    <div class="page-title">
                        <span class="title">Custom Report</span>
                        <div class="description">Customize the report of px Rawat Jalan</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel fresh-color panel-info">
                                <div class="panel-heading">
                                    <h3>Custom Report </h3>
                                </div>
                                 <form action="<?php echo base_url().'createreport/getfile';?>" enctype="multipart/form-data" method="post" id="registrasitenant">
                               
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
                                             
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <h5 class="col-md-offset-1  col-md-2 control-label">Sampai Tanggal</h5>
                                        <div class="col-md-8">
                                            <input type="text" id="enddate" class="form-control" name="enddate" placeholder="Date End" required="required" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                                           
                                        </div>
                                    </div>
                                   
                                      
                                        <div class="col-md-offset-10 col-md-2">
                                            <button type="submit" class="btn">GO Process</button>
      
                                        </div>
                                </div>
                            </div>
                            </form>
                         
                            
                    </div>
                </div>
            </div>