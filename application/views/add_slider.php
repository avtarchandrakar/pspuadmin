
<!-- ========================Header==============Fix========= --> 
<?php $this->view('top_header') ?>

<!-- =======================/Header==============Fix========= -->
<!-- =========================View===============Fix========= -->
<!-- Right Side Content Start -->
<div class="page-content">
   <div class="container-fluid">
      <!-- ========================/View===============Fix========= -->
      <!-- ======================Page Title======================== -->
      <!-- Breadcromb Row Start -->
      <div class="row">
         <div class="col-md-12">
            <div class="breadcromb-area">
               <div class="row">
                  <div class="col-md-6  col-sm-6">
                     <div class="seipkon-breadcromb-left">
                        <h3><?php echo $pagename;?></h3>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-3 pull-right">
                     <div class="seipkon-breadcromb-right">

                     <a style="margin-right: 5px;" href="<?php  echo site_url('Slider'); ?>" class="btn btn-info btn-vsm"><i class="fa fa-long-arrow-left"></i> Back</a>
                     
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="page-box">
               <div class="form-example">
                  <div class="form-wrap top-label-exapmple form-layout-page">
                    <form method= "post" id="frm-add-data">
                        <div class="row">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Title<span class="text-danger">*</span></label>
                                 <input type="text" name="m_slider_title" id="m_slider_title" class="form-control"  placeholder=" Enter Title" required="" >
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Image<span class="text-danger">*</span></label>
                                 <input type="file" name="m_slider_image" id="m_slider_image" class="form-control"  placeholder=" Enter Image" required="">
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Status<span class="text-danger">*</span></label>
                                 <select name="m_slider_status" id="m_slider_status" class="form-control" title="Select Status" required>
                                    <option value="1">Active</option>
                                    <option value="0">In-Active</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-layout-submit">
                                 <button type="submit" id="btn-add-data" class="btn btn-block btn-info">Submit</button>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-layout-submit">
                              <a href="<?php echo site_url('Slider') ?>" class="btn btn-block btn-danger">Reset</a>
                               
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- End Advance Form Row -->
      <!-- ====================/Page Content======================= -->
      <!-- =========================View=================Fix======= -->
      <!-- End Widget Row -->
   </div>
</div>
<!-- ========================/View=================Fix======= -->
<!-- ========================Footer================Fix======= -->
<?php $this->view('top_footer') ?>
<?php $this->view('js/js_slider') ?>
<?php   $this->view('js/custom_js'); ?>
<!-- ========================Script==========================