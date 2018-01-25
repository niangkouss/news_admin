<template>
    <div class="main">
        <div class="top-nav" :style="{paddingLeft:shrink?'60px':'200px'}">
            <div class="top-nav-content">
                <div class="shrink-icon">
                   <Button type="text" :style="{transform:'rotateZ('+(shrink?'-90':'0')+'deg)'}" @click="toggleShrink">
                       <Icon type="navicon" size="34"/>
                   </Button>
                </div>
                <div class="breadcrumb">
                    <breadcrumb-nav :currentPath="[1,2]"></breadcrumb-nav>
                </div>
                <div class="right-column">
                    <div class="nav-link">
                        <a href="javascript:;">个人中心</a>
                        <a href="javascript:;">账号设置</a>
                    </div>
                    <full-screen v-model="isFullScreen" @on-change="handleFullScreen"></full-screen>
                    <msg-tips v-model="user.msgCount"></msg-tips>
                    <div class="user-menu">
                        <Dropdown trigger="click" transfer>
                            <a href="javascript:;">
                                <span class="username">{{user.username}}</span>
                                <Icon type="arrow-down-b"></Icon>
                            </a>
                            <DropdownMenu slot="list">
                                <DropdownItem>我的XX</DropdownItem>
                                <DropdownItem>我的XX</DropdownItem>
                                <DropdownItem divided>退出登录</DropdownItem>
                            </DropdownMenu>
                        </Dropdown>
                        <div class="avatar">
                            <Avatar icon="person" size="large" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="siderbar"></div>
        <div class="content-wrapper">
            <router-view></router-view>
        </div>
    </div>
</template>
<script type="text/ecmascript-6">
    import {mapState} from 'vuex';
    import breadcrumbNav from "./main_frame_widget/breadcrumbNav.vue"
    import fullScreen from './main_frame_widget/full_screen.vue';
    import msgTips from './main_frame_widget/messageTips.vue'
    export default {
        components: {
            breadcrumbNav,
            fullScreen,
            msgTips
        },
        props: [],
        data() {
            return {
                shrink:false,
                isFullScreen:false
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
        methods: {
            toggleShrink(){
                this.shrink = !this.shrink;
            },
            handleFullScreen(isFullScreen){

            }
        },
        filters: {},
        computed: {
            ...mapState(['user'])
        },
        watch: {}
    }
</script>

<style lang="scss">
    @import "../assets/scss/main_frame.scss";
</style>
