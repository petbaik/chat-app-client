<template>
    <div >
        <message />
    </div>
</template>

<script>
    export default {
        created() {
            this.sockets.subscribe('message', (data) => {
                console.log("received message", data)
                this.msg = data.message;
            });
        }
    }
</script>
