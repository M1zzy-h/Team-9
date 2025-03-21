function searchFunc(data) {
    const searchWrapper = document.querySelector(".search-result .results")
    let result = ""

    // Build an initial list of search results.
    // If the product object does not already have an "id" property,
    // we use the array index as the fallback.
    data.forEach((item, index) => {
        result += `
            <a href="/product/${item.id}" class="result-item" data-id="${item.id}">
                <img src="${item.image}" class="search-thumb" alt="${item.title}">
                <div class="search-info">
                    <h4>${item.title}</h4>
                    <span class="search-artist">${item.artist}</span>
                    <span class="search-price">${item.price}</span>
                </div>  
            </a>    
        `;
    });
    searchWrapper.innerHTML = result

    const searchInput = document.querySelector(".modal-search .search input")

    // Listen for input changes to filter products dynamically.
    searchInput.addEventListener("input", (e) => {
        const value = e.target.value.trim().toLowerCase()
        let filtered = data.filter((item) => 
            item.title.toLowerCase().includes(value) ||
            item.artist.toLowerCase().includes(value)
        )
        let result = ""
        if (filtered.length > 0) {
            filtered.forEach((item, index) => {
                //const productId = item.id !== undefined ? item.id : index;
                result += `
                        <a href="/product/${item.id}" class="result-item" data-id="${item.id}">
                            <img src="${item.image}" class="search-thumb" alt="${item.title}">
                            <div class="search-info">
                            <h4>${item.title}</h4>
                            <span class="search-artist">${item.artist}</span>
                            <span class="search-price">${item.price}</span>
                            </div>  
                        </a>    
                    `
            })
        } else {
            result = `
                <a href="/" class="result-item" style="justify-content: center">
                     No results 😔
                </a>
            `
        }
        searchWrapper.innerHTML = result
    })
}

export default searchFunc