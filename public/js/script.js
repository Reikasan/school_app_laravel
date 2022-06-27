const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

// CLOSE BTN
const closeBtns = document.querySelectorAll('.closeBtn');
if(closeBtns !== null) {
    closeBtns.forEach(closeBtn => {
        closeBtn.addEventListener('click', () => {
            closeBtn.parentElement.classList.add('hide');
        });
    });    
}