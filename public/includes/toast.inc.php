<div id="toast-container" class="toast-container1"></div>
<style>
    .toast-container1 {
        position: fixed;
        bottom: 40px;
        right: 20px;
        display: flex;
        flex-direction: column;
        gap: 10px;
        z-index: 10000;
        box-shadow: 0 4px 12px rgba(168, 6, 6, 0.15);
    }

    .toast1 {
        min-width: 250px; 
        color: white;
        padding: 25px;
        border-radius: 5px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        font-family: sans-serif;
        animation: slideIn 0.3s ease-out; /* Entry animation */
    }
    .toast1.success {
        background: #4CAF50; /* Success green */
    }
    .toast1.error {
        background: #ff4d4d; /* Error red */
    }
    .parenticonc {
        margin-right: 10px;
        font-size: 12px; 
        padding: 8px;
        border-radius: 50%;
        border:#ff4d4d 2px solid; 
        background: white;
        color:#ff4d4d;

    }
    .toast-icon {
        margin-right: 10px;
        font-size: 12px; 
        padding: 6px;
        border-radius: 50%;
        border:#ff4d4d 2px solid; 
        background: white;
        color:#ff4d4d;
    }

    @keyframes slideIn {
    from { transform: translateX(100%); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
    }

</style>
<script src="/public/js/toast.js"></script>