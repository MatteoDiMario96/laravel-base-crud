const formsDelete = document.querySelectorAll('form.forms-destroy');

formsDelete.forEach(deleteFormEl => {
    deleteFormEl.addEventListener('submit', function (event){
        event.preventDefault();
        const animalName = this.getAttribute('data-animal-name');

        if(window.confirm(`Do you want DELETE that ${animalName}, are you sure ? You can't come back remember.`) === true){
            this.submit();
        }
    })
});
