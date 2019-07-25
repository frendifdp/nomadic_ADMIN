<?php $this->load->view('header') ?>

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Edit tour guide profile</p>
                </div>
                <div class="card-body">
                  <form action="<?=base_url()?>index.php/guide/put" method="POST">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input name="id" type="hidden" value="<?=$data['id']?>">
                          <input name="guide_name" type="text" class="form-control" value="<?=$data['guide_name']?>">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input name="guide_email" type="email" class="form-control" value="<?=$data['guide_email']?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Phone</label>
                          <input name="guide_phone" type="number" class="form-control" value="<?=$data['guide_phone']?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Age</label>
                          <input name="guide_age" type="text" class="form-control" value="<?=$data['guide_age']?>">
                        </div>  
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select name="guide_gender" class="form-control" required="required">
                            <option value="">Select Gender</option>
                            <option value="M" <?php echo $data['guide_gender'] == 'M' ? 'selected': ''; ?>>Male</option>
                            <option value="F" <?php echo $data['guide_gender'] == 'F' ? 'selected': ''; ?>>Female</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input name="guide_address" type="text" class="form-control" value="<?=$data['guide_address']?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Abilities</label>
                          <div class="form-group">
                            <textarea class="form-control" rows="5"><?=$data['guide_abilities']?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php $this->load->view('footer') ?>
