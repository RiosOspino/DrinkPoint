function dataProduct(id){
    // alert(id);
    $.ajax({
        url: url + "ProductoController/productId",
        type: 'post',
        dataType: 'json',
        data:{'id':id}
    }).done(function(answer){
        $.each(answer, function(index, value){
            $('#txtName').val(value.Nombre);
            $('txtDescription').val(value.Descripcion);
            $('#txtPrice').val(value.Precio);
            $('#txtImage').val(value.Imagen);
            $('#txtCategory').val(value.idCategoria);

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
                    url: url + "ProductoController/changeStatus",
                    data: {'id':id,}
                }).done(function(answer){
                    if(answer == 1){
                        window.location = url + "ProductoController/getProduct";
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
function deleteProduct(id){
    // alert(id);
    Swal.fire({
        title: '¿Quieres eliminar el producto?',
        icon: 'Advertencia',
        showCancelButton: true,
        confirmButtonColor: '#fffff',
        cancelButtonColor: '#e52b34',
        confirmButtonText: 'Si',
    }).then((res)=>{
        if(res.isConfirmed){
            $.ajax({
                type:"post",
                url: url + "ProductoController/deleteProduct",
                data: {'id':id,}
            }).done(function(answer){
                if(answer == 1){
                    Swal.fire('Producto eliminado','','success');

                    setTimeout(() => {
                        window.location = url + "ProductoController/getProduct";
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