<script type="text/javascript"> $(document).ready(function(e) {
//============================category============================//

$("#frm-designation-create").submit(function(e) { e.preventDefault();
      var clkbtn = $("#btn-designation-create"); clkbtn.prop('disabled',true);
      var formData = new FormData(this); 
      
      $.ajax({
        type: "POST",
        url: "<?php echo site_url('Master/insert_designation_dtl'); ?>",
        data: formData,
        processData: false,
        contentType: false,
        dataType: "JSON", 
        success: function(data) {
          if(data.status=='success'){
            swal(data.message, {icon: "success", timer: 1000, });
            setTimeout(function(){
              window.location = "<?php echo site_url('Master/designation_list'); ?>"; 
            },1000);
          }else{ clkbtn.prop('disabled',false);
            swal(data.message, {icon: "error", timer: 5000, });
          }   
        }, error: function (jqXHR, status, err){ clkbtn.prop('disabled',false);
          swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
        }
      });
    });
  

  $("#custom_tbl").on("click",".delete-designation-data",function(){ 
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
            url: "<?php echo site_url('Master/delete_designation_dtl'); ?>",
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
});
</script>