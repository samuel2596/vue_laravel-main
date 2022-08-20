<template>
    <div v-for="dato in datos" >
        <h1>Añadir Estado</h1>
        <!--<el-button type="danger" :icon="Delete" circle />-->
        <el-form  label-width="120px">
            <el-form-item label="Nombre del Estado">
                <el-input v-model="dato.nombre"  />
            </el-form-item>
            <el-form-item label="Pais">
                <select v-model="selected">
                    <option disabled value="">Seleccione un elemento</option>
                    <option>{{dato.pais}}</option>
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

<script type="text/javascript">


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
                    nombre:'Chihuahua',
                    pais:'Mexico',
                },
            ]
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

<style>
    .demo-tabs > .el-tabs__content {
        padding: 32px;
        color: #6b778c;
        font-size: 32px;
        font-weight: 600;
    }

</style>
