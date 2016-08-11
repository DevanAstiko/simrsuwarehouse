            <div class="container-fluid">
                <div class="side-body">
                    <div class="page-title">
                        <span class="title">Admin</span>
                        <div class="description">Manage Admin user who can login and access this page</div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel fresh-color panel-info">
                                <div class="panel-heading">
                                    <h3>Registered Admin <button class="btn btn-primary pull-right" style="margin-top: -10px;" data-toggle="modal" data-target="#modalAddUser"><i class="fa fa-plus"></i></button></h3>

                                </div>
                                <div class="panel-body">
                                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No. </th>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Registered Date</th>
                                                <th>Role</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No. </th>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Registered Date</th>
                                                <th>Role</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php
                                                $i = 0;
                                                foreach($table->result() as $row){
                                                    if($row->deleted_at == NULL){
                                                        $i++;
                                                    echo '<tr>
                                                            <td>'. $i.'</td>
                                                            <td>'. $row->id .'</td>
                                                            <td>'. $row->username .'</td>
                                                            <td>'. $row->created_at .'</td>
                                                            <td>';

                                                     $var = $row->previllages_id    ;
                                                    if($var == 1){
                                                        echo 'Admin SIM RSU</td>
                                                            <td><button class="btn btn-danger btn-xs pull-right" onClick="deleteUser(\''. $row->id . '\')">
                                                                    <i class="fa fa-trash"></i>
                                                                </button></td>
                                                         </tr>';
                                                    }
                                                    
                                                    elseif($var ==3){
                                                        echo 'Admin Rawat Jalan</td>
                                                            <td><button class="btn btn-danger btn-xs pull-right" onClick="deleteUser(\''. $row->id . '\')">
                                                                    <i class="fa fa-trash"></i>
                                                                </button></td>
                                                         </tr>';
                                                    }
                                                    elseif($var ==2){
                                                        echo 'Admin SIM RSU</td>
                                                            <td><button class="btn btn-danger btn-xs pull-right" onClick="deleteUser(\''. $row->id . '\')">
                                                                    <i class="fa fa-trash"></i>
                                                                </button></td>
                                                         </tr>';
                                                    }
                                                    elseif($var ==4){
                                                        echo 'Kepala Rawat Jalan</td>
                                                            <td><button class="btn btn-danger btn-xs pull-right" onClick="deleteUser(\''. $row->id . '\')">
                                                                    <i class="fa fa-trash"></i>
                                                                </button></td>
                                                         </tr>';
                                                    }
                                                    elseif($var ==5){
                                                        echo 'Evaluasi dan Pelaporan</td>
                                                            <td><button class="btn btn-danger btn-xs pull-right" onClick="deleteUser(\''. $row->id . '\')">
                                                                    <i class="fa fa-trash"></i>
                                                                </button></td>
                                                         </tr>';
                                                    }
                                                            
                                                    }
                                                    
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
                    <div class="modal fade modal-primary" id="modalAddUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Add New Admin</h4>
                                </div>
                                <form id="addUserForm">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="username">Username*</label>
                                        <input type="text" name="username" class="form-control" id="username" placeholder="Username :" required="required">
                                        <p id="usernamealert" style="dislay: none; color: red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password*</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="Password :" required="required">
                                        <p id="passwordalert" style="dislay: none; color: red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="confpassword">Confirm Password*</label>
                                        <input type="password" name="confpassword" class="form-control" id="confpassword" placeholder="Confirm Password :" required="required">
                                        <p id="confpasswordalert" style="dislay: none; color: red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                        <label>Role*</label><br>
                                          
                                          <div class="radio3 radio-check radio-inline">
                                            <input type="radio" id="role2" name="role" value="2">
                                            <label for="role2">
                                             Admin SIM RSU
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-inline">
                                            <input type="radio" id="role3" name="role" value="3">
                                            <label for="role3">
                                             Admin Rawat Jalan
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-inline">
                                            <input type="radio" id="role4" name="role" value="4">
                                            <label for="role4">
                                             Kepala Rawat Jalan
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-inline">
                                            <input type="radio" id="role5" name="role" value="5">
                                            <label for="role5">
                                              Evaluasi dan Pelaporan
                                            </label>
                                          </div>
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <input type="submit" id="submitButton" class="btn btn-info" value="Submit">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>


