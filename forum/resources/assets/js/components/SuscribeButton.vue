<template>
    <button :class="classes"  @click="subscribe">Subscribe</button>
</template>

<script>

    export default{

        props:['active'],

        computed:{
            classes(){
                return['btn ' , this.active ? 'btn-primary' : 'btn-default'];

            }
        },

        methods:{
            subscribe(){
                let requestType = this.active ? 'delete' : 'post';

                axios[requestType](location.pathname +'/subscriptions')
                    .then(response=> {
                        this.active = !this.active;

                        if(this.active)
                        {
                            flash('Subscribed');
                        }else{
                            flash('UnSubscribed');
                        }

            });

            }
        }
    }

</script>