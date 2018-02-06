<template>
    <div>
        <Row>
            <Col span="6">
                <h2 class="margin-bottom-20">添加新分类</h2>
                <Form :label-width="80" :model="formItem">
                    <FormItem label="分类名称">
                         <Input v-model="formItem.catName" placeholder="请输入新分类的名称"/>
                    </FormItem>
                    <FormItem label="分类ID">
                        <Input v-model="formItem.catID" placeholder="此分类的ID,不填则默认递增"/>
                    </FormItem>
                    <FormItem label="分类描述">
                        <Input v-model="formItem.catDesc" placeholder="请输入新分类的描述" type="textarea"/>
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
                    catDesc:''
                }
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
