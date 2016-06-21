            <div class="container-fluid">
                <div class="side-body">
                    <div class="page-title">
                        
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="panel fresh-color panel-info">
                                <div class="panel-heading">
                                    <h3 class="title">Create New Report</h3 >
                        <div class="description">New report from datawarehouse databases</div>
                                </div>
                                <div class="panel-body">
                                <button class="btn btn-warning pull-left"  data-toggle="modal" data-target="#modalCustom" style="margin-bottom: 30px"><i class="fa fa-plus"></i> Custom Report</button>
                                <br>
                                <table border='1'>
                                    <tr>
                                        <td>
                                            <div id="output" style="margin: 10px;">cok</div>
                                        </td>
                                    </tr>
                                </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade modal-primary" id="modalCustom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Add User</h4>
                                </div>
                                <form id="coba">
                                <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseValue" aria-expanded="false" aria-controls="collapseValue">
                                  Value
                                </a>
                                <div class="collapse" id="collapseValue">
                                  <div class="well">
                                    

                                  </div>
                                </div>
                                <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseRow" aria-expanded="false" aria-controls="collapseRow">
                                  Row
                                </a>
                                <div class="collapse" id="collapseRow">
                                  <div class="well">
                                    collapseRow
                                  </div>
                                </div>
                                <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseColoumn" aria-expanded="false" aria-controls="collapseColoumn">
                                  Coloumn
                                </a>
                                <div class="collapse" id="collapseColoumn">
                                  <div class="well">
                                    collapseColoumn
                                  </div>
                                </div>
                                <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter">
                                  Filter
                                </a>
                                <div class="collapse" id="collapseFilter">
                                  <div class="well">
                                    collapseFilter
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
