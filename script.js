document.addEventListener('DOMContentLoaded', function() {
    const toggleButton = document.querySelector('.toggle-sidebar');
    const sidebar = document.querySelector('.sidebar');
    
    toggleButton.addEventListener('click', function() {
        sidebar.classList.toggle('collapsed');
    });
});