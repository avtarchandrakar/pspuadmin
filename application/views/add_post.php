<!--=========================View==============Fix========== -->
<!-- ========================Header==============Fix========= -->
<?php $this->view('top_header') ?>
<!-- =======================/Header==============Fix========= -->
<!-- =========================View===============Fix========= -->
<div class="page-content">
    <div class="container-fluid">
        <!-- ========================/View===============Fix========= -->
        <!-- ======================Page Title======================== -->
        <!-- Breadcromb Row Start -->
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-area">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="seipkon-breadcromb-left">
                                <h3><?php echo $pagename; ?></h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 pull-right">
                            <div class="seipkon-breadcromb-right">
                                <a href="<?php echo site_url('post/post_list'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> All post</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            .d-flex {
                display: flex;
                align-items: center;
            }

            .jbfrm input[type=radio] {
                width: 27px;
                height: 17px;
                margin: 0px;
                background: none;
                box-shadow: none;
                transition: 0.5s;
            }

            .space-around {
                justify-content: space-around;
            }

            .space-around input[type=checkbox] {
                margin: 0px 0px 0px;
                transition: 0.5s;
                width: 20px;
                height: 18px;
            }

            .space-around input[type=checkbox]:focus {
                outline: none !important;
                transform: scale(1.2);
            }

            .jbfrm input[type=radio]:focus {
                outline: none !important;
                transform: scale(1.2);
            }
        </style>
        <!-- End Breadcromb Row -->
        <!-- =====================/Page Title======================== -->
        <!-- =====================Page Content======================= -->
        <!-- View Counselor Area Start -->

        <?php 
        if (!empty($edit_value)) {
            $id = $edit_value[0]->id;
            $category = $edit_value[0]->category;
            $title = $edit_value[0]->title;
            $image = $edit_value[0]->image;
            $slug = $edit_value[0]->slug;
            $visibility = $edit_value[0]->visibility;
            $right_column = $edit_value[0]->right_column;
            $addtoslider = $edit_value[0]->addtoslider;
            $created_date = $edit_value[0]->created_date;
            $comments = $edit_value[0]->comments;
            $mainhead = $edit_value[0]->mainhead;
            $description = $edit_value[0]->description;
            $status = $edit_value[0]->m_post_status;
        } else {
            $id = '';
            $category = '';
            $title = '';
            $image = '';
            $slug = '';
            $visibility = '';
            $right_column = '';
            $addtoslider = '';
            $created_date = '';
            $comments = '';
            $mainhead = '';
            $description = '';
            $status = '';
        } ?>

        <div class="row">
            <div class="col-md-12">
                <div class="page-box">
                    <div class="form-example">
                        <div class="form-wrap top-label-exapmple form-layout-page">
                            <form method="post" action="#" id="frm-post-create" enctype="mutipart/form-data">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>category title</label>
                                                
                                            <?php //print_r($cat_list); ?>
                                            <select name="category" id="category" class="form-control select2">
                                                <option value="">Select category title</option>
                                                <?php
                                                foreach ($cat_list as $des_value) {

                                                    if ($category == $des_value->m_category_id) {
                                                       $option1 = "selected";
                                                    } else {
                                                        $option1 = "";
                                                    }

                                                ?>
                                                    <option value="<?php echo $des_value->m_category_id; ?>" <?php echo $option1; ?>><?php echo $des_value->m_category_title; ?>
                                                    </option>
                                                <?php
                                                }

                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="hidden" name="id" id="id" value="<?= $id; ?>">
                                            <input type="text" name="title" id="title" class="form-control" placeholder="Name of title" required="" value="<?= $title; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Slug</label>
                                            <input type="text" name="slug" id="slug" class="form-control" placeholder="Name of Slug" required="" value="<?= $slug; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Visibility</label>
                                            <select name="visibility" id="visibility" class="form-control" value="<?= $visibility; ?>">
                                                <option value="Yes" <?php if ($visibility == 'Yes') echo 'selected'; ?>>Yes</option>
                                                <option value="No" <?php if ($visibility == 'No') echo 'selected'; ?>>No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Show Right Column</label>
                                            <select name="right_column" id="right_column" class="form-control" value="<?= $right_column; ?>">
                                                <option value="Yes" <?php if ($right_column == 'Yes') echo 'selected'; ?>>Yes</option>
                                                <option value="No" <?php if ($right_column == 'No') echo 'selected'; ?>>No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Add to Slider</label>
                                            <select name="addtoslider" id="addtoslider" class="form-control" value="<?= $addtoslider; ?>">
                                                <option value="Yes" <?php if ($addtoslider == 'Yes') echo 'selected'; ?>>Yes</option>
                                                <option value="No" <?php if ($addtoslider == 'No') echo 'selected'; ?>>No</option>
                                            </select>
                                        </div>
                                    </div>


                                    <?php if (!empty($id)) { ?>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>post Image</label>
                                                <input type="file" name="m_post_image" id="m_post_image" class="form-control">
                                                <input type="hidden" name="m_post_image1" id="m_post_image1" class="form-control" value="<?= $image; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                           
                                                <?php if (!empty($image)) {
                                                    $post_img = base_url('uploads/post/') . $image;
                                                } else {
                                                    $post_img = base_url('uploads/Category/defaultimg.jpg');
                                                } ?>
                                                <img src="<?php echo $post_img; ?>" alt="Profile Photo" width="80">
                                            
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>post Image</label>
                                                <input type="file" name="m_post_image" id="m_post_image" class="form-control">
                                                <input type="hidden" name="m_post_image1" id="m_post_image1" class="form-control" value="<?= $image; ?>">
                                            </div>
                                        </div>
                                    <?php } ?>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date & Time</label>
                                            <input type="date" name="created_date" id="created_date" class="form-control" placeholder="Name of Date & Time" required="" value="<?= $created_date; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Comments</label>
                                            <input type="text" name="comments" id="comments" class="form-control" placeholder="Name of Comments" required="" value="<?= $comments; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Main Heading</label>
                                            <input type="text" name="mainhead" id="mainhead" class="form-control" placeholder="Name of Main Heading" required="" value="<?= $mainhead; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="m_post_status" id="m_post_status" class="form-control" value="<?= $status; ?>">
                                                <option value="1" <?php if ($status == 1) echo 'selected'; ?>>Active</option>
                                                <option value="0" <?php if ($status == 0) echo 'selected'; ?>>Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    

                                  <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" id="description" 
                                             class="form-control" placeholder="Enter Your Description"><?php echo $description; ?> </textarea>
                                        </div>
                                    </div>

                                </div>

                                <!---------------5th row completed--------------->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-layout-submit">
                                            <button type="submit" id="btn-post-create" class="btn btn-block btn-info"> Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <?php if (!empty($id)) { ?>
                                            <div class="form-layout-submit"><a href="<?php echo site_url('post/post_list'); ?>" class="btn btn-block btn-danger">Cancel</a>
                                            <?php } else { ?>
                                                <div class="form-layout-submit"><a href="<?php echo site_url('post/post_list'); ?>" class="btn btn-block btn-danger">Reset</a>
                                                <?php } ?>
                                                </div>
                                            </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- View Counselor Area End -->
        <!-- ====================/Page Content======================= -->
        <!-- =========================View=================Fix======= -->
    </div>
</div>
<!-- ========================/View=================Fix======= -->
<!-- ========================Footer================Fix======= -->
<?php $this->view('top_footer');
$this->view('js/post_js');
?>
<!-- =======================/Footer================Fix=======