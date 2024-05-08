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
                                <a href="<?php echo site_url('Users/user_list'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> All user</a>
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
            $id = $edit_value[0]->m_user_id;
            $name = $edit_value[0]->m_user_name;
            $mobile = $edit_value[0]->m_user_mobile;
            $image = $edit_value[0]->m_user_image;
            $city = $edit_value[0]->m_user_city;
            $email = $edit_value[0]->m_user_email;
            $address = $edit_value[0]->m_user_address;
            $Designation = $edit_value[0]->m_user_des;
            $gender = $edit_value[0]->m_user_gender;
            $doj = $edit_value[0]->m_user_added_on;
            $status = $edit_value[0]->m_user_status;
        } else {
            $id = '';
            $name = '';
            $image = '';
            $mobile = '';
            $email = '';
            $status = '';
            $city = '';
            $doj = '';
            $Designation = '';
            $gender = '';
            $address = '';
        } ?>

        <div class="row">
            <div class="col-md-12">
                <div class="page-box">
                    <div class="form-example">
                        <div class="form-wrap top-label-exapmple form-layout-page">
                            <form method="post" action="#" id="frm-user-create" enctype="mutipart/form-data">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input type="hidden" name="m_user_id" id="m_user_id" value="<?= $id; ?>">
                                            <input type="text" name="m_user_name" id="m_user_name" class="form-control" maxlength='50' placeholder="Name of user"   required="" value="<?= $name; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" name="m_user_mobile" id="m_user_mobile" class="form-control" onkeypress="return /[0-9]/i.test(event.key)" placeholder="Enter Mobile Number" maxlength="10" minlength="10" required="" value="<?= $mobile; ?>">
                                        </div>
                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email id</label>
                                            <input type="email" name="m_user_email" id="m_user_email" class="form-control" maxlength='50' placeholder="Enter Your Email id" required="email" value="<?= $email; ?>">
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date Of Birth</label>
                                            <input type="date" name="m_student_doj" id="m_student_doj" class="form-control" value="<?= $doj; ?>">
                                        </div>
                                    </div>  -->
                                    <?php if (!empty($id)) { ?>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>User Image</label>
                                                <input type="file" name="m_user_image" id="m_user_image" class="form-control">
                                                <input type="hidden" name="m_user_image1" id="m_user_image1" class="form-control" value="<?= $image; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                           
                                                <?php if (!empty($image)) {
                                                    $user_img = base_url('uploads/user/') . $image;
                                                } else {
                                                    $user_img = base_url('uploads/Category/defaultimg.jpg');
                                                } ?>
                                                <img src="<?php echo $user_img; ?>" alt="Profile Photo" width="80">
                                            
                                        </div>
                                    <?php } else { ?>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>User Image</label>
                                                <input type="file" name="m_user_image" id="m_user_image" class="form-control">
                                                <input type="hidden" name="m_user_image1" id="m_user_image1" class="form-control" value="<?= $image; ?>">
                                            </div>
                                        </div>
                                    <?php } ?>

                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Designation title</label>
                                            <select name="m_user_des" id="Designation" class="form-control select2">
                                                <option value="">Select Designation title</option>
                                                <?php
                                                foreach ($Designation_dtl as $des_value) {

                                                    if ($Designation == $des_value->m_designation_id) {
                                                       $option1 = "selected";
                                                    } else {
                                                        $option1 = "";
                                                    }

                                                ?>
                                                    <option value="<?php echo $des_value->m_designation_id; ?>" <?php echo $option1; ?>><?php echo $des_value->m_designation_title; ?>
                                                    </option>
                                                <?php
                                                }

                                                ?>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>City Name</label>
                                            <select name="m_user_city" id="city" class="form-control select2">
                                                <option value="">Select City</option>
                                                <?php
                                                foreach ($city_dtl as $city_value) {

                                                    if ($city == $city_value->m_city_id) {
                                                       $option1 = "selected";
                                                    } else {
                                                        $option1 = "";
                                                    }

                                                ?>
                                                    <option value="<?php echo $city_value->m_city_id; ?>" <?php echo $option1; ?>><?php echo $city_value->m_city_name; ?>
                                                    </option>
                                                <?php
                                                }

                                                ?>

                                            </select>

                                        </div>
                                    </div>

                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio"  name="m_user_gender" id="inlineRadio1" value="Male" <?php if ($gender == "Male") echo 'checked'; ?> />
                                                <label class="form-check-label" for="inlineRadio1">Male</label>
                                                <input class="form-check-input" type="radio" name="m_user_gender" id="inlineRadio2" value="Female" <?php if ($gender == "Female") echo 'checked'; ?> />
                                                <label class="form-check-label" for="inlineRadio2">Female</label>
                                                <input class="form-check-input" type="radio" name="m_user_gender" id="inlineRadio3" value="Other" <?php if ($gender == "Other") echo 'checked'; ?> />
                                                <label class="form-check-label" for="inlineRadio3">Other</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="m_user_status" id="m_user_status" class="form-control" value="<?= $status; ?>">
                                                <option value="1" <?php if ($status == 1) echo 'selected'; ?>>Active</option>
                                                <option value="0" <?php if ($status == 0) echo 'selected'; ?>>Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    

                                  <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea name="m_user_address" id="m_user_address" 
                                             class="form-control" placeholder="Enter Your Permanent Address"> 
                                            <?php echo $address; ?> </textarea>
                                           <!--  <input type="text" name="m_student_address" id="m_student_address" class="form-control" placeholder="Enter Your Permanent Address" value="<?= $address; ?>"> -->
                                        </div>
                                    </div>

                                </div>

                                <!---------------5th row completed--------------->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-layout-submit">
                                            <button type="submit" id="btn-user-create" class="btn btn-block btn-info"> Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <?php if (!empty($id)) { ?>
                                            <div class="form-layout-submit"><a href="<?php echo site_url('Users/user_list'); ?>" class="btn btn-block btn-danger">Cancel</a>
                                            <?php } else { ?>
                                                <div class="form-layout-submit"><a href="<?php echo site_url('Users/add_user_dlt'); ?>" class="btn btn-block btn-danger">Reset</a>
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
$this->view('js/user_js');
?>
<!-- =======================/Footer================Fix=======