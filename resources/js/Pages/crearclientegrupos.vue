<template>
    <div v-for="dato in datos" >
        <h1>Añadir Grupo</h1>
        <!--<el-button type="danger" :icon="Delete" circle />-->
        <el-form  label-width="120px">
            <el-form-item label="Nombre del Grupo">
                <el-input v-model="dato.nombre"  />
            </el-form-item>
            <el-form-item label="Estatus">
                <select v-model="selected">
                    <option disabled value="">Seleccione un status</option>
                    <option>{{dato.estatus}}</option>
                </select>
                <span>Seleccionado: {{selected }}</span>
            </el-form-item>
            <el-form-item>
                <el-button type="primary" @click="onSubmit">Añadir</el-button>
                <el-button @click="retroceder()">Cancel</el-button>
            </el-form-item>
        </el-form>
    </div>
</template>

<script>


    export default {

        name: "prueba",
        data: () => ({
            selected: null,
            informacion: [
                { text: 'JavaScript' },
                { text: 'Vue.js' },
                { text: 'Laravel' },
                { text: 'Backpack' },
            ],
            datos:[
                {
                    id:1,
                    nombre:'Sams',
                    estatus:'activo'}]
        }),
        methods:{
            retroceder(){
                window.history.back();
            },
        },
        computed:{
        },
        created() {
        },
        mounted() {
        }
    };


</script>

<style scoped>

</style>
