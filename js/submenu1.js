$('.dropdown-submenu a.dropdown-toggle').on("click", function(e) {
    $(this).next('.dropdown-menu').toggle();
    e.stopPropagation();
    e.preventDefault();
});