<template>
    <div>
        <h1>Municipios</h1>
        <div class="add-item-form">
            <button round style="float: right;" class="btn btn-primary"><el-link href="crearmunicipio-vue" round style="float: right;color: white;" >Añadir Municipio</el-link></button>

        </div>
        <table class="table table-striped">
            <thead>
            <th>Id</th>
            <th>Municipios</th>
            <th>Estados</th>
            <th>Paises</th>
            <th>Accion</th>
            </thead>
            <tbody>
            <tr v-for="dato in datos">
                <td>{{dato.id}}</td>
                <td>{{dato.nombre}}</td>
                <td>{{dato.estados}}</td>
                <td>{{dato.paises}}</td>


                <td>

                    <el-button type="danger" round>Eliminar</el-button>

                </td>
                <td>
                    <el-icon><Delete /></el-icon>
                </td>
            </tr>
            </tbody>
        </table>
        <p></p>



    </div>


</template>


<script type="text/javascript">


    export default {

        name: "prueba",
        data: () => ({
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
                    estados:'Chihuahua',
                    paises:'Mexico'}]
        }),
        methods:{
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

