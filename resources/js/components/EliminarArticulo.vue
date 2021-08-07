 <template>

    <input class="btn btn-danger mb-2" 
            type="submit" 
            value="Eliminar registro"
            v-on:click="eliminarArticulo"
            >
 </template>

<script>
    export default {
        props: ['articuloId'],
        methods: {
            eliminarArticulo(){
               this.$swal({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, borrar!'
                }).then((result) => {
                    if (result.value) {
                        const params = {
                            id: this.articuloId
                        }

                        //Enviar la peticion al servidor
                        axios.post(`./reservaciones/${this.articuloId}`, {params, _method: 'delete'})
                            .then(respuesta => {
                                this.$swal({
                                title: 'Registro Eliminado',
                                text: 'Su registro ha sido eliminado.',
                                icon: 'success'
                                })
                                //Eliminar el registro del DOM
                                this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                            })
                            .catch(error => {
                                console.log(error);
                            })


                       
                    }
                })
            }
        },
    }
</script>