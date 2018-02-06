export default{
    setMenuList(state,menuObj){//根据用户权限得到用户menustr,用户可访问的路由id,获取侧边栏项目
        //做函数要记住要错误预防
        if(!menuObj ||!menuObj.menus||!menuObj.idstr){
            return
        }
        let menuList = [];
        let idstr = ','+menuObj.idstr +',';
        menuObj.menus.forEach(item=>{//item为第一路由
            if(item.meta && item.meta.menuId && idstr.indexOf(','+item.meta.menuId+',')>-1){;
                let children = [];
                if(item.children && item.children.length >0){ //如果有二级及其以下路由
                    item.children.forEach(subItem=>{
                        if(subItem.meta && subItem.meta.menuId && idstr.indexOf(','+subItem.meta.menuId+',')>-1){
                            children.push({
                                icon:subItem.meta.icon || 'cube',
                                path:subItem.path ||'',
                                name:subItem.name ||'',
                                title:subItem.meta.title||'',
                                children:[]
                            })
                        }
                    });
                }
                //如果只有一级路由
                menuList.push({
                    icon:item.meta.icon ||'cube',//如果没有就用默认的cube
                    path:item.path ||'',
                    name:item.name||'',
                    title:item.meta.title||'',
                    children:children
                });
            }
        });
        state.app.menuList = menuList;
    }
}