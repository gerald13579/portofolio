var fullImgBox = document.getElementById("fullImgBox");
var fullImg = document.getElementById("fullImg");

let menuList = document.getElementById("menuList")
menuList.style.maxHeight = "0px";

function openFullImg(pic){
    fullImgBox.style.display = "flex";
    fullImg.src = pic;
}

function closeFullImg(){
    fullImgBox.style.display = "none";
}

function toggleMenu(){
    if(menuList.style.maxHeight == "0px"){
        menuList.style.maxHeight = "300px";
    } else {
        menuList.style.maxHeight = "0px";
    }
}