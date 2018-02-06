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
                        key:'newsName'
                    },
                    {
                        title:'新闻分类',
                        key:'newsCat'
                    },
                    {
                        title:'新闻作者',
                        key:'newsAuthor'
                    },
                    {
                        title:'新闻简介',
                        key:'newsDesc'
                    },
                    {
                        title:'新闻发表时间',
                        key:'newsInsertTime'
                    },
                    {
                        title:'新闻最近更新时间',
                        key:'newsUpdateTime'
                    }

                ],
                catData:[
                    {
                        newsName:'这个是新闻名',
                        newsCat:'1',
                        newsAuthor:'这个是作者',
                        newsDesc:'这个是简介',
                        newsInsertTime:'2016-10-01',
                        newsUpdateTime:'2016-10-01',
                    },
                    {
                        newsName:'这个是新闻名',
                        newsCat:'1',
                        newsAuthor:'这个是作者',
                        newsDesc:'这个是简介',
                        newsInsertTime:'2016-10-01',
                        newsUpdateTime:'2016-10-01',
                    },
                    {
                        newsName:'这个是新闻名',
                        newsCat:'1',
                        newsAuthor:'这个是作者',
                        newsDesc:'这个是简介',
                        newsInsertTime:'2016-10-01',
                        newsUpdateTime:'2016-10-01',
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
