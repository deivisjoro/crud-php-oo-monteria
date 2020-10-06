const enlaces = document.querySelectorAll(".btn-eliminar");
enlaces.forEach((item) => {
    item.addEventListener('click', (event)=>{
        if(!confirm('Desea eliminar el estudiante seleccionado?')){
            event.preventDefault()
        }
    })
})