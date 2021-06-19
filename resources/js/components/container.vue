<template>
<div>
    <div >
      <div >
        <div >
          <message-container style="height:450px; overflow:auto;" :cuser="user" :messages="messages"/>
          <input-message v-on:messagesent="getMessages()"/>
         
        </div>
      </div>
    </div>
</div>
    
      
</template>

<script>

import InputMessage from "./inputMessage.vue";
import MessageContainer from "./messageContainer.vue";

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
        
        let vm=this;
        this.getMessages();
        window.Echo.private("chat."+this.user).listen('.message.new',e=>{
          vm.getMessages();
        })
      
      
        
       
      }
  },
  created:function(){
    this.connect();
    this.getMessages();
  }
};
</script>

