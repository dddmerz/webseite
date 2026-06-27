/*
==========================================================
Hover Glow
==========================================================
*/

document.querySelectorAll(".card-hover").forEach(card =>
{

    card.addEventListener("mousemove",(e)=>
    {

        const rect = card.getBoundingClientRect();

        const x = e.clientX - rect.left;

        const y = e.clientY - rect.top;

        card.style.background =
        `radial-gradient(circle at ${x}px ${y}px,
        rgba(255,0,0,.12),
        #171717 70%)`;

    });

    card.addEventListener("mouseleave",()=>
    {
        card.style.background="#171717";
    });

});
