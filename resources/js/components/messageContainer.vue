<template>
    <div class="h-96 w-full">
        <div class="h-full p-2 flex flex-col-reverse overflow-scroll">
            <div v-for="(message,index) in messages" :key="index">
                <div v-if="cuser==message.user.id">
                    <message-item :self="true" :message="message"/>
                </div>
                <div v-else>
                    <message-item :self="false" :message="message"/>
                </div>
                
            </div>
        </div>
    </div>

</template>
<script>
import messageItem from './messageItem.vue'

export default {
  components: { messageItem },
    props:['messages','cuser'],
}
</script>
