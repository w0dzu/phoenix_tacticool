let params = (new URL(document.location)).searchParams;
let tab = params.get('tab');
console.log(tab);

if (!tab) {
    tab = "overview";
}

let activeA = document.querySelector("a."+tab);
let activeSection = document.querySelector("section."+tab);
console.log(activeA);
console.log(activeSection);

activeA.classList.add("active");
activeSection.classList.add("active");
