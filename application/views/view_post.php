<!-- ========================Header==============Fix========= -->
<?php $this->view('top_header') ?>
<!-- =======================/Header==============Fix========= -->

<!-- Right Side Content Start -->
<style>
    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1rem;
    }

    .txt_left {
        float: left;
    }

    .txt-right {
        float: right;
    }

    .txt-word {
        word-break: break-word;
    }

    .font-15 {
        font-size: 15px !important;
        padding: 10px;
    }

    .wt-42 {
        width: 42%;
    }

    .badge {
        background-color: #2d1b4f !important;
        cursor: pointer;
    }

    .modal-content {
        text-align: left !important;
    }

    .p-0 {
        padding: 12px !important;
    }

    .img-set {
        width: 100%;
        height: 200px;
        border: 1px solid black;
        border-radius: 2%;
    }
</style>
<div class="page-content">
    <div class="container-fluid">
        <!-- ========================/View===============Fix========= -->
        <!-- ======================Page Title======================== -->
        <!-- Breadcromb Row Start -->
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-area">
                    <div class="row">
                        <div class="col-md-4  col-sm-4">
                            <div class="seipkon-breadcromb-left">
                                <h3><?php echo $pagename; ?></h3>
                            </div>
                        </div>

                        <div class="col-md-8 col-sm-8 pull-right">
                            <div class="seipkon-breadcromb-right">

                                <a href="<?php echo base_url('post/add_post?id=') . $edit_value[0]->id; ?>" class="btn btn-info btn-vsm" title="Edit"><i class="fa fa-edit"></i> Edit</a>

                                <a style="margin-right: 5px;" href="<?php echo site_url('post/post_list') ?>" class="btn btn-info btn-vsm"><i class="fa fa-long-arrow-left"></i> Back</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <br>
        <!------------------for img---------------------------->
        <?php

        if (!empty($edit_value[0]->image)) {
            $post_img = base_url('uploads/post/') . $edit_value[0]->image;
        } else {
            $post_img = base_url('uploads/Category/defaultimg.jpg');
        }

        ?>
        <!------------------for img End Above------------------>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="<?php echo $post_img; ?>" alt="Profile Photo" class="rounded-circle" style="width:160px; margin-bottom:20px;">
                            <h4 style="font-size: 25px;"><?php echo  $edit_value[0]->title; ?></h4>
                            <!-------------------------------------------------------->

                        </div>
                    </div>
                </div>
                <div class="card font-15">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <table class="table table-bordered">
                                <tr>
                                    <td><i class="fa fa-phone-square"></i>Title</td>
                                    <td><b><?php echo $edit_value[0]->title; ?></b></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-envelope"></i> Slug</td>
                                    <td><b class="txt-word"><?php echo $edit_value[0]->slug; ?></b></td>
                                </tr>
                                <tr>
                                    <td class="wt-42"><i class="fa fa-map-marker"></i> Visibility</td>
                                    <td><b><?php echo $edit_value[0]->visibility; ?></b></td>
                                </tr>
                                <tr>
                                    <td class="wt-42"><i class="fa fa-map-marker"></i> Add to Slider</td>
                                    <td><b><?php echo $edit_value[0]->addtoslider; ?></b></td>
                                </tr>
                                <tr>
                                    <td class="wt-42"><i class="fa fa-clock-o"></i> Status </td>
                                    <td><b><?php if ($edit_value[0]->m_post_status == 1) echo "Active";
                                            else {
                                                echo "InActive";
                                            } ?></b></td>
                                </tr>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="card font-15">
                    <div class="card-body">
                        <h4>Profile Details</h4>
                        <br>
                        <table class="table table-bordered">
                            <?php
                            $original_date = $edit_value[0]->m_post_added_on;
                            $new_date = date("d-m-Y", strtotime($original_date));

                            ?>
                            <tr>
                                <td>Joined On:</td>
                                <td><b><?php echo $new_date; ?></b></td>
                            </tr>
                            
                            <tr>
                                <td>Comments:</td>
                                <td><b><?php echo $edit_value[0]->comments; ?></b></td>
                            </tr>
                             <tr>
                                <td>Main Heading:</td>
                                <td><b><?php echo $edit_value[0]->mainhead; ?></b></td>
                            </tr>

                            <tr>
                                <td>Description:</td>
                                <td><b><?php echo $edit_value[0]->description; ?></b></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
                       
<!-- ========================/View=================Fix======= -->
<!-- ========================Footer================Fix======= -->
<?php $this->view('top_footer'); ?>
<!-- =======================/Footer================Fix======= -->


     
 