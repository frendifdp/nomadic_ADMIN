<?php $this->load->view('header') ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Simple Table</h4>
						<p class="card-category"> Here is a subtitle for this table</p>
					</div>
					<div class="card-body">
						<div class="table-responsive">
<a class="btn btn-primary pull-right" data-toggle="modal" href='#modal-id'>Add Tour Guide</a>

							<table class="table">
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Trigger modal</a>
<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Guide</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"> 
            
                <form action="" method="POST" role="form" enctype="multipart/form-data">
                    <input type="file" name="myFile">
                    <br><br>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Age</label>
                        <input type="text" maxlength="2" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Gender</label>
                        <select name="" id="input" class="form-control" required="required">
                            <option value=""><--Select One--></option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button  type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer') ?>
