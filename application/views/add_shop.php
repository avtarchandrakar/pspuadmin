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
                                <a href="<?php echo site_url('Shops/shop_list'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> All Registraion</a>
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

        


       

<div class="row">
<div class="col-md-12">
    <div class="page-box">
        <div class="form-example">
            <div class="form-wrap top-label-exapmple form-layout-page">
                <form method="post" action="#" id="frm-shop-create" enctype="mutipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Registraion Name</label>
                                
                                <input type="text" name="m_shop_name" id="m_shop_name" class="form-control"   - only  charecter placeholder="Name of Registraion" required="" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="text" name="m_shop_contact" id="m_shop_contact" class="form-control" onkeypress="return /[0-9]/i.test(event.key)"   - only number maxlength="10" placeholder="Enter Contact Number" required="" value="">
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="form-group">
                                <label>Alt Contact</label>
                                <input type="text" name="m_shop_alt_contact" id="m_shop_alt_contact" class="form-control" onkeypress="return /[0-9]/i.test(event.key)"   - only number maxlength="10" placeholder="Enter alt contact Number" required="" value="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Email id</label>
                                <input type="email" name="m_shop_email" id="m_shop_email" class="form-control" placeholder="Enter Your Email id" required="" value="">
                            </div>
                        </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label>Registraion Category</label>
                                
                                <select name="m_shop_category" id="category" class="form-control select2">
                                    <option value="">Select Category</option>
                                    <?php
                                    foreach ($category_dtl as $category_value) {

                                        if ($category == $category_value->m_category_id) {
                                           $option1 = "selected";
                                        } else {
                                            $option1 = "";
                                        }

                                    ?>
                                        <option value="<?php echo $category_value->m_category_id; ?>" <?php echo $option1; ?>><?php echo $category_value->m_category_title; ?>
                                        </option>
                                    <?php
                                    }

                                    ?>

                                </select>
                            </div>
                        </div>
                    <div class="col-md-4">
                            <div class="form-group">
                                <label> State</label>
                                
                                 <select name="m_shop_state" id="state" class="form-control select2">
                                    <option value="">Select State</option>
                                    <?php
                                    foreach ($state_dtl as $state_value) {

                                        if ($state == $state_value->m_state_id) {
                                           $option1 = "selected";
                                        } else {
                                            $option1 = "";
                                        }

                                    ?>
                                        <option value="<?php echo $state_value->m_state_id; ?>" <?php echo $option1; ?>><?php echo $state_value->m_state_name; ?>
                                        </option>
                                    <?php
                                    }

                                    ?>

                                </select>
                            </div>
                        </div>  
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> City</label>
                                <select name="m_shop_city" id="city" class="form-control select2">
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
                                <label>Pincode</label>
                               
                                <input type="text" name="m_shop_pincode" id="m_shop_pincode" class="form-control" onkeypress="return /[0-9]/i.test(event.key)"   - only number maxlength="6" placeholder="Pincode of Shop" required="" value="">
                            </div>
                        </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label>Registraion Opening Time</label>
                               
                                <input type="time" name="m_shop_open_time" id="m_shop_open_time" class="form-control"   - only  charecter placeholder="Opening of Shop" required="" value="">
                            </div>
                        </div>

                         <div class="col-md-4">
                            <div class="form-group">
                                <label>Registraion closing Time</label>
                                
                                <input type="time" name="m_shop_close_time" id="m_shop_close_time" class="form-control"   - only  charecter placeholder="closing of Shop" required="" value="">
                            </div>
                        </div>
            <?php if (!empty($id)) { ?>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Registraion Image</label>
                                    <input type="file" name="m_shop_image" id="m_shop_image" class="form-control">
                                    <input type="hidden" name="m_shop_image1" id="m_shop_image1" class="form-control" value="<?= $image; ?>">
                                </div>
                            </div>
                            <div class="col-md-2">
                               
                                    <?php if (!empty($image)) {
                                        $shop_img = base_url('uploads/shop/') . $image;
                                    } else {
                                        $shop_img = base_url('uploads/Category/defaultimg.jpg');
                                    } ?>
                                    <img src="<?php echo $shop_img; ?>" alt="Profile Photo" width="80">
                                
                            </div>
                        <?php } else { ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Registraion Image</label>
                                    <input type="file" name="m_shop_image" id="m_shop_image" class="form-control">
                                    <input type="hidden" name="m_shop_image1" id="m_shop_image1" class="form-control" value="">
                                </div>
                            </div>
                        <?php } ?>

                          <div class="col-md-4">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="m_shop_status" id="m_shop_status" class="form-control" value="">
                                    <option value="" >Active</option>
                                    <option value="" <?php //if ($status == 0) echo 'selected'; ?>>Inactive</option>
                                </select>
                            </div>
                        </div>
                         <div class="col-md-6">
                            <div class="form-group">
                              <label>Registraion Working Days</label><br>
                                <fieldset data-role = "controlgroup" data-type = "horizontal">
                                    <input type ="checkbox" name="shop1[]" id ="shop1[]" value="1" />
                                    <label for = "checkbox ">Mon  &nbsp;</label>

                              <?php 
                                // if(in_array("Monday", $shop1_day)){
                                //     echo "checked";
                                //  } 

                               ?>
                                        <input type = "checkbox" name="shop1[]" id = "shop1[]" value="2" />
                                        <label for = "checkbox 2">Tue &nbsp;</label>
                                        <input type = "checkbox" name="shop1[]" id = "shop1[]" value="3" >
                                        <label for = "checkbox 2">Wed &nbsp;</label> 

                                         <input type = "checkbox" name="shop1[]" id = "shop1[]" value="4"  />
                                        <label for = "checkbox 3">Thu &nbsp;</label>

                                         <input type = "checkbox" name="shop1[]" id = "shop1[]" value="5" />
                                        <label for = "checkbox 3">Fri &nbsp;</label>

                                         <input type = "checkbox" name="shop1[]" id = "shop1[]"  value="6" />
                                        <label for = "checkbox 3">Sat &nbsp;</label>

                                         <input type = "checkbox" name="shop1[]" id = "shop1[]" value="7" />
                                        <label for = "checkbox 3">Sun</label>
                                </fieldset>
                                <div>
                                    <span id="notvalid" style="color:red;"></span>
                                </div>
                            </div>
                        </div>

         <!------------------------adhar -------------------------------->
                <div id="editcheck" >
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Adhar Number</label>
                                <input type="text" name="m_shop_adhar_no" id="m_shop_adhar_no" class="form-control" onkeypress="return /[0-9]/i.test(event.key)" placeholder="Enter Adhar Number" maxlength="11" minlength="11"  value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pan Number</label>
                                <input type="text" name="m_shop_pan_no" id="m_shop_pan_no" class="form-control" onkeypress="return /[0-9]/i.test(event.key)" placeholder="Enter Pan Card Number" maxlength="11" minlength="11"  value="">
                            </div>
                        </div>
                        
                    
                        <!-- //================Adhar IMAGE===============// -->

                        <?php if (!empty($id)) { ?>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Adhar Front Image</label>
                                    <input type="file" name="m_shop_adhar_f" id="m_shop_adhar_f" class="form-control">
                                    <input type="hidden" name="m_shop_adhar_f1" id="m_shop_adhar_f1" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-2">
                               
                                    <?php if (!empty($image)) {
                                        $front_img = base_url('uploads/user/') . $image;
                                    } else {
                                        $front_img = base_url('uploads/Category/defaultimg.jpg');
                                    } ?>
                                    <img src="<?php echo $front_img; ?>" alt="Profile Photo" width="80">
                                
                            </div>
                        <?php } else { ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Shop Image</label>
                                    <input type="file" name="m_shop_adhar_f" id="m_shop_adhar_f" class="form-control">
                                    <input type="hidden" name="m_shop_adhar_f1" id="m_shop_adhar_f1" class="form-control" value="">
                                </div>
                            </div>
                        <?php } ?>

                        <!-- //================Adhar IMAGE===============// -->

                        <?php if (!empty($id)) { ?>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pan Image</label>
                                    <input type="file" name="m_shop_pan_img" id="m_shop_pan_img" class="form-control">
                                    <input type="hidden" name="m_shop_pan_img1" id="m_shop_pan_img1" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-2">
                               
                                    <?php if (!empty($image)) {
                                        $pan_img = base_url('uploads/user/') . $image;
                                    } else {
                                        $pan_img = base_url('uploads/Category/defaultimg.jpg');
                                    } ?>
                                    <img src="<?php echo $pan_img; ?>" alt="Profile Photo" width="80">
                                
                            </div>
                        <?php } else { ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pan Image</label>
                                    <input type="file" name="m_shop_pan_img" id="m_shop_pan_img" class="form-control">
                                    <input type="hidden" name="m_shop_pan_img1" id="m_shop_pan_img1" class="form-control" value="">
                                </div>
                            </div>
                        <?php } ?>

                        <!-- //================Adhar IMAGE===============// -->

                         <?php if (!empty($id)) { ?>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Adhar Back Image</label>
                                    <input type="file" name="m_shop_adhar_b" id="m_shop_adhar_b" class="form-control">
                                    <input type="hidden" name="m_shop_adhar_b1" id="m_shop_adhar_b1" class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-2">
                               
                                    <?php if (!empty($image)) {
                                        $back_img = base_url('uploads/user/') . $image;
                                    } else {
                                        $back_img = base_url('uploads/Category/defaultimg.jpg');
                                    } ?>
                                    <img src="<?php echo $back_img; ?>" alt="Profile Photo" width="80">
                                
                            </div>
                        <?php } else { ?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Registraion Image</label>
                                    <input type="file" name="m_shop_adhar_b" id="m_shop_adhar_b" class="form-control">
                                    <input type="hidden" name="m_shop_adhar_b1" id="m_shop_adhar_b1" class="form-control" value="">
                                </div>
                            </div>
                        <?php } ?>

                        <!-- //================Adhar IMAGE===============// -->
-->                         </div>

<!------------------------adhar -------------------------------->

                 <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="m_shop_address" id="m_shop_address" 
                                 class="form-control" placeholder="Enter Your Permanent Address"> 
                                 </textarea>
                               <!--  <input type="text" name="m_student_address" id="m_student_address" class="form-control" placeholder="Enter Your Permanent Address" value="<?= $address; ?>"> -->
                            </div>
                        </div>
                    </div>

                    <!---------------5th row completed--------------->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-layout-submit">
                                <button type="submit" id="btn-shop-create" class="btn btn-block btn-info"> Submit</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <?php if (!empty($id)) { ?>
                                <div class="form-layout-submit"><a href="<?php echo site_url('Shops/shop_list'); ?>" class="btn btn-block btn-danger">Cancel</a>
                                <?php } else { ?>
                                    <div class="form-layout-submit"><a href="<?php echo site_url('Shops/add_shop'); ?>" class="btn btn-block btn-danger">Reset</a>
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
    <script>
    checkEditStatus();

    function checkEditStatus(){
        var m_shop_id = $('#m_shop_id').val();

        if (m_shop_id>0) {
            $('#editcheck').show();
        }else{
            $('#editcheck').hide();
        }
    }
    
</script>
</div>
<!-- ========================/View=================Fix======= -->
<!-- ========================Footer================Fix======= -->
<?php $this->view('top_footer');
$this->view('js/user_js');
?>
<!-- =======================/Footer================Fix=======