let elem = document.querySelector('#goods-block')
async function getGoods(){
    let res = await fetch("/goods/goods.json")
    const result = await res.json()
    for (let i = 0; i < result.length; i++) {
        elem.insertAdjacentHTML("afterbegin",`
        <div class="goodsItem">
        <img src="/images/catalog/${result[i].id}.jpg" alt="" class="Item__preview">
        <a href="/pages/productPage.php" onclick = setCookie(${result[i].id})><b>${result[i].name}</b></a>
        <span class="Item__price">${result[i].price} руб.</span>
        </div>
        `)   
    }
}
window.onload = getGoods()