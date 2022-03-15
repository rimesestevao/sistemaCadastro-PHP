const form = document.getElementById('form');
const letDelete = document.getElementById('delete');


form.addEventListener('submit', (e) =>{
    
    e.preventDefault();

    checkInputs();
    
})


function checkInputs(){
    
    const deleteValue = letDelete.value.trim();

    if(deleteValue == ''){
        Swal.fire('ERRO!','Não foi possível deletar a matrícula.','error');
    }else{
        alertDelete();
    }


}

function alertDelete() {
    Swal.fire({  
        icon:'warning',
        title: 'Você tem certeza que deseja apagar este cadastro?',    
        text: 'Uma vez feita não poderá voltar atrás',
        showConfirmButton: false, 
        showCancelButton: true,
        showDenyButton: true,
        cancelButtonText: 'voltar',
        denyButtonText: 'Tenho certeza',
      }).then((result) => {  
          if (result.isDenied) {    
            Swal.fire({
                icon:'success',
                title:'Tudo pronto para apagar!',
                text:'Clique em OK para confirmar e voltar à página inicial.',
                showConfirmButton: true,
                confirmButtonText: 'OK',
            }).then((result) => {
                if(result.isConfirmed){
                    document.getElementById("form").submit(); 
                }
            })
          }
      });
}