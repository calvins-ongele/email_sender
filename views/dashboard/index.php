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
            <div>
                <a href="/dashboard/new-email" class="btn btn-primary">
                    <i class="bi bi-pencil-square me-1"></i> New Email
                </a>
                <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#composeModal" onclick="setupComposeModal('new')">
                <i class="bi bi-pencil-square me-1"></i> New Email
            </button> -->
                <a href="/dashboard/account-numbers" class="btn btn-success">
                    Account Numbers
                </a>
            </div>




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
                foreach ($emails as $email) { ?>
                    <div class="list-group-item email-item unread py-3
            open_email" rdata='<?= json_encode($email) ?>'>
                        <!-- onclick='openEmail(`<?php //echo json_encode($email) 
                                                    ?>`)' -->
                        <div class="row align-items-center">
                            <div class="col-3 text-truncate">
                                <span class="badge bg-primary rounded-pill me-1">&nbsp;</span>
                                <?= $email['from'] ?>
                                <!-- &lt;john@example.com&gt; -->
                            </div>
                            <div class="col-7 text-truncate">
                                <span class="text-dark"><?= $email['subject'] ?></span>
                                <span class="text-muted fw-normal">
                                    <p><?= substr(strip_tags($email['body']), 0, 120) ?>...</p>
                                </span>
                                <button class="btn form-control btn-primary open_email" rdata='<?= json_encode($email) ?>'>Read Email</button>
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
                    <button class="btn btn-outline-primary btn-sm" xdata-bs-toggle="modal" xdata-bs-target="#composeModal" onclick="setupComposeModal('reply')">
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

    <script> 
        let email; 

        // Pre-populates the modal for 'New Email' vs 'Reply'
        window.localStorage.clear();

        function setupComposeModal(type) {

            if (type === 'reply') {
                if (email) {
                    const emailId = email.email_id;
                    const from = `${email.from ?? ''}`;
                    const subject = `Re: ${document.getElementById('viewSubject').innerText}`;
                    const emailBody = `<br>\n\n--- Original Message ---\n <p>${document.getElementById('viewBody').innerHTML}</p>`;

                    const reply = {
                        emailId,
                        from,
                        subject,
                        emailBody
                    };
                    window.localStorage.setItem('reply', JSON.stringify(reply));
                    window.location.href = `/dashboard/new-email?email_id=${emailId}`;

                }

            }
        }


        function extractInitials(sender) {
            if (!sender) return '';

            // If it's: John Doe <johndoe@gmail.com>
            // Extract the name before <
            const namePart = sender.split('<')[0].trim();

            // If it looks like an email address, use the part before @
            const text = namePart.includes('@') ?
                namePart.split('@')[0] :
                namePart;

            // Remove quotes and clean separators
            const cleaned = text
                .replace(/["']/g, '')
                .trim();

            // Split into words
            const words = cleaned.split(/\s+/).filter(Boolean);

            if (words.length >= 2) {
                // John Doe -> JD
                return (words[0][0] + words[words.length - 1][0]).toUpperCase();
            }

            // Single name / email username
            if (words.length === 1) {
                const word = words[0];

                // johndoe -> J
                // john.doe -> JD
                // john_doe -> JD
                const parts = word.split(/[._-]+/).filter(Boolean);

                if (parts.length >= 2) {
                    return (parts[0][0] + parts[parts.length - 1][0]).toUpperCase();
                }

                return word.substring(0, 2).toUpperCase();
            }

            return '';
        }



        function showInbox() {
            email = null;
            document.getElementById('readerView').classList.add('d-none');
            document.getElementById('inboxView').classList.remove('d-none');
        }
        
        // Navigation logic between Inbox and Reader view
        const open_emails = document.querySelector("#opemEmailTable");
        open_emails.addEventListener('click', function(event) {

            if (event.target && event.target.classList.contains('open_email')) {
                // Prevent default link behavior
                event.preventDefault();
                // Access the data using .getAttribute() or .dataset
                const data = JSON.parse(event.target.getAttribute('rdata'));
                console.log(data);
                openEmail(data);
            }
        });

        
        function openEmail(emailData) {
            email = emailData;
            document.getElementById('inboxView').classList.add('d-none');
            document.getElementById('readerView').classList.remove('d-none');

            // Update DOM using dataset attributes
            document.querySelector('#viewSubject').textContent = email.subject ?? "";
            document.querySelector('#viewFrom').innerHTML = email.from ?? "";
            document.querySelector('.avatar').textContent = extractInitials(email.from ?? "");
            document.querySelector('#viewDate').textContent = email.date ?? "";
            document.querySelector('#viewBody').innerHTML = email.body ?? "";
        }


    </script>
</body>

</html>