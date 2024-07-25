const formsDelete = document.querySelectorAll('form.forms-destroy');

formsDelete.forEach(deleteFormEl => {
    deleteFormEl.addEventListener('submit', function (event){
        event.preventDefault();
        const animalName = this.getAttribute('data-animal-name');

        if(window.confirm(`Do you want MOVE in the Trash that ${animalName}, are you sure ?`) === true){
            this.submit();
        }
    })
});
