<template>
    <div class="input-box py-4">
        <div class="input-group bg-light">
            <input type="text" placeholder="Type a message" @keyup="sendMessage" v-model="message" class="form-control rounded-0 border-0 py-4 bg-light">
            <div class="input-group-append">
                <button @click="sendMessage" class="btn btn-link"> <i class="fa fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
    
</template>

<script>
    export default {
        data() {
            return {
                message: null
            }
        },
        methods: {
            sendMessage(e) {
                if(typeof e.keyCode == "undefined" || typeof e.keyCode != "undefined" && e.keyCode == 13) {
                    this.$socket.emit('message', { message: this.message, sender_id: this.$userId })
                    this.message = null
                }   
            }
        }
    }
</script>
