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

                                <a href="<?php echo base_url('Shops/add_shop?id=') . $edit_value[0]->m_shop_id; ?>" class="btn btn-info btn-vsm" title="Edit"><i class="fa fa-edit"></i> Edit</a>

                                <a style="margin-right: 5px;" href="<?php echo site_url('Shops/shop_list') ?>" class="btn btn-info btn-vsm"><i class="fa fa-long-arrow-left"></i> Back</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <br>
      
<!------------------for img---------------------------->

        <?php

        if (!empty($edit_value[0]->m_shop_image)) {
            $shop_img = base_url('uploads/shop/') . $edit_value[0]->m_shop_image;
        } else {
            $shop_img = base_url('uploads/Category/defaultimg.jpg');
        }

        ?>
        <!------------------for img End Above------------------>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="<?php echo $shop_img; ?>" alt="Profile Photo" class="rounded-circle" style="width:160px; margin-bottom:20px;">
                            <h4 style="font-size: 25px;"><?php echo  $edit_value[0]->m_shop_name; ?></h4>
                            <!-------------------------------------------------------->

                        </div>
                    </div>
                </div>
                <div class="card font-15">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <table class="table table-bordered">
                                <tr>
                                    <td><i class="fa fa-phone-square"></i> Cont. No.</td>
                                    <td><b><?php echo $edit_value[0]->m_shop_contact; ?></b></td>
                                </tr>
                                <tr> 
                                    <td><i class="fa fa-phone-square"></i>Alt. Cont. No.</td>
                                    <td><b><?php echo $edit_value[0]->m_shop_alt_contact; ?></b></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-envelope"></i> Email ID</td>
                                    <td><b class="txt-word"><?php echo $edit_value[0]->m_shop_email; ?></b></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-envelope"></i>Category Title</td>
                                    <td><b class="txt-word"><?php echo $edit_value[0]->m_category_title; ?></b></td>
                                </tr>
                                
                                <tr>
                                <td class="wt-42"><i class="fa fa-clock-o"></i> Status </td>
                                <td><b><?php if ($edit_value[0]->m_shop_status == 1) echo "Active";
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
                            $original_date = $edit_value[0]->m_shop_added_on;
                            $new_date = date("d-m-Y", strtotime($original_date));

                            ?>
                            <tr>
                                <td>Joined On:</td>
                                <td><b><?php echo $new_date; ?></b></td>
                            </tr>
                            <tr>
                                <td>State:</td>
                                <td><b><?php echo $edit_value[0]->m_state_name; ?></b></td>
                            </tr>
                            <tr>
                                <td>City:</td>
                                <td><b><?php echo $edit_value[0]->m_city_name; ?></b></td>
                            </tr>
                            <tr>
                                <td>Pincode:</td>
                                <td><b><?php echo $edit_value[0]->m_shop_pincode; ?></b></td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td><b><?php echo $edit_value[0]->m_shop_address; ?></b></td>
                            </tr>
                             <tr>
                                <td>Shop Opening Time :</td>
                                <td><b><?php echo $edit_value[0]->m_shop_open; ?></b></td>
                            </tr>
                            <tr>
                                <td>Shop Closing Time:</td>
                                <td><b><?php echo $edit_value[0]->m_shop_close; ?></b></td>
                            </tr>
                            <tr>
                                <td>Shop working Days:</td>
                                <td><b><?php echo $edit_value[0]->m_shop1; ?></b></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            <div class="card font-15">
                    <div class="card-body">
                        <!-- <div class="row"> -->
                            <!-- <div class="col-md-6">
                                <h4>Authentication</h4>
                            </div>
                            <div class="col-md-6 pull-right">
                                <?php //if($edit_value[0]->m_student_aadhar_verified == 1){
                                    //echo '<button type="button" id="btn-aadharverify" data-id="'.$edit_value[0]->m_student_id .'" data-value = "0" class="btn btn-success pull-right"> Verified </button>';
                                // }
                               // else {
                                    //echo '<button type="button" id="btn-aadharverify" data-id="'.$edit_value[0]->m_student_id .'" data-value = "1" class="btn btn-danger pull-right"> Un-Verified </button>';
                                //}?>
                            
                            </div> -->
            
                        <!-- </div> -->
                        <!-- <br> -->
                        <?php

                        if (!empty($edit_value[0]->m_shop_adhar_f)) {
                            $shop_adhar_f = base_url('uploads/user/') . $edit_value[0]->m_shop_adhar_f;
                        } else {
                            $shop_adhar_f = base_url('uploads/Category/defaultimg.jpg');
                        }

                        ?>



                        <table class="table table-bordered">
                            <tr>
                                <td>Aadhaar Card No:</td>
                                <td><b><?php echo $edit_value[0]->m_shop_adhar_no; ?></b></td>
                            </tr>
                        </table>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <label>Aadhaar Front</label>
                                <hr>
                                
                                    <img class="img-set" src="<?php echo $shop_adhar_f; ?>" alt="Aadhaar Front">
                                <!-- 
                                    <img class="img-set" src="<?php// echo base_url('uploads/icon/no-pictures.png'); ?>" alt="Aadhaar Front"> -->
                               
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <label>Aadhaar Back</label>
                                <hr>
                                <?php
                                if (!empty($edit_value[0]->m_shop_adhar_b)) {
                                ?>
                                    <a href="<?php echo base_url('uploads/user/') . $edit_value[0]->m_shop_adhar_b; ?>"><img class="img-set" src="<?php echo base_url('uploads/user/') . $edit_value[0]->m_shop_adhar_b; ?>" alt="Aadhaar Back"></a>
                                <?php
                                } else {
                                ?>
                                    <img class="img-set" src="<?php echo base_url('uploads/icon/no-pictures.png'); ?>" alt="Aadhaar Back">
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
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


     
 