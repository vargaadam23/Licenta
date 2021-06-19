<template>
  <div>
    <div v-if="this.self == true">
      <div class="text-align-left" style="margin: 5px; ">
        <div
          style="
            width: 30%;
            text-align: center;
            background-color: #c4c4c4;
            border-radius: 20px;
            color:black;
            font-weight:300;
          "
        >
          {{ message.message }}
        </div>

      </div>

    </div>

    <div v-else>
      <div style="margin: 5px 0;">
        <div
          style="
            width: 30%;
            text-align: center;
            background-color: yellow;
            border-radius: 20px;
            margin-left: auto; 
margin-right: 0;
            
          "
        >
          {{ message.message }}
        </div>

      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["message", "self"],
};
</script>
