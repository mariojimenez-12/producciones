 <template>

    <input class="btn btn-danger" 
            type="submit" 
            value="Eliminar imagen"
            v-on:click="eliminarRegistro"
            >
 </template>

<script>
    export default {
        props: ['registroId'],
        methods: {
            eliminarRegistro(){
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
                            id: this.registroId
                        }

                        //Enviar la peticion al servidor
                        axios.post(`./galeria/${this.registroId}`, {params, _method: 'delete'})
                            .then(respuesta => {
                                this.$swal({
                                title: 'Registro Eliminado',
                                text: 'Su registro ha sido eliminado.',
                                icon: 'success'
                                })
                                //Eliminar el registro del DOM
                                this.$el.parentNode.parentNode.removeChild(this.$el.parentNode);
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