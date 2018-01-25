const blank = r=>require.ensure([],()=>r(require("../components/blank.vue")));
export const routes = [
    {
        path:'/',
        redirect:'/news/addNews',
        component:r=>require.ensure([],()=>r(require("../components/main_frame.vue"))),
        children:[
            {
                path:'cato',
                name:'cato',
                meta:{icon:'cube',title:'栏目设置',menuId:1},
                component:blank,
                children:[
                    {
                        path:'addCat',
                        name:'addCat',
                        meta:{icon:'cube',title:'新建栏目',menuId:2},
                        component: r=>require.ensure([],()=>r(require("../pages/addCat.vue")))
                    },
                    {
                        path:'catList',
                        name:'catList',
                        meta:{icon:'cube',title:'查看栏目',menuId:3},
                        component: r=>require.ensure([],()=>r(require("../pages/catList.vue")))
                    },
                    {
                        path:'modifyCat',
                        name:'modifyCat',
                        meta:{icon:'cube',title:'修改栏目',menuId:4},
                        component: r=>require.ensure([],()=>r(require("../pages/modifyCat.vue")))
                    }
                ]
            },
            {
                path:'news',
                name:'news',
                meta:{icon:'cube',title:'新闻设置',menuId:5},
                component:blank,
                children:[
                    {
                        path:'addNews',
                        name:'addNews',
                        meta:{icon:'cube',title:'添加新闻',menuId:6},
                        component: r=>require.ensure([],()=>r(require("../pages/addNews.vue"))),
                    },
                    {
                        path:'newsList',
                        name:'newsList',
                        meta:{icon:'cube',title:'新闻列表',menuId:7},
                        component: r=>require.ensure([],()=>r(require("../pages/newsList.vue"))),
                    },
                    {
                        path:'modifyNews',
                        name:'modifyNews',
                        meta:{icon:'cube',title:'更新新闻',menuId:8},
                        component: r=>require.ensure([],()=>r(require("../pages/modifyNews.vue"))),
                    }
                ]
            }
        ]
    },
    {
        path:'*',
        redirect:'/index/home'
    }
];