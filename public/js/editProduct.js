function dataProduct(id){
    // alert(id);
    $.ajax({
        url: url + "ProductoController/getProductByID",
        type: 'post',
        dataType: 'json',
        data:{'id':id}
    }).done(function(resp){ 
        $('#txtIdProducto').val(resp.idProducto);       
        $('#txtName').val(resp.Nombre);
        $('#txtDescription').val(resp.Descripcion);
        $('#txtPrice').val(resp.Precio);
        $('#txtImage').val(resp.Imagen);
        $('#selCategory').val(resp.idCategoria);
    }).fail(function(error){
        console.log(error)
    })
}

//Metodo para CAMBIAR el ESTADO
function product_changeStatus(id){
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
                url: url + "ProductoController/changeStatus",
                data: {'id':id,}
            }).done(function(answer){
                if(answer == 1){
                    // Swal.fire('Estado cambiado','','success');
                    
                    Swal.fire({
                        position: '',
                        icon: 'success',
                        title: 'Estado cambiado',
                        confirmButtonText:'Ok',
                        timer: 2000
                    });

                    setTimeout(() => {
                        window.location = url + "ProductoController/getProduct";
                        window.reload();
                    }, 3000);
                }else{
                    Swal.fire('Error al cambiar el estado','','Error');
                }
            }).fail(function(error){
                console.log(error);
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