<template>
    <div class="input-group bg-light">
        <input type="text" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
        <div class="input-group-append">
            <button @click="sendMessage" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
        </div>
    </div>
</template>

<script>
    export default {
        methods: {
            sendMessage() {
                this.$socket.emit('message', { msg: "Hello" })
            }
        }
    }
</script>
