<template>
    <Content>
  <Menu class = "menu-sm" mode="horizontal"  active-name="1">
                    <!--\<div class = "menu-logo-sm"><img src = "../assets/title/red.png"></div>-->
                     <div class = "menu-content-sm">
                        
                        

                        <div class="sildebar">
                            <div class="home" @click="hideMenu">
                                <Icon id = "icon" size = "48" type="ios-menu" color = "white"/>
                            </div>

                            <!--make background to black--><div class="menu" v-show="isShows" @click="hideMenu"></div>
                    
                            <transition name="slide-fade">
                                <div class="sss"  v-show="isShow">

                                <div id="left-login">
                                <div v-if="!islogin">

                                    <router-link id = "a" to = "/login" ><Icon type = "md-contact"></Icon> 用户登录</router-link>
                                </div>

                                <div v-else>
                         
                                    <Dropdown trigger="click">
                                        <a>
                                            <Icon type = "md-contact"></Icon>  {{userName}}<Icon type="ios-arrow-down"></Icon>
                                        </a>
                                        <DropdownMenu slot="list">
                                            <div @click="loginOut"><DropdownItem>退出登陆</DropdownItem></div>
                                        </DropdownMenu>
                                    </Dropdown>
                                    
                                    </div>
                                    
                                </div>
                            
                                

                                
                                
                                
                                <div class = "total-title" v-for="title in titles" v-bind:key="title.name" @click="selected(title)" :class="{active: activeName == title}">
                                    <router-link id = "a" :to = "title.link" exact-active-class="haha"><div id="left"><Icon :type = "title.iconType" id = "i"/>{{title.name}}</div></router-link>
                                </div>

                                <div class = "total-title" v-for="title in titles2" v-bind:key="title.name" @click="selected(title)" :class="{active: activeName == title}">
                                    <router-link id = "a" :to = "title.link" exact-active-class="haha"><div id="left"><Icon :type = "title.iconType" id = "i"/>{{title.name}}</div></router-link>
                                </div>
                                
                                </div>
                            </transition>





                     

                        </div>
                        </div>
                    

                    
    </Menu>
    </Content>

</template>

<script>

export default {

		data () {
			return {
                showlogin: false,
                islogin: true,
      
                menuActive: false,



				isShow: false,
                isShows: false,
                activeName: '',
                isActive: false,
                titles:[
                    {name:'首页', link: "/", iconType:"ios-apps"},
                    {name:'优惠新车', link: "/carMain", iconType:"ios-car" },
                    {name:'买二手车', link: "/carMain2", iconType:"md-car" },
                ],

                titles2:[
                    {name:'我要卖车', link: "/leaseform", iconType:"ios-cash" },
                    {name:'个人页面', link: "/userMain", iconType:"md-eye"},
                ],

                userName:localStorage.userName,
                
              
			}
        },
    mounted(){
        this.islogin = this.$store.getters.isLogin;

     

            console.log("isLogin:"+this.$store.getters.isLogin);
            console.log(localStorage);
    },
	methods: {
			hideMenu () {
				if (this.isShow) {
					this.isShow = false
					this.isShows = false
				} else {
					this.isShow = true
					this.isShows = true
				}
				
            },
            loginOut(){
                localStorage.removeItem('token');
                localStorage.removeItem('userName');
                localStorage.removeItem('token_expire');
                localStorage.removeItem('uid');
                this.$router.push('/');

            },

            selected: function(title){
                this.activeName = title;
            },

           
/*
            loginfunc: function(){
                this.isShow = false;
                this.showlogin = true;
                
            }*/
        },
 
	}

</script>

<style scoped>


    .haha #left{
        color: white;
        background:rgba(119,136,153,0.8);
    }



.menu-sm{
    width:100%;
    height:0;
    padding-bottom:12%;
    position:fixed;
    background:rgba(119,136,153,0.4);
    z-index:999;
}



.menu-logo-sm{
    position:relative;
    float:left;
    margin-top:2%;
    margin-left:5%;
    width:30%;
    height:0;
    padding-bottom:11.625%;
    color:#393f4d;
}

.menu-logo-sm img{
    position:absolute;
    left:0px;
    top:0px;
    bottom:0px;
    right:0px;
    width:100%;
    height:100%;
}


#url{
   margin-top:-8vw;
    font-size:1rem;
    margin-left:3%;
}

#icon{
   position:absolute;
   top:50%;
   margin-top:-24px;
   right:5%;

}
.menu-content-sm{
    float:right;
    padding-right:5%;
}

a{
    color:black;
    font-size: 1rem;
}

.haha{
    top:50%;
}


.sss{
	position: fixed;
    width: 286px;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 11;
    overflow-y: auto;
    background:rgba(255,255,255,0.8);





	}
	.slide-fade-enter-active {
	  transition: all .2s ease;
	}
	.slide-fade-leave-active {
	  transition: all .2s cubic-bezier(1.0, 0.5, 0.8, 1.0);
	}
	.slide-fade-leave-to,.slide-fade-enter{
	  transform: translateX(286px);
	  opacity: 0;
	}
    
	.menu {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    opacity: 1;
    z-index: 10;
    background: rgba(0,0,0,0.5);
    }

    #left{
        padding-left:5%;
        width:100%;
        height:0;
        padding-bottom:20%;
        border-bottom:1px solid #DEDEDE;
        text-align:left;
        font-size: 1rem;
    }

    #left-login{
       background:rgba(119,136,153,0.6);
       
    }
   
   #left-login a{
       width:100%;
        color:white;
        font-size: 1.1rem;
   }


    a #i{
        margin-right:5%;
    }





</style>