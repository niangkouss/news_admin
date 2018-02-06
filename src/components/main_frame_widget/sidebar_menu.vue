<template>
    <Menu :active-name="activeName" :open-name="openNames" :theme="menuTheme" @on-select="changeMenu" width="auto" ref="sideMenu">
        <template v-for="item in menuList">
                <MenuItem v-if="!item.children || item.children.length ==0" :name="item.name" :key="item.path">
                    <Icon :type="item.icon" :size="iconSize" :key="item.path"></Icon>
                    <span class="layout-text" :key="item.path">{{itemTitle(item)}}</span>
                </MenuItem>

            <Submenu v-if="item.children && item.children.length>0" :name="item.name" :key="item.path">
                <template slot="title">
                    <Icon :type="item.icon" :size="iconSize"></Icon>
                    <span class="layout-text">{{itemTitle(item)}}</span>
                </template>
                <template v-for="child in item.children">
                        <MenuItem :name="child.name" :key="child.name">
                            <Icon :type="child.icon" :size="iconSize" :key="child.name"></Icon>
                            <span class="layout-text" :key="child.name">{{itemTitle(item)}}</span>
                        </MenuItem>
                </template>
            </Submenu>
        </template>
    </Menu>
</template>
<script type="text/ecmascript-6">
    export default {
        name:"sidebarMenu",
        props:{
            menuList:Array,
            iconSize:Number,
            activeName:String,
            openNames:String,
            menuTheme:{
                type:String,
                default:"dark"
            }


        },
        mounted(){
            /*console.log(this.menuList);*/
        },
        methods:{
            itemTitle(item){ //为了国际化
                console.log(item);
                var title = item.title;
                if(typeof title === 'object'){
                    /* return this.$t(title.i18n);*/
                }else{
                    return title;
                }
            },
            changeMenu(active){
                this.$emit('on-change',active);
            }
        },
        updated(){
            this.$nextTick(()=>{
                if(this.$refs.sideMenu){
                    this.$refs.sideMenu.updateOpened();//这里是我所欠缺的考虑周到性,和vue的更新联系在一起
                    //当用户点击的时候,自然会更新,那么触发这个组件的updated,我们等组件变化之后再$nextTick函数之类收到触发这个组件的更新,完全所有更新
                }
            });
        }
    }
</script>
<style lang="scss">

</style>