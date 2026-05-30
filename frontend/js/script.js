// ======================
// PARTICLE EFFECT
// ======================

function initParticles(id){

    const container = document.getElementById(id);

    if(!container) return;

    for(let i=0; i<30; i++){

        const particle =
        document.createElement("div");

        particle.classList.add("particle");

        const size =
        Math.random()*4 + 1;

        particle.style.width =
        size + "px";

        particle.style.height =
        size + "px";

        particle.style.left =
        Math.random()*100 + "%";

        particle.style.animationDuration =
        (10 + Math.random()*10) + "s";

        particle.style.animationDelay =
        Math.random()*5 + "s";

        container.appendChild(particle);
    }
}

// ======================
// MOBILE NAVBAR
// ======================

const navToggle =
document.getElementById("navToggle");

if(navToggle){

    navToggle.addEventListener(
    "click",
    function(){

        document
        .querySelector(".nav-links")
        .classList.toggle("open");

        document
        .querySelector(".nav-auth")
        .classList.toggle("open");
    });
}

// ======================
// REGISTER VALIDATION
// ======================

const registerForm =
document.getElementById("registerForm");

if(registerForm){

registerForm.addEventListener(
"submit",
function(e){

const password =
document.querySelector(
"input[name='password']"
).value;

const confirm =
document.getElementById(
"confirmPassword"
)?.value;

if(confirm && password !== confirm){

alert("Password tidak sama!");

e.preventDefault();

}

});
}
