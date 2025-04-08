document.getElementById('toggle-btn').addEventListener('click', function() {
    document.getElementById('sidebar').classList.toggle('expand');
})

document.getElementById('logout-link').addEventListener('click', function (e) {
    e.preventDefault();
    document.getElementById('logout-form').submit();
});
