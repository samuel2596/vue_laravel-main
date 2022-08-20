<template>
    <div v-for="dato in datos" >
        <h1>Añadir Cliente</h1>
        <!--<el-button type="danger" :icon="Delete" circle />-->
        <el-form  label-width="120px">
            <el-form-item label="Nombre Cliente">
                <el-input v-model="dato.nombre"  />
            </el-form-item>
            <el-form-item label="Razon Social">
                <el-input v-model="dato.razonsocial"  />
            </el-form-item>
            <el-form-item label="Email">
                <el-input v-model="dato.email"  />
            </el-form-item>
            <el-form-item label="Calle">
                <el-input v-model="dato.calle"  />
            </el-form-item>
            <el-form-item label="Num. Exterior">
                <el-input v-model="dato.numeroexterior"  />
            </el-form-item>
            <el-form-item label="Num. Interior">
                <el-input v-model="dato.numerointerior"  />
            </el-form-item>
            <el-form-item label="Colonia">
                <el-input v-model="dato.colonia"  />
            </el-form-item>
            <el-form-item label="Codigo postal">
                <el-input v-model="dato.codigopostal"  />
            </el-form-item>
            <el-form-item label="Grupo Cliente">
                <select v-model="selected">
                    <option disabled value="">Seleccione un Grupo</option>
                    <option>{{dato.gruposcliente}}</option>
                </select>
                <span>Seleccionado: {{selected}}</span>
            </el-form-item>
            <el-form-item label="Estatus">
                <select v-model="selected2">
                    <option disabled value="">Seleccione un Estatus</option>
                    <option>{{dato.estatus}}</option>
                </select>
                <span>Seleccionado: {{selected2 }}</span>
            </el-form-item>

            <el-form-item label="Pais">
                <select v-model="selected3">
                    <option disabled value="">Seleccione un Pais</option>
                    <option>{{dato.pais}}</option>
                </select>
                <span>Seleccionado: {{selected3 }}</span>
            </el-form-item>
            <el-form-item label="Estado">
                <select v-model="selected4">
                    <option disabled value="">Seleccione un Estado</option>
                    <option>{{dato.estados}}</option>
                </select>
                <span>Seleccionado: {{selected4 }}</span>
            </el-form-item>
            <el-form-item label="Municipio">
                <select v-model="selected5">
                    <option disabled value="">Seleccione un Municipio</option>
                    <option>{{dato.municipios}}</option>
                </select>
                <span>Seleccionado: {{selected5 }}</span>
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
            selected2: null,
            selected3: null,
            selected4: null,
            selected5: null,
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
