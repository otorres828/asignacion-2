<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "language": {
            "lengthMenu": "Mostrar "+
                        `<select>
                        <option value ='3'>3</option>
                        <option value ='5'>5</option>
                        <option value ='10'>10</option>
                        <option value ='25'>25</option>
                        <option value ='50'>50</option>
                        <option value ='100'>100</option>
                        <option value ='-1'>ALL</option>
                        </select>`+
                        " registro por pagina",
            "zeroRecords": "Nada encontrado",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search": "Buscar:",
            "paginate":{
                'next':'siguiente',
                'previous':'anterior'
            }
            },    responsive: true
        });           
    });
    
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
        $('.destroy').submit(function(e){
            e.preventDefault();
            Swal.fire({
            title: '¿Estas Seguro?',
            text: "que quieres eliminar este Actor!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmar',
            cancelButtonText: 'Cancelar'

            }).then((result) => {
                if (result.isConfirmed) {
                Swal.fire(
                'Eliminado!',
                'El actor ha eliminado con exito',
                'success'
                )
                this.submit();
            }
        })
        });
</script>

