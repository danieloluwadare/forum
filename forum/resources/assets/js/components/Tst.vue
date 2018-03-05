<template>
    <div>
        <div class="form-group">
            <textarea name="body" id="body" required class="form-control" placeholder="havesomething to say" v-model="body"></textarea>

        </div>
        <button></button>
    </div>


</template>

<script>

    export default{

        data(){
            return{
                body:"",
                endpoint:""
            }
        },

        methods:{
            addReply(){
                axios.post(this.endpoint(), {body:this.body})
                    .then(response=>{
                        this.body="";
                        flash("your reply has been posted");
                        this.$emit('created', response.data);
                    })
            }
        }
    }

</script>