<template>
<Layout>






    <Content class = "sm" v-responsive.md.sm.xs.lg.xl>

    
                    <Row>
                    
                        <Col class = "layout-carinfo-col" span="24" >
                            
                            <div class = "carlist" v-for="i in item" v-bind:key="i.id">
                                <div v-if="validCheck(i)">
                                    <div @click = "click(item.car_id)">
                                        
                                        <Row>
                                            <Col span = "13"><img src = '../../assets/carbrand/e4002.jpg'></Col>
                                            <Col span = "10">
                                                <div class = "pic-info">
                                                    <Row class = "row2">
                                                    <Col span = "24"><p>{{i.year}} {{i.brand}} {{i.make}}</p></Col>
                                                    <Col span = "24"><p>位置: <span id = "info">Ontario/Toronto</span></p></Col>
                                                    <Col span = "24"><p>首付/月供: <span id = "info">{{i.firstpay}} / {{i.monthpay}}</span></p></Col>
                                                    <Col span = "24"><p>剩余时间: <span id = "info">{{i.monthleft}}</span></p></Col>
                                                    <Col span = "24"><p>剩余公里数: <span id = "info">{{i.mileleft}}</span></p></Col>
                                                    </Row>
                                                </div>
                                            </Col>
                                           
                                             
                                        </Row>
                                        </div>

                            
                                        </div>
                                          <div v-else>
                                                审核中
                                            </div>
                                
                            
                            
                                <divider/>
                                </div>
                        </Col>

                        </Row>
            


    </Content>

</Layout>
</template>


<script>



export default {

    
    data(){
            return{
                item:[],

                uid: localStorage.uid
            }
        },

         created(){
                
                var userID = this.uid/*this.id就是传进来的uid*/
            	this.axios.get('http://localhost:8888/zhuanlease.php',{
							params:{
                                uid:userID/*PHP　file的　ID　*/
                            }
						}).then((response) => {
                         this.item =JSON.parse(JSON.stringify(response.data));
                        console.log(this.item);
                 });

                 
    },

    methods:{
      validCheck(i){
          if(i.valid == 0){
              return false
          }else{
              return true
          }
      },
      click(uid){
                this.$router.push({
                    path:'singleCar2',
                    name:'singleCar2',
                    params:{id: uid}})
      }
    }
    
}
</script>

<style>
.sm{
    width:95%;
    margin:0 auto;
    margin-top:5%;
}


.pic{
    height:0;
    padding-top:75%;
    border:1px solid black;
    font-size:1rem;
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



#info{
   color:#A9A9A9;
}



img{
   width:100%;
}

.sort-sm{
    float:right;
    
}

a{
    text-decoration:none;
}

/*

.part-sm{
    margin-bottom:15%;
}

.col-sm{
    margin-top:10%;
}

.col-title-sm{
    margin-bottom:2%;
    float:left;
}

#title-sm{
    text-align:left;
    font-size: 3vw;
    margin-bottom:1%;
}



.price-sm{
    width:60%;
}

.special-sm{
    margin-bottom:3%;
}

*/




</style>

