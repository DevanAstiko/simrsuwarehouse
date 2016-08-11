            <div class="container-fluid">
                <div class="side-body">
                    <div class="page-title">
                        <span class="title">Directory Report</span>
                        <div class="description">Manage dynamic reporting that already saved</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel fresh-color panel-info">
                                <div class="panel-heading">
                                    <h3>Report Directory </h3>

                                </div>
                                <div class="panel-body">
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No. </th>
                                                <th>Nama Laporan</th>
                                                <th>Jenis Laporan</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Author</th>
                                                <th>Date Post</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No. </th>
                                                <th>Nama Laporan</th>
                                                <th>Jenis Laporan</th>
                                                <th>Bulan</th>
                                                <th>Tahun</th>
                                                <th>Author</th>
                                                <th>Date Post</th>
                                                <th></th>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                                $i = 0;
                                                foreach($table->result() as $row){
                                                   
                                                        $i++;
                                                    echo '<tr>
                                                            <td>'. $i.'</td>
                                                            <td>'. $row->namalaporan .'</td>
                                                            <td>'. $row->jenis .'</td>
                                                            <td>'. $row->bulan .'</td>
                                                            <td>'. $row->tahun .'</td>
                                                            <td>'. $row->author .'</td>
                                                            <td>'. $row->datepost .'</td>
                                                            
                                                            <td><a href="http://localhost/simrsuwarehouse/createreport/generate/'. $row->id.'" class="btn btn-success  ! btn-xs pull-right">
                                                                    <i class="fa fa-archive"></i>
                                                                </a>
                                                            <button class="btn btn-danger btn-xs pull-right" onClick="deleteUser(\''. $row->id . '\')">
                                                                    <i class="fa fa-trash"></i>
                                                                </button></td>
                                                        </tr>';

                                                         
                                                    
                                                            
                                                    }
                                                    
                                                
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                   


