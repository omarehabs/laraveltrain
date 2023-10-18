// fetch data from api
async function getProducts() { 
    const url = "https://fakestoreapi.com/products";
    const response = await fetch(url) , 
          products = await response.json();
    return products
}

async function displayEgyptNews() { 
    const row = document.querySelector('.cart')
    const products = await getProducts()

    for(let prod of products) {
        const div = document.createElement("div") // <div class=""></div>
        div.className = "cart-item";
        div.innerHTML = `


            <img src="${prod.image}" alt="Product Image" class="product-image">
            <div class="product-info">
                <h2 class="product-title">${prod.title}</h2>
                <p class="product-description">${prod.description}</p>
                <p class="product-price">${prod.price}</p>
                <p class="product-category">${prod.category}</p>
                <div class="product-rating">
                    <span class="rating">${prod.rating.rate}</span>
                    <span class="rating-count">${prod.rating.count}</span>
                </div>
            </div>
        </div>
  
   
        `
        row.appendChild(div);  
    } 
}

// onDocument Load
document.addEventListener('DOMContentLoaded' , displayEgyptNews)