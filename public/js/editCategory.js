function dataCategory(id){
    // alert(id);
    $.ajax({
        url: url + "CategoriaController/categoryId",
        type: 'post',
        dataType: 'json',
        data:{'id':id}
    }).done(function(answer){
        $.each(answer, function(index, value){
            $('#txtCategory').val(value.idCategoria);
            $('#txtName').val(value.Nombre);

        })
    }).fail(function(error){
        console.log(error)
    })
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
}).then((res)=>{
    if(res.isConfirmed){
        Swal.fire({
            position: '',
            icon: 'success',
            title: 'Estado cambiado',
            confirmButtonText:'Ok',
            timer: 2000
        }).then((res)=>{
            if(res.isConfirmed){
                $.ajax({
                    type:"post",
                    url: url + "CategoriaController/changeStatus",
                    data: {'id':id,}
                }).done(function(answer){
                    if(answer == 1){
                        window.location = url + "CategoriaController/getCategory";
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
function deleteCategory(id){
    // alert(id);
    Swal.fire({
        title: '¿Quieres eliminar la categoria?',
        icon: 'Advertencia',
        showCancelButton: true,
        confirmButtonColor: '#fffff',
        cancelButtonColor: '#e52b34',
        confirmButtonText: 'Si',
    }).then((res)=>{
        if(res.isConfirmed){
            $.ajax({
                type:"post",
                url: url + "CategoriaController/deleteCategory",
                data: {'id':id,}
            }).done(function(answer){
                if(answer == 1){
                    Swal.fire('Categoria eliminado','','success');

                    setTimeout(() => {
                        window.location = url + "CategoriaController/getCategory";
                        window.reload();
                    }, 3000);
                }else{
                    Swal.fire('Error al eliminar','','Error');
                }
            }).fail(function(error){
                console.log(error);
            })
        }   
    })
}