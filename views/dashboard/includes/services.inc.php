
<style> 
.card{border:none;border-radius:10px}.c-details span{font-weight:300;font-size:13px}.icon{width:50px;height:50px;background-color:#eee;border-radius:15px;display:flex;
align-items:center;justify-content:center;font-size:39px}.badge span{background-color:#fffbec;height:25px;padding:10px!important;border-radius:5px;
display:flex;color:#fed85d;justify-content:center;align-items:center}.progress{height:10px;border-radius:10px}.progress div{background-color:green}
.text1{font-size:14px;font-weight:600}.text2{color:#a5aec0}
</style>
<div class="container mt-5 mb-3">
    <input id='myInput' value='' style="color:transparent;border:none;height:1px!important">
    <div class="row">
        
        <?php foreach($this->charity as $row) {
            $img = $row['s_pic'];
            if (@file_get_contents("https://cdn.miziziclassifieds.com/images/classiefieds/$img") == false) 
                $img = 'avatardefault_92824.webp';
            $pc = 0;
            if ($row['s_running_total'] > 0) {
                $pc = ($row['s_running_total'] / $row['s_target_amount']) * 100;
            }
        
        ?>
        <div class="col-md-4 border-bottom shadow mb-3   " >
            <div class="card p-3   mr-1  " style="<?php if ($row['s_status'] != 'Active' ) {echo 'background:grey';}
                    else { echo "background-imaxge:url('https://cdn.miziziclassifieds.com/images/classiefieds/$img');";} ?>"   >
                <div class="d-flex justify-content-between" stylex='background:rgba(0,0,0,0.3)'>
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon"> <img src='https://cdn.miziziclassifieds.com/images/classiefieds/<?php echo $img ?>' style='height:40px;width:auto'> <!--i class="bx bxl-mailchimp"></i--> </div>
                        <div class="ms-2 ml-2 c-details">
                            <h6 class="mb-0"><?php echo $row['s_nominated_name'] ?></h6> 
                            <?php if (isset($dashboard)) { ?>
                            <span><?php echo CustomFunctions::timeago($row['s_date']) ?></span>
                            <?php } else { ?>
                                <span><?php echo $row['s_purpose'] ?></span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="badge"> 
                    <span style='cursor:pointer;text-transform:capitalize;background:var(--blend);color:white' class='btncopy' 
                    rel='https://miziziclassifieds.com/services/<?php echo $row['s_url'] ?>'>Copy link</span><br> 
                    <a href='/services/<?php echo $row['s_url'] ?>'><span style='cursor:pointer;background:var(--primary);'>&nbsp;Contribute&nbsp;</span></a> 
                    <?php if (isset($dashboard)) { ?>
                    <br><a href='/dashboard/disburse/<?php echo $row['s_url'] ?>'><span style='cursor:pointer;background:var(--success)' class='disburse'>Disburse</span></a> 
                    <br><span style='cursor:pointer;background:red' rel='<?php echo $row['s_ID'] ?>' class='deactivateservice'>Deactivate</span>
                    <br><a href='/dashboard/contributors/<?php echo $row['s_url'] ?>'><span style='cursor:pointer;background:var(--secondary)' class='contributors'>Contributors</span></a> 
                    <?php if ($row['s_purpose'] == 'Event') { ?>
                    
                        <br><a href='/dashboard/event/<?php echo $row['s_url'] ?>'><span style='cursor:pointer;background:var(--primary)' class=''>Variations</span></a> 
                    <?php }} ?>
                    </div>
                </div>
                <div class="mt-3" stylxe='background:rgba(0,0,0,0.3)' >
                    <h3 class="heading"><?php echo $row['s_title'] ?></h3>
                    <p>
                        <?php echo CustomFunctions::trimTitle($row['s_explanation']) ?>
                    </p>
                    <div class="mt-3">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo $pc ?>%" aria-valuenow="<?php echo $row['s_running_total'] ?>" aria-valuemin="0" aria-valuemax="<?php echo $row['s_target_amount'] ?>"></div>
                        </div>
                        <div class="mt-3"> <span class="text1">KES <?php echo number_format($row['s_running_total']) ?> Contributed 
                        <span class="text2">of KES <?php echo number_format($row['s_target_amount']) ?> Target</span></span> </div>
                        <?php if (isset($dashboard)) { ?>
                        <div class="mt-3"> <span class="text1">KES <?php echo number_format($row['s_contributed_amount']) ?> Available </span> </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        
    </div>
</div>