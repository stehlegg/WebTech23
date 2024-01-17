document.addEventListener('DOMContentLoaded', function () {
    var dropdownToggle = document.querySelectorAll('nav ul li');
    
    dropdownToggle.forEach(function (item) {
        item.addEventListener('click', function (e) {
            e.stopPropagation();
            this.classList.toggle('activedd');
        });
    });

    // Schließe das Dropdown-Menü, wenn außerhalb geklickt wird
    document.addEventListener('click', function (e) {
        dropdownToggle.forEach(function (item) {
            if (!item.contains(e.target)) {
                item.classList.remove('activedd');
            }
        });
    });
});