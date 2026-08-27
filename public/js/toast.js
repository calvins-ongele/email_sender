function showErrorToast(message, success = false, duration = 3000) {
    const container = document.getElementById('toast-container');
    console.log("Toast fired");
    
    // Create element
    const toast = document.createElement('div');
    toast.className = 'parenticon toast1 ' + (success ? 'success' : 'error');
    toast.innerHTML = `<span class=''><span class="toast-icon">${success ? '&#10004;' : '&#10006;'}</span></span> ${message}`;
    
    // Append to container
    container.appendChild(toast);
    
    // Auto-remove after specified duration
    setTimeout(() => {
        toast.style.opacity = '0';
        setTimeout(() => toast.remove(), 300); // Wait for fade out
    }, duration);
}