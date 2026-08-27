
			
		<div id="timeoutModal" class="modal" tabindex="-1" role="dialog">
		    <div class="modal-dialog modal-md" role="document">
				<div class="modal-content">
				    <div class="modal-header" style='background:red;color:white;'>
						<h5 class="modal-title mt-0 ml-2" >Timeout</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
				    </div>

                    <div class="alert">
						<h5>You will be logged out due to inactivity in: </h5>
						<h3 class="m-4 text-danger text-center timoutCountDown"></h3>
						<h6>Click anywhere on the screen to cancel!</h6>
                    </div>

				    <div class="alert alert-danger d-none mx-3 mt-3 mb-0"></div>
				    <div class="alert alert-primary d-none mx-3 mt-3 mb-0"></div>
				    <div class="modal-body overflow-hidden"></div>

				</div>
		    </div>
		</div>

        <script src="https://livo-bank.trickycode.xyz/public/backend/assets/js/jquery-3.6.0.min.js"></script>
        <script src="https://livo-bank.trickycode.xyz/public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>

 

		<script src="https://livo-bank.trickycode.xyz/public/backend/assets/js/print.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/assets/js/pace.min.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/assets/js/clipboard.min.js"></script>
        <script src="https://livo-bank.trickycode.xyz/public/backend/plugins/moment/moment.js"></script>
 
        <script src="https://livo-bank.trickycode.xyz/public/backend/plugins/datatable/datatables.min.js"></script>

		<script src="https://livo-bank.trickycode.xyz/public/backend/plugins/dropify/js/dropify.min.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/plugins/sweet-alert2/sweetalert2.min.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/plugins/select2/select2.min.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/plugins/daterangepicker/daterangepicker.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/plugins/tinymce/tinymce.min.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/plugins/parsleyjs/parsley.min.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/plugins/jquery-toast-plugin/jquery.toast.min.js"></script>

        <!-- App js -->
        <script src="https://livo-bank.trickycode.xyz/public/backend/assets/js/scripts.js?v=1.3"></script>
      
        <?php    require 'public/includes/admin-modals.inc.php';   ?>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="/public/includes/dashb-main.js?v=<?php echo rand() ?>"></script>
    

		<!-- Datatable js --> 
		<script>
			 
	 
	 
			let timer = 9000000000;
			
			timeout();  

			function timeout() {  
				 

				setInterval(()=> {  

							timer -= 1000; 

							if (timer == 8000) $('#timeoutModal').modal('show');
							let timed = timer / 1000;
							$('.timoutCountDown').text(timed + 's'); 
							

							if (timer == 0) {  
								window.location.href='/dashboard/logout?message=You+were+logged+out+due+to+inactivity';
							}
						}, 1000);
			}
 
		 
			// reset events
			$(document).on('click', ()=> { timer = 9000000000;  $('#timeoutModal').modal('hide');    }); 
			$(document).on('change', ()=> { timer = 9000000000; $('#timeoutModal').modal('hide'); });
			$(document).on('submit', ()=> { timer = 9000000000; $('#timeoutModal').modal('hide');   });
 


		</script>
        
 