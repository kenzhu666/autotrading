<template>
    <div class="layout">
        <Layout>
            
            <headersm v-responsive.md.sm.xs></headersm>
            <headerlg v-responsive.lg.xl></headerlg>

            <Content>
                　
                  <div class = "lg" v-responsive.lg.xl>
                    <Row :gutter = '24'>
                        <Col span = "10">
                            <div class='pic'></div>
                        </Col>

                        <Col span = "14">
                            <div class = 'info'>
                                <Row>
                                    <Col span = "12">
                                        <p class = "left">{{this.item[0].name}}</p>
                                        <p class = "left">{{this.item[0].price}}</p>
                                    </Col>

                                    <Col span = "12">
                                        <Button class = "right">加入购物车</Button>
                                        <Button class = "right">直接购买</Button>
                                    </Col>
                                </Row>
                            </div>

                            <div class='detail'>
                                    <p>详细信息</p><hr><br>
                                    <p>asdasdasdasasd</p>
                            </div>
                            <Button class='deliver'>点击查看配送范围</Button><br>



                        </Col>
                    </Row>

                  </div>



                  <div v-responsive.md.sm.xs>
                      <Row class = 'sm'>
                          <div class='pic'></div><br>
                          <div class = 'info-sm'>
                            <h1 class = "left">{{this.item[0].name}}</h1>
                            <h3 class = "left">{{this.item[0].price}}</h3>
                            <u class='deliver-sm'>点击查看配送范围</u><br>
                          </div>

                          <div class = 'detail-sm'>
                               <p>详细信息</p><hr>
                              <p class = 'content-sm'>asdasasdasdadsad</p>
                          </div>
                      </Row>
                      <div class='submit'>
                            <Button class = "submit-a">买车意向表</Button></a>
                            <Button class = "submit-b" @click="hideMenu">详情询底价</Button>
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
                id: this.$route.params.id
            }
        },

        created(){
                
                var itemID = this.id/*this.id就是传进来的uid*/
            	this.axios.get('http://localhost:8888/store.php',{
							params:{
                                id:itemID/*PHP　file的　ID　*/
                            }
						}).then((response) => {
                         this.item =JSON.parse(JSON.stringify(response.data));
                        console.log(this.item);
                 });
                 this.axios.get('http://localhost:8888/store.php',{
							params:{
                                Random:"YES"
                            }
						}).then((response) => {
                        this.random = JSON.parse(JSON.stringify(response.data));
                        
                 });
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

.lg{
    width:80%;
    margin:0 auto;
    margin-top:12%;
    margin-bottom:7%;
}

.pic{
    height:0;
    padding-top:75%;
    border:1px solid black;
    font-size:1rem;
}


.left{
    text-align:left;
}

.right{
    float:right;
    width:51%;
    margin-bottom:2%;
}

.detail{
    text-align: left;
    margin-top:5%;
}

.detail p{
    margin-bottom:1.5%;
}

.deliver{
    float:right;
}




/*small screen*/
.sm{
    width:90%;
    margin:0 auto;
    margin-top:20%;
    margin-bottom:7%;
}

.info-sm{
    margin-bottom:7%;
}

.info-sm h1{
    margin-bottom:2%;
}

.info-sm h3{
    margin-bottom:2%;
}


.deliver-sm{
    float:left;
    cursor:pointer;
}

.detail-sm{
    text-align:left;
}

.detail-sm p{
    margin-bottom:2%;
}

.content-sm{
    margin-top:1%;
}


/*button*/
.submit{
    position:fixed;
    bottom:0;
    width:100%;
    z-index:999;
}

.submit-a{
    float:left;
    width:50%;
    height:50px;
    font-size:5vw;
    color:white;
    background-color:#A9A9A9;

}

.submit-b{
    float:right;
    width:50%;
    height:50px;
    font-size:5vw;
    color:white;
    background-color:#B22222;

}
</style>
