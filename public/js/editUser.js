//Metodo para TRAER el ID
function dataUser(id){
    alert(id);
}


//Metodo para CAMBIAR el ESTADO
function changeStatus(id){
    // alert(id);
Swal.fire({
    title: '¿Quieres cambiar el estado?',
    icon: 'Advertencia',
    showCancelButton: true,
    confirmButtonColor: '#fffff',
    cancelButtonColor: '#e52b34',
    confirmButtonText: 'Si',
}).then((result)=>{
    if(result.isConfirmed){
        Swal.fire({
            position: '',
            icon: 'success',
            title: 'Estado cambiado',
            confirmButtonText:'Ok',
            timer: 2000
        }).then((result)=>{
            if(result.isConfirmed){
                $.ajax({
                    type:"post",
                    url: url + "usuarioController/changeStatus",
                    data: {'id':id,}
                }).done(function(answer){
                    if(answer == 1){
                        window.location = url + "usuarioController/getUsers";
                        window.reload();
                    }else{
                        Swal.fire('Error al cambiar el estado','','Error');
                    }
                }).fail(function(error){
                    console.log(error);
                })
            }
        
        })
    }
})

}


//Metodo para ELIMINAR el USUARIO
function deleteUser(id){
    // alert(id);
    Swal.fire({
        title: '¿Quieres eliminar el usuario?',
        icon: 'Advertencia',
        showCancelButton: true,
        confirmButtonColor: '#fffff',
        cancelButtonColor: '#e52b34',
        confirmButtonText: 'Si',
    }).then((result)=>{
        if(result.isConfirmed){
            Swal.fire({
                position: '',
                icon: 'success',
                title: 'Usuario Eliminado',
                confirmButtonText:'Ok',
                timer: 2000
            }).then((result)=>{
                if(result.isConfirmed){
                    $.ajax({
                        type:"post",
                        url: url + "usuarioController/deleteUser",
                        data: {'id':id,}
                    }).done(function(answer){
                        if(answer == 1){
                            window.location = url + "usuarioController/getUsers";
                            window.reload();
                        }else{
                            Swal.fire('Error al eliminar','','Error');
                        }
                    }).fail(function(error){
                        console.log(error);
                    })
                }
            
            })
        }
    })
}