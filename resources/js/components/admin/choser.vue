<template>
  <div>
    <ul class="list-group">
      <li v-for="(room,index) in rooms" :key="index" v-on:click="selected=room.room;$emit('roomchanged',selected);" class="list-group-item">{{room.name}}</li>
    </ul>
  </div>
</template>

<script>


export default {
  props: ["rooms","currentRoom"],
  data:function(){
      return{
          selected:''
      }
  },
  created(){
      this.selected=this.currentRoom;
  },
  
};
</script>

