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
                catCol:[ /*iview返回数组无需和elemo一样要按顺序*/
                    {
                        title:'栏目名称',
                        key:'catname'
                    },
                    {
                        title:'栏目id',
                        key:'catid'
                    },
                    {
                        title:'栏目描述',
                        key:'catDesc'
                    },
                    {
                        title:'栏目建立时间',
                        key:'inserttime'
                    },
                    {
                        title:'栏目最后更新时间',
                        key:'updatetime'
                    },

                ],
                catData:[]
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
                this.apidata('http://newsadmin.com/catLists.php',{},re=>{
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
