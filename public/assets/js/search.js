document.addEventListener("DOMContentLoaded", () => {
    let listAuteur = document.querySelector(".listAuteur");
    const form = document.forms.search;
    const url = form.action;
    const createList = (result) => {
        let innerList = '<div class="list-group">';
        result.forEach(element => {
            innerList += '<a href="#" class="lest-group-item list-group-item-action"'
        });
        innerList += '</div>';
        return innerList;
    }



    const ajaxSearch = () => {
        let key = form.auteur.value;
        axios.post(url, {
                key: key,
            })
            .then(function(response) {
                let result = response.data
                listAuteur.innerHTML = createList(result)
                console.dir(result);
            })
            .catch(function(error) {
                console.log(error);
            });
    }


    form.auteur.addEventListener('keyup', () => {
        ajaxSearch();
    });

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        ajaxSearch();
    })


})