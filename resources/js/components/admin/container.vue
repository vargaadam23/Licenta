<template>
<div>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <message-container :cuser="user" :messages="messages"/>
          <input-message v-on:messagesent="getMessages()"/>
         
        </div>
      </div>
    </div>
</div>
    
      
</template>

<script>

import InputMessage from "./AinputMessage.vue";
import MessageContainer from "./AmessageContainer.vue";

export default {
  props:['user'],
  components: {
   
    InputMessage,
    MessageContainer,
  },
  data: function (){
      return{
         messages:[]
      }
      
  },
  methods:{
      getMessages(){
          axios.get('/chat/messages')
          .then(response=>{
              this.messages=response.data;
          }).catch(error=> console.log(error));
      },
      connect(){
        this.getMessages();
        
       
      }
  },
  created:function(){
    this.connect();
  }
};
</script>

