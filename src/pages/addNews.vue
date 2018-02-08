<template>
    <div>
        <!--   <Row>
               <Col span="6">
               <h2 class="margin-bottom-20">添加新闻</h2>
               <Form :label-width="80" :model="formItem">
                   <FormItem label="新闻名称">
                       <Input v-model="formItem.catName" placeholder="请输入新闻的名称"/>
                   </FormItem>
                   <FormItem label="新闻分类">
                       <Select v-model="formItem.id">
                           <Option v-for="item in catList" :value="item.catid" :key="item.catid">{{item.catName}}
                           </Option>
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
                       <Button type="primary" @click="submit">提交</Button>
                   </FormItem>
               </Form>
               </Col>
           </Row>-->
        <script id="ueditor" type="text/plain"></script>
        <Button type="primary" @click="getUEcontent">查看内容</Button>
    </div>
</template>
<script type="text/ecmascript-6">
    export default {
        components: {},
        props: [],
        data() {
            return {
                formItem: {
                    catName: '',
                    catDesc: '',
                    id: '',
                    catContent: '',
                    catAuthor: '',
                },
                catList: [],
                editor: null
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
            this.editor = UE.getEditor('ueditor', {
                autoHeightEnabled: false,
                autoFloatEnabled: true,　　//是否工具栏可浮动
                initialContent: '请输入内容',   //初始化编辑器的内容,也可以通过textarea/script给值，看官网例子
                autoClearinitialContent: true, //是否自动清除编辑器初始内容，注意：如果focus属性设置为true,这个也为真，那么编辑器一上来就会触发导致初始化的内容看不到了
                initialFrameWidth: null,
                initialFrameHeight: 450,
                BaseUrl: '',
                UEDITOR_HOME_URL: 'static/utf8-php/'
            });
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
            this.editor.destory();
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
            submit() {
                this.apidata('http://newsadmin.com/addNews.php', this.formItem,
                    re => {
                        if (re.msg == 1) {
                            this.$Message.success('添加新闻成功');
                        }
                    },
                    err => {

                    });
            },
            getUEcontent(){
                let content = this.editor.getContent();
                console.log(content);
            }
        },
        filters: {},
        computed: {},
        watch: {}
    }
</script>

<style lang="scss">

</style>
