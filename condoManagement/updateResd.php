<div class="modal fade" id="update_modal<?php echo $row['residentid']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="updateQuery.php">
				<div class="modal-header">
					<h3 class="modal-title">Update Resident</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Password</label>
							<input type="hidden" name="residentid" value="<?php echo $row['residentid']?>"/>
							<input type="text" name="password" value="<?php echo $row['password']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Blokc</label>
							<input type="text" name="block" value="<?php echo $row['block']?>" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label>Unit</label>
							<input type="text" name="unit" value="<?php echo $row['unit']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" value="<?php echo $row['name']?>" class="form-control" required="required"/>
						</div>
                        <div class="form-group">
							<label>Phone Number</label>
							<input type="text" name="phonenumber" value="<?php echo $row['phonenumber']?>" class="form-control" required="required"/>
						</div>
                        <div class="form-group">
							<label>E mail</label>
							<input type="text" name="email" value="<?php echo $row['email']?>" class="form-control" required="required"/>
						</div>
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					<button name="submit" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>