document.addEventListener('DOMContentLoaded', () => {
    const dropdownButton = document.querySelector('.header__dropdown-btn');
    const dropdownButtonText = dropdownButton.querySelector(".header__dropdown-btn-text")
    const dropdownButtonFlag = dropdownButton.querySelector(".header__dropdown-flag")
    const dropdownMenu = document.querySelector('.header__dropdown-menu');
    const dropdownItems = document.querySelectorAll('.header__dropdown-menu li');

    dropdownButton.addEventListener('click', () => {
        dropdownMenu.classList.toggle('show');
    });

    dropdownItems.forEach(item => {
        item.addEventListener('click', () => {
            const flag = item.querySelector('img').src;
            dropdownButtonText.textContent = item.textContent;
            dropdownButtonFlag.innerHTML = `<img src=${flag} class="header__dropdown-flag"/>`
            dropdownMenu.classList.remove('show');
        });
    });

    document.addEventListener('click', (e) => {
        if (!dropdownButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
});
