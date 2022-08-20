<template>


        <!--<el-button type="danger" :icon="Delete" circle />-->
        <!--<form  label-width="120px" @submit.preven="onSubmit()">
                <input label="Nombre del Pais" v-model="input" type="text"  />

                <button :disabled="input.length === 0" type="submit"> Guardar </button>


                <button type="submit" >Añadir</button>
                <button href="Paises-vue">Cancel</button>


        </form>-->
    <h2>Añadir Pais</h2>
        <form @submit.prevent="guardar()">
            <input placeholder="Introduce el País" type="text" v-model="input">
            <p></p>
            <button :disabled="input.length === 0" type="submit"> Guardar </button>
        </form>



</template>


<script type="text/javascript">
    export default {
        name: "paises",
        props: {

        },
        data: () => ({
            pais: {
                id: 0,
                nombre: '',
            },
            input: ''
        }),

        methods:{ // Usados para modificar información y guardar los cambios.
            guardar() {
                this.pais = {id:(this.pais.id+1), nombre:this.input};
                this.input = '';
                axios.post('/paises/create', this.pais).then(
                    response => {
                        console.log(response)
                    }
                ). catch(error => {
                    console.log('Error');
                });

                console.log(this.pais)

            }
        },
        computed:{ //Usados para modificar solo la información para la vista


        },
        created() {

        },
        mounted() {

        }
    };

</script>

<style>


</style>

