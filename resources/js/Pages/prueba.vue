<template>
    <div>
        <h1>{{Mensaje}}</h1>


        <el-tabs v-model="activeName" class="demo-tabs" @tab-click="handleClick">
            <el-tab-pane label="Usuario" name="first">
            <el-table :data="datos" style="width: 100%">
                <el-table-column prop="nombre" label="Nombre" width="180" />
                <el-table-column prop="telefonos" label="Telefono" width="180" />



            </el-table>
            </el-tab-pane>
            <el-tab-pane label="Config" name="second">
                <el-button type="success" round style="float: right;" >Crear</el-button>

                <table class="table table-striped">
                    <thead>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Activo</th>
                    <th>Accion</th>
                    </thead>
                    <tbody>
                    <tr v-for="dato in datos">
                        <td>{{dato.nombre}}</td>
                        <td>{{dato.telefonos}}</td>
                        <td>{{dato.activo}}</td>
                        <td>Prueba para vue</td>
                        <td>Posiblemente estoy ganando como 2 o 3 pesos</td>

                        <td>

                            <el-button type="danger" round>Danger</el-button>

                        </td>
                        <td>
                            <el-icon><Delete /></el-icon>
                        </td>
                    </tr>
                    <!-- <tr>{{newdatos.name}}</tr>
                     <tr>{{newdatos.activo}}</tr>
                   --<tr v-for="newdato in newdatos">
                         <td>{{newdato.name}}</td>
                         <td>{{newdato.activo}}</td>
                     </tr>-->
                    </tbody>
                </table>
                <p></p>
                <div class="add-item-form">
                <input v-on:keyup.enter="datos.push({id:datos.length+1, nombre:datos})" v-model="newdatos.name" type="text" placeholder="añadir usuario">
                <br>
                <label>
                    Activo
                    <select v-model="newdatos.activo">
                        <option value="Si">Si</option>
                        <option value="No">NO</option>
                    </select>
                </label>
                <button v-on:click="datos.push({id:datos.length+1, nombre:datos})" class="btn btn-primary">Guardar</button>

                </div>
            </el-tab-pane>
            <el-tab-pane label="Roles" name="third">Roles
                <li v-for="dato in datos" :key="dato.id">{{dato.nombre}},{{dato.telefonos}}</li>

             </el-tab-pane>

             <el-tab-pane label="Task" name="fourth">Tasssssssk</el-tab-pane>
         </el-tabs>
         <!--
         <el-button type="success" round style="float: right;" >Crear</el-button>
         <table class="table table-striped">
             <thead>
             <th>Nombre</th>
             <th>Telefono</th>
             <th>Acciones</th>
             </thead>
             <tbody>
             <tr v-for="dato in datos">
                 <td>{{dato.nombre}}</td>
                 <td>{{dato.telefonos}}</td>
                 <el-button type="danger" round>Eliminar</el-button>
             </tr>
             </tbody>
         </table>

         <el-form  :model="form" label-width="120px">
             <el-form-item label="Activity name">
                 <el-input v-model="form.name" />
             </el-form-item>
             <el-form-item>
                 <el-button type="primary" @click="onSubmit">Create</el-button>
                 <el-button>Cancel</el-button>
             </el-form-item>
         </el-form>-->
        <ul>
            <li v-for="x in informacion">
                {{ x.text }}
            </li>
        </ul>
        <h3>{{inputvue}}</h3>
        <input v-model="inputvue">
        <p/>
        <el-button>boton</el-button>
        <!--<el-button type="danger" :icon="Delete" circle />-->





    </div>


</template>


<script type="text/javascript">
    import {
        Delete
    } from '@element-plus/icons-vue'




    // do not use same name with ref

    export default {



        name: "prueba",
        props: {
        },
        data: () => ({
            inputvue:"Prueba de input en vue",
            Mensaje:"PRUEBA DE TABLAS Y VUE",
            informacion: [
                { text: 'JavaScript' },
                { text: 'Vue.js' },
                { text: 'Laravel' },
                { text: 'Backpack' },
            ],
            newdatos:[
                {id: ''},
                {name:''},
                {activo:''},
            ],
            datos:[
                {id:1, nombre:'Samuel', telefonos:'56364355', activo:'No'},
                {id:2, nombre:'Ricardo', telefonos:'56353955', activo:'Si'},
                {id:3, nombre:'Oscar', telefonos:'57856365', activo:'No'},
                {id:3, nombre:'samuel', telefonos:'57856365', activo:'Si'},]
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
