$('#contactus').submit(function(e) { 
    e.preventDefault();
    let form = new FormData(this); 
   const data = _data(form, 'contactus');
   
   $('.feeb').html(data['msg']);
       $('.feeb').removeClass('alert alert-sm alert-danger alert-success');
   
   if (data['error'] == true) {
       $('.feeb').addClass('alert alert-sm alert-danger');
   } else  {
       $('.feeb').addClass('alert alert-sm alert-success');
     
   }
    
});
$('#getticket').submit(function(e) { 
    e.preventDefault();
    let form = new FormData(this); 
   const data = _data(form, 'getticket');
   
   if (data['error'] == true) {
       $('.feeb').addClass('alert alert-sm alert-danger');
       $('.feeb').html(data['msg']);
   } else  {
       
    var extra = data['cl'].split('*');
    $('.amount_tot').val( extra[0] );
    $('.amount_tot').attr( 'readonly', true );
    
 
    $('#toolkit').html(`
            <h5>Pay with Mpesa Toolkit</h5>
            <iframe style='min-width:320px' src='/private.php?uri=${extra[1]}'></iframe>
    `);
       
    $('#moreinfo').html(data['msg']);
    $('#completeBooking').modal('show');
   }
    
});

$('#payticket').submit(function(e) {
    e.preventDefault();
    $('#toolkit').removeClass('hidden');
    let form = new FormData(this); 
   const data = _data(form, 'payticket');
   
    $('.feebb').html(data['msg']);
       
   if (data['error'] == true) {
       $('.feebb').addClass('alert alert-sm alert-danger');
   } else  {
       $('.feebb').addClass('alert alert-sm alert-success');
   }
});

let type = 'text';
$('.eye').click(function(){
    $('.pass').attr('type', type);
    type = (type=='password') ? 'text' : 'password';
    
    if (type=='password') 
        $('.eye').html("<i class='fa fa-eye-slash'></i>");
    else $('.eye').html("<i class='fa fa-eye'></i>");
    
});
let submitsignup = true;
$('.register_form').submit(function(e) {
    e.preventDefault();
    
    if (!submitsignup) return;
    
    const data = _data(new FormData(this), 'processsignup');
    
    $('.info').html(data['msg']);    
    $('.info').addClass(data['error']==true?'alert alert-danger':'alert alert-success' );
    if (data['error']==true) submitsignup = true;
});
$('#forgotpasswordform').submit(function(e) {
    e.preventDefault();
    
    const data = _data(new FormData(this), 'forgotpasswordaction');
    
    $('.info').html(data['msg']);    
    $('.info').addClass(data['error']==true?'alert alert-danger':'alert alert-success' );
});
 function convertTo24Hour(time, period) {
    let [hours, minutes] = time.split(":");
    hours = parseInt(hours);
    minutes = parseInt(minutes);

    if (period.toLowerCase() === "pm" && hours !== 12) {
      hours += 12;
    } else if (period.toLowerCase() === "am" && hours === 12) {
      hours = 0;
    }

    return `${hours.toString().padStart(2, "0")}:${minutes.toString().padStart(2, "0")}`;
  }
  function getOrdinalSuffix(day) {
    if (day > 3 && day < 21) return 'th'; // special case for teens
    switch (day % 10) {
      case 1: return "st";
      case 2: return "nd";
      case 3: return "rd";
      default: return "th";
    }
  }
  function displayFormattedDate(dateva) {
    const dateInput = dateva;
    

    const date = new Date(dateInput);

    // Get day of the week, month, and day with the ordinal suffix
    const daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    
    const dayOfWeek = daysOfWeek[date.getDay()];
    const day = date.getDate();
    const month = months[date.getMonth()];
    const year = date.getFullYear();
    
    const ordinalSuffix = getOrdinalSuffix(day);
    
    const formattedDate = `${dayOfWeek}, ${day}${ordinalSuffix} ${month} ${year}`;

    // Display the formatted date
    return formattedDate;

    return false; // prevent form submission
  }
 
 let submitservice = true;
$('#registerservice').submit(function(e) {
    e.preventDefault();
    if (!submitservice) return;
    submitservice = false;
    var form = new FormData(this);
    
    
    const timeRange = document.getElementById("time-range").value.trim();

        // Regular expression to match both 24-hour format and 12-hour format with AM/PM
        const timePattern = /^(\d{1,2}):(\d{2})\s*(am|pm)?\s*-\s*(\d{1,2}):(\d{2})\s*(am|pm)?$/i;
        const matches = timeRange.match(timePattern);
    
        if (!matches) {
            submitservice = true;
            alert("Please enter a valid time range in the format HH:MM AM/PM - HH:MM AM/PM");
            return false;
        }
    
        let [_, startHours, startMinutes, startPeriod, endHours, endMinutes, endPeriod] = matches;
    
        // Handle 12-hour format (AM/PM), default to 24-hour if no AM/PM is provided
        const startTime = startPeriod ? convertTo24Hour(`${startHours}:${startMinutes}`, startPeriod) : `${startHours.padStart(2, '0')}:${startMinutes}`;
        const endTime = endPeriod ? convertTo24Hour(`${endHours}:${endMinutes}`, endPeriod) : `${endHours.padStart(2, '0')}:${endMinutes}`;
    
        if (startTime >= endTime) {
            //submitservice = true;
            //alert("End time must be later than start time");
            //return false;
        }
        if ($('.evdate').val()  == '') {
            submitservice = true;
            alert("Pleases select event date");
            return false;
        }
        form.append('start', startTime);
        form.append('end', endTime); 
        form.append('datef', displayFormattedDate( $('.evdate').val() )); 
  
    
    form.append('details',  CKEDITOR.instances.ckeditor.getData() );
    const data = _data(form, 'registerservice');
    
    $('.feedback').html(data['msg']);    
    $('.feedback').addClass(data['error']==true?'alert alert-danger':'alert alert-success' );
    if (data['error']==false ) {
        $('#registerservice').trigger('reset');
         CKEDITOR.instances.ckeditor.setData('');
    }
    if (data['error']==true) submitservice = true;
});

$('#contributetoservice').submit(function(e) {
    e.preventDefault();
    
    if ($('.howtocontribute').val() == 'ATM Card/Paybal') {
        //String direction = "/dashboard/card-payment?type=contribute&email=$email&url=$uri&amount=${amount.value}&name=${fname.value}&phone=${phone.value}";
        const uri = $('.uri').val();
        const amount = $('.amount').val();
        const name = $('.fname').val();
        const phone = $('.phone').val();
        location.href=`/dashboard/card-payment?type=contribute&link=${uri}&amount=${amount}&name=${name}&phone=${phone}`;
        return;
    }
    
    const data = _data(new FormData(this), 'contributetoservice');
    const uri = $("input[name='uri']").val();
    $('.feedback').html(data['msg']);    
    $('.feedback').addClass(data['error']==true?'alert alert-danger':'alert alert-success' );
    if (data['error']==false ) {
        const amnt = $("input[name='amount']").val();
        var form = new FormData();
        form.append('uri', uri );
        form.append('amount', amnt );
       
  
        if ( $('.howtocontribute').val() == 'Mizizi Balance' ) {
            location.href=`/services/thankyou/${uri}?amount=${amnt}`;
            return;
        } 
        
        // intv = setInterval(()=> {
        //     var paid = _data(form, 'checkcontribution');
        //     if (paid['error'] == false ) {
        //         clearInterval(intv);
        //         location.href=`/services/thankyou/${uri}?amount=${amnt}`;
        //     }
        // }, 1000);
        
        
        $('#contributetoservice').trigger('reset');
    }
});
$('#passwordresetform').submit(function(e) {
    e.preventDefault();
    
    const data = _data(new FormData(this), 'passwordresetaction');
    
    $('.info').html(data['msg']);    
    $('.info').addClass(data['error']==true?'alert alert-danger':'alert alert-success' );
});

$('.lg_form').submit(function(e) {
    e.preventDefault();
    
    const data = _data(new FormData(this), 'processlogin');
    
    $('.info').html(data['msg']);    
    $('.info').addClass(data['error']==true?'alert alert-danger':'alert alert-success' );
});


$('.small-imgs img').click(function() {
    let src = $(this).attr('src');
    $('.hero-img img').attr('src', src);
})
























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
            // error: function (e) {
            //     console.log(e);
            //   // alert("An error occurred. Check your internet connection")
            // }
        });

        return data;
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
         let iconn = (resp['error'] == true) ? 'error' : 'success';
         fireswal({msg:resp['msg'], icon:iconn }); 
         if (typeof funcCallBack === 'function') {
             funcCallBack();
         }
      }
    });
}
function fireswal({msg, error = false, title = '', icon='success', loading=false}) {
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