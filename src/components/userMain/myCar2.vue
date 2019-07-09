<template>
<Layout>




    <Content class = "sm" v-responsive.md.sm.xs.lg.xl>

    
               
       


                        <Row>
                    
                        <Col v-responsive.md.sm.xs class = "layout-carinfo-col" span="24" >
                            
                            <div class = "carlist" v-for="i in item" v-bind:key="i.id">
                                <div v-if="validCheck(i)">
                                    <div @click = "click(i.car_id)">
                                        <Row>
                                            <Col span = "13"><img src = '../../assets/bmw/m4-1.jpeg'></Col>
                                            <Col span = "10">
                                                <div class = "pic-info">
                                                    <Row class = "row2">
                                                    <Col span = "24"><p>{{i.year}} {{i.brand}} {{i.make}}</p></Col>
                                                    <Col span = "24"><p>位置: <span id = "info">{{i.city}}</span></p></Col>
                                                    <Col span = "24"><p>价格: <span id = "info">{{i.price}}</span></p></Col>
                                                    <Col span = "24"><p>已有公里数: <span id = "info">{{i.mile}}</span></p></Col>
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
        

                 this.axios.get('http://localhost:8888/secondhand.php',{
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
                    path:'secondhanddetail',
                    name:'secondhanddetail',
                    params:{id: uid}})
      },

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






</style>

