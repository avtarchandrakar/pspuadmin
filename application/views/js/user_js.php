<script type="text/javascript"> $(document).ready(function(e) {

//===========================/User============================//

  $("#frm-user-create").submit(function(e) { e.preventDefault();
      var clkbtn = $("#btn-user-create"); clkbtn.prop('disabled',true);
      var formData = new FormData(this); 
      
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('Users/insert_user_dtl'); ?>",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "JSON", 
        success: function(data) {
          if(data.status=='success'){
            swal(data.message, {icon: "success", timer: 1000, });
            setTimeout(function(){
              window.location = "<?php echo site_url('Users/user_list'); ?>"; 
            },1000);
          }else{ clkbtn.prop('disabled',false);
            swal(data.message, {icon: "error", timer: 5000, });
          }   
        }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
          swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
        }
      });
    });

 $("#custom_tbl").on("click",".delete-user-data",function(){ 
    var clkbtn = $(this); clkbtn.prop('disabled',true);
    var dlt_id = $(this).data('value');
  swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this data!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {

          $.ajax({
            type: "POST",
            url: "<?php echo site_url('Users/delete_user_dtl'); ?>",
            data: {delete_id:dlt_id},
            dataType: "JSON",
            success: function(data) { 
              if(data.status=='success'){
                swal(data.message, {icon: "success", timer: 1000, });
                setTimeout(function(){ location.reload(); },1000);
              }else{ clkbtn.prop('disabled',false);
                swal(data.message, {icon: "error", timer: 5000, });
              }  
            }, error: function (jqXHR, status, err) { clkbtn.prop('disabled',false);
              swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
            }
          });
         
      } else { clkbtn.prop('disabled',false);
        swal("Your Data is safe!", { icon: "info", timer: 2000, });
      }
    });  
  });



//===========shop section==================================//
    $('#m_shop_contact').change(function(){
                          let m_shop_contact = this.value;
                            // console.log(contact_number);die();
                          $.post("<?= base_url('Shops/getContactById') ?>",{m_shop_contact},function(data){

                            if (data.status)
                             {
                             
                              alert('contact number already exist');
                               $('#m_shop_contact').val('');
                             }
                            
                              // $('#contact_number').html(text);
                          },'json');
                        })

     $('#m_shop_name').change(function(){
                          let m_shop_name = this.value;
                            // console.log(contact_number);die();
                          $.post("<?= base_url('Shops/getShopNameById') ?>",{m_shop_name},function(data){

                            if (data.status)
                             {
                             
                              alert('shop name already exist');
                               $('#m_shop_name').val('');
                             }
                            
                              // $('#contact_number').html(text);
                          },'json');
                        })






$("#frm-shop-create").submit(function(e) { e.preventDefault();
      var clkbtn = $("#btn-shop-create"); clkbtn.prop('disabled',true);
      var formData = new FormData(this); 
      
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('Shops/insert_shop_dtl'); ?>",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "JSON", 
        success: function(data) {
          if(data.status=='success'){
            swal(data.message, {icon: "success", timer: 1000, });
            setTimeout(function(){
              window.location = "<?php echo site_url('Shops/shop_list'); ?>"; 
            },1000);
          }else{ clkbtn.prop('disabled',false);
            swal(data.message, {icon: "error", timer: 5000, });
          }   
        }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
          swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
        }
      });
    });
  
  //================shop update/edit ======================//
$("#frm-update-data").submit(function(e) { e.preventDefault();
  var clkbtn = $("#btn-update-data"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 
  
  $.ajax({
    type: "POST",
    url: "<?php echo site_url('Shops/update_shop'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){
          window.location = "<?php echo site_url('Shops/shop_list'); ?>"; 
        },1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }   
    }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
  }); 
});



  $("#custom_tbl").on("click",".delete-shop-data",function(){ 
    var clkbtn = $(this); clkbtn.prop('disabled',true);
    var dlt_id = $(this).data('value');
  swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this data!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((willDelete) => {
      if (willDelete) {

          $.ajax({
            type: "POST",
            url: "<?php echo site_url('Shops/delete_shop_dtl'); ?>",
            data: {delete_id:dlt_id},
            dataType: "JSON",
            success: function(data) { 
              if(data.status=='success'){
                swal(data.message, {icon: "success", timer: 1000, });
                setTimeout(function(){ location.reload(); },1000);
              }else{ clkbtn.prop('disabled',false);
                swal(data.message, {icon: "error", timer: 5000, });
              }  
            }, error: function (jqXHR, status, err) { clkbtn.prop('disabled',false);
              swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
            }
          });
         
      } else { clkbtn.prop('disabled',false);
        swal("Your Data is safe!", { icon: "info", timer: 2000, });
      }
    });  
  });




}); </script>

<script type="text/javascript" src="<?php echo base_url('assets/js/alpine.min.js');?>">
   
</script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>


