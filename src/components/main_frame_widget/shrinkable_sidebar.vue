<template>

    <div :style="{background:bgColor}" class="shrinkable-siderbar">
        <slot name="top"></slot>
        <sidebar-menu
            v-show="!shrink"
            :menu-list="menuList"
            :menu-theme="theme"
            :active-name="activeName"
            :open-names="openNames"
            @on-change="handleChange"
        >
        </sidebar-menu>
        <sidebar-menu-shrink
            v-show="shrink"
            :menu-list="menuList"
            :menu-theme="theme"
            :icon-color="shrinkIconColor"
            @on-change="handleChange"
        >

        </sidebar-menu-shrink>
    </div>
</template>
<script type="text/ecmascript-6">
    import sidebarMenu from './sidebar_menu.vue';
    import sidebarMenuShrink from './sidebar_menu_shrink.vue';
    export default{
        name:"shrinkableSidebar",
        components:{
            sidebarMenu,
            sidebarMenuShrink
        },
        props:{
            shrink:{
                type:Boolean,
                default:false
            },
            menuList:{
                type:Array,
                required:true
            },
            theme:{
                type:String,
                default:'dark'
            },
            activeName:{
                type:String
            },
            openNames:{
                type:Array
            },
            beforePush:{
                type:Function
            }
        },
        mounted(){
        },
        computed:{
            bgColor(){
                return this.theme === 'dark'?"#495060":"#fff";
            },
            shrinkIconColor(){
                return this.theme === 'dark'?'#fff':'#495060';
            }
        },
        methods:{
            handleChange(name){ //点击shrink-menu会跳转,但是在跳转之前要做处理的话
                let willpush = true;
                if(this.beforePush !== undefined){
                    if(!this.beforePush(name)){
                        willpush = false;
                    }
                }
                if(willpush){
                    this.$router.push({
                        name:name
                    })
                }
                this.$emit('on-change',name);
            }
        },
    }
</script>
<style lang="scss">
    .shrinkable-siderbar{
        width: 100%;
        height: 100%;
    }
</style>