const btnLogin=document.querySelector(".botao"),form=document.querySelector("div.formulario");btnLogin.addEventListener("click",e=>{[...document.querySelectorAll(".form-group input")].forEach(e=>{""===e.value&&form.classList.add("validate-error")});const t=document.querySelector(".validate-error");t?t.addEventListener("animationend",e=>{"nono"===e.animationName&&t.classList.remove("validate-error")}):form.classList.add("form-hide")});const ulSquares=document.querySelector("ul.squares");for(let e=0;e<10;e++){const e=document.createElement("li"),t=(e,t)=>Math.random()*(t-e)+e,o=Math.floor(t(10,120)),a=t(1,99),r=t(5,.1),n=t(24,12);e.style.width=`${o}px`,e.style.height=`${o}px`,e.style.bottom=`-${o}px`,e.style.left=`${a}%`,e.style.animationDelay=`${r}s`,e.style.animationDuration=`${n}s`,e.style.animationTimingFunction=`cubic-bezier(${Math.random()}, ${Math.random()}, ${Math.random()}, ${Math.random()})`,ulSquares.appendChild(e)}
