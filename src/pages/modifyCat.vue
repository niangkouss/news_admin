<template>
    <div>
        <Row>
            <Col span="10">
            <Form :label-width="100">
                <h2 class="margin-bottom-20">修改栏目</h2>
                <FormItem label="要修改的栏目">
                    <Select v-model="modifyCat">
                        <Option v-for="item in catList" :value="item.catid" :key="item.catid">{{item.catName}}
                        </Option>
                    </Select>
                </FormItem>
                <FormItem label="栏目名称">
                    <Input placeholder="请输入要修改的栏目名称" v-model="formItem.modifyCatName"/>
                </FormItem>
                <FormItem label="栏目ID">
                    <Input placeholder="请输入要修改的栏目ID" v-model="formItem.modifyCatID"/>
                </FormItem>
                <FormItem label="栏目描述">
                    <Input placeholder="请输入要修改的栏目描述" v-model="formItem.modifyCatDesc"/>
                </FormItem>
                <FormItem>
                    <Button type="primary" @click="modifyData">确认修改</Button>
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
                modifyCat: '请选择要修改的栏目',
                formItem: {
                    modifyCatName: '',
                    modifyCatDesc: '',
                    modifyCatID: '',
                },
                catList: []
            }
        },
        beforeCreate() {
        },
        created() {
            this.getCat();
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
            getCat() {
                this.apidata('http://newsadmin.com/catLists.php', {
                    'tag': 1
                }, re => {
                    let result = re.lists;
                    if (result) {
                        this.catList = result;
                    } else {
                        this.$Message.error('获取栏目列表失败');
                    }
                }, err => {

                });
            },
            modifyData() {
                this.apidata("http://newsadmin.com/modifyCat.php", {
                    num: this.modifyCat,
                    data: this.formItem
                }, re => {
                    this.$Message.success('修改栏目成功');
                }, err => {
                    this.$Message.error('修改栏目失败');
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
