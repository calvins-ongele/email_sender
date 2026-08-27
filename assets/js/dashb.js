 
 


 // Click the hidden file input when the button is clicked
    $("#uploadButton").click(function() {
        $("#fileInput").click();
    });

    // Handle file selection and upload
    $("#fileInput").change(function() {
        let file = this.files[0]; // Get the selected file
        let formData = new FormData();
        formData.append("file", file); 
        formData.append("emp",  $('#emp').val() );  

         const data = _data(formData, 'new_emps_excel');  
         
        if (data['error'] == 'false') { 
            location.reload();
            $('#newsalo').trigger('reset');
        } else {
            alert(data['msg'] )
        }
    
    });
    
   
$('#contactus').submit(function(e) {
    e.preventDefault();
    let form = new FormData(this);
    const data = _data(form, 'contactus');
    $('.feedback').addClass(data['error'] == 'false'?'text-success':'text-danger');
    $('.feedback').text(data['msg'] + " We will get back fast.") ;
    if (data['error'] == 'false') $('#contactus').trigger('reset');
});
 
$('#sendemail').submit(function(e) {
    e.preventDefault();
    let form = new FormData(this);  
    form.append('body', CKEDITOR.instances.editorck.getData() );
    const data = _data(form, 'send_mass_email');
    $('.feedback').addClass(data['error'] == 'false'?'text-success':'text-danger');
    $('.feedback').text(data['message'] ) ;
    if (data['error'] == 'false') $('#sendemail').trigger('reset');
});
$('.badge-delete').click(function() {
    const id = $(this).attr('rel');
    let form = new FormData();
    form.append('id', id);
    if (confirm("Are you sure?")) {
        const data = _data(form, 'deletebill');
        alert(data['message']);
        window.location.reload();
    }
});
$('.wddelete').click(function() {
    const id = $(this).attr('rel');
    let form = new FormData();
    form.append('id', id);
    if (confirm("Are you sure?")) {
        const data = _data(form, 'wddelete');
        alert(data['message']);
        window.location.reload();
    }
}); 
$('.udata').change(function() {
    const rel = $(this).attr('rel');
    const val = $(this).val();
    let form = new FormData();
    form.append('col', rel);
    form.append('val', val);
    form.append('id', $('.udataid').val() );
    const data = _data(form, 'edituser');
    
    $('.'+rel).addClass(data['error'] == 'false'?'text-success':'text-danger');
    $('.'+rel).html(data['msg']) ;
});

$('.edata').change(function() {
    const rel = $(this).attr('rel');
    const val = $(this).val();
    let form = new FormData();
    form.append('col', rel);
    form.append('val', val);
    form.append('id', $(".eid").val() );
    const data = _data(form, 'updateuser');
    
    $('.'+rel).addClass(data['error'] == 'false'?'text-success':'text-danger');
    $('.'+rel).html(data['msg']) ;
});

$('#approveuser').submit(function(e) {
    
    e.preventDefault();
    let form = new FormData(this);
    const data = _data(form, 'approveuser'); 
    $('.feedback').addClass(data['error'] == 'false'?'text-success':'text-danger');
    $('.feedback').html(data['message']) ; 
})

$('#changepassword').submit(function(e) {
    e.preventDefault();
    let form = new FormData(this);
    const data = _data(form, 'changepass');
    $('.feedback').addClass(data['error'] == 'false'?'text-success':'text-danger');
    $('.feedback').html(data['msg']) ;
    if (data['error'] == 'false') $('#changepassword').trigger('reset');
});

$('#contactus').submit(function(e) {
    e.preventDefault();
    let form = new FormData(this);
    const data = _data(form, 'contactform');
    $('.feedback').addClass(data['error'] == 'false'?'text-success':'text-danger');
    $('.feedback').text(data['message']) ;
    if (data['error'] == 'false') $('#contactus').trigger('reset');
});

$('#btcDeposit').submit(function(e) {
    
    e.preventDefault();
    let form = new FormData(this);
    
    const data = _data(form, 'newbtc');
    $('.feedback').addClass(data['error'] == 'false'?'text-success':'text-danger');
    $('.feedback').text(data['message']) ;
    if (data['error'] == 'false') $('#amount').val('');
});

$('#depositmoney').submit(function(e) {
    
    e.preventDefault();
    let form = new FormData(this);
    const data = _data(form, 'depositmoney');
    $('.feedback').addClass(data['error'] == 'false'?'text-success':'text-danger');
    $('.feedback').text(data['message']) ;
    if (data['error'] == 'false') $('#depositmoney').trigger('reset');
});

$('#individualqr').submit(function(e) {
    
    e.preventDefault();
    let form = new FormData(this);
    const data = _data(form, 'individualqr');
    $('.feedback').addClass(data['error'] == 'false'?'text-success':'text-danger');
    $('.feedback').text(data['message']) ;
    if (data['error'] == 'false') $('#individualqr').trigger('reset');
});
$('#qrcode').submit(function(e) {
    
    e.preventDefault();
    let form = new FormData(this);
    const data = _data(form, 'qrcode');
    $('.feedback').addClass(data['error'] == 'false'?'text-success':'text-danger');
    $('.feedback').text(data['message']) ;
    if (data['error'] == 'false') $('#qrcode').trigger('reset');
});
$('#monetizeform').submit(function(e) {
    
    e.preventDefault();
    let form = new FormData(this);
    const data = _data(form, 'monetizeform');
    $('.feedback').addClass(data['error'] == 'false'?'text-success':'text-danger');
    $('.feedback').text(data['message']) ;
    if (data['error'] == 'false') $('#monetizeform').trigger('reset');
});
$('#intmonetizeform').submit(function(e) {
    
    e.preventDefault();
    let form = new FormData(this);
    const data = _data(form, 'intmonetizeform');
    $('.feedback').addClass(data['error'] == 'false'?'text-success':'text-danger');
    $('.feedback').text(data['message']) ;
    if (data['error'] == 'false') $('#intmonetizeform').trigger('reset');
});













 function _data(form_data, url = '', cl = 'submit_btn1' ) {
     
    const list = ['onlyonline', 'new'];
     
    const originalval = $('.'+cl).val();
     
    let data;
    $.ajax({
        url : '/myapp/' + url,
        type : 'post',
        async: false,
        contentType : false,
        processData : false,
        beforeSend: function() {
            $('.'+ cl).val('Loading...'); 
        },
        data : form_data,
        dataType: 'json', 
        success : function(data1) {
            data = data1;     
            $('.'+ cl).val(originalval);
        }
    });

    return data;
} 