let btns = Array.from(document.getElementsByClassName("btn"));

btns.forEach(btn => {
    btn.addEventListener('click', btnEvent => {
        btn.classList.add("active");
        if (btn.parentElement.firstElementChild.className == "empty-box") {
            console.log(btn.parentElement.firstElementChild.firstElementChild);
            btn.parentElement.firstElementChild.firstElementChild.value = btn.value;
            btn.parentElement.firstElementChild.lastElementChild.innerHTML=btn.value;
            console.log(btn.parentElement.firstElementChild.lastElementChild);
        } else {
            btn.parentElement.firstElementChild.value = btn.value;
            console.log(btn.parentElement.firstElementChild);
        }
        
    })
});
