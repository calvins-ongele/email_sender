<!------------------------------------------------------------->

<footer class="main-footer">
  
<!-- Bootstrap 5 JS -->
<script src="/public/js/boostrap.bundle.min.js"></script>
<?php require "public/includes/toast.inc.php" ?>



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