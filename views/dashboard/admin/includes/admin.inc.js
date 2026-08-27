
	
	$("#newairtime").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'buyairtime' );	
        if (resp['error'] == 'false') {
            $("#newairtime").trigger('reset');
        }
        fireswal({msg:resp['msg'] });
       // reload('/dashboard')
	});	
		
	$("#depositmpesa").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'depositmpesa' );	
        if (resp['error'] == 'false') {
            $("#depositmpesa").trigger('reset');
        }
        fireswal({msg:resp['msg'] });
       // reload('/dashboard')
	});		
		
	$("#withdrawmpesa").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'withdrawtompesa' );	
        if (resp['error'] == 'false') {
            $("#withdrawmpesa").trigger('reset');
        }
        fireswal({msg:resp['msg'] });
       // reload('/dashboard')
	});	
	$("#internaltrasfer").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'internaltransfer' );	
        if (resp['error'] == 'false') {
            $("#internaltrasfer").trigger('reset');
        }
        fireswal({msg:resp['msg'] });
        //reload('/dashboard')
	});	
	
	function getaccounts(){ 
		let formdata = new FormData();
		formdata.append('email', $("input[name='email']").val()  );
		formdata.append('csrf', $("input[name='csrf']").val() );
        let resp = _data_let(formdata, 'list_accounts_cards' );	
        if (resp['error'] == 'false') { 
            return;
        }
        let output = '';
        for (let i = 0; i < resp['data'].length; i++ ) {
            output += `<option value='${resp['data'][i]}'> ${resp['data'][i]} </option>`;
        }
        
        $("select[name='account']").html(output);
	};
	$('.editmyarticle').click(function() {
	    const id = $(this).attr('rel');
	    location.href='/dashboard/new-post?action=edit&id='+id;
	});
	$('.deletemyarticle').click(function() {
	    const id = $(this).attr('rel');
	    confirmswal(id, 'delete_post') 
	    reload('/feed');
	});
	$('.searchmsg input').keyup(function() {
	    const input = $(this).val();
		let formdata = new FormData(); 
        formdata.append('q', input);
        let resp = _data(formdata, 'search_for_msgs' );	
        $('.mmsg-names').html(resp['msg']);
	});
	$('.newmsg').click(function(e) {
	    e.preventDefault();
	    $('.searchmsg input').focus();
	 
	});
	let userchatid = '';
	let chat_id_no = '';
	let user_url = '';
	$('.send-icon').click(function() {  
	    const msg = $('.newmsgchat').val();
	    if (msg != '') { 
    	    const input = $(this).val();
    		let formdata = new FormData(); 
            formdata.append('msg', msg);
            formdata.append('to', userchatid);
            formdata.append('chat_id', chat_id_no);
            let resp = _data(formdata, 'new_chat' );
            if (resp['error'] == 'true') fireswal({ msg:resp['msg'], icon:'error' });
            else introducemessaging(userchatid, chat_id_no);
            
	    }
	});
	$('.delete_msgs').click(function() {
	    const id = chat_id_no;
	    confirmswal(id, 'delete_msgs'); 
	    reload('/messaging');
	});
	$('.rate_this_user').click(function() {
	    location.href=`/dashboard/${user_url}/rate-me`;
	});
	$('.udata').change(function() {
	   const val = $(this).val();
	   const rel = $(this).attr('rel');
	   let formdata = new FormData();
	   formdata.append('val', val);
	   formdata.append('col', rel);
	   formdata.append('csrf', $("input[name='csrf']").val() );
	   
	   let resp = _data(formdata, 'update_user_data');
	   $('.'+rel).html((resp['error']=='false')?"<span class='text-success'>Changes Saved</span>":"<span class='text-danger'>"+resp['msg']+"</span>");
	});
	$('#submitbio').submit(function(e) {
	    e.preventDefault();  
	   let resp = _data(new FormData(this), 'update_user_data' ); 
	   $('.user_bio').html((resp['error']=='false')?"<span class='text-success'>Changes Saved</span>":"<span class='text-danger'>"+resp['msg']+"</span>");
	   if (resp['error']=='false'){
	        $('#update_user_data').trigger('reset'); 
	   }
	    
	});
	$('.cdata').change(function() {
	   const val = $(this).val();
	   const rel = $(this).attr('rel');
	   let formdata = new FormData();
	   formdata.append('val', val);
	   formdata.append('col', rel);
	   formdata.append('csrf', $("input[name='csrf']").val() );
	   
	   if (rel == 'cm_max_travel') $('.max-travel').text($(this).val() + ' kms');
	   
	   let resp = _data(formdata, 'update_user_charges');
	   $('.'+rel).html((resp['error']=='false')?"<span class='text-success'>Changes Saved</span>":"<span class='text-danger'>"+resp['msg']+"</span>");
	});
	 
	$('#changepass').click(function(e) {
	    e.preventDefault();
	   let resp = _data(new FormData(this), 'change_password'); 
	   $('.changepass').html((resp['error']=='false')?"<span class='text-success'>Changes Saved</span>":"<span class='text-danger'>"+resp['msg']+"</span>");
	});
	$('#neweducation').submit(function(e) {
	    e.preventDefault();
	    let action = $("#neweducation .educ_action");
	   let resp = _data(new FormData(this), (action.val() == 'new') ? 'new_education' : 'edit_education' ); 
	   $('.info').html((resp['error']=='false')?"<span class='text-success'>Changes Saved</span>":"<span class='text-danger'>"+resp['msg']+"</span>");
	   if (resp['error']=='false'){
	        get_education();
	        $('#neweducation').trigger('reset'); 
	        action.val('new');
	   }
	});
 
	
	function delt_education(id) {
	   confirmswal(id, 'delete_education', get_education); 
	}

	function edt_education(id) {
	    let formdata = new FormData();
	    formdata.append('id', id);
	    formdata.append('type', 'single');
	   const data = _data(formdata, 'get_education');  
	   $("#neweducation input[name='school']").val(data['msg']['e_school_name']);
	   $("#neweducation input[name='id']").val(data['msg']['e_ID']);
	   $("#neweducation .degree_type").val(data['msg']['e_degree_type']);
	   $("#neweducation input[name='degree_name']").val(data['msg']['e_degree_name']);
	   $("#neweducation input[name='month']").val(data['msg']['e_start_date']);
	   $("#neweducation input[name='endmonth']").val(data['msg']['e_end_date']);
	   $("#neweducation input[name='speciality']").val(data['msg']['e_speciality']);
	   $("#neweducation input[name='score']").val(data['msg']['e_score']);
	   $("#neweducation .educ_action").val('edit');
	}
	
	$("#necompetencies select[name='from']").change(function() { 
	    let formdata = new FormData(); 
	    formdata.append('id', $(this).val() );
	    let data = _data(formdata, 'on_level_change'); 
	    $("#necompetencies select[name='to']").html(data['msg']);
	});
	$('#necompetencies').submit(function(e) {
	    e.preventDefault(); 
	    let action = $("#necompetencies .action");
	   let resp = _data(new FormData(this), (action.val() == 'new') ? 'new_competency' : 'edit_competency' ); 
	   $('.info').html((resp['error']=='false')?"<span class='text-success'>Changes Saved</span>":"<span class='text-danger'>"+resp['msg']+"</span>");
	   if (resp['error']=='false'){
	        get_competency();
	        $('#necompetencies').trigger('reset'); 
	        action.val('new');
	   }
	    
	});
	function delt_competency(id) { 
	   confirmswal(id, 'delete_competency', get_competency); 
	}
	function edt_competency(id) {
	    
	    let formdata = new FormData();
	    formdata.append('id', id);
	    formdata.append('type', 'single');
	   const data = _data(formdata, 'get_competency');   
	   $("#necompetencies input[name='id']").val(data['msg']['comp_ID']); 
	   $("#necompetencies input[name='title']").val(data['msg']['comp_title']);
	   $("#necompetencies select[name='from']").val(data['msg']['comp_from']);
	   $("#necompetencies select[name='to']").val(data['msg']['comp_to']);  
	   $("#necompetencies .action").val('edit');
	}
	
	$('#newexperience').submit(function(e) {
	    e.preventDefault(); 
	    let action = $("#newexperience .action");
	   let resp = _data(new FormData(this), (action.val() == 'new') ? 'new_experience' : 'edit_experience' ); 
	   $('.info').html((resp['error']=='false')?"<span class='text-success'>Changes Saved</span>":"<span class='text-danger'>"+resp['msg']+"</span>");
	   if (resp['error']=='false'){
	        get_experience();
	        $('#newexperience').trigger('reset'); 
	        action.val('new');
	   }
	    
	});
	
	function delt_experience(id) { 
	   confirmswal(id, 'delete_experience', get_experience); 
	}
	function edt_experience(id) {
	    
	    let formdata = new FormData();
	    formdata.append('id', id);
	    formdata.append('type', 'single');
	   const data = _data(formdata, 'get_experience');   
	   $("#newexperience input[name='id']").val(data['msg']['ex_ID']);   
	   $("#newexperience .action").val('edit');
	   $("#newexperience input[name='org']").val(data['msg']['ex_organization']);
	   $("#newexperience input[name='deignation']").val(data['msg']['ex_designation']);
	   $("#newexperience input[name='month']").val(data['msg']['ex_start_date']);
	   $("#newexperience input[name='endmonth']").val(data['msg']['ex_end_month']);
	   $("#newexperience select[name='association']").val(data['msg']['ex_association']);
	   $("#newexperience textarea[name='jobdescription']").val(data['msg']['ex_jobdescription']); 
	}
	$('.mclick').click(function() {
	    $('.mclick').attr('style', false);
	    $(this).attr('style', 'border-bottom:0!important');
	    const altid = $(this).attr('rel');
	    $('.media-blocks').addClass('hidden');
	    $('#'+altid).removeClass('hidden');
	    if (altid == 'media-library') {
	        get_images();
	    }
	})
	  
    $('.upload_img_btn').click(function(e) {
        e.preventDefault();
        //update preview
        $('.use_submitted_image').attr('clname', $(this).attr('imgClassName') );
        $('.use_submitted_image').attr('prevname', $(this).attr('imgPreviewClass') );
        $('#upload_img_modal').modal('show');
        $('.use_submitted_image').addClass('hidden');
        $('.del_submitted_image').addClass('hidden');
        $('.copy_submitted_image').addClass('hidden');
        $('.selectimg').html('');
        $('.selectimgid').html('');
        //get_images();
        
        $('.mclick').attr('style', false);
	    $("[rel='upload-files']").attr('style', 'border-bottom:0!important');
	    const altid = 'upload-files';  
	    $('.media-blocks').addClass('hidden');
	    $('#'+altid).removeClass('hidden');
        
    });
    function handleFiles(files) {
        $('.drag_n_drop').html(`Uploading... <img src='/public/assets/system/kOnzy.gif' style='height:30px'>`);
        const fileList = Array.from(files);
        const formData = new FormData();
        let count = 0;
        
        fileList.forEach((file, index) => {
            formData.append(`file${index}`, file);
            count++;
        });
        
        formData.append(`count`, count);
	    const data = _data(formData, 'upload_images', 'drag_n_drop', 'btn'); 
	   
	   
	     $('.mclick').attr('style', false);
	    $("[rel='media-library']").attr('style', 'border-bottom:0!important');
	    const altid = 'media-library';  
	    $('.media-blocks').addClass('hidden');
	    $('#'+altid).removeClass('hidden');
	   // if (altid == 'media-library') {
	        get_images('yes');
	    
	    
    }


    $('.copy_submitted_image').click(function() {
      const copyText = document.getElementById("copyLinkToClipboard"); 
      copyText.select();
      copyText.setSelectionRange(0, 99999);  
      navigator.clipboard.writeText(copyText.value); 
      alert("Link copied to clipboard "  );
        
    });
     
     
    
    $('.del_submitted_image').click(function() {
        const image_id = $(this).attr('rel');
        let form_data = new FormData();
        form_data.append('id', image_id);
        confirmswal(image_id, 'delete_images', get_images); 
        hide_img_view();
        
    });
    
    function get_images(selectfirst = 'no', alt = '') {
        
        let form_data = new FormData();
        form_data.append('selectfirst', selectfirst);
        form_data.append('alt', alt);
        
        const data = _data(form_data, 'get_images');
        $('.display_all_imgs').html(data['msg']);
        $('.drag_n_drop').html(`Drag and Drop File to Upload`);
    }
  
    $('.change-alt-text').change(function() {
        
        $('.toggleimgview').removeClass('hidden');
        let form_data = new FormData(); 
        form_data.append('alt', $(this).val() );
        form_data.append('id', $('.selectimgid').val() );
        const data = _data(form_data, 'update_img_details');
    });
    
    function hide_img_view() {
        $('.toggleimgview').addClass('hidden');
    }
       function get_img_details(id) {
       
        $('.toggleimgview').removeClass('hidden');
        let form_data = new FormData(); 
        form_data.append('id', id);
        
        const data = _data(form_data, 'get_img_details');  
        
        $('.imgdetls img').attr('src', data['url']);
        $('.imgurl').val( data['url']);
        $('.imgsize').text(data['size']);
        $('.imgdate').text(data['date']);
        $('.imgdim').text(data['dim']);
        $('.imgname').text( data['name'] );
        $('.del_submitted_image').attr('rel',data['id']);
        $('.change-alt-text').val(data['alt']);
        $('.selectimgid').val(data['id']);
    
    }
    
	$('.use_submitted_image').click(function() {  
        const image_id = $('.selectimgid').val();
        const image_link = $('#copyLinkToClipboard').val(); 
         
        $('.'+ $(this).attr('prevname') ).attr('src', image_link); //img 1
        $('.'+ $(this).attr('clname')).val(image_id); //img 2
        $('.'+ $(this).attr('clname')).trigger("change"); //img 2
        $('#upload_img_modal').modal('hide');
         
    });
    
    
    $('#newportfolio').submit(function(e) {
        e.preventDefault(); 
    	   let action = $("#newportfolio .action");
    	   let resp = _data(new FormData(this), (action.val() == 'new') ? 'new_portfolio' : 'edit_portfolio' ); 
    	   $('.info').html((resp['error']=='false')?"<span class='text-success'>Changes Saved</span>":"<span class='text-danger'>"+resp['msg']+"</span>");
    	   if (resp['error']=='false'){
    	        get_portfolio();
    	        $('#newportfolio').trigger('reset'); 
    	        action.val('new');
    	   }
    });
    
	function dlt_portfolio(id) { 
	   confirmswal(id, 'delete_portfolio', get_portfolio); 
	}
	function edt_portfolio(id) {
	    
	    let formdata = new FormData();
	    formdata.append('id', id);
	    formdata.append('type', 'single');
	   const data = _data(formdata, 'get_portfolio');   
	   $("#newportfolio input[name='id']").val(data['msg']['p_ID']); 
	   $("#newportfolio input[name='screenshot']").val(data['msg']['p_file']); 
	   $("#newportfolio input[name='title']").val(data['msg']['p_title']);
	   $("#newportfolio input[name='url']").val(data['msg']['p_url']);
	   $("#newportfolio input[name='month']").val(data['msg']['p_date_from']);
	   $("#newportfolio input[name='endmonth']").val(data['msg']['p_date_to']);  
	   $("#newportfolio textarea[name='desc']").val(data['msg']['p_description']);
	   $("#newportfolio input[name='tools']").val(data['msg']['p_tech_stack']);
	   $("#newportfolio .action").val('edit');
	   if (data['img'] !== '') $('.previewImg').attr('src', data['img']);
	}
    
    
    
    
    
    
    
    
    
    
  
function get_portfolio() {
     
    $('.portfoliodata').html("");
    
	let formdata = new FormData();  
    let resp = _data(formdata, 'get_portfolio' );	 
    
    
    for(let i = 0; i < resp['msg'].length; i++) {
        let d = resp['msg'][i];
        $('.portfoliodata').append(`
            <li  ><i onclick='edt_portfolio(${d['id']})' class='fa fa-edit  text-primary pointer'></i> 
            <i onclick='dlt_portfolio(${d['id']})' class='pointer fa fa-trash  text-danger'></i> <b>${d['title']}</b> 
            (${d['from']} - ${d['to']}) at <a target='_blank' href='${d['url']}'><i class='fa fa-long-arrow-alt-right'></i></a> </li>
        `);
    }
}
function get_experience() {
     
    $('.experiencedata').html("");
    
	let formdata = new FormData();  
    let resp = _data(formdata, 'get_experience' );	 
    
    
    for(let i = 0; i < resp['msg'].length; i++) {
        let d = resp['msg'][i];
        $('.experiencedata').append(`
            <li  ><i onclick='edt_experience(${d['id']})' class='fa fa-edit  text-primary pointer'></i> 
            <i onclick='delt_experience(${d['id']})' class='pointer fa fa-trash  text-danger'></i> <b>${d['desig']}</b> 
            (${d['from']} - ${d['to']}) at ${d['title']} </li>
        `);
    }
}
function get_competency() {
     
    $('.subjectsdata').html("");
    
	let formdata = new FormData();  
    let resp = _data(formdata, 'get_competency' );	 
    
    
    for(let i = 0; i < resp['msg'].length; i++) {
        let d = resp['msg'][i];
        $('.subjectsdata').append(`
            <li  ><i onclick='edt_competency(${d['id']})' class='fa fa-edit  text-primary pointer'></i> 
            <i onclick='delt_competency(${d['id']})' class='pointer fa fa-trash  text-danger'></i> <b>${d['title']}</b> 
            (${d['from']} - ${d['to']})</li>
        `);
    }
}
function get_education() {
    
    $('.educationdata').html("");
    
	let formdata = new FormData();  
    let resp = _data(formdata, 'get_education' );	 
    
    
    for(let i = 0; i < resp['msg'].length; i++) {
        let d = resp['msg'][i];
        $('.educationdata').append(`
            <li class='id${d['e_ID']}'><i onclick='edt_education(${d['e_ID']})' class='fa fa-edit editbtneducation text-primary pointer'></i> 
            <i onclick='delt_education(${d['e_ID']})' class='pointer fa fa-trash deletebtneducation text-danger'></i> <b>${d['e_degree_name']}${d['e_speciality']}</b> 
            ${d['e_score']}, <i>${d['e_school_name']}</i> (${d['e_start_date']} - ${d['e_end_date']})</li>
        `);
    }
    
}
 
  
function chat_heads() {
     
	let formdata = new FormData();  
    let resp = _data(formdata, 'get_chat_heads' );	
    $('.mmsg-names').html(resp['msg']);
}
function introducemessaging(user_msg_id, chat_id, userurl) {
    $('.delete_msgs').removeClass('hidden');
    $('.rate_this_user').removeClass('hidden');
    userchatid = user_msg_id;
    chat_id_no = chat_id;
    user_url = userurl;
    console.log(userchatid) ;   
    console.log(chat_id);
    $('.intromsgbody').removeClass('border-active');
    $('#id'+user_msg_id).addClass('border-active');
	let formdata = new FormData(); 
    formdata.append('id', user_msg_id );
    formdata.append('chat_id', chat_id );
    let resp = _data(formdata, 'introduce_a_message' );
    $('#activechatname').text(resp['name']);
    $('#activechattag').text(resp['tag']);
    $('.msg-page').html(resp['msg']);
}

function reload(url = '/', time = 2000) {
    setTimeout(()=> {
        location.href=url;
    }, time);
}
 
function confirmswal(id, url, funcCallBack = '') {
	let formdata = new FormData(); 
    formdata.append('id', id);
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this action!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, continue!"
    }).then((result) => {
      if (result.isConfirmed) {
         let resp = _data(formdata, url );
         let iconn = (resp['error'] == 'true') ? 'error' : 'success';
         fireswal({msg:resp['msg'], icon:iconn }); 
         if (typeof funcCallBack === 'function') {
             funcCallBack();
         }
      }
    });
}
function fireswal({msg, error = 'false', title = '', icon='success', loading=false}) {
    if (typeof error !== 'undefined') icon = icon;

    Swal.fire({
            title: title,
            text: msg,
            timer: 3000,  
            timerProgressBar: true,
            icon: icon,
            didOpen: () => {
                (loading)
                    Swal.showLoading()
            }
    }); 
}
 $(".notAllowed").click(function(e){
        e.preventDefault();
    });

 function _data(form_data, url = '', cl = 'loading', element_type = 'input' ) {
    let originalval;  
    let classconstruct = $('.'+cl);
    if (element_type == 'input') originalval = classconstruct.val();
    else originalval = classconstruct.text();
    
    let data;
    $.ajax({
        url : '/myapp/' + url,
        type : 'post',
        async: false,
        contentType : false,
        processData : false,
        beforeSend: function() {
            if (element_type == 'input') classconstruct.val('Loading...');
            else classconstruct.text('Loading...');
             
        },
        data : form_data,
        dataType: 'json', 
        success : function(data1) {
            data = data1;     
            if (element_type == 'input') classconstruct.val(originalval);
            else classconstruct.text(originalval);
        }
        
    });

    return data;
} 
function _data_let(form_data, url = '', cl = 'loading', element_type = 'input' ) {
    let originalval;  
    let classconstruct = $('.'+cl);
    if (element_type == 'input') originalval = classconstruct.val();
    else originalval = classconstruct.text();
    
    let data;
    $.ajax({
        url : 'https://mizizi.profileexpo.com/flutterapp/' + url,
        type : 'post',
        async: false,
        contentType : false,
        processData : false,
        beforeSend: function() {
            if (element_type == 'input') classconstruct.val('Loading...');
            else classconstruct.text('Loading...');
             
        },
        data : form_data,
        dataType: 'json', 
        success : function(data1) {
            data = data1;     
            if (element_type == 'input') classconstruct.val(originalval);
            else classconstruct.text(originalval);
        }
        
    });

    return data;
} 