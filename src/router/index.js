import Vue from 'vue'
import Router from 'vue-router'


import headerlg from '@/components/headerlg'
import headersm from '@/components/headersm'




/*买新车*/
import carMain from '@/components/carinfo/carMain.vue'
import shaixuan from '@/components/carinfo/shaixuan.vue'
import singlecar from '@/components/carinfo/singlecar'




/*二手车*/
import carMain2 from '@/components/secondhand/carMain2.vue'
import shaixuan2 from '@/components/secondhand/shaixuan2.vue'
import shaixuansm2 from '@/components/secondhand/shaixuansm2.vue'
import singleCar2 from '@/components/secondhand/singleCar2'
import secondhanddetail from '@/components/secondhand/secondhanddetail'


/*转lease*/
import leaseCar from '@/components/secondhand/leaseCar'


/*转lease表单*/
import formMain from '@/components/leaseform/formMain.vue'
import leaseform from '@/components/leaseform/leaseform.vue'
import secondhandform from '@/components/leaseform/secondhandform.vue'


import kkkzzz from '@/components/admin/kkkzzz.vue'




/*登陆*/
import login from '@/components/login/login.vue'


/*商城*/
import store from '@/components/store/store.vue'
import singleItem from '@/components/store/singleItem.vue'
import shoppingCart from '@/components/store/shoppingCart.vue'
import storeShaixuan from '@/components/store/storeShaixuan.vue'



//个人主页
import userMain from '@/components/userMain/userMain.vue'
import userAddress from '@/components/userMain/userAddress.vue'
import myCar from '@/components/userMain/myCar.vue'
import myCar2 from '@/components/userMain/myCar2.vue'



import mainpage from '@/components/mainpage.vue'


import footer1 from '@/components/footer1.vue'

import uploadPicTest from '@/components/uploadPicTest.vue'

import SimpleUpload from '@/components/SimpleUpload.vue'

import image from '@/components/image.vue'




Vue.use(Router)

export default new Router({
  mode:"history",
  routes: [
    {
      path:'/kkkzzz',
      name: 'kkkzzz',
      component: kkkzzz
    },
    {
      path:'/headerlg',
      name: 'headerlg',
      component: headerlg
    },
    {
      path:'/headersm',
      name: 'headersm',
      component: headersm
    },
    
  {
      path:'/singlecar/:id',
      name: 'singlecar',
      component: singlecar
    },
    {
      path:'/carMain',
      name: 'carMain',
      component: carMain,
      children: [
        {
          path: '/shaixuan',
          component: shaixuan
        }
      ]
    },
    {
      path:'/carMain2',
      name: 'carMain2',
      component: carMain2,
      children: [
        {
          path: '/shaixuan2',
          component: shaixuan2
        },
        {
          path: '/shaixuansm2',
          component: shaixuansm2
        },
        {
          path: '/leaseCar',
          component: leaseCar
        },
    ]
  },


  {
    path:'/store',
    name: 'store',
    component: store,
  },
  {
    path: '/singleItem/:id',
    name: 'singleItem',
    component: singleItem,
  },
  {
    path: '/storeShaixuan',
    component: storeShaixuan
  },
  {
    path: '/shoppingCart',
    component: shoppingCart
  },


  {
    path: '/',
    name: 'mainpage',
    component: mainpage
  },

  {
    path: '/footer1',
    name: 'footer1',
    component: footer1
  },

  {
    path: '/singleCar2/:id',
    name: 'singleCar2',
    component: singleCar2
  },
  {
    path: '/secondhanddetail/:id',
    name: 'secondhanddetail',
    component: secondhanddetail
  },
  {
    path: '/formMain',
    component: formMain,
    meta:{
      requireAuth: true,
    },
    children: [
    {
      path: '/leaseform',
      meta:{
        requireAuth: true,
      },
      component: leaseform
    },
    {
      path: '/secondhandform',
      meta:{
        requireAuth: true,
      },
      component: secondhandform
    }
    ]
  },
  {
    path: '/login',
    component: login
  },

  {
    path: '/userMain',
    name: 'userMain',
    meta:{
      requireAuth: true,
    },
    component: userMain,
    children:[
    {
      path: '/userAddress',
      meta:{
        requireAuth: true,
      },
      component: userAddress
    },
    {
      path: '/myCar',
      meta:{
        requireAuth: true,
      },
      component: myCar
    },
    {
      path: '/myCar2',
      meta:{
        requireAuth: true,
      },
      component: myCar2
    }
    ]
  },
  {
    path: '/uploadPicTest',
    component: uploadPicTest
  },
  {
    path: '/SimpleUpload',
    component: SimpleUpload
  },

  {
    path: '/image',
    component: image
  }

  ]


})
