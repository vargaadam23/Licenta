<template>
    <div class="relative h-10 m-1">
        <div style="border-top:1px solid #e6e6e6;" class="row">
            
            <input  type="text"
            v-model="message"
            @keyup.enter="sendMessages()"
            placeholder="Introduceti mesajul"
            class="form-control col-6"/>
            <div class="col-2"></div>
            <button @click="sendMessages()" class="btn btn-secondary col-4">
Send
            </button>
        </div>
    </div>
</template>
<script>

export default {

    props:['room'],
    data: function(){
        return{
            message:''
        }
    },
    methods:{
        sendMessages(){
            if(this.messages==' '){
                return;
            }else{
                axios.post('/adminchat/'+this.room+'/message',{message:this.message}).then(response=>{
                    if(response.status==201){
                        this.message="";
                        this.$emit('messagesent');
                    }
                }).catch(error=>{
                    console.log(error);
                })
            }
        }
    }
}
</script>