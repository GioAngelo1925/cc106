document.querySelectorAll('.next').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const currentPage = this.closest('.page');
        const nextPage = currentPage.nextElementSibling;
        if (nextPage) {
            currentPage.classList.remove('slide-page');
            nextPage.classList.add('slide-page');
        }
    });
});

document.querySelectorAll('.prev').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const currentPage = this.closest('.page');
        const prevPage = currentPage.previousElementSibling;
        if (prevPage) {
            currentPage.classList.remove('slide-page');
            prevPage.classList.add('slide-page');
        }
    });
});
