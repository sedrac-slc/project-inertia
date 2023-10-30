
<template>
    <Navbar site="Produtos"/>
    <slot />
</template>
<script>
    import Navbar from '../Components/Navbar.vue';
    export default {
        setup(){
            return {

            }
        },
        components: {
            Navbar,
        }
    }
</script>
