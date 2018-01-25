import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

const state = {
    user:{
        msgCount:23,
        username:'用户名称'
    }
};
export default new Vuex.Store({
    state
})