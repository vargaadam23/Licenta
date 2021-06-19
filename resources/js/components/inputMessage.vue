<template>
  <div>
    <div style="border-top: 1px solid #e6e6e6; text-align:center;">
        <input
          type="text"
          v-model="message"
          @keyup.enter="sendMessages()"
          placeholder="Introduceti un mesaj"
          class="form-control col-6"
          style="margin:5px; width:98%;"
        />
      
      
        <button @click="sendMessages()"  style="margin:5px;width:30%;" class="btn btn-secondary col-4">Send</button>
    
    </div>
  </div>
</template>

<script>
export default {
  props: ["room"],
  data: function () {
    return {
      message: "",
    };
  },
  methods: {
    sendMessages() {
      if (this.messages == " ") {
        return;
      } else {
        axios
          .post("/chat/message", { message: this.message })
          .then((response) => {
            if (response.status == 201) {
              this.message = "";
              this.$emit("messagesent");
            }
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },
  },
};
</script>