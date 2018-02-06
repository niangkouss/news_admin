import Vue from 'vue';
import Vuex from 'vuex';
import mutations from './mutations'
import {routes} from "../router/routes";

Vue.use(Vuex);

const state = {
    user:{
        msgCount:23,
        username:'用户名称',
        menuId:'1,2,3,4,5,6,7,8'
    },
    app:{
        menuList:[],
        routers:routes
    }
};
export default new Vuex.Store({
    state,
    mutations
})