let elem = document.querySelector('#goods-block')
async function getGoods(){
    let res = await fetch("/goods/goods.json")
    const result = await res.json()
    for (let i = 0; i < result.length; i++) {
        elem.insertAdjacentHTML("afterbegin",`
        <div class="goodsItem">
        <img src="/images/catalog/${result[i].id}.jpg" alt="" class="Item__preview">
        <p class="Item__name"><b>${result[i].name}</b></p>
        <span class="Item__price">${result[i].price}</span>
        </div>
        `)   
    }
}
window.onload = getGoods()
