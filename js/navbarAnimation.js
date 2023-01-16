let collection = document.getElementsByClassName("nav-link");

let textNav = collection[0].innerText;

console.log(textNav.length);

collection[0].addEventListener("mouseover", ()=>{
    document.getElementById("item1").style.cssText = "color: green !important";
});

collection[0].addEventListener("mouseout", ()=>{
    document.getElementById("item1").style.cssText = "color: whitesmoke !important";
});