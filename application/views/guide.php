<?php $this->load->view('header') ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Tour Guide</h4>
						<p class="card-category"></p>
					</div>
					<div class="card-body">
						<div class="table-responsive">
                            <a class="btn btn-primary pull-right" data-toggle="modal" href='#modal-id'>Add Tour Guide</a>
							<table class="table" id="myTable">
								<thead class=" text-primary">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Gender</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Abilities</th>
                                        <th>Photo Url</th>
                                        <th></th>
                                    </tr>
								</thead>
								<tbody>
                                    <?php
                                        foreach ($table as $row) {
                                            $gender = $row['guide_gender'] == 'M' ? 'Male' : 'Female';
                                            echo "
                                            <tr>
                                                <td><a href='".base_url('index.php/guide/edit/'.$row['id'])."'>".$row['guide_name']."</a></td>
                                                <td>".$row['guide_email']."</td>
                                                <td>".$row['guide_phone']."</td>
                                                <td>".$gender."</td>
                                                <td>".$row['guide_age']."</td>
                                                <td>".$row['guide_address']."</td>
                                                <td>".$row['guide_abilities']."</td>
                                                <td>".$row['guide_photo']."</td>
                                                <td><a href='".base_url('index.php/guide/delete/'.$row['id'])."'>x</a></td>
                                            </tr>
                                            ";
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
</div>

<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Guide</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"> 
            
                <form action="<?=base_url()?>index.php/guide/post" method="POST" role="form" enctype="multipart/form-data">
                    <input type="file" name="myFile">
                    <br><br>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input name="guide_name" type="text" class="form-control" id="" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="guide_email" type="email" class="form-control" id="" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input name="guide_phone" type="number" class="form-control" id="" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input name="guide_password" type="password" class="form-control" id="" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input name="guide_address" type="text" class="form-control" id="" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">Age</label>
                        <input name="guide_age" type="text" maxlength="2" class="form-control" id="" required="required">
                    <div class="form-group">
                        <label for="">Gender</label>
                        <select name="guide_gender" id="input" class="form-control" required="required">
                            <option value=""><--Select One--></option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Abilities</label>
                        <textarea name="guide_abilities" class="form-control" rows="3"></textarea>
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
