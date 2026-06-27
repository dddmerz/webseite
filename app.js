/*
==========================================================
DeMerzli Arena 2.0
==========================================================
*/

document.addEventListener("DOMContentLoaded", () => {

    initCounter();

    initReveal();

});

/*
==========================================================
Counter
==========================================================
*/

function initCounter()
{
    const counters = document.querySelectorAll(".stat-card h2");

    counters.forEach(counter =>
    {
        const target = parseInt(counter.innerText.replace(/\D/g,""));

        if(isNaN(target)) return;

        let current = 0;

        const step = Math.max(1, Math.ceil(target / 80));

        const timer = setInterval(() =>
        {
            current += step;

            if(current >= target)
            {
                current = target;

                clearInterval(timer);
            }

            counter.innerText = current.toLocaleString();

        },20);

    });
}

/*
==========================================================
Reveal Animation
==========================================================
*/

function initReveal()
{
    const observer = new IntersectionObserver(entries =>
    {
        entries.forEach(entry =>
        {
            if(entry.isIntersecting)
            {
                entry.target.classList.add("active");
            }
        });
    },{
        threshold:0.15
    });

    document.querySelectorAll(".reveal").forEach(el =>
    {
        observer.observe(el);
    });
}
