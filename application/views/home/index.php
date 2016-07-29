<div class="container-fluid">
                <div class="side-body">
	                


                    <div class="page-title">
                        
                        
                        <span class="title">Last ETL : <?php foreach ($content -> result() as $value) {
                                        echo $value->etllast;
                                    }?></span>
                        <div class="description">Directory ETL in any kind installation RSU Haji Surabaya</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel fresh-color panel-info">
                                <div class="panel-heading">
                                    <h3>Directory ETL</h3>

                                </div>
                                <div class="panel-body">
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                 <th>No. </th>
                                                
                                                <th>Installation Name</th>
                                                <th>ETL Start</th>
                                                <th>ETL Last Date</th>
                                                <th>Total Row Inserted</th>
                                                <th>Admin name</th>
                                               
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                           <?php $i = 0;
                                           foreach ($tabel->result() as $key) {
                                               $i++;
                                               echo "<tr>
                                                <td>".$i."</td>
                                                <td>".$key->installationname."</td>
                                                <td>".$key->etlstart."</td>
                                                <td>".$key->etllast."</td>
                                                <td>".$key->totalrowinserted."</td>
                                                <td>".$key->adminname."</td>
                                                
                                            </tr>";
                                           } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                    <div class="page-title">
                        <span class="title">Your Last Activity</span>
                    </div>
                        <div class="panel panel-info">
                        <div class="panel-body">
                            <ul class="list-group">
                              <li class="list-group-item list-group-item-default">Create Report Top 10 Disease Rawat Jalan</li>
                              <li class="list-group-item list-group-item-default">Create report Rawat Jalan</li>
                              <li class="list-group-item list-group-item-default">Querying and Save Reports</li>
                              <li class="list-group-item list-group-item-default">ETL Processing Rawat Jalan Installation</li>
                            </ul>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="page-title">
                        <span class="title">Inbox Messages</span>
                    </div>
                    
                        <div class="list-group">
                          <a href="" class="list-group-item " >
                            <h4 class="list-group-item-heading">Bagian Evapor</h4>
                            <p class="list-group-item-text"> Tolong saya dikirimkan email tentang laporan penyakit top 10 pada bagian rawat jalan</p>
                            

                          </a>
                          <a href="" class="list-group-item " >
                            <h4 class="list-group-item-heading">Bagian Rawat Jalan</h4>
                            <p class="list-group-item-text"> Tolong saya dikirimkan email tentang laporan penyakit top 10 pada bagian rawat jalan</p>
                            
                          </a>
                          <a href="" class="list-group-item " >
                            <h4 class="list-group-item-heading">Bagian Rawat Jalan</h4>
                            <p class="list-group-item-text"> Tolong saya dikirimkan email tentang laporan penyakit top 10 pada bagian rawat jalan</p>
                            
                          </a>
                          <input type="submit" name="content1" value="More Messages" class="btn btn-primary">
                        </div>
                    </div>

                    
                </div>

            </div>
                    
</div>
</div>
