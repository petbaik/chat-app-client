<template>
    <div class="chat-box">
        <message v-for="(message,key) in messages" :key="key" :message="message" />
    </div>
</template>

<script>
    import { mapGetters } from 'vuex'
    import axios from 'axios'

    export default {
        computed: {
            ...mapGetters([ 'messages' ])
        },
        props:['default_messages'],
        created() {
            this.$store.commit('messages/add', JSON.parse(this.default_messages))
            console.log(JSON.parse(this.default_messages))
            this.sockets.subscribe('message', (data) => {
                if(data.sender_id != this.$userId) {
                    axios.post('/chat/save-message', {
                        sender_id: data.sender_id,
                        receiver_id: this.$userId,
                        message: data.message
                    })
                }
                
                this.$store.commit('message/add', data)
            });
        }
    }
</script>
