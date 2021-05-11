document.addEventListener("DOMContentLoaded", () => {
    const axios = require('axios').default;
    const form = document.forms.search;
    const url = form.action;
    let key = form.auteur.value;

    form.auteur.addEventListener('keyup', function() {
        let key = this.value;
        console.dir(key);
        axios.post(url, {
                key: key,
            })
            .then(function(response) {
                console.log(response);
            })
            .catch(function(error) {
                console.log(error);
            });

    });
    console.dir(url);
})