 <div class="container-fluid">
 	<div class="side-body">

 		<div class="row">
 			<div class="col-xs-12">
 				<div class="panel fresh-color panel-info">
 					<div class="panel-heading">
 						<h3>Personalization </h3>

 					</div>
 					<div class="panel-body">
 						<div class="row">
 							<div class="col-xs-3">
 								<div class="col-md-12">
 									<img src="<?php echo base_url(); ?>public/img/personalization/iconuser.png">
 								</div>
 								<form role="form" id="adminupdateform" action="<?php echo base_url(); ?>personalization/updateAdmin" method="post" class="get-form">								
 								<div class="col-md-4">
 								<button type="file" class="btn btn-default btn-lg" style="margin-left: 40%">
 										<span class="glyphicon glyphicon-open" aria-hidden="true"></span>Upload Photo
 								</button>
 								</div>
 								<div class="col-md-4"></div>

 							</div>

 							
 								<div class="col-md-6">
 									<div class="form-group">
 										<h5 class="col-sm-3 control-label">Username</h5>
 										<div class="col-sm-9">
 											<input type="text" class="form-control" placeholder="<?php echo $table['username']; ?>" id="username">
 										</div>
 									</div>
 									<div class="form-group">
 										<h5 class="col-sm-3 control-label">Name</h5>
 										<div class="col-sm-9">
 											<input type="text" class="form-control" placeholder="<?php echo $table['name']; ?>" value="" id="name">
 										</div>
 									</div>
 									<div class="form-group">
 										<h5 class="col-sm-3 control-label">Email</h5>
 										<div class="col-sm-9">
 											<input type="text" class="form-control" placeholder="<?php echo $table['email']; ?>" id="email">
 										</div>
 									</div>
 									<div class="form-group">
 										<div class="form-group">
 											<h5 class="col-sm-3 control-label">Created at</h5>
 											<div class="col-sm-9">
 												<label class="form-control" id="created_at"><?php echo $table['created_at']; ?></label>
 											</div>
 										</div>
 										<h5 class="col-sm-3 control-label">Role</h5>
 										<div class="col-sm-9">
 											<label class="form-control" id="role"><?php if($table['previllage']==1){
 													echo "General Admin";
 												}
 												if($table['previllage']==2){
 													echo "Admin Rawat Jalan";
 												}  ?></label>
 										</div>
 									</div>
 									<div class="form-group">
 										<h5 class="col-sm-3 control-label">Last login</h5>
 										<div class="col-sm-9">
 											<label class="form-control" id="last_login"><?php echo $table['last_login']; ?></label>
 										</div>
 									</div>

 									<button type="file" class="btn btn-default btn-lg" style="text-align: center;">
 										<span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Save
 									</button>


 								</div>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
 </div>