// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import iView from 'iview';
import VueMq from 'vue-mq';
import Vuex from 'vuex';
import 'iview/dist/styles/iview.css';

import '../my-theme/theme.less';


import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';


import { Button, Table } from 'iview';

import responsive from 'vue-responsive'
import axios from 'axios'
//Vue.prototype.$http = axios
import VueAxios from 'vue-axios'

import VueAnimate from 'vue-animate-scroll'
import store from './store';
import qs from 'qs';




Vue.use(VueAxios, axios);
Vue.use(VueAnimate);
Vue.use(ElementUI);

Vue.use(qs);


Vue.component('Button', Button);
Vue.component('Table', Table);

Vue.use(Vuex);
Vue.use(responsive);
Vue.use(iView);


Vue.use(VueMq, {
  breakpoints: {
    mobile: 450,
    tablet: 900,
    laptop: 1250,
    desktop: Infinity,
  }
});

Vue.config.productionTip = false

router.afterEach((to,from,next) => {
  window.scrollTo(0,0);
})
router.beforeEach((to,from,next) => {
  // 这里的meta就是我们刚刚在路由里面配置的meta
  if(to.meta.requireAuth){
      // 下面这个判断是自行实现到底是否有没有登录
      if (store.getters.isLogin){
      // 登录就继续
          next();
      }else {
      // 没有登录跳转到登录页面，登录成功之后再返回到之前请求的页面
          next({
              path : '/login',
              query : {redirect : to.fullPath}
          })
      }
  }else {
  // 不需要登录的，可以继续访问
      next()
  }
});
axios.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded';
Vue.prototype.$axios = axios;
Vue.prototype.$qs = qs;

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  data:{
    Bus:new Vue()
  },
  components: { App },
  template: '<App/>'
})

new Vue({
  template: `
    <grid-component :column="$mq | mq({
      phone: 2,
      tablet: 3,
      laptop: 4
    })">
    </grid-component>
  `,
})


