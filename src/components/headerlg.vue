<template>
<Content>

    <div class = "menu" mode="horizontal" :theme="light" active-name="1">
                    
                    
                    
                    <Row class = "menu-content">
                        <div class = "menu-logo"><img src = "../assets/title/red.png"></div>
                        <ul v-for="title in titles" v-bind:key="title.name" @click="selected(title)" :class="{active: activeName == title}">
                            <li>
                                <router-link id = "a" :to = "title.link"><div id="left">{{title.name}}</div></router-link>
                            </li>
                        </ul>
                        <ul><li><router-link id = "a" to = "/login"><div id="left"><Icon type="ios-contact" />登陆</div></router-link></li></ul>
                    </Row>

                 
                </div>




                <div class="full-login"  v-show="showlogin" v-bind:class="{menublack: !menuActive}">
                                <div class = "login" v-show="islogin">
                                        <Icon type="ios-contact-outline" size="50" /><br>
                                        Log In
                                        <Input class = "input" size="large" v-model="value" placeholder="用户名*" />
                                        <Input class = "input" size="large" v-model="value" placeholder="密码*"/>
                                        <p class = "hint">还不是用户？<u v-on:click="islogin = false">点击注册</u></p>
                                        <Button class = "input">登陆</Button>
                                </div>


                                <div class = "signup" v-show="!islogin">
                                    <Icon type="ios-contact-outline" size="50" /><br>
                                    Sign Up
                                    <Input class = "input" size="large" v-model="value" placeholder="邮箱*" />
                                    <Input class = "input" size="large" v-model="value" placeholder="用户名*" />
                                    <Input class = "input" size="large" v-model="value" placeholder="密码*"/>
                                    <Input class = "input" size="large" v-model="value" placeholder="确认密码*"/>
                                    <Button class = "input">注册</Button>
                                </div>       
                </div>
     

                </Content>

</template>

<script>
export default {
    data(){
        return{
            showlogin: false,
            islogin: true,



             titles:[
                    {name:'首页', link: "/", iconType:"ios-apps"},
                    {name:'优惠新车', link: "/carMain", iconType:"ios-car" },
                    {name:'二手转lease', link: "/carMain2", iconType:"ios-car" },
                    /*{name:'车饰商城', link: "/store", iconType:"ios-build"},*/
                    {name:'我要卖车', link: "/leaseform", iconType:"ios-build"},
                    {name:'个人界面', link: "/userMain", iconType:"ios-build"},

                    
                    
                ]
        }
    },
    
    methods:{
    
        
        loginfunc: function(){
                this.isShow = false;
                this.showlogin = true;
                
            }
    },



}
</script>


<style scoped>
.menu{
    width:100%;
    z-index: 999;
    position: fixed;
   background:rgba(119,136,153,0.4);
    color:white;
    font-weight:700;
    height:60px;
  
}




.menu-logo{
    position:relative;
    float:left;

    margin-top:-0.7%;

    width:10%;
    height:0;
    padding-bottom:3.875%;
}

.menu-logo img{
    position:absolute;
    left:0px;
    top:0px;
    bottom:0px;
    right:0px;
    width:100%;
    height:100%;
}

.menu-content{
    width:80%;
    margin:0 auto;
    top:50%;
    margin-top:-12px;

    
}

.menu-content ul{
    display:inline-block;
    list-style-type: none;
    padding-left:6%;
    text-align:center;
}

.menu-content2{
    width:10%;
    top:50%;
    margin-top:-12px;
    
}




#a{
    color:white;
    font-size:0.8rem;
}





</style>