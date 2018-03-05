<template>
    <div>
        <div class="row" style="margin-bottom: 0px;
                                                margin-top: 50px;
                                                margin-left: auto;
                                                margin-right: auto;
                                                 background-color: #fff;
                                                 border: 1px solid transparent;
                                                 border-radius: 4px;
                                                 box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);">
            <div class="col-md-1">
                <div style="padding: 15px 0 15px 15px;">
                    <div style="width: 37px; margin-left: 5px;">
                        <img src="">
                    </div>
                </div>
            </div>
            <div class="col-md-11">

                    <div class="form-group">
                        <textarea name="body" id="body" required class="form-control" placeholder="Have something to say?" v-model="body"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" style="border-color: #00b48a;" @click="addReply">Go!</button>
                    </div>
                    </div>

            </div>
        </div>

    </div>


</template>

<script>

    export default{


        data(){
            return{
                body:"",
            }
        },

        computed:{
            signedIn(){
                return window.App.signedIn;
            },
        },

        methods:{
            addReply(){
                axios.post(location.pathname + '/replies', {body:this.body})
                    .catch(error =>{
                        flash(error.response.data,'danger');
                    })
                    .then(({data})=>{
                        this.body="";
                        flash("your reply has been posted");
                        this.$emit('created',data);
                    });
            }
        }
    }

</script>