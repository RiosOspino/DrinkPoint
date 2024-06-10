function dataCategory(id){
    // alert(id);
    $.ajax({
        url: url + "CategoriaController/getCategoryByID",
        type: 'post',
        dataType: 'json',
        data:{'id':id}
    }).done(function(resp){ 
        $('#txtIdCategory').val(resp[0].idCategoria);       
        $('#txtName').val(resp[0].Nombre);        
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
        $.ajax({
            type:"post",
            url: url + "CategoriaController/changeStatus",
            data: {'id':id,}
        }).done(function(answer){
            if(answer == 1){
                Swal.fire('Estado cambiado','','success');

                setTimeout(() => {
                    window.location = url + "CategoriaController/getCategory";
                    window.reload();
                }, 1500);
            }else{
                Swal.fire('Error al cambiar el estado','','Error');
            }
        }).fail(function(error){
            console.log(error);
        })
    }
})

}


//Metodo para ELIMINAR LA CATEGORIA
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
                    Swal.fire('Categoria eliminada','','success');

                    setTimeout(() => {
                        window.location = url + "CategoriaController/getCategory";
                        window.reload();
                    }, 1500);
                }else{
                    Swal.fire('Error al eliminar','','Error');
                }
            }).fail(function(error){
                console.log(error);
            })
        }   
    })
}