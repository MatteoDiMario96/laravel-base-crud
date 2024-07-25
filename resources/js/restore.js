const formsRestore = document.querySelectorAll('form.form-restore');

formsRestore.forEach(restoreFormEl => {
    restoreFormEl.addEventListener('submit', function (event){
        event.preventDefault();
        const animalName = this.getAttribute('data-animal-name');

        if(window.confirm(`Do you want RESTORE that ${animalName} ? `) === true){
            this.submit();
        }
    })
});
