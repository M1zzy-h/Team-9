function sidebarFunc() {
    const btnOpenSidebar = document.querySelector("#btn-menu")
    const sidebar = document.querySelector("#sidebar")
    const btnCloseSidebar = document.querySelector("#close-sidebar")


    btnOpenSidebar.addEventListener("click", function () {
        sidebar.style.left = "0"

    })

    btnCloseSidebar.addEventListener("click", function () {
        sidebar.style.left = "-100%"
    })


    /* click outside start */
    document.addEventListener("click", (event) => {
        if (!event.composedPath().includes(sidebar) && !event.composedPath().includes(btnOpenSidebar)) {
            sidebar.style.left = "-100%"
        }
    })
    /* click outside end */
}

function searchModalFunc() {
    const btnOpenSearch = document.querySelector(".search-button")
    const modalSearch = document.getElementsByClassName("modal-search")
    const modalSearchWrapper = document.getElementsByClassName("modal-wrapper")
    const btnCloseModalSearch = document.querySelector("#close-modal-search")
    const searchInput = document.querySelector(".modal-search .search input")


    btnOpenSearch.addEventListener("click", function () {
        modalSearch[0].style.visibility = "visible"
        modalSearch[0].style.opacity = "1"
    })

    btnCloseModalSearch.addEventListener("click", function () {
        modalSearch[0].style.visibility = "hidden"
        modalSearch[0].style.opacity = "0"

    })

    /* click outside start */
    document.addEventListener("click", function (e) {
        if (!e.composedPath().includes(modalSearchWrapper) && !e.composedPath().includes(btnOpenSearch) && !e.composedPath().includes(searchInput)) {
            modalSearch[0].style.visibility = "hidden"
        }
    })
    /* click outside end */
}

function themeToggleFunc() {
    const themeToggle = document.querySelector("#theme-toggle");
    const icon = themeToggle.querySelector('i');
    
    // Check for saved theme preference or default to 'light'
    const currentTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', currentTheme);
    updateIcon(currentTheme);
    
    themeToggle.addEventListener("click", () => {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        
        document.documentElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        updateIcon(newTheme);
    });
    
    function updateIcon(theme) {
        icon.className = theme === 'light' ? 'bi bi-moon' : 'bi bi-sun';
    }
}

function headerFunc() {
    sidebarFunc()
    searchModalFunc()
    themeToggleFunc()
}

export default headerFunc()