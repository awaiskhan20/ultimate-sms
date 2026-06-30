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
                          <div class="grid simple">
                            <div class="grid-title no-border"></div>
                            <div class="grid-body no-border">
                              <div class="row column-seperation">
                                <div class="col-md-6">
                                  <h4>Basic Information</h4>            
                                    <div class="row form-row">
                                      <div class="col-md-12">
                                        <input name="inputDate" id="inputDate" type="text"  class="form-control" placeholder="Create Date">
                                      </div>
                                    </div>
                                    <div class="row form-row">
                                      <div class="col-md-12">
                                        <select name="dropdownCategory" id="dropdownCategory" class="form-control">
                                          <option  value="0">-- Select Category --</option>
                                          <option>Category</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="row form-row">
                                      <div class="col-md-12">
                                        <input name="inputTitle" id="inputTitle" type="text"  class="form-control" placeholder="Title">
                                      </div>
                                    </div>
                                    <div class="row form-row">
                                      <div class="col-md-12">
                                        <input name="inputSlug" id="inputSlug" type="text"  class="form-control" placeholder="Slug">
                                      </div>
                                    </div>
                                    <div class="row form-row">
                                      <div class="col-md-12">
                                        <textarea name="inputSMS" id="inputSMS" rows="8" class="form-control" placeholder="SMS"></textarea>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                  <h4>Meta Information</h4>
                                    <div class="row form-row">
                                      <div class="col-md-12">
                                        <textarea name="inputMetaDescriptions" id="inputMetaDescriptions" rows="8" class="form-control" placeholder="Meta Descriptions"></textarea>
                                      </div>
                                    </div>
                                    <div class="row form-row">
                                      <div class="col-md-12">
                                        <input type="text" name="inputMetaKeywords" id="inputMetaKeywords" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput">
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

