<template>
<div id='vueapp'>
        <div>
            <p>
                Nombre: <input v-model="nombre" />
            </p>
            <p>
                Tel&eacute;fono: <input v-model="telefono" />
            </p>
            <p>
                <button v-on:click="enviar">Enviar</button>
            </p>
        </div>

        <h2>Listado de registros</h2>
        <div>
            <div v-for="r in regs">
                <div>{{ r.nombre }}, {{ r.telefono }}</div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'autotag',
  data() {
    return {
        nombre: 'sara',
        telefono: '666'
    };
  },
};
</script>

<style>
#vueapp {
  font-size: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}
</style>