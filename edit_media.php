<?php include 'partials/header.php'; ?>
<?php include 'partials/sidebar.php'; ?>

<?php
require 'config/db.php';
$id = $_GET['id'];
$query = mysqli_query($connection, "SELECT * FROM media WHERE id = $id") or die(mysqli_error());
$row = mysqli_fetch_array($query);
?>

    <!-- BEGIN PAGE CONTAINER-->
<div class="page-content">
  <div class="content">
      <!-- BEGIN PAGE TITLE -->
      <div class="page-title">
          <h2>Edit Media</h2>
      </div>
      <!-- END PAGE TITLE -->
      <!-- BEGIN PlACE PAGE CONTENT HERE -->
      <form action="update_media.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="hidden" name="old_image" value="<?php echo $row['media_image']; ?>">
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
                                      <input name="create_date" id="inputDate" type="text"  class="form-control" placeholder="Create Date" value="<?php echo $row['create_date']; ?>">
                                    </div>
                                  </div>
                                  <div class="row form-row">
                                    <div class="col-md-12">
                                      <select name="media_type" id="dropdownMedia" class="form-control">
                                        <option value="none">-- Select Media --</option>
                                        <option value="slideshow">Slideshow</option>
                                        <option value="gallery">Gallery</option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="row form-row">
                                    <div class="col-md-12">
                                      <input name="title" id="inputTitle" type="text"  class="form-control" placeholder="Title" value="<?php echo $row['title']; ?>">
                                    </div>
                                  </div>
                                  <div class="row form-row">
                                    <div class="col-md-12">
                                      <input name="slug" id="inputSlug" type="text"  class="form-control" placeholder="Slug" value="<?php echo $row['slug']; ?>">
                                    </div>
                                  </div>
                                  <div class="row form-row">
                                    <div class="col-md-12">
                                      <textarea name="description" id="inputDescription" rows="8" class="form-control" placeholder="Description"><?php echo $row['description']; ?></textarea>
                                    </div>
                                  </div>
                                  <div class="row form-row">
                                    <div class="col-md-12">
                                      <textarea name="embed_code" id="embed_code" rows="8" class="form-control" placeholder="Embed Code"><?php echo $row['embed_code']; ?></textarea>
                                    </div>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                <h4>Meta Information</h4>
                                <div class="row form-row">
                                    <div class="col-md-12">
                                      <input type="file" name="media_img" id="media_img"> 
                                    </div>
                                </div>
                                  <div class="row form-row">
                                    <div class="col-md-12">
                                      <textarea name="meta_description" id="inputMetaDescriptions" rows="8" class="form-control" placeholder="Meta Descriptions"><?php echo $row['meta_description']; ?></textarea>
                                    </div>
                                  </div>
                                  <div class="row form-row">
                                    <div class="col-md-12">
                                      <input type="text" name="meta_keyword" id="inputMetaKeywords" class="form-control tagsinput" data-a-sign="$" data-role="tagsinput" value="<?php echo $row['meta_keyword']; ?>">
                                    </div>
                                  </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-actions">
                          <button class="btn btn-danger btn-cons" type="submit"><i class="fa fa-save"></i> Update </button>
                          <a href="media.html" class="btn btn-primary btn-cons" type="button"><i class="fa fa-times"></i> Cancel </a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </form>
      <!-- END PLACE PAGE CONTENT HERE -->
  </div>
</div>
  <!-- END PAGE CONTAINER -->
<!-- END CONTENT --> 
</body>
</html>

