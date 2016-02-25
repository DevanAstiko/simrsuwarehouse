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
 								<form role="form" id="updateformadmin" action="<?php echo base_url(); ?>/pesonalization" method="post" class="get-form">								
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
 											<input type="text" class="form-control" placeholder="Username" id="username">
 										</div>
 									</div>
 									<div class="form-group">
 										<h5 class="col-sm-3 control-label">Name</h5>
 										<div class="col-sm-9">
 											<input type="text" class="form-control" placeholder="Your Name" value="<?php echo $table['name']; ?>" id="name">
 										</div>
 									</div>
 									<div class="form-group">
 										<h5 class="col-sm-3 control-label">Email</h5>
 										<div class="col-sm-9">
 											<input type="text" class="form-control" placeholder="Your Email" id="email">
 										</div>
 									</div>
 									<div class="form-group">
 										<div class="form-group">
 											<h5 class="col-sm-3 control-label">Created at</h5>
 											<div class="col-sm-9">
 												<label class="form-control" id="created_at">lalalla</label>
 											</div>
 										</div>
 										<h5 class="col-sm-3 control-label">Role</h5>
 										<div class="col-sm-9">
 											<label class="form-control" id="role">lalalla</label>
 										</div>
 									</div>
 									<div class="form-group">
 										<h5 class="col-sm-3 control-label">Last login</h5>
 										<div class="col-sm-9">
 											<label class="form-control" id="last_login">lalalla</label>
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