<script>
    import Replies from '../components/Replies.vue';
    import SubscribeButton from '../components/SuscribeButton.vue';

    export default{

        props:['initialRepliesCount'],

        components:{Replies, SubscribeButton},

        data(){
            return{
                repliesCount:this.initialRepliesCount,
            }
        },

    }
</script>