<template>
    <div>
        <h1>Direcciones De Clientes</h1>
        <div class="add-item-form">
            <button round style="float: right;" class="btn btn-primary"><el-link href="crearclientedireccion-vue" round style="float: right;color: white;" >Añadir Direccion</el-link></button>
        </div>
        <table class="table table-striped">
            <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Paises</th>
            <th>Estados</th>
            <th>Municipios</th>
            <th>Calle</th>
            <th>Num. Exterior</th>
            <th>Num. Interior</th>
            <th>Grupo</th>
            <th>Estatus</th>
            <th>Tipo</th>
            <th>Codigo Postal</th>
            <th>Colonia</th>
            <th>Accion</th>
            </thead>
            <tbody>
            <tr v-for="dato in datos">
                <td>{{dato.id}}</td>
                <td>{{dato.nombre}}</td>
                <td>{{dato.paises}}</td>
                <td>{{dato.estados}}</td>
                <td>{{dato.municipios}}</td>
                <td>{{dato.calle}}</td>
                <td>{{dato.numeroexterior}}</td>
                <td>{{dato.numerointerior}}</td>
                <td>{{dato.grupo}}</td>
                <td>{{dato.estatus}}</td>
                <td>{{dato.tipo}}</td>
                <td>{{dato.codigopostal}}</td>
                <td>{{dato.colonia}}</td>


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
                    nombre:'samuel',
                    paises:'Mexico',
                    estados:'Chihuahua',
                    municipios:'Chihuahua',
                    calle:'Ocampo',
                    numeroexterior:'21345',
                    numerointerior:' ',
                    grupo:'Sam',
                    estatus:'Activo',
                    tipo:'envio',
                    codigopostal:'31055',
                    colonia: 'centro' }]

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

