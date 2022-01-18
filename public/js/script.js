const adressbtn = document.querySelector('#adress_form')
const adressclose = document.querySelector('#address_close')

adressbtn.addEventListener("click", function(){
    document.querySelector('.adress_form').style.display = "flex";
})
adressclose.addEventListener("click", function(){
    //  console.log(adressclose)
    document.querySelector('.adress_form').style.display = "none";
 })

//  slider -------------------

let index = 0
const lefttbtn =document.querySelector('.fa-caret-left')
const righttbtn =document.querySelector('.fa-caret-right')
const imgNumber = document.querySelectorAll('.slider_content_left_top img')
lefttbtn.addEventListener ("click",function(){
    index = index -1
    if(index<0){
        index = imgNumber.length-1
    }
    document.querySelector(".slider_content_left_top").style.right= index * 100+"%"


})
righttbtn.addEventListener ("click",function(){
    index = index +1
    if(index>imgNumber.length-1){
        index = 0
    }
    document.querySelector(".slider_content_left_top").style.right= index * 100+"%"
})
//slider bottom----\
const imgNuberli = document.querySelectorAll('.slider_content_left_bottom li')
let imgactive = document.querySelector('.active')
imgNuberli.forEach(function(image,index){
    image.addEventListener("click",function(){
        removeactive()
        document.querySelector(".slider_content_left_top").style.right= index * 100+"%"
        imgactive.classList.remove("active")
        image.classList.add("active")
    })
})
function removeactive(){
    let imgactive = document.querySelector('.active')
    imgactive.classList.remove("active")
}
//sliderauto----------------------------------------/
function slideauto(){
    index = index + 1
    if(index>imgNumber.length-1){
        index = 0
    }
    removeactive()
    document.querySelector(".slider_content_left_top").style.right= index * 100+"%"
    imgNuberli[index].classList.add("active")

}
setInterval(slideauto,5000)
// -----------slide product-------------------\
const rightbtn2 = document.querySelector('.fa-caret-right2')
const leftbtn2 = document.querySelector('.fa-caret-left2')
const imgNumber2 = document.querySelectorAll('.slider_product_items')

rightbtn2.addEventListener ("click",function(){
     index = index +1
     if(index>imgNumber2.length-1){
        index = 0
    }
     document.querySelector(".slider_product_content_items").style.right= index * 100+"%"
 })
 leftbtn2.addEventListener ("click",function(){
    index = index -1
     if(index<0){
         index = imgNumber2.length-1
    }
    document.querySelector(".slider_product_content_items").style.right= index * 100+"%"

 })
