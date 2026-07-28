<?php include 'partials/header.php'; ?>
<?php include 'partials/sidebar.php'; ?>

    <!-- BEGIN PAGE CONTAINER-->
<div class="page-content">
    <div class="content">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h2>Add SMS</h2>
        </div>
        <!-- END PAGE TITLE -->
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <div class="col-md-14">
            <div class="grid simple">
                <div class="grid-body no-border">
                    <div class="row">
                      <div class="col-md-12">
                        <form action="act_add_sms.php" method="post">
                          <div class="grid simple">
                            <div class="grid-title no-border"></div>
                                <div class="grid-body no-border">
                                <div class="row column-seperation">
                                  <div class="col-md-6">
                                    <h4>Basic Information</h4>            
                                      <div class="row form-row">
                                        <div class="col-md-12">
                                          <input name="create_date" id="inputDate" type="text"  class="form-control" placeholder="Create Date">
                                        </div>
                                      </div>
                                      <div class="row form-row">
                                        <div class="col-md-12">
                                          <select name="dropdown_category" id="dropdown_category" class="form-control">
                                            <option  value="0">-- Select Category --</option>
                                            <?php 
                                              require_once 'config/db.php';
                                              $query = mysqli_query($connection, "SELECT * FROM category");
                                              while($row = mysqli_fetch_assoc($query)) {
                                                echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
                                              }
                                            ?>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="row form-row">
                                        <div class="col-md-12">
                                          <input name="title" id="title" type="text"  class="form-control" placeholder="Title">
                                        </div>
                                      </div>
                                      <div class="row form-row">
                                        <div class="col-md-12">
                                          <input name="slug" id="slug" type="text"  class="form-control" placeholder="Slug">
                                        </div>
                                      </div>
                                      <div class="row form-row">
                                        <div class="col-md-12">
                                          <textarea name="content" id="content" rows="8" class="form-control" placeholder="SMS"></textarea>
                                        </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                    <h4>Meta Information</h4>
                                      <div class="row form-row">
                                        <div class="col-md-12">
                                          <textarea name="meta_description" id="meta_description" rows="8" class="form-control" placeholder="Meta Descriptions"></textarea>
                                        </div>
                                      </div>
                                      <div class="row form-row">
                                        <div class="col-md-12">
                                          <input type="text" name="meta_keyword" id="meta_keyword" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput">
                                        </div>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-actions">
                              <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Save </button>
                              <a href="sms.php" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <!-- END PLACE PAGE CONTENT HERE -->
    </div>
  </div>
  <!-- END PAGE CONTAINER -->
</div>
<!-- END CONTENT --> 
</body>
</html>

