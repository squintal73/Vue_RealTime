<template>
    <div class="form-group">
        <users></users>
        <messages></messages>
        <textarea v-model="body" placeholder="Sua Messagem:" class="form-control"></textarea>
        <br>
        <button @click.prevent="sendMessage" class="btn btn-success">Enviar</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            body:''
        }
    },
    methods: {
        sendMessage() {
            this.$store.dispatch('storeMessage', {})
        }
    }
}
</script>
