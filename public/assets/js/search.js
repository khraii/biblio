document.addEventListener("DOMContentLoaded", () => {
    console.log("cvevgezrgezrg");
    const form = document.forms.search;
    const url = form.action;
    let key = form.auteur.value;

    form.auteur.addEventListener('keyup', function() {
        let key = this.value;
        console.dir(key);
    });
    console.dir(url);
})