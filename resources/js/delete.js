const formsDelete = document.querySelectorAll('form.forms-destroy');

formsDelete.forEach(deleteFormEl => {
    deleteFormEl.addEventListener('submit', function (event){
        event.preventDefault();

        if(window.confirm('Do you want really DELETE that animal ?') === true){
            this.submit();
        }
    })
});
console.log('ciao');
