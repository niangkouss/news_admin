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
                        title:'栏目名称',
                        key:'catName'
                    },
                    {
                        title:'栏目id',
                        key:'catId'
                    },
                    {
                        title:'栏目描述',
                        key:'catDesc'
                    },
                    {
                        title:'栏目建立时间',
                        key:'catStarttime'
                    },
                    {
                        title:'栏目最后更新时间',
                        key:'catEndtime'
                    },

                ],
                catData:[
                    {
                        catName:'栏目1',
                        catId:'1',
                        catDesc:'这个是栏目1',
                        catStarttime:'2016-10-01',
                        catEndtime:'2016-10-01',
                    },
                    {
                        catName:'栏目1',
                        catId:'1',
                        catDesc:'这个是栏目1',
                        catStarttime:'2016-10-01',
                        catEndtime:'2016-10-01',
                    },
                    {
                        catName:'栏目1',
                        catId:'1',
                        catDesc:'这个是栏目1',
                        catStarttime:'2016-10-01',
                        catEndtime:'2016-10-01',
                    }
                ]
            }
        },
        beforeCreate() {
        },
        created() {
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
        methods: {},
        filters: {},
        computed: {},
        watch: {}
    }
</script>

<style lang="scss">

</style>
