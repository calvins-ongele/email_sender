$('.delItem').click( async function(e) {
  const endpoint = $(this).attr('url');
  const id = $(this).attr('rel');
  const form = new FormData();
  form.set('id', id);
  form.set('csrf_token', $('meta[name="csrf_token"]').attr('content') );

  const sw = await Swal.fire({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover it!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, continue!"
  });
  if (sw.isConfirmed) {
    const data = _data(form, endpoint);
    
    Swal.fire({
        title: "",
        text: data['msg'],
        icon: data['error'] ? "error" : "success"
    });

  }

});
 
     
    setInterval(()=> {
        const form_data = new FormData();
        _data(form_data, 'peace');
    }, 900000);
    
     
    
    $('#sendNewEmail').submit(function(e) {
        e.preventDefault();
        
        let formdata = new FormData(this); 
        formdata.append('body', CKEDITOR.instances.terms.getData() ); 
                
        let feedback = _data(formdata, 'send_email'); 
        Swal.fire({
          title: "Success",
          text: feedback['msg'],
          icon: feedback['msg']=="Success"?"success":"error", 
        }); 
    });
    
    $('#addnewblog').submit(function(e) {
        e.preventDefault();
        let formdata = new FormData(this); 
        formdata.append('body', CKEDITOR.instances.terms.getData() ); 
                
        let feedback = _data(formdata, 'insert_blog'); 
        Swal.fire({
          title: "Success",
          text: feedback['msg'],
          icon: feedback['msg']=="Success"?"success":"error", 
        }); 
    });
    
    $('#editnewblog').submit(function(e) {
        e.preventDefault();
        let formdata = new FormData(this); 
        formdata.append('body', CKEDITOR.instances.terms.getData() ); 
                
        let feedback = _data(formdata, 'update_blog'); 
        Swal.fire({
          title: "Success",
          text: feedback['msg'],
          icon: feedback['msg']=="Success"?"success":"error", 
        }); 
    });
    $('.deleteblog').click(function(e) {
        e.preventDefault();
        let formdata = new FormData(); 
        formdata.append('id', $(this).attr('rel') ); 
        
        
        Swal.fire({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover it!",
          icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
        })
        .then((willDelete) => {
          if (willDelete.isConfirmed) { 
            let feedback = _data(formdata, 'delete_blog'); 
            Swal.fire({
          title: "Success",
          text: feedback['msg'],
          icon: feedback['msg']=="Success"?"success":"error", 
        }); 
          } 
        });      
        
    });
    
    //getusers();
    function getusers() {
        
        let feedback = _data(new FormData(), 'getOnlineUsers'); 
        $('.online').text(feedback['current']);
        $('.total').text(feedback['total']);
    }
     
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    function _data(form_data, url = 'update-details' ) {
        const originalval = $('.submit_btn').val();
        let data;
        $.ajax({
            url : '/myapp/' + url,
            type : 'post',
            async: false,
            contentType : false,
            processData : false,
            beforeSend: function() {
                $('.submit_btn').val('Loading...'); 
            },
            data : form_data,
            dataType: 'json', 
            success : function(data1) {
                data = data1;     
                $('.submit_btn').val(originalval);
            }
        });

        return data;
    } 
    
    
    
    