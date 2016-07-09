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

                                            var derivers = $.pivotUtilities.derivers;
                                            var renderers = $.extend($.pivotUtilities.renderers, 
                                                $.pivotUtilities.c3_renderers);

                                            $.getJSON("<?php echo base_url(); ?>public/mps.json", function(mps) {
                                                $("#output").pivotUI(mps, {
                                                    renderers: renderers,
                                                    derivedAttributes: {
                                                        "Age Bin": derivers.bin("Age", 10),
                                                        "Gender Imbalance": function(mp) {
                                                            return mp["Gender"] == "Female" ? "Female" : "Male";
                                                        }
                                                    },
                                                    <?php echo 'cols: ["Age Bin","Gender Imbalance"], rows: ["Gender"]';?>,
                                                    rendererName: "Table"
                                                });
                                            });
                                         });
                                            </script>

                                      
                                            
                                            
      <div id="output" ></div>


<script>
    
     
</script>                 
 <a href="javascript:demoFromHTML()" class="button">Run Code</a>   

      

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


 
