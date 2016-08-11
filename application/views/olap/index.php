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
                                <div class="panel-body">
                                   

                                     <script type="text/javascript">
                                       

                                        $(function(){
                                            var tpl = $.pivotUtilities.aggregatorTemplates;
                                            var derivers = $.pivotUtilities.derivers;
                                            var renderers = $.extend($.pivotUtilities.renderers, 
                                                $.pivotUtilities.<?php echo "c3_renderers"; ?>);

                                            $.getJSON("<?php echo base_url().'public/filejson/'.$namafile; ?>", function(mps) {
                                                $("#output").pivotUI(mps, {
                                                    renderers: renderers,
                                                    derivedAttributes: {
                                                        // "Age Bin": derivers.bin("Age", 10),
                                                        // "Gender Imbalance": function(mp) {
                                                        //     return mp["JenisKelamin"] == "Female" ? "Female" : "Male";
                                                        // }
                                                    },
                                                     <?php echo 'cols: ["jenisKelamin","namaAsuransi",], rows: ["namaPoli"]';?>,
                                                    rendererName: "Table",
                                                    aggregatorName:"Count",
                                                    // aggregators: {
                                                        // "Totalcost":      function() { return tpl.sum()(["Totalcost"]) },
                                                        // "Average Age of MPs": function() { return tpl.average()(["Age"])},
                                                    // }
                                                    // AttrDropdown.value:"Totalcost"

                                                });
                                            });
                                         });
                                            </script>

                                      
                                            
                                            
      <div id="output" ></div>


<script>
    
     
</script>                 
 <!-- <a href="javascript:demoFromHTML()" class="button">Run Code</a> -->
 <button class="btn btn-primary pull-right"  data-toggle="modal" data-target="#modalReport">Save</button>
 <button class="btn btn-primary pull-right" style="margin-right: 10px;" onclick="demoFromHTML()">Generate PDF</button> 

      

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<div class="modal fade modal-primary" id="modalReport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Simpan Laporan</h4>
                                </div>
                                <form id="addlaporanform">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="namalaporan">Nama Laporan</label>
                                        <input type="text" name="namalaporan" class="form-control" id="namalaporan" placeholder="nama laporan :" required="required">
                                        <p id="namalaporanalert" style="dislay: none; color: red;"></p>
                                    </div>
                                    <div class="form-group">
                                    <label for="namalaporan">Per Bulan</label>
                                        <select class="form-control" id="bulan" name="bulan" >
                                            <option value="0">None</option>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>

                                        </select>
                                        <p  id="bulanalert" style="dislay: none; color: red;"></p>
                                    </div>
                                    <div class="form-group">
                                        <label for="namalaporan">Per Tahun</label>
                                        <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Per Tahun :" >
                                        <p id="tahunalert" style="dislay: none; color: red;"></p>
                                    </div>
                                    <div class="form-group">
                                    <label for="jenislaporan">Jenis Laporan</label>
                                        <select class="form-control" id="jenislaporan" name="jenislaporan" >
                                            <option value="Table">Table</option>
                                            <option value="Line Chart">Grafik garis</option>
                                            <option value="Bar Chart">Grafik batang</option>
                                            <option value="Stacked Bar Chart">Grafik Stack Batang</option>
                                            <option value="Area Chart">Grafik Area</option>
                                        </select>
                                        <p id="jenislaporanalert" style="dislay: none; color: red;"></p>
                                    </div>

                                    <div class="form-group">
                                    <label for="namalaporan">Nama Kolom</label>
                                    <textarea class="form-control" rows="5" id="kolom" name="kolom" required="required"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="namalaporan">Nama Baris</label>
                                    <textarea class="form-control" rows="5" id="baris" name="baris" required="required"></textarea>
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
 
