let arrow = document.querySelector(".up");
window.onscroll = function(){
    if(this.scrollY>=600){
        arrow.classList.add("on")
    }
     else{
         arrow.classList.remove("on")
     }
};
arrow.onclick = function(){
    window.scrollTo({
        top:0
    })
}
const add = document.querySelector(".add"),
      num =  document.querySelector(".nam_of_products");
let n = 0;

add.addEventListener('click',()=>{
    n++;
    num.value= n;
})

