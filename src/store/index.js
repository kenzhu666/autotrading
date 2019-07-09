import Vue from 'vue';
import Vuex from 'vuex';
import uploader from 'vue-simple-uploader'


Vue.use(uploader);
Vue.use(Vuex);

const store = new Vuex.Store({
    state : {
        userInfo : {
            expire : '',
            token : '',
            userName : '',

        }
    },
    getters:{
        getToken(state){
            return state.userInfo.token;
        },
        getUsername(state){
            return state.userInfo.userName;
        },
        isLogin(){
            let token_expire = localStorage.token_expire;
            let now_time = Date.parse(new Date())/1000 ;
            console.log('now_time : ',now_time,'expire : ',token_expire);
            if (localStorage.token != '' && token_expire > now_time){
                return true;
            }else {
                return false;
            }
        }
    },
    mutations : {
        // 保存jwt认证后的token和expire
        setToken(state,payload) {
            state.userInfo.expire = payload.exp;
            state.userInfo.token = payload.token;
        },
        setUsername(state,payload){
            state.userInfo.userName = payload;
        }
    }
});
export default store;