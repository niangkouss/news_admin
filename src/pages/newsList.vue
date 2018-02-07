<template>
    <div>
        <Table :columns="catCol" :data="catData"></Table>
    </div>
</template>
<script type="text/ecmascript-6">
    export default {
        components: {},
        props: [],
        data() {
            return {
                catCol:[
                    {
                        title:'新闻名称',
                        key:'title'
                    },
                    {
                        title:'新闻分类',
                        key:'id'
                    },
                    {
                        title:'新闻作者',
                        key:'author'
                    },
                    {
                        title:'新闻简介',
                        key:'digest'
                    },
                    {
                        title:'新闻发表时间',
                        key:'inserttime'
                    },
                    {
                        title:'新闻最近更新时间',
                        key:'updatetime'
                    }

                ],
                catData:[

                ]
            }
        },
        beforeCreate() {
        },
        created() {
            this.getLists();
        },
        beforeMount() {
        },
        mounted() {
        },
        beforeUpdate() {
        },
        updated() {
        },
        activited() {
        },
        deactivated() {
        },
        beforeDestroy() {
        },
        destroyed() {
        },
        methods: {
            getLists(){
                this.apidata('http://newsadmin.com/newsLists.php',{},re=>{
                    let result  = re.lists;
                    if(result){
                        this.catData = result;
                    }
                },err=>{

                });
            }
        },
        filters: {},
        computed: {},
        watch: {}
    }
</script>

<style lang="scss">

</style>
