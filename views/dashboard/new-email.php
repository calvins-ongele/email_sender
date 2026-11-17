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
                <a href="/dashboard/" class="btn btn-primary">
                    <i class="bi bi-home me-1"></i> Dashboard
                </a>
                <a href="/dashboard/account-numbers" class="btn btn-success">
                    Account Numbers
                </a>
            </div>




        </div>

        <!-- INTERFACE 1: Email Inbox List -->
        <div id="inboxView" class="card shadow-sm">

            <section class="alert">
                <h5 class="modal-title" id="composeModalLabel">New Message</h5>

                <form id="emailForm">
                    <input type="hidden" value="" name="reply_id" />
                    <input type="hidden" value="send_email" name="method" />
                    <input type="hidden" value="<?= CSRF::get() ?>" name="csrf_token" />
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="emailTo" class="form-label small text-muted">To:</label>
                            <input type="text" name="email" class="form-required form-control" id="emailTo" required placeholder="recipient@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="emailSubject" class="form-label small text-muted">Subject:</label>
                            <input type="text" name="subject" class="form-control" id="emailSubject" required placeholder="Subject">
                        </div>
                        <div class="mb-3">

                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <label for="message">Message</label>
                            <button type="button" class="btn btn-sm btn-outline-secondary" id="clear-editor"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">Pick a Template</button>
                        </div>
 
                            <div id="emailMessage" rows="8" required placeholder="Write your message here..."></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-send-fill me-1"></i> Send Email
                        </button>
                    </div>
                </form>
            </section>

        </div>




    </div>


       <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pick a Template</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="list-group">
                        <?php foreach ($this->templates as $template): ?>
                            <button type="button" class="list-group-item list-group-item-action template-btn" data-subject="<?= htmlspecialchars($template['name']) ?>" data-message="<?= htmlspecialchars($template['content']) ?>">
                                <?= htmlspecialchars($template['name']) ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <?php require "includes/footer.inc.php" ?>
<script src="/public/js/content-editor.js"></script>
    <script>
        const modalTitle = document.getElementById('composeModalLabel');
        const toInput = document.getElementById('emailTo');
        const subjectInput = document.getElementById('emailSubject');
        const messageInput = document.getElementById('emailMessage');
        const editor = new ContentEditor({
            container: "#emailMessage"
        });
        const data = window.localStorage.getItem('reply');
        const emailGetId = `<?= $_GET['email_id'] ?? '' ?>`;
        const emailForm = document.querySelector("#emailForm");
        showReplyData();

        function showReplyData() {

            if (data) {
                const replyData = JSON.parse(data); //{ emailId, from, subject, emailBody }; 
                if ((!replyData.emailId) || (replyData.emailId.length === 0) || (emailGetId !== replyData.emailId)) return;
                document.querySelector('input[name="reply_id"]').value = replyData.emailId;
                modalTitle.textContent = `Reply to Email: ${replyData.from ?? ""}`;
                toInput.value = replyData.from;
                subjectInput.value = replyData.subject;
                editor.set(replyData.emailBody);
            }

        }

        const templateButtons = document.querySelectorAll('.template-btn');
        templateButtons.forEach(button => {
            button.addEventListener('click', () => {
                const subject = button.getAttribute('data-subject');
                const message = button.getAttribute('data-message');

                document.getElementById('emailSubject').value = subject;
                editor.set(message);

                // Close the modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
                modal.hide();
            });
        });



        emailForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const form = new FormData(emailForm);
            form.set('msg_body', editor.get());
            await handleSendEmail(form);
        });
 
        // Form Handler
        async function handleSendEmail(form) { 

            try {
                const response = await fetch("/myapp/requests", {
                    method: "POST",
                    body: form
                });
                const result = await response.json();

                if (result.error) {
                    showErrorToast(`${result.msg}`);
                    return;
                }
                showErrorToast(`${result.msg}`, true);



            } catch (e) {} finally {}
        }
    </script>

</body>

</html>