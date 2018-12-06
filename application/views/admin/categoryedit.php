<?php include('include/header.php'); ?>

<!-- End Sidebar -->

<!-- Right Side Content Start -->
<section id="content" class="seipkon-content-wrapper">
    <div class="page-content">
        <div class="container-fluid">

            <!-- Breadcromb Row Start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-area">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <!-- <div class="seipkon-breadcromb-left">
                                   <h3>form validation</h3>
                                </div> -->
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!-- <div class="seipkon-breadcromb-right">
                                   <ul>
                                      <li><a href="index-2.html">home</a></li>
                                      <li>forms</li>
                                      <li>form validation</li>
                                   </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcromb Row -->

            <!-- Validation Form Row Start -->

            <div class="row">
                <div class="col-md-12">
                    <div class="page-box">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="add-product-form-group">
                                    <?php

                                    if ($this->session->flashdata('success')) { ?>
                                        <div class="alert alert-block alert-success">
                                            <button type="button" class="close" data-dismiss="alert"><i
                                                        class="icon-remove"></i></button>
                                            <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
                                        </div>
                                    <?php } else if ($this->session->flashdata('error')) { ?>
                                        <div class="alert alert-block alert-danger">
                                            <button type="button" class="close" data-dismiss="alert"><i
                                                        class="icon-remove"></i></button>
                                            <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                                        </div>
                                    <?php } ?>
                                    <h3>Edit Category</h3>
                                    <form method="post" action="<?php echo admin_url(); ?>catalog/updateCategory"
                                          enctype="multipart/form-data" data-parsley-validate>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label>Category Name</label>
                                                    <input type="text" name="cat_name"
                                                          value="<?php echo $ctg_name ?>" placeholder="Enter Category Name">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label>Under</label>
                                                    <select class="form-control" name="cat_under" required>
                                                        <option value="NONE">NONE</option>
                                                        <?php


                                                        $detail = $this->Admin_model->categorylist();
                                                        $cat_underName1 = $this->Admin_model->fetchParticularCategory($ctg_under);
                                                        $cat_underName = $cat_underName1[0]->ctg_name;
                                                        foreach ($detail as $cat) {


                                                            ?>
                                                            <option <?php if($cat->ctg_name==$cat_underName){echo 'selected';}else{echo '';} ?> value="<?php echo $cat->ctg_id; ?>"><?php echo $cat->ctg_name; ?></option>

                                                        <?php } ?>
                                                    </select>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label>Status</label>
                                                    <select class="form-control" name="cat_status" required>

                                                        <option <?php if($ctg_status=='1'){echo 'selected';}else{echo '';} ?> value="1">Enable</option>
                                                        <option <?php if($ctg_status=='0'){echo 'selected';}else{echo '';} ?> value="0">Disable</option>

                                                    </select>
                                                </p>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>
                                                    <label>Description</label>
                                                    <textarea name="cat_desc"
                                                              placeholder="Write Product Description Here" required><?php echo $ctg_description ;?></textarea>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <input type="hidden" value="<?php echo $ctg_id; ?>" name="cat_id">
                                            <input type="hidden" value="<?php echo $ctg_image; ?>" name="cat_image1">
                                            <div class="col-md-12">
                                                <p>
                                                    <button type="submit" class="btn btn-success">
                                                        <i class="fa fa-check"></i>
                                                        Save Info
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fa fa-times"></i>
                                                        Cancel
                                                    </button>
                                                </p>
                                            </div>
                                        </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="add-product-image-upload">
                                    <h3>Product Thumb</h3>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="product-upload-image">
                                                <img id="catImg" src="<?php echo base_url("uploads/category/{$ctg_image}");?>"
                                                     alt="image"/>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="product-upload-action">
                                                <div class="product-upload btn btn-info">
                                                    <p>
                                                        <i class="fa fa-upload"></i>
                                                        Upload Another Image
                                                    </p>
                                                    <input type='file' name="cat_img" onchange="readURL(this);" />

                                                </div>
                                                <button type="button" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                    Delete Image
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Validation Form Row -->

        </div>
    </div>

    <!-- Footer Area Start -->
    <?php include('include/footer_fm.php'); ?>
    <script>

        $(document).ready(function () {

            setTimeout(function () {
                $(".alert").hide();
            }, 5000);
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#catImg')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

          
