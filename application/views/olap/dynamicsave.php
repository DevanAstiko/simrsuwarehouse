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
                                                     <?php 

                                                        $cols = explode(",", $kolom);
                                                        echo 'cols: [';
                                                        for ($i = 0; $i < count($cols); $i++) {
                                                            echo '"'.$cols[$i].'",';
                                                           
                                                        } 
                                                        echo "],";
                                                        $rows = explode(",", $baris);
                                                        echo 'rows: [';
                                                        for ($j = 0; $j < count($rows); $j++) {
                                                            echo '"'.$rows[$j].'",';
                                                           
                                                        } 
                                                        echo "],";?>
                                                    rendererName: <?php echo '"'.$jenis.'"'; ?>,
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
 <button class="btn btn-primary pull-right" style="margin-right: 10px;" data-toggle="modal" onclick="demoFromHTML()">Generate PDF</button> 

      

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
