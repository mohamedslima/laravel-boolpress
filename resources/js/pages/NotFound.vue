<template>
  <div class="container">
    <h2>
        Errore 404! Pagina non trovata
    </h2>
    <router-link :to="{name: 'home'}">Ritorna nella home</router-link>
  </div>
</template>

<script>
export default {
    name: "NotFound"
}
</script>

<style>

</style>