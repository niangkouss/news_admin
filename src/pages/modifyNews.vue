<template>
    <div>
        <Row>
            <Col span="10">
            <Form :label-width="100">
                <h2 class="margin-bottom-20">修改新闻</h2>
             <!--   <FormItem label="要修改的栏目">
                    <Select v-model="modifyCat">
                        <Option v-for="item in catList" :value="item.catid" :key="item.catid">{{item.catName}}
                    </Select>
                </FormItem>-->
                <FormItem label="新闻名称">
                    <Input placeholder="请输入要修改的新闻名称" v-model="modifyNewsName"/>
                </FormItem>
                <FormItem label="新闻简介">
                    <Input placeholder="请输入要修改的新闻简介" v-model="modifyNewsDesc" type="textarea"/>
                </FormItem>
                <FormItem label="新闻作者">
                    <Input placeholder="请输入要修改的新闻作者" v-model="modifyNewsAuthor" type="textarea"/>
                </FormItem>
                <FormItem label="新闻内容">
                    <Input placeholder="请输入要修改的新闻内容" v-model="modifyNewsContent" :rows="10" type="textarea"/>
                </FormItem>
                <FormItem>
                    <Button type="primary">确认修改</Button>
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
                modifyNewsName:'',
                modifyNewsDesc:'',
                modifyNewsAuthor:'',
                modifyNewsContent:''
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
        methods: {

        },
        filters: {},
        computed: {},
        watch: {}
    }
</script>

<style lang="scss">

</style>
