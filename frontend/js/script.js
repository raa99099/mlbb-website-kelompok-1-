const navToggle = document.getElementById("navToggle");

if(navToggle){
    navToggle.addEventListener("click", () => {

        document
        .querySelector(".nav-links")
        .classList.toggle("open");

        document
        .querySelector(".nav-auth")
        .classList.toggle("open");
    });
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener('click', function(e){

        e.preventDefault();

        document.querySelector(
            this.getAttribute('href')
        ).scrollIntoView({
            behavior:'smooth'
        });

    });

});

const cards = document.querySelectorAll(
'.feat-card,.role-card,.hero-card,.item-card,.team-card'
);

const observer = new IntersectionObserver(entries => {

    entries.forEach(entry => {

        if(entry.isIntersecting){

            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
        }

    });

});

cards.forEach(card => {

    card.style.opacity = "0";
    card.style.transform = "translateY(40px)";
    card.style.transition = "0.6s";

    observer.observe(card);

});
