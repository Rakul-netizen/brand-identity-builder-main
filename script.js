document.getElementById('quotes').addEventListener('click',()=>{
    document.querySelector('.quotes-form__section').style.display="flex";
})
document.querySelector('.quotes-form__close-btn').addEventListener('click',()=>{
    document.querySelector('.quotes-form__section').style.display="none";
})