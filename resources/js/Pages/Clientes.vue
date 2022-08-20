<template>
    <div>
        <h1>Clientes</h1>
        <div class="add-item-form">
            <button round style="float: right;" class="btn btn-primary"><el-link href="crearcliente-vue" round style="float: right;color: white;" >Añadir Cliente</el-link></button>

        </div>
        <table class="table table-striped">
            <thead>
            <th>Id</th>
            <th>Nombre Comercial</th>
            <th>Razon social</th>
            <th>Email</th>
            <th>Grupos Clientes</th>
            <th>Estatus</th>
            <th>Municipios</th>
            <th>Estados</th>
            <th>Paises</th>
            <th>Calle</th>
            <th>Num. Exterior</th>
            <th>num. Interior</th>
            <th>Colonia</th>
            <th>Codigo Postal</th>
            <th>Accion</th>
            </thead>
            <tbody>
            <tr v-for="dato in datos">
                <td>{{dato.id}}</td>
                <td>{{dato.nombre}}</td>
                <td>{{dato.razonsocial}}</td>
                <td>{{dato.email}}</td>
                <td>{{dato.gruposcliente}}</td>
                <td>{{dato.estatus}}</td>
                <td>{{dato.municipios}}</td>
                <td>{{dato.estados}}</td>
                <td>{{dato.pais}}</td>
                <td>{{dato.calle}}</td>
                <td>{{dato.numeroexterior}}</td>
                <td>{{dato.numerointerior}}</td>
                <td>{{dato.colonia}}</td>
                <td>{{dato.codigopostal}}</td>

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
                    nombre:'Sam',
                    razonsocial:'procesos web',
                    email:'samel@gmail.com',
                    gruposcliente:'Sams',
                    estatus:'activo',
                    municipios:'Chihuahua',
                    estados:'Chihuahua',
                    pais:'Mexico',
                    calle:'Ocampo',
                    numeroexterior:'2134',
                    numerointerior:' ',
                    colonia:'Centro',
                    codigopostal:'31055'}]
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
