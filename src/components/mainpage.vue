<template>
        <Layout>
            <Content :style="{margin: 'auto', width: '100%'}">


<!--                <div class = "cars-sm">
                    <div class = "discount-car" v-for = "item in ran" v-bind:key = "item.car_id" data-aos="flip-up">
                                <div class = "h1-sm">{{item.time+item.brand}}</div>
                                <div><img v-bind:src = item.carsrc></div>
                                <div class = "pic-info">
                                        <Row>
                                            <Col span = "12" id = "p1">Downpay {{item.firstpay}}</Col>
                                            <Col span = "12" id = "p2">MonthPay {{item.monthpay}}</Col>
                                        </Row>
                                </div>
                            </div>-->

          <div v-responsive.md.sm.xs>
                <headersm v-responsive.md.sm.xs></headersm>
                <div class = "content-sm">
                <!--<Carousel autoplay v-model="value2" loop>
                    <CarouselItem>
                        <div class="demo-carousel-sm"><img src = "../assets/wallpaper/1.jpg"></div>
                    </CarouselItem>
                    <CarouselItem>
                        <div class="demo-carousel-sm"><img src = "../assets/wallpaper/2.jpg"></div>
                    </CarouselItem>
                    <CarouselItem>
                        <div class="demo-carousel-sm"><img src = "../assets/wallpaper/3.jpg"></div>
                    </CarouselItem>
                    <CarouselItem>
                        <div class="demo-carousel-sm"><img src = "../assets/wallpaper/4.jpg"></div>
                    </CarouselItem>
                </Carousel>-->
                <img src = "../assets/wallpaper/bmwwallpaper.jpeg">
                </div>

<!--                <div class = "about-sm">
                    <p data-aos="fade-right">华人汽车资讯一站式服务，加拿大第一家华人豪车测评</p>
                    <router-link to = '/contact'>
                    <Button id = "b">联系我们</Button>
                    </router-link>
                </div>-->

          


                <div class='first'>
                <div class='each-title-sm'><Divider><h1>新车热卖</h1></Divider></div>
                <div class='each-sm'>

                    
                    
                    <Row>
                    <!--<router-link to = "/singleCar2">-->
                    <br>
                    <Col span="24" >
                        
                        <div class = "carlist" v-for="item1 in random1" v-bind:key ="item1.car_id">
                            <div @click ="click1(item1.car_id)">
                                <Row class="each-carsm">
                                    <Col span = "13"><img src = '../assets/bmw/m4-1.jpeg'></Col>
                                    <Col span = "10">
                                        <div class = "pic-info">
                                            <Row class = "row2">
                                            <Col span = "24"><p class='title'>{{item1.year}} {{item1.brand}} {{item1.make}}</p></Col>
                                                <Col span = "24"><hr size="0.5"></Col><br><br>
                                                <Col span = "24"><p class='price'>折扣: <span id = "info">{{item1.discount}}</span></p></Col>
                                                <Col span = "24"><p class='price'>首付/月供: <span id = "info">{{item1.firstpay}} / {{item1.monthpay}}</span></p></Col>
                                            </Row>
                                        </div>
                                    </Col>
                                </Row>
                            </div>
                        
                            </div>
                            <router-link id = "a" to = "/carMain"><Button class='moreCar'>更多新车>></Button></router-link>
                    </Col>

                    </Row>
                </div>
                </div>




                <div class='second'>
                <div class='each-title-sm'><Divider><h1>二手推荐</h1></Divider></div>
                <div class='each-sm'>
                    <Row>
                    <!--<router-link to = "/singleCar2">-->
                    <br>
                    <Col span="24" >
                        
                        <div class = "carlist" v-for="item2 in random2" v-bind:key="item2.car_id">
                            <div @click="click2(item2.car_id)">
                                <Row class="each-carsm">
                                    <Col span = "13"><img src = '../assets/carbrand/e4002.jpg'></Col>
                                    <Col span = "10">
                                        <div class = "pic-info">
                                            <Row class = "row2">
                                                <Col span = "24"><p class='title'>{{item2.year}} {{item2.brand}} {{item2.make}}</p></Col>
                                                                    <Col span = "24"><hr size="0.5"></Col>
                                                                    <br><br>
                                                                    <Col span = "24"><p class='price'>全款买断: <span id = "info">{{item2.fullprice}}</span></p></Col>
                                                                    <Col span = "24"><p class='price'>首付/月供: <span id = "info">{{item2.firstpay}} / {{item2.monthpay}}</span></p></Col>
                                                                    <Col span = "24"><p class='price'>已有公里数: <span id = "info">{{item2.mile}}</span></p></Col>
                                            </Row>
                                        </div>
                                    </Col>
                                </Row>
                            </div>

                            </div>
                            <router-link id = "a" to = "/carMain2"><Button class='moreCar'>更多二手车>></Button></router-link>
                    </Col>

                    </Row>
                    </div>
                </div>



<!--
                <div class='each-title-sm'>车内饰品</div>
                <div class='each-sm'>
                    <Row>
                    <!--<router-link to = "/singleCar2">-->
                    <!--<br>
                    <Col span="24" >
                        
                        <div class = "carlist" v-for = "item4 in random4" v-bind:key = "item4.item_id">
                            <div @click = "click4(item4.item_id)">
                                            <Row >
                                                    <Col span="13" ><img src = '../assets/wallpaper/cheshi.jpg'></Col>
                                                    <Col span='10'>
                                                        <div class = "pic-info">
                                                            <Row>
                                                            <Col span = "24"><p id = "name">{{item4.name}}</p></Col>
                                                            <Col span = "24"><p id = "price">{{item4.price}}</p></Col>
                                                            </Row>
                                                        </div>
                                                    </Col>
                                            </Row>
                            </div>
                        
                            <divider/>
                            </div>
                            <Button class='moreCar'>更多>></Button>
                            
                    </Col>

                    </Row>
                
                </div>-->
                








            
            </div>

            




                
               
            













        <div v-responsive.lg.xl>
            <headerlg v-responsive.lg.xl></headerlg>
        
                <div class = "content">
                    <div class="demo-carousel">
                        <video id="vtype" preload="auto" autoplay="true" loop="loop" muted="muted">
                            <source src='../assets/wallpaper/1080p.mp4'>
                        </video>
                    
                   
                        
                        
                        <!--<video autoplay loop muted >
                            <source src='../assets/wallpaper/1080p.mov' type="video/mov">
                        </video>-->
                            
                        

                        
                        <div class="allintro">

                            <router-link id = "a" to = "/carMain">
                                <div class="intro1">
                                    <div class="intro1-inner">
                                        <div class='content2'>
                                            <Icon type="ios-car" size="45"/><h1 class="title">新车车库</h1>
                                            
                                            <!--<p>各式各样的新车热卖</p><br>
                                            <Button class="b">点击进入</Button>-->
                                        </div>
                                    </div>
                                </div>
                            </router-link>

                            <router-link id = "a" to = "/carMain2">
                                <div class="intro2">
                                    <div class="intro2-inner">
                                        <div class='content2'>
                                            <Icon type="md-car" size="45"/><h1 class="title">二手车库</h1>

                                        </div>
                                    </div>
                                </div>
                            </router-link>

                            <router-link id = "a" to = "/leaseform">
                                <div class="intro3">
                                    <div class="intro3-inner">
                                        <div class='content2'>
                                            <Icon type="ios-cash" size="45"/><h1 class="title">自由私卖</h1>

                                        </div>
                                    </div>
                                </div>
                            </router-link>
                        </div>
                    </div>


                        
                      
             
                



                        <div class="showcar">
                                <div class='carTitle'><Divider><div class='outerb'><div class='innerb'><h1>新车热卖</h1></div></div></Divider></div>
                                
                                <div class = "newCar">
                                    <div class='inner'>
                                    
                                        <Row :gutter = "30">
                                        
                                            <Col span="8" v-for="item1 in random1" v-bind:key="item1.car_id">
                                            <div @click="click1(item1.car_id)">
                                                <div class="insideCol">
                                                        <Row>
                                                        <Col span = "24"><img src = '../assets/bmw/m4-1.jpeg'></Col>
                                                        <Col span = "24">
                                                            <div class = "pic-info">
                                                                <Row class = "row2">
                                                                    <Col span = "24"><p class='title'>{{item1.year}} {{item1.brand}} {{item1.make}}</p></Col>
                                                                    <Col span = "24"><hr size="0.5"></Col>
                                                                    <Col span = "24"><p class='price'>折扣: <span id = "info">{{item1.discount}}</span></p></Col>
                                                                    <Col span = "24"><p class='price'>首付/月供: <span id = "info">{{item1.firstpay}} / {{item1.monthpay}}</span></p></Col>

                                                                </Row>
                                                            </div>
                                                        </Col>
                                                        </Row>
                                                    </div>
                                                </div>
                                            </Col>
                                
                                                
                                        </Row>
                                        <router-link id = "a" to = "/carMain"><Button class="more">更多新车>></Button></router-link>
                                        </div>
                                    </div>
                           
                        </div>


                        <div class="pos"></div>


                        <div class="showcar2">
                                <div class='carTitle'><Divider><h1>二手车推荐</h1></Divider></div>
                                
                                <div class = "newCar">
                                    <div class='inner'>
                                    
                                        <Row :gutter = "30">
                                        
                                            <Col span="8" v-for ="item2 in random2" v-bind:key ="item2.car_id">
                                            <div @click="click2(item2.car_id)">
                                                <div class="insideCol">
                                                        <Row>
                                                        <Col span = "24"><img src = '../assets/bmw/m4-1.jpeg'></Col>
                                                        <Col span = "24">
                                                            <div class = "pic-info">
                                                                <Row class = "row2">
                                                                    <Col span = "24"><p class='title'>{{item2.year}} {{item2.brand}} {{item2.make}}</p></Col>
                                                                    <Col span = "24"><hr size="0.5"></Col>
                                                                    <Col span = "24"><p class='price'>全款买断: <span id = "info">{{item2.fullprice}}</span></p></Col>
                                                                    <Col span = "24"><p class='price'>首付/月供: <span id = "info">{{item2.firstpay}} / {{item2.monthpay}}</span></p></Col>
                                                                    <Col span = "24"><p class='price'>已有公里数: <span id = "info">{{item2.mile}}</span></p></Col>

                                                                </Row>
                                                            </div>
                                                        </Col>
                                                        </Row>
                                                    </div>
                                                </div>
                                            </Col>
                                
                                                
                                        </Row>
                                        <router-link id = "a" to = "/carMain2"><Button class="more">更多二手车>></Button></router-link>
                                        </div>
                                    </div>
                           
                        </div>
                


        </div>


                

                



                
               

                

            </div>

            </Content>
            
            <footer1></footer1>
        

        </Layout>
      

    
</template>


<script>
import headerlg from '@/components/headerlg';
import headersm from '@/components/headersm';
import footer1 from '@/components/footer1.vue';

    export default {
        components:{
            'headerlg':headerlg,
            'headersm':headersm,
            'footer1':footer1
        },
        
        data () {


            return {
                item1:[],
                random1:[],

                item2:[],
                random2:[],

        
            }
        
        },
        
        created(){
        this.axios.get('http://localhost:8888/newCar.php',{
							params:{
                                Random:"YES"
                            }
						}).then((response) => {
                        this.random1 = JSON.parse(JSON.stringify(response.data));
                        
                 });


        this.axios.get('http://localhost:8888/zhuanlease.php',{
							params:{
                                Random:"YES"
                            }
						}).then((response) => {
                        this.random2 = JSON.parse(JSON.stringify(response.data));
                        
                 });


       
        
    },
    methods:{
      click1(uid){
                this.$router.push({
                    path:'singlecar',
                    name:'singlecar',
                    params:{id: uid}})
      },
      click2(uid){
                this.$router.push({
                    path:'singleCar2',
                    name:'singleCar2',
                    params:{id: uid}})
      }
    }    
    }
</script>

<style scoped>

/*large screen */

.demo-carousel{
    position:relative;
    width:100%;
    height:100%;
    top:-71px;

    left:0;

    background-size: cover;
    overflow: hidden;
}

#vtype{
    position:absolute;
    top:0;
    left:0;
    min-height:100%;
    min-width:100%;

}




.allintro{
   
   margin-top:47%;
}


.intro1{

    width:33.3333%;
    opacity:0.8;
    background:url('../assets/wallpaper/11.jpeg');
    background-size: cover;
    position:relative;
    overflow: hidden;
    float:left;
    height:0;
    padding-bottom:10.75%;
}

.intro1-inner{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(29,30,34,0.8);
}


.intro2{
    width:33.3333%;
    opacity:0.8;
    float:left;
    background-image:url('../assets/wallpaper/22.jpeg'); 
    height:0;
    padding-bottom:10.75%;
    position:relative;
    overflow: hidden;
    float:left;
}

.intro2-inner{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.8);
}


.intro3{
    width:33.3333%;
    opacity:0.8;
    background-image:url('../assets/wallpaper/33.jpeg');
    height:0;
    padding-bottom:10.75%;
    float:left;
    position:relative;
    overflow: hidden;
    float:left;
}

.intro3-inner{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(57,63,77,0.8);
}

.content2{
    margin-top:5%;
    color:white;
}

.content2 .title{
    font-size:1rem;
    font-weight:900;
}


.content2 .b{
    font-size:1rem;
    font-weight:800;
    background-color:black;
    color:white;
    border:none;
}







.showcar{
    top:-71px;
    width:100%;
    background: linear-gradient(to top, #242831, #111114);
    position:relative;
    overflow: hidden;
    float:left;
    overflow: hidden;
    float:left;
}

.showcar2{

    top:-71px;
    width:100%;
    background: linear-gradient(to top, #242831, #111114);
    position:relative;
    overflow: hidden;
    float:left;
    position:relative;
    overflow: hidden;
    float:left;
    
}




.showcar h1{
    font-size:1rem;
    color:white;
    margin:2%;
}

.showcar2 h1{
    font-size:1rem;
    color:white;
    margin:10%;
}

.carTitle{
    font-weight:800;
    padding-top:3%;
    width:90%;
    margin:0 auto;
}










.title{
    padding:0 0 2% 0;
}


.newCar{
    width:90%;
    padding:2% 0 5% 0;
    margin: 0 auto;
}

.inner{
    margin: 10% 0 0 10%;
    width:100%;
    margin: 0 auto;
}

.insideCol{
    background:rgba(119,136,153,0.3);
    color:white;
    padding-bottom:8%;
}

.row2 .title{
    font-size:1rem;
    font-weight:700;
}

.row2 hr{
    margin-right:7%;
}

.row2 .price{
    font-size:0.8rem;
    padding-top:1%;
}



.more{
    float:right;
    background-color:#393f4d;
    color:white;
    border:none;
    font-weight:800;
    font-size:1rem;
    margin:2% 0 2% 0;
}



















/*small screen*/
.first{
    background: linear-gradient(to top, #242831, #111114);
    margin-top:-1%;
}

.second{
    background: linear-gradient(to top, #242831, #111114);
    margin-top:-1%;
}


.content-sm img{

    width: 100%;
    height: 100%;


}


.each-title-sm{
    width:90%;
    padding-top:5%;
    margin: 0 auto;
}

.each-title-sm h1{
    color:white;
    font-weight:400;
    font-size:1rem;
}

.each-sm{
    margin:15%;
    width:95%;
    margin:auto;
}



.each-carsm{

    margin-bottom:15%;
    background:rgba(119,136,153,0.3);
    color:white;

}

.each-carsm img{
    margin-bottom:-1.5%;
}

/*new car*/
.carlist{
    width:95%;
    margin:0 auto;
}

.pic{
    height:0;
    padding-top:75%;
    border:1px solid black;
}

.pic-info{
    margin-left:7%;
    height:30%;
}

.row2 p{
    margin-top:2%;
    float:left;
    font-size:0.75rem;

}

.row2 .title{
    font-weight:400;
}

#info{
   color:#A9A9A9;
}

img{
   width:100%;
}

.moreCar{
    cursor:pointer;
    margin-bottom:10%;
    background:rgba(112,128,144,0.3);
    color:white;
    border:none;
    font-size:0.75rem;
}






</style>
