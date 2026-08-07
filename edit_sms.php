<?php include 'partials/header.php'; ?>
<?php include 'partials/sidebar.php'; ?>

<?php 

  require_once 'config/db.php';
  $id = $_GET['id'];
  $query = mysqli_query($connection, "SELECT * FROM message WHERE id = '$id'");
  $row = mysqli_fetch_assoc($query);

?>

<!-- BEGIN PAGE CONTAINER-->
<div class="page-content">
  <div class="content">
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
          <h2>Edit SMS</h2>
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <div class="col-md-14">
          <div class="grid simple">
              <div class="grid-body no-border">
                  <div class="row">
                    <form action="update_sms.php" method="POST" id="form-personal">
                      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                      <div class="col-md-12">
                      <div class="grid simple">
                        <div class="grid-title no-border"></div>
                        <div class="grid-body no-border">
                          <div class="row column-seperation">
                            <div class="col-md-6">
                              <h4>Basic Information</h4>            
                                <div class="row form-row">
                                  <div class="col-md-12">
                                    <input name="create_date" id="inputDate" type="text"  class="form-control" placeholder="Create Date" value="<?php echo $row['create_date']; ?>">
                                  </div>
                                </div>
                                <div class="row form-row">
                                  <div class="col-md-12">
                                    <select name="dropdown_category" id="dropdown_category" class="form-control">
                                      <?php
                                        $query = mysqli_query($connection, "SELECT * FROM category");

                                        while($option_row = mysqli_fetch_assoc($query)) {
                                            $selected = ($option_row['id'] == $row['category_id']) ? 'selected' : '';
                                            echo '<option value="'.$option_row['id'].'" '.$selected.'>'.$option_row['title'].'</option>';
                                        }
                                      ?>
                                      </select>
                                  </div>
                                </div>
                                <div class="row form-row">
                                  <div class="col-md-12">
                                    <input name="title" id="title" type="text"  class="form-control" placeholder="Title" value="<?php echo $row['title']; ?>">
                                  </div>
                                </div>
                                <div class="row form-row">
                                  <div class="col-md-12">
                                    <input name="slug" id="slug" type="text"  class="form-control" placeholder="Slug" value="<?php echo $row['slug']; ?>">
                                  </div>
                                </div>
                                <div class="row form-row">
                                  <div class="col-md-12">
                                    <textarea name="content" id="content" rows="8" class="form-control" placeholder="SMS"><?php echo $row['content']; ?></textarea>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                              <h4>Meta Information</h4>
                                <div class="row form-row">
                                  <div class="col-md-12">
                                    <textarea name="meta_description" id="meta_description" rows="8" class="form-control" placeholder="Meta Descriptions"><?php echo $row['meta_description']; ?></textarea>
                                  </div>
                                </div>
                                <div class="row form-row">
                                  <div class="col-md-12">
                                    <input type="text" name="meta_keyword" id="meta_keyword" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput" value="<?php echo $row['meta_keyword']; ?>">
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                        <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Update</button>
                        <a href="sms.php" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
                      </div>
                    </div>
                    </form>
                  </div>
              </div>
          </div>
      </div>
      <!-- END PLACE PAGE CONTENT HERE -->
  </div>
</div>

<!-- END PAGE CONTAINER -->
<!-- END CONTENT --> 
</body>
</html>

