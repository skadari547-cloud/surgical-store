// COMMON ADMIN JAVASCRIPT
// This file contains general interactions used by all admin pages.

function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    if (sidebar) {
        sidebar.classList.toggle('open');
    }
}

function searchTable(tableId) {
    const input = document.getElementById('tableSearch');
    const table = document.getElementById(tableId);
    if (!input || !table) return;

    const search = input.value.toLowerCase();
    const rows = table.querySelectorAll('tbody tr');

    rows.forEach(row => {
        row.style.display = row.innerText.toLowerCase().includes(search) ? '' : 'none';
    });
}

function showFormMessage(event, message) {
    event.preventDefault();
    alert(message);
}

document.addEventListener('click', function(event) {
    const sidebar = document.getElementById('sidebar');
    const button = document.querySelector('.menu-button');

    if (window.innerWidth <= 700 && sidebar && sidebar.classList.contains('open')) {
        if (!sidebar.contains(event.target) && event.target !== button) {
            sidebar.classList.remove('open');
        }
    }
});
