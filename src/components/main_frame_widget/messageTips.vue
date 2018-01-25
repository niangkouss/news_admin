<template>
    <div class="msg-tips-icon" @click="showMessage">
        <Tooltip placement="bottom" :content="value>0?'有'+value+'条未读消息':'无未读消息'">
            <Badge :count="value" >
                <Icon type="ios-bell" :size="30"></Icon>
            </Badge>
        </Tooltip>
    </div>
</template>
<script type="text/ecmascript-6">
    export default {
        name:'',
        props:{
            value:{
                type:Number,
                default:0
            }
        },
        methods:{
            showMessage(){

            }
        }
    }
</script>
<style lang="scss">
    .msg-tips-icon{
        float: left;
        display: inline-block;
        width: 30px;
        padding:12px 0;
        text-align: center;
        cursor: pointer;
        margin-right: 10px;
    }
</style>