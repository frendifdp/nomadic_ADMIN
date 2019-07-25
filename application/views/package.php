<?php $this->load->view('header') ?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title ">Package</h4>
						<p class="card-category"></p>
					</div>
					<div class="card-body">
						<div class="table-responsive">
                            <a class="btn btn-primary pull-right" data-toggle="modal" href='#modal-id'>Add Package</a>
							<table class="table" id="myTable">
								<thead class=" text-primary">
                                    <tr>
                                        <th>Name</th>
                                        <th>City</th>
                                        <th>Description</th>
                                        <th>Facilities</th>
                                        <th>Not Included Facilities</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th></th>
                                    </tr>
								</thead>
								<tbody>
                                    <?php
                                        foreach ($table as $row) {
                                            echo "
                                            <tr>
                                                <td><a href='".base_url('index.php/package/edit/'.$row['id'])."'>".$row['package_name']."</a></td>
                                                <td>".$row['package_city']."</td>
                                                <td>".$row['package_description']."</td>
                                                <td>".$row['included_fasilities']."</td>
                                                <td>".$row['nonincluded_fasilities']."</td>
                                                <td>".$row['package_price']."</td>
                                                <td>".$row['package_image']."</td>
                                                <td><a href='".base_url('index.php/package/delete/'.$row['id'])."'>x</a></td>
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
                <h4 class="modal-title">Add Package</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"> 
            
                <form action="<?=base_url()?>index.php/guide/post" method="POST" role="form" enctype="multipart/form-data">
                    <input type="file" name="myFile">
                    <br><br>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input name="package_name" type="text" class="form-control" id="" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">City</label>
                        <input name="package_city" type="email" class="form-control" id="" required="required">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="package_description" id="input" class="form-control" rows="3" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Facilities</label>
                        <textarea name="included_facilities" id="input" class="form-control" rows="3" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Nonincluded Facilities</label>
                        <textarea name="nonincluded_facilities" id="input" class="form-control" rows="3" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Package Image</label>
                        <input name="package_image" type="text" maxlength="2" class="form-control" id="" required="required">
                    <div class="form-group">
                        <label for="">Price</label>
                        <input name="package_price" type="text" maxlength="2" class="form-control" id="" required="required">
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
