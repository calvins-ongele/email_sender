<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'includes/header.inc.php' ?>
</head>
<body class="bg-light">

<div class="container py-4">
    
    <!-- Top Action Bar -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0"><i class="bi bi-inbox-fill text-primary me-2"></i>Mailbox</h3>
        <!-- Interface 2 Action: Send New Email -->
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#composeModal" onclick="setupComposeModal('new')">
            <i class="bi bi-pencil-square me-1"></i> New Email
        </button>
    </div>

    <!-- INTERFACE 1: Email Inbox List -->
    <div id="inboxView" class="card shadow-sm">
        <div class="card-header bg-white py-3">
            <div class="row fw-bold text-muted small">
                <div class="col-3">SENDER</div>
                <div class="col-7">SUBJECT & PREVIEW</div>
                <div class="col-2 text-end">DATE</div>
            </div>
        </div>
        <div class="list-group list-group-flush" id="opemEmailTable">
            
            <!-- Email Row (Example 1) -->
             <?php  
             $emails = CustomFunctions::fetchEmails();
             foreach($emails as $email) { ?>
            <div class="list-group-item email-item unread py-3
            open_email" rdata='<?= json_encode($email) ?>'
           
            >
             <!-- onclick='openEmail(`<?php //echo json_encode($email) ?>`)' -->
                <div class="row align-items-center">
                    <div class="col-3 text-truncate">
                        <span class="badge bg-primary rounded-pill me-1">&nbsp;</span>
                        <?= $email['from'] ?> 
                        <!-- &lt;john@example.com&gt; -->
                    </div>
                    <div class="col-7 text-truncate">
                        <span class="text-dark"><?= $email['subject'] ?></span> 
                        <span class="text-muted fw-normal"> <p><?= substr(strip_tags($email['body']), 0, 120) ?>...</p></span>
                        <button class="btn form-control btn-primary open_email" rdata='<?= json_encode($email) ?>' >Read Email</button>
                    </div>
                    <div class="col-2 text-end text-muted small"><?= $email['date'] ?></div>
                </div>
            </div>
            <?php  } ?>

            

        </div>
    </div>


    <!-- INTERFACE 2: Reading View / Conversation -->
    <div id="readerView" class="card shadow-sm d-none">
        <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
            <button class="btn btn-outline-secondary btn-sm" onclick="showInbox()">
                <i class="bi bi-arrow-left me-1"></i> Back to Inbox
            </button>
            <div>
                <!-- Interface 2 Action: Reply Button -->
                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#composeModal" onclick="setupComposeModal('reply')">
                    <i class="bi bi-reply-fill me-1"></i> Reply
                </button>
            </div>
        </div>
        <div class="card-body p-4">
            <!-- Email Subject -->
            <h4 id="viewSubject" class="mb-3">Project Status Update</h4>
            
            <!-- Sender Meta -->
            <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
                <div class="avatar me-3">JD</div>
                <div class="flex-grow-1">
                    <div class="fw-bold" id="viewFrom">John Doe &lt;john@example.com&gt;</div>
                    <div class="text-muted small">To: me &lt;cashiers@mnsus.net&gt;</div>
                </div>
                <div class="text-muted small" id="viewDate">Oct 24, 2026, 10:42 AM</div>
            </div>

            <!-- Email Body -->
            <div id="viewBody" class="email-body text-dark" style="line-height: 1.6;">
                Hi Team,<br><br>
                Here is the latest update regarding the API integration project. We have completed the IMAP authentication layer and are currently rendering the template views.<br><br>
                Best regards,<br>
                John
            </div>
        </div>
    </div>

</div>



<?php require "includes/footer.inc.php" ?>
</body>
</html>