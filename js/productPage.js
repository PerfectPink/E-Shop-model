let ProductSection = document.querySelector('#productSection')
let localStorageProductId = localStorage.getItem("productid")
async function getProduct(){
    let dbProductAll = await fetch("/goods/goods.json")
    const dbProduct = await dbProductAll.json()
    ProductSection.insertAdjacentHTML("afterbegin",`
    <img src="/images/catalog/${dbProduct[localStorageProductId].id}.jpg" class="productPageImg"></img>
    <p class="productPageName"><b>${dbProduct[localStorageProductId].name}</b></p>
    <span class="productPageId">Артикул ${dbProduct[localStorageProductId].id}</span>
    <span class="productPagePrice"><i>${dbProduct[localStorageProductId].price}</i>  руб.</span>
    <span class="productPageDesc">${dbProduct[localStorageProductId].desc}</span>
    <div class="SizeTitleDiv">
        <span class="SizeTitle">Размер</span>
        <div class="buttonsPanel" id="btnsPanel">
            <button class="productPageBtn">xs</button>
            <button class="productPageBtn">s</button>
            <button class="productPageBtn activeBtnProductPage">m</button>
            <button class="productPageBtn">l</button>
            <button class="productPageBtn">xl</button>
            <button class="productPageBtn">xxl</button>
        </div>
    </div>
    <button class="productPageAddToCart">Добавить в корзину</button>`)
}
window.onload = getProduct()

setTimeout(() => {
    btnDiv = document.getElementById("btnsPanel")
    links = Array.from(btnDiv.children)
    btnDiv.addEventListener("click",function(e){
    if (e.target.classList.contains('productPageBtn')){
        links.forEach(element => {
            element.classList.remove('activeBtnProductPage')
        });
        e.target.classList.add('activeBtnProductPage')
    }
})
}, 500);
