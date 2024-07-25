const formEdit = document.querySelector('form.form-edit');

formEdit.addEventListener('submit', function (event){
    event.preventDefault();
    const animalName = this.getAttribute('data-animal-name');



    if(window.confirm(`Do you want EDIT that ${animalName} with that generality ?`) === true){
        this.submit();
    }
})
