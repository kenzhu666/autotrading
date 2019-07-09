<template>
    <div class="layout">
        <Layout>
            
            <headersm v-responsive.md.sm.xs></headersm>
            <headerlg v-responsive.lg.xl></headerlg>

            <Content>
                　
                  <div class = "lg" v-responsive.lg.xl>
                    <h1 class = "left">{{this.item[0].year}} {{this.item[0].brand}} {{this.item[0].make}}</h1>
                    <p id="position">车辆位置: <span id="value">{{this.item[0].city}}</span></p>
                    <p id="position">颜色: <span id="value">{{this.item[0].color}}</span></p>
                    <Row :gutter = '24'>
                        <Col span = "12">
                            <Carousel v-model="value1" loop>
                                    <CarouselItem>
                                        <div class='pic-sm'><img src = '../../assets/carbrand/e4002.jpg'></div>
                                    </CarouselItem>
                                </Carousel>

                            <Button @click="hideMenu()" class = "submit-lg">联系客服</Button>
                                <transition name="slide-fade">
                                    <div class="sss"  v-show="isShow">
                                        <img src = '../../assets/footer/1.jpeg'>
                                    </div>
                                
                                
                                </transition>

                        </Col>
                        






                        <Col span = "12">
                        <Row class = 'part'>
                            <h3 id="title"><Icon type="ios-information-circle-outline" /> 基本信息</h3><hr>
                            <Row>
                                <Col span='8' class='each'>已有公里数: <span id="value">{{this.item[0].mile}}km</span></Col>
                                <Col span='8' class='each'>车身类型: <span id="value">{{this.item[0].types}}</span></Col>
                                <Col span='8' class='each'>座位数: <span id="value">{{this.item[0].seats}}</span></Col>
                            </Row>
                            <Row>
                                <Col span='8' class='each'>变速箱: <span id="value">{{this.item[0].biansuxiang}}</span></Col>
                                <Col span='8' class='each'>燃油类型: <span id="value">{{this.item[0].gas}}</span></Col>
                                <Col span='8' class='each'>驱动模式: <span id="value">{{this.item[0].autos}}</span></Col>
                            </Row>
                        </Row>

                            <Row class = 'part'>
                                <h3 id="title"><Icon type="ios-cash-outline" /> 价格信息</h3><hr>
                                    <Row>
                                        <Col span='11' class='each'>全款: <span id="value">${{this.item[0].price}}</span></Col>
                                        <Col span='11' class='each'>折扣: <span id="value">${{this.item[0].discount}}</span></Col>                                        
                                    </Row>
                            </Row>

                            <Row class = 'part'>
                                <h3 id="title"><Icon type="ios-build-outline" /> 配置信息</h3><hr>
                                <Row>
                                        <Col span='24' class='each-sm2'>{{this.item[0].config}}</Col>                                           
                                </Row>
                            </Row>

                            <div class='part'>
                                    <h3 id="title"><Icon type="ios-text-outline" /> 车主留言</h3><hr>
                                        <Col span='24' class='each-sm2'>{{this.item[0].comment}}</Col>     
                                </div>

                        </Col>
                    </Row>

                  </div>









                  <div v-responsive.md.sm.xs>
                      <Row class = 'sm'>
                          <h1 class = "left">{{this.item[0].year}} {{this.item[0].brand}} {{this.item[0].make}}</h1>
                          <p id="position">车辆位置: <span id="value">{{this.item[0].city}}</span></p>
                          <p id="position">颜色: <span id="value">{{this.item[0].color}}</span></p>

                          <Carousel v-model="value1" loop>
                                    <CarouselItem>
                                        <div class='pic-sm'><img src = '../../assets/carbrand/e4002.jpg'></div>
                                    </CarouselItem>
                                </Carousel>
                                <br>

                          <div class='part-sm'>
                            <h3 id="title-sm"><Icon type="ios-cash-outline" /> 价格信息</h3><hr>
                                <Row>
                                    <Col span='12' class='each-sm'>全款<br><p class='data-sm'>${{this.item[0].price}}</p></Col>
                                    <Col span='12' class='each-sm2'>折扣<br><p class='data-sm'>${{this.item[0].discount}}</p></Col>
                                </Row>
                            </div>




                            <div class='part-sm'>
                                <h3 id="title-sm"><Icon type="ios-information-circle-outline" /> 基本信息</h3><hr>
                                <Row>
                                    <Col span='8' class='each-sm'>公里数<br><p class='data-sm'>{{this.item[0].mile}}</p></Col>
                                    <Col span='8' class='each-sm'>车身类型<br><p class='data-sm'>{{this.item[0].type}}</p></Col>
                                    <Col span='8' class='each-sm2'>座位数<br><p class='data-sm'>{{this.item[0].seats}}</p></Col>
                                    <!--<Col span='8' class='each-sm2'>VIN NO<br><p class='data-sm'>{{this.item[0].vin}}</p></Col>  Vin No 不能让别人看见只能我们后台看见-->
                                </Row>
                                <hr>
                                <Row>
                                    <Col span='8' class='each-sm'>变速箱<br><p class='data-sm'>{{this.item[0].biansuxiang}}</p></Col>
                                    <Col span='8' class='each-sm'>燃油类型<br><p class='data-sm'>{{this.item[0].gas}}</p></Col>
                                    <Col span='8' class='each-sm2'>驱动模式<br><p class='data-sm'>{{this.item[0].auto}}</p></Col>
                                </Row>
                            </div>


                            <div class='part-sm'>
                                <h3 id="title-sm"><Icon type="ios-build-outline" /> 配置信息</h3><hr>
                                    <Row>
                                            <Col span='24' class='each-sm2'>{{this.item[0].config}}</Col>                                      
                                    </Row>
                            </div>

                            <div class='part-sm'>
                                <h3 id="title-sm"><Icon type="ios-text-outline" /> 车主留言</h3><hr>
                                <Col span='24' class='each-sm2'>{{this.item[0].comment}}</Col>  
                            </div>


                      </Row>


                      <div class='submit'>
                        
                    <transition name="slide-fade">
                        <div class="sss"  v-show="isShow">
                            <img src = '../../assets/footer/1.jpeg'>
                        </div>
                      
                    </transition>
                    <Button @click="hideMenu()" class = "submit-a">联系客服</Button>
                    


                    </div>

                  </div>
                
            </Content>

        </Layout>
            
    </div>    
</template>


<script>
import headerlg from '@/components/headerlg';
import headersm from '@/components/headersm';



    export default{

        components:{

            'headerlg':headerlg,
            'headersm':headersm
        },

        data(){
            return{
                item:[],
                id: this.$route.params.id,
                isShow: false,
                isShows: false,
         
            }
        },


         created(){
                
                var carID = this.id/*this.id就是传进来的uid*/
            	this.axios.get('http://localhost:8888/secondhand.php',{
							params:{
                                id:carID/*PHP　file的　ID　*/
                            }
						}).then((response) => {
                         this.item =JSON.parse(JSON.stringify(response.data));
                        console.log(this.item);
                 });
                 /*
                 this.axios.get('http://localhost:8888/secondhand.php',{
							params:{
                                Random:"YES"
                            }
						}).then((response) => {
                        this.random = JSON.parse(JSON.stringify(response.data));
                        
                 });*/
    },

    methods:{
        hideMenu () {
				if (this.isShow) {
					this.isShow = false
					this.isShows = false
				} else {
					this.isShow = true
					this.isShows = true
				}
				
            },
    }

    }
</script>


<style scoped>

.layout-footer-center{

    background-image:url('../../assets/wallpaper/car-background.jpg');
    background-size: 100% 100%;
    color:#A9A9A9;
}


/*large screen*/
/*left*/
.lg{
    width:90%;
    margin:0 auto;
    margin-top:5%;
    margin-bottom:7%;
    text-align:left;
}

#title{
    margin-bottom:1%;
}

#position{
    margin-bottom:2%;
    color:#808080;
}

hr{
    margin-bottom:2%;
}




/*right*/
.part{
    margin-bottom:8%;
}

.each{
    margin-bottom:5%;
    color:#808080;
}

h3{
    font-weight:200;;
}

hr{
    color:#808080;
}


.pic{
    height:0;
    padding-top:75%;
    border:1px solid black;
    font-size:1rem;
}




.submit-lg{
    float:left;
    width:100%;
    margin-top:3%;
    font-size:1rem;
    color:white;
   background:rgba(119,136,153,0.6);

}


#value{
    color:black;
}


h1{
    font-weight:400;
    margin-bottom:2%;
}















/*small screen*/
.pic-sm{
    position:relative;
    height:0;
    padding-top:75%;
}


.pic-sm img{
    position:absolute;
    left:0px;
    top:0px;
    bottom:0px;
    right:0px;
    width:100%;
    height:100%;
}



.sm{
    text-align:left;
    width:90%;
    margin:0 auto;
    margin-top:15%;
    margin-bottom:7%;
}

#title-sm{
    margin-bottom:1%;
}



.part-sm{
    margin-bottom:8%;
}

.each-sm{
    margin-bottom:5%;
    margin-top:2%;
    color:#808080;
    border-right:1px solid #808080;
    text-align:center;
}

.each-sm2{
    margin-bottom:5%;
    margin-top:2%;
    color:#808080;
    text-align:center;
}


.each-sm p {
    margin-top:5%;
}

.each-sm2 p{
    margin-top:5%;;
}



.data-sm{
    color:black;
}

h3{
    font-weight:200;;
}

hr{
    color:#808080;
}






/*button*/
.submit{
    position:fixed;
    bottom:0;
    width:100%;
    z-index:900;
}

.submit-a{
    float:left;
    width:100%;
    height:50px;
    font-size:5vw;
    color:white;
   background:rgba(119,136,153,0.6);

}


.slide-fade-enter-active {
	  transition: all .2s ease;
	}
	.slide-fade-leave-active {
	  transition: all .2s cubic-bezier(1.0, 0.5, 0.8, 1.0);
	}
	.slide-fade-leave-to,.slide-fade-enter{
	  transform: translateY(286px);
	  opacity: 0;
	}
    
</style>
