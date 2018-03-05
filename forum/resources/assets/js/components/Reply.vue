<template>
    <div>
        <div class="row" style="margin-bottom: 0px;
                                                margin-left: auto;
                                                margin-right: auto;
                                                 background-color: #fff;
                                                 background-color: #fff;
                                                 border: 1px solid transparent;
                                                 border-radius: 4px;
                                                 box-shadow: rgba(46, 61, 73, 0.08) 2px 2px 8px 0px;">
            <div class="col-md-1">
                <div >
                    <div style="width: 37px;">
                        <img :src="avatar" width="50" height="50"  style="border-radius: 50%;">
                    </div>
                </div>
            </div>
            <div class="col-md-11">
                <div>
                    <h2 style="font-size: 18px;
                                            font-family: 'Open Sans', sans-serif;
                                            margin-top: 10px;
                                            margin-bottom: 10px">
                        <a :href="bu+'/profiles/'+data.owner.name" v-text="data.owner.name">
                        </a> replied
                    </h2>
                </div>

                <div>

                    <div v-if="editing">
                        <form @submit.prevent="update">
                            <div class="form-group">
                                <textarea class="form-control" v-model="body" required></textarea>
                            </div>

                            <button class="btn btn-xs btn-primary">Update</button>
                            <button class="btn btn-xs btn-link" @click="editing=false" type="button">Cancel</button>

                        </form>

                    </div>

                    <div v-else v-html="body"></div>


                </div>

            </div>
        </div>
        <div class="row" style="margin-bottom: 22px;
                                                margin-left: auto;
                                                margin-right: auto;
                                                background-color: #fff;
                                                border: 1px solid transparent;
                                                border-radius: 4px;
                                                box-shadow: rgba(46, 61, 73, 0.08) 2px 2px 8px 0px;">

            <div class="col-md-1"></div>
            <div class="col-md-11" style="line-height: 50px;">

                <div class="col-md-6">
                    <span class="glyphicon glyphicon-time"></span>
                    Posted:: {{ago}}
                </div>
                <div class="col-md-4">
                    <!--@can('update', $reply)-->
                    <div v-if="canUpdate">
                        <form>
                            <button class="btn btn-xs mr-1" @click.prevent="editing=true">Edit</button>
                            <button class="btn btn-danger btn-xs" @click.prevent="destroy">DELETE</button>
                        </form>
                    </div>
                    <!--@endcan-->
                </div>
                <div class="col-md-2">
                    <div v-if="signedIn">
                        <favorite :reply="data" ></favorite>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Favorite from './Favorite.vue';
    import moment from 'moment';

    export default {
        props:['data'],

        components:{Favorite},

        data()
        {
            return{
                editing:false,
                id:this.data.id,
                body:this.data.body,
                bu:baseurl,
                avatar: this.data.owner.avatar_path,

            }
        },

        computed:{
            signedIn(){
                return window.App.signedIn;
            },

            ago(){
                return moment(this.data.created_at).fromNow();
            },

            canUpdate(){
                return this.authorize(user=>this.data.user_id===user.id)
            }
        },

        methods:{
            update(){
                axios.patch(this.bu+'/replies/'+this.data.id,{
                    body:this.body
                })
                    .catch(error=>{
                        flash(error.response.data, 'danger');
                    })
                    .then(({data})=> {
                        this.editing = false;
                        flash("Update!!");
                    });

            },

            destroy(){
                axios.post(this.bu+'/replies/'+this.data.id);

                this.$emit('deleted', this.data.id);
            }
        }


    };
</script>
