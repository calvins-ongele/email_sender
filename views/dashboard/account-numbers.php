<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'includes/header.inc.php' ?>
</head>
<body class="bg-light">

<div class="container py-4">
    
    <!-- Top Action Bar -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0"><i class="bi bi-inbox-fill text-primary me-2"></i>Account Numbers</h3>
        <!-- Interface 2 Action: Send New Email --> 
        <a href="/dashboard" class="btn btn-primary"  >
            <i class="bi bi-pencil-square me-1"></i> Emails
        </a>
    </div>

    <!-- INTERFACE 1: Email Inbox List -->
    <div id="inboxView" class="card shadow-sm">
        <div class="card-header bg-white py-3">
            <div class="row fw-bold text-muted small">
                <div class="col-3">Email</div>
                <div class="col-2">Routing Number</div>
                <div class="col-5">Account Number</div>
                <div class="col-2 text-end">DATE</div>
            </div>
        </div>
        <div class="list-group list-group-flush" id="opemEmailTable">
            
            <!-- Email Row (Example 1) -->
             <?php   
             foreach($this->numbers as $row) { ?>
            <div class="list-group-item email-item unread py-3 "  
           
            > 
                <div class="row align-items-center">
                    <div class="col-3 text-truncate">
                        <span class="badge bg-primary rounded-pill me-1">&nbsp;</span>
                        <?= $row['email'] ?> 
                     
                    </div>
                    <div class="col-2 text-truncate">
                        <span class="text-dark"><?= $row['routing_number'] ?></span>  
                    </div>
                    <div class="col-5 text-truncatex">
                        <span class="text-dark"><?= $row['account_number'] ?></span>  
                    </div>
                    <div class="col-2 text-end text-muted small"><?= $row['created_at'] ?></div>
                </div>
            </div>
            <?php  } ?>

            

        </div>
    </div>

 

</div>



<?php require "includes/footer.inc.php" ?>
</body>
</html>