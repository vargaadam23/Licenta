<template>
  <div class="row">
    <div class="col-6">
      <choser :rooms="chatRooms" :currentRoom="currentRoom" v-on:roomchanged="setRoom($event)"/>  
    </div>
    <div class="col-6">
      <message-container style="height:300px; overflow:auto;" :cuser="user" :messages="messages" />
      <input-message :room="currentRoom" v-on:messagesent="getMessages()" />
    </div>
  </div>
</template>

<script>
import InputMessage from "./AinputMessage.vue";
import MessageContainer from "./AmessageContainer.vue";
import Choser from "./choser.vue";
export default {
  props: ["user"],
  components: {
    InputMessage,
    MessageContainer,
    Choser,
  },
  data: function () {
    return {
      messages: [],
      chatRooms: [],
      currentRoom: 2,
    };
  },
  watch:{
    currentRoom(val, oldVal){
      if(oldVal){
        this.disconnect(oldVal);
      }
      this.connect();
    }
  },
  methods: {
    getMessages() {
      axios
        .get("/adminchat/" + this.currentRoom + "/messages")
        .then((response) => {
          this.messages = response.data;
        })
        .catch((error) => console.log(error));
    },
    getRooms() {
      axios
        .get("/adminchat/rooms")
        .then((response) => {
          this.chatRooms = response.data;
        })
        .catch((error) => console.log(error));
    },
    setRoom(room) {
      this.currentRoom = room;
      this.getMessages();
      console.log(this.currentRoom);
    },
    connect() {
      
        let vm=this;
        this.getMessages();
      
        window.Echo.private("chat."+this.currentRoom).listen('.message.new',e=>{
          vm.getMessages();
          console.log('eveniment');
        });
        
      
      this.getRooms();
    },
    disconnect(room){
      window.Echo.leave("chat."+room);
    },
  },
  created: function () {
   this.connect();
    
  },
};
</script>

