<template>
  <App>

  </App>
</template>
<script>
    import App from "../template/App.vue"
    export default{
        props: {title: String},
        setup(){
            let welcome = "Bem vindo"

            return {
                welcome,
            }
        },
        components: {
            App,
        }
    }
</script>
