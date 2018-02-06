<template>
    <div>
       <Row>
          <Col span="10">
           <Form :label-width="100">
               <h2 class="margin-bottom-20">修改栏目</h2>
               <FormItem label="要修改的栏目">
                   <Select v-model="modifyCat">
                       <Option v-for="item in catList" :value="item.catName" :key="item.catId">{{item.catName}}</Option>
                   </Select>
               </FormItem>
               <FormItem label="栏目名称">
                   <Input placeholder="请输入要修改的栏目名称" v-model="modifyCatName"/>
               </FormItem>
               <FormItem label="栏目ID">
                   <Input placeholder="请输入要修改的栏目ID" v-model="modifyCatID"/>
               </FormItem>
               <FormItem label="栏目描述">
                   <Input placeholder="请输入要修改的栏目描述" v-model="modifyCatDesc"/>
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
                modifyCat:'请选择要修改的栏目',
                modifyCatName:'',
                modifyCatDesc:'',
                modifyCatID:'',
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
