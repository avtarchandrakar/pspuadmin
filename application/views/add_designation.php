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
                                <a href="<?php echo site_url('Master/designation_list'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-list-alt"></i> All Designation</a>
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

        <?php if (!empty($edit_value)) {
            $id = $edit_value[0]->m_designation_id;
            $title = $edit_value[0]->m_designation_title;
            $doj = $edit_value[0]->m_designation_added_on;
            $status = $edit_value[0]->m_designation_status;
        } 
        else {
            $id = '';
            $title = '';
            $status = '';
            $doj = '';
            
        } ?>

        <div class="row">
            <div class="col-md-12">
                <div class="page-box">
                    <div class="form-example">
                        <div class="form-wrap top-label-exapmple form-layout-page">
                            <form method="post" action="#" id="frm-designation-create" enctype="mutipart/form-data">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Designation Title</label>
                                            <input type="hidden" name="m_designation_id" id="m_designation_id" value="<?= $id; ?>">
                                            <input type="text" name="m_designation_title" id="m_designation_title" class="form-control"   - only  charecter placeholder="Title of designation" required="" value="<?= $title; ?>">
                                        </div>
                                    </div>
                                    
                                        
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Category Status</label>
                                            <select name="m_designation_status" id="m_designation_status" class="form-control" value="<?= $status; ?>">
                                                <option value="1" <?php if ($status == 1) echo 'selected'; ?>>Active</option>
                                                <option value="0" <?php if ($status == 0) echo 'selected'; ?>>Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                               

                                <!---------------5th row completed--------------->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-layout-submit">
                                            <button type="submit" id="btn-designation-create" class="btn btn-block btn-info"> Submit</button>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <?php if (!empty($id)) { ?>
                                            <div class="form-layout-submit"><a href="<?php echo site_url('Master/designation_list'); ?>" class="btn btn-block btn-danger">Cancel</a>
                                            <?php } else { ?>
                                                <div class="form-layout-submit"><a href="<?php echo site_url('Master/add_designation'); ?>" class="btn btn-block btn-danger">Reset</a>
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
$this->view('js/designation_js');
?>
<!-- =======================/Footer================Fix=======