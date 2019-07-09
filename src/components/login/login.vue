<template>
<Layout>
    <Content v-responsive.lg.xl>
        <headerlg></headerlg>
        <!--<div class="full-login"  v-show="showlogin" v-bind:class="{menublack: !menuActive}">-->

            <div class='full-login'>
                                <div class = "login" v-show="islogin">
                                        <Icon type="ios-contact-outline" size="50" /><br>
                                        Log In
                                        <Input class = "input" size="large" v-model="userName" placeholder="用户名*" />
                                        <Input class = "input" size="large" v-model="password" placeholder="密码*"/>
                                        <p class = "hint">还不是用户？<u v-on:click="islogin = false">点击注册</u></p>
                                        <Button class = "input" @click="doLogin()">登陆</Button>
                                </div>


                                <div class = "signup" v-show="!islogin">
                                    <Icon type="ios-contact-outline" size="50" /><br>
                                    Sign Up
                                    <Input class = "input" size="large" v-model="registerEmail" placeholder="邮箱*" />
                                    <Input class = "input" size="large" v-model="registerUserName" placeholder="用户名*" />
                                    <Input class = "input" size="large" v-model="registerPassword" placeholder="密码*"/>
                                    <Input class = "input" size="large" v-model="registerPasswordConfirm" placeholder="确认密码*"/>
                                    <Button class = "input" @click="DoSignIn()">注册</Button>
                                </div>       
            </div>
    </Content>







    <Content v-responsive.md.sm.xs>
        <headersm></headersm>
              <!-- login -->
         
                            <div class="full-login-sm">
                                <div class = "login-sm" v-show="islogin">
                                        <Icon type="ios-contact-outline" size='36'/><br>
                                        Log In
                                        <Input class = "input-sm" size="large" v-model="userName" placeholder="用户名*" />
                                        <Input class = "input-sm" size="large" v-model="password" placeholder="密码*"/>
                                        <p class = "hint">还不是用户？<u v-on:click="islogin = false">点击注册</u></p>
                                        <Button class = "input-btn-sm" @click="doLogin()">登陆</Button>
                                </div>


                                <div class = "signup-sm" v-show="!islogin">
                                    <Icon type="ios-contact-outline-sm" size="50" /><br>
                                    Sign Up
                                    <Input class = "input-sm" size="large" v-model="registerEmail" placeholder="邮箱*" />
                                    <Input class = "input-sm" size="large" v-model="registerUserName" placeholder="用户名*" />
                                    <Input class = "input-sm" size="large" v-model="registerPassword" placeholder="密码*"/>
                                    <Input class = "input-sm" size="large" v-model="registerPasswordConfirm" placeholder="确认密码*"/>
                                    <Button class = "input-btn-signup-sm" @click="DoSignIn()">注册</Button>
                                </div>
                            
                            </div>


    </Content>

    <footer1></footer1>

</Layout>
</template>



<script>
import headerlg from '@/components/headerlg';
import headersm from '@/components/headersm';
import footer1 from '@/components/footer1';

export default {

    components:{
            'headerlg':headerlg,
            'headersm':headersm,
            'footer1':footer1
        },

    data(){
        return{
            showlogin: false,
            islogin: true,
            userName: '',
            password: '',
            registerEmail:'',
            registerUserName: '',
            registerPassword: '',
            registerPasswordConfirm: ''
            /*menuActive: false,
            isShow: false,
            isShows: false,*/
        }
    },
     methods:{
        doLogin(){
            if (this.userName == ''){
              alert('用户名不能为空');
              return false
          }
          if (this.password == ''){
              alert('密码名不能为空');
              return false
          }
        let postData = this.$qs.stringify({
            name:this.userName,
            password:this.password,
            submit: 'login'
        });
        this.axios({method: 'post', url:'http://localhost:8888/login.php', data:postData})
        .then(res => {
        //登录失败,先不讨论
        if (res.status != 200) {
          //iViewUi的友好提示
          this.$Message.error("账号或密码错误");
        //登录成功
        } else {
          //设置Vuex登录标志为true，默认userLogin为false
          this.$store.commit("setToken", res.data);
          this.$store.commit("setUsername",this.userName);
          console.log(JSON.stringify(res.data));
          localStorage.userName = this.userName;

          localStorage.uid= res.data.uid;

          localStorage.token_expire = res.data.exp;
          localStorage.token = res.data.token;
          this.$Message.success("success!");
          console.log(localStorage);
          console.log("isLogin-"+this.$store.getters.isLogin);
          console.log(localStorage.token_expire);
          //登录成功后跳转到指定页面
          this.$router.push("/");
        }
        })
        .catch(err => {
            console.log(err)
        });
        
     },
     
     DoSignIn(){
         if(this.registerUserName == ''){
             this.$Message.warning("用户名不能为空!");
         }
         if(this.registerPassword == ''){
             this.$Message.warning("密码不能为空!");
         }
         if(this.registerPassword != this.registerPasswordConfirm){
             this.$Message.warning("两次密码不相符!");
         }
         let postData = this.$qs.stringify({
             name:this.registerUserName,
             password:this.registerPassword,
             submit:'signIn'
         });
         this.axios({method: 'post', url:'/static/login.php', data:postData})
        .then(res => {
            this.$Message.success("success!");
            console.log(res.data);
            //注册成功后跳转到登陆页面
          this.$router.push("/");
        });
     }
    }
}
</script>


<style>
/* login css large*/

    .full-login{
        padding:10% 0 10% 0;
    }

    .login{

    margin:0 auto;
    background-color:white;
    width:30%;
    padding:5% 4% 3% 4%;
    
    }

    .input{
        margin-top:10%;
        width:100%;
        font-size:1rem;
    }

    .input-btn{
        margin-top:-12%;
        width:100%;
        font-size:1rem;
    }

    .hint{
        margin-top:10%;
        text-align:right;
        font-size:0.75rem;
        color:#808080;
    }

    u{
        cursor:pointer;
    }




    .signup{
        margin:0 auto;
        background-color:white;
        width:30%;
        padding:5% 4% 3% 4%;
    }

    .input-btn-signup{
        margin:10% 0 10% 0;
        width:100%;
        font-size:1rem;
    }








    /* login css small*/
    .full-login-sm{
        padding:20% 0 10% 0;

    }

    .login-sm{
    margin:0 auto;
    background-color:white;
    width:75%;
    padding:5% 4% 3% 4%;
    }

    .input-sm{
        margin-top:10%;
        width:100%;
        font-size:1rem;
    }

    .input-btn-sm{
        margin:10% 0 5% 0;
        width:100%;
        font-size:1rem;
    }

    .hint-sm{
        margin-top:10%;
        text-align:right;
        font-size:0.75rem;
    }




    .signup-sm{
        margin:0 auto;
        background-color:white;
        width:75%;
        padding:5% 4% 3% 4%;
    }

    .input-btn-signup-sm{
        margin:10% 0 10% 0;
        width:100%;
        font-size:1rem;
    }
</style>
