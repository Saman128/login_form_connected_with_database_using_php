const btn=document.querySelector(".btn");
const btn2=document.querySelector(".btn2");
// console.log(btn);
const form=document.querySelector(".form")
function button(){
    if(form.classList.contains("form")){
        form.classList.remove("form");
        form.classList.add("form1");
    }else{
        form.classList.remove("form1");
        form.classList.add("form");
    }
}
btn.addEventListener("click",button);
function button2(){
    if(form.classList.contains("form")){
        form.classList.remove("form");
        form.classList.add("form1");
    }else{
        form.classList.remove("form1");
        form.classList.add("form");
    }
}
btn2.addEventListener("click",button2);
