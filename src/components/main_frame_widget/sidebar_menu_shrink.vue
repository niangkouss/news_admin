<template>
    <!--这个子组件担任的角色和sidebar_menu一样,不过因为显示出来不同,根据组件提供的写法,写法不一样而已,具体怎么写还要看组件-->
    <div>
        <template v-for="(item,index) in menuList">
            <div style="text-align: center;" :key="index">
                <Dropdown transfer v-if="item.children && item.children.length>0" placement="right-start" :key="index" @on-click="changeMenu">
                    <Button style="width:70px;margin-left:-5px;padding:10px 0;" type="text">
                        <Icon :size="20" :color="iconColor" :type="item.icon"></Icon>
                    </Button>
                    <DropdownMenu style="width: 200px;" slot="list">
                        <template v-for="(child, i) in item.children">
                          <DropdownItem :name="child.name" :key="i">
                              <Icon :key="child.icon"></Icon>
                              <span style="padding-left: 10px;">{{itemTitle(child)}}</span>
                          </DropdownItem>
                        </template>
                    </DropdownMenu>
                </Dropdown>

                <Dropdown transfer v-if="!item.children || item.children.length===0" placement="right-start" :key="index" @on-click="changeMenu">
                    <Button @click="changeMenu(item.name)"
                    style="width: 70px;margin-left: -5px;padding: 10px 0" type="text"
                    >
                        <Icon :size="20" :color="iconColor" :type="item.icon"></Icon>
                    </Button>
                    <DropdownMenu style="width: 200px;" slot="list">
                        <DropdownItem :name="item.name" :key="'d'+index">
                            <Icon :type="item.icon"></Icon>
                            <span style="padding-left: 10px;">{{itemTitle(child)}}</span>
                        </DropdownItem>
                    </DropdownMenu>
                </Dropdown>
            </div>
        </template>
    </div>
</template>
<script type="text/ecmascript-6">
    export default {
        name:'sidebarMenuShrink',
        props:{
            menuList:{
                type:Array,
                required:true
            },
            iconColor:{
                type:String,
                default:'white'
            },
            menuTheme:{
                type:String,
                default:'dark'
            }
        },
        methods:{
            changeMenu(active){
                this.$emit('on-change',active);
            },
            itemTitle(item){
                var title = item.title;
                if(typeof title ==='object'){
                   /* return this.$t(title.i18n);*/
                }else{
                    return title;
                }
            }
        }
    }
</script>
<style lang="scss">

</style>