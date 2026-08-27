
 <!----------------------------------call modal --------------------------------------------->
 
 <div class="modal fade" id="upload_img_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style='z-index:2000;'>
    <style>
        .active_img {
            border:2px double rgb(34, 168, 255);
        }
        .hidden {
            display:none!important;
        }
    </style>
  <div class="modal-dialog modal-xl"  >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Upload Your Work Files</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <!----------------------------------------------------------->
          <div class="alert card">
               
            <section>
                <form id='uploadImgForm'>
                    <div class="col-md-6 mt-3">     
                        <label >Upload file here <img id='previmg' src='' style='height:20px; width:40px;'> </label> <br>
                        <input type="file" id='celeb_img' name="file" class="form-control form_control_sm" style="min-width:100%;" required >  
                    </div>
                    <br><div class='uploadresult'></div>
                </form>
            </section>
                
            <hr>
              
              
              <section class='display_all_imgs' style='max-height:700px; overflow:auto; ' ></section>
              <div style='display:none;'> 
                  <input class='imagelink_copy' id='copyLinkToClipboard' type='text' value='https;//' style='border:none;outline:none; color:white;'>
              </div>
          </div>
         <!----------------------------------------------------------->
      </div>
      <div class="modal-footer">
          <span class='selectimgid hidden'  ></span>
          
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger del_submitted_image hidden"  ><i class='fa fa-trash-o'></i> Delete Selected File</button>
        <button type="button" class="btn btn-success copy_submitted_image hidden"><span class='selectimg'></span> <i class='fa fa-file-o'></i> Copy File Link </button>
        <button type="button" class="btn btn-primary use_submitted_image hidden"><span class='selectimg'></span> <i class='fa fa-check-circle'></i> Use Selected File </button>
      </div>
    </div>
  </div>
</div>
   
   
 <div class="modal fade" id="updateimgs_modal"  aria-labelledby="exampleModalLabel" aria-hidden="true" style='z-index:1999;'>
     
  <div class="modal-dialog modal-md"  >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Images update</h5>
        <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
       <form id='contentModalForm1_img'>
      <div class="modal-body">
         <!----------------------------------------------------------->
          <div class="alert card"> 
             <input type='hidden' value='' name='id' class='sid' >
               <div class='row'>
                <div class="col-md-12 mb-2  ">     
                    <input type='hidden' value="" name='imageid' rel='s_image' class='imageid '>
                    <input type='hidden' value="" name='cont_id'  class='img_role '>
                    <label >Update image  
                        <img class='previmgx' src='' style='height:20px; width:40px;'> </label> <br>
                    <button type="button"  class="form-control form_control_sm upload_img_btn" style="min-width:100%;"   >Open File Center</button>
                    
                        <div class='feeddback_f'></div>
                </div>
                  
                 
                </div>
            <hr>
              
              
          </div>
         <!----------------------------------------------------------->
      </div>
      <div class="modal-footer"> 
          
        <button type="submit" class="btn btn-primary    "  >Submit</button> 
      </div>
       </form>
    </div>
  </div>
</div>

 <div class="modal fade" id="contentTeam" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title cont_name" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body"> 
                  <div class='shadowx'>
                      <div class=' alert alert-sm'>
                            <div class='row'>
                                <div class='col-md-4'>
                                    <img src='' class='cont_img'>
                                </div>
                                <div class='col-md-8'>
                                    <!--<h5 class=''></h5>-->
                                    <p class='cont_body'></p>
                                </div>
                            </div>
                      </div>
                  </div>
            
               
          
          </div>
          
        </div>
      </div>
    </div>



<div class="modal fade" id="contentModalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form id='contentModalForm123'>
                  <div class='shadow'>
                      <div class='card alert'>
                            <input type='hidden' class='form-control cont_id' name='cont_id' value='' >
                          
                            <div class='form-group'>
                                <label>Title</label><br>
                                <input class='form-control cont_title' name='title' value='' placeholder='Title' >
                            </div>
                            <div class='ck-body-wrapper'>
                            <div class='form-groupd' id='contentArea123'>
                                <!--<label>Body</label><br>-->
                                <!--<textarea class='form-control cont_body' id='contentArea' name='body1' value='' ></textarea>-->
                            </div></div>
                      </div>
                  </div>
            
                <div class="modal-footer">
                    <button type="button" style='background:black;color:white;font-weight:bolder;border:1px solid #FFD700!important;' data-bs-dismiss="modal">Close</button>
                    <button type="submit" style='background:black;color:white;font-weight:bolder;border:1px solid #FFD700!important;' >Save changes</button>
                </div>
                <br>
                <div class='feeddback_f'></div>
            </form>
          </div>
          
        </div>
      </div>
    </div>


<div class="modal fade" id="contentModalForm2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form id='contentModalForm12'>
                  <div class='shadow'>
                      <div class='card alert'>
                            <input type='hidden' class='form-control cont_id1' name='cont_id' value='' >
                          
                            <div class='form-group'>
                                <label>Title</label><br>
                                <input class='form-control cont_title1' name='title' value='' placeholder='Title' >
                            </div>
                            <div class='form-group'>
                                <label>Body</label><br>
                                <textarea class='form-control cont_body1'  name='body' value='' ></textarea>
                            </div>
                      </div>
                  </div>
            
                <div class="modal-footer">
                    <button type="button" style='background:black;color:white;font-weight:bolder;border:1px solid #FFD700!important;' data-bs-dismiss="modal">Close</button>
                    <button type="submit" style='background:black;color:white;font-weight:bolder;border:1px solid #FFD700!important;' >Save changes</button>
                </div>
                <br>
                <div class='feeddback_f'></div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

