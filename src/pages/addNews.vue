<template>
    <div>
        <Row>
            <Col span="6">
            <h2 class="margin-bottom-20">添加新闻</h2>
            <Form :label-width="80" :model="formItem">
                <FormItem label="新闻名称">
                    <Input v-model="formItem.catName" placeholder="请输入新闻的名称"/>
                </FormItem>
                <FormItem label="新闻分类">
                    <Select v-model="formItem.id">
                        <Option v-for="item in catList" :value="item.catName" :key="item.catId">{{item.catName}}</Option>
                    </Select>
                </FormItem>
                <FormItem label="新闻简介">
                    <Input v-model="formItem.catDesc" placeholder="请输入新闻的简介" type="textarea"/>
                </FormItem>
                <FormItem label="新闻内容">
                    <Input v-model="formItem.catContent" placeholder="请输入新闻的内容" type="textarea" :rows="10"/>
                </FormItem>
                <FormItem label="新闻作者">
                    <Input v-model="formItem.catAuthor" placeholder="请输入新闻的作者" type="textarea"/>
                </FormItem>
                <FormItem>
                    <Button type="primary">提交</Button>
                </FormItem>
            </Form>
            </Col>
        </Row>

    </div>
</template>
<script type="text/ecmascript-6">
    export default {
        components: {},
        props: [],
        data() {
            return {
                formItem:{
                    catName:'',
                    catID:'',
                    catDesc:'',
                    id:'',
                    catContent:'',
                    catAuthor:'',
                },
                catList:[
                    {
                        catName:'栏目1',
                        catId:'1',
                        catDesc:'这个是栏目1',
                        catStarttime:'2016-10-01',
                        catEndtime:'2016-10-01',
                    },
                    {
                        catName:'栏目1',
                        catId:'2',
                        catDesc:'这个是栏目1',
                        catStarttime:'2016-10-01',
                        catEndtime:'2016-10-01',
                    },
                    {
                        catName:'栏目1',
                        catId:'3',
                        catDesc:'这个是栏目1',
                        catStarttime:'2016-10-01',
                        catEndtime:'2016-10-01',
                    },
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
