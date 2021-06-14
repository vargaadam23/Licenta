<template>
  <div>
    <div v-if="self == true">
      <div style="margin: 5px; text-align: left">
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
      <div style="margin: 5px 0; text-align: right">
        <div
          style="
            width: 30%;
            text-align: center;
            background-color: yellow;
            border-radius: 20px;
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
