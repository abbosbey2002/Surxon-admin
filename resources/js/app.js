import './bootstrap';


document.getElementById('toggleSidebar').addEventListener('click', function () {
    const sidebar = document.querySelector('.sidebar');
    const content = document.querySelector('.content');
    
    // Sidebar va content uchun collapsed sinfini qo'shish/olib tashlash
    sidebar.classList.toggle('collapsed');
    content.classList.toggle('collapsed');
});
