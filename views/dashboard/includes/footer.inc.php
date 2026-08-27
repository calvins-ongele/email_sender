<!-- INTERFACE 3: Compose / Reply Modal -->
<div class="modal fade" id="composeModal" tabindex="-1" aria-labelledby="composeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="composeModalLabel">New Message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="emailForm"  >
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
                        <label for="emailMessage" class="form-label small text-muted">Message:</label>
                        <div id="emailMessage" rows="8" required placeholder="Write your message here..."></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-send-fill me-1"></i> Send Email
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!------------------------------------------------------------->

<footer class="main-footer">
  
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/public/js/content-editor.js"></script>
<?php require "public/includes/toast.inc.php" ?>

<script>
  const editor = new ContentEditor({container:"#emailMessage"});
  let email;








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

    function showInbox() {
        email = null; 
        document.getElementById('readerView').classList.add('d-none');
        document.getElementById('inboxView').classList.remove('d-none');
    }

    // Pre-populates the modal for 'New Email' vs 'Reply'
    function setupComposeModal(type) {
        const modalTitle = document.getElementById('composeModalLabel');
        const toInput = document.getElementById('emailTo');
        const subjectInput = document.getElementById('emailSubject');
        const messageInput = document.getElementById('emailMessage');

        if (type === 'reply') {
            if (email) {
              document.querySelector('input[name="reply_id"]').value = email.email_id;
              modalTitle.textContent = 'Reply to Email: ' + email.from ?? "" ;
              toInput.value = email.from ?? ""; 
              subjectInput.value = 'Re: ' + document.getElementById('viewSubject').innerText;
              editor.set(
                `<br>\n\n--- Original Message ---\n 
                <p>${document.getElementById('viewBody').innerHTML}</p>`
              );
            }
        } else {
            modalTitle.textContent = 'New Message';
            toInput.value = '';
            subjectInput.value = '';
            messageInput.value = '';
        }
    }

    const emailForm = document.querySelector("#emailForm");
    emailForm.addEventListener('submit', async (e) => {
      e.preventDefault();
      const form = new FormData(emailForm);
      form.set('msg_body', editor.get() ); 
      await handleSendEmail(form);
    });

    // Form Handler
    async function handleSendEmail(form) {
        event.preventDefault(); 
        
        try { 
          const response = await fetch("/myapp/requests", {method:"POST", body: form});
          const result = await response.json();

          if (result.error) {
            showErrorToast(`${result.msg}`);
            return;
          }
          showErrorToast(`${result.msg}`, true);
          // Hide modal
          const modalEl = document.getElementById('composeModal');
          const modal = bootstrap.Modal.getInstance(modalEl);
          modal.hide();


        } catch(e) {}
        finally {
        }
    }


  function extractInitials(sender) {
    if (!sender) return '';

    // If it's: John Doe <johndoe@gmail.com>
    // Extract the name before <
    const namePart = sender.split('<')[0].trim();

    // If it looks like an email address, use the part before @
    const text = namePart.includes('@')
        ? namePart.split('@')[0]
        : namePart;

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
</script>


<script> 
      async function copy(item) {
      try {
        await navigator.clipboard.writeText(item);
        console.log(`"${item}" copied to cliboard.`);
        showErrorToast(`"${item}" copied to cliboard.`, true);
      } catch (error) { 
        fallbackCopyTextToClipboard(item);
      }
    }

    function fallbackCopyTextToClipboard(text) {
      const textArea = document.createElement("textarea");
      textArea.value = text;
      document.body.appendChild(textArea);
      textArea.select();
      try {
        document.execCommand('copy');
        console.log('Fallback: Copying text command was successful');
      } catch (err) {
        console.error('Fallback: Oops, unable to copy', err);
      }
      document.body.removeChild(textArea);
    }
</script>