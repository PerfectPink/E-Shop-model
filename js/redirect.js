let regAuthForm = document.getElementById("authregform")
function redirect(){
    regAuthForm.insertAdjacentHTML("beforebegin","<p class = 'redirect-notification'>Вы успешно вошли! Переход на главную страницу через 3 секунды</p>");
    setTimeout(()=>{window.location.replace("../index.php")},3000)
}
window.onload = redirect()