<template>
<Content>

<div v-responsive.lg.xl class="everything">
<Row :gutter="16">
        <Col span="5">
        <Card class = "layout-shaixuan">   
                
            <h2>快速筛选</h2><Divider />
       
                        品牌:
                        <Select v-model="model2" class="selector">
                            <Option v-for="title in brand" v-bind:key="title.id" >
                                <div @click="hotBrand(title.name)">{{title.name}}</div>
                            </Option>
                        </Select>

                        类型:
                        <Select v-model="model2" class="selector">
                            <Option v-for="title in types" v-bind:key="title.id" >
                                <div @click="type_level(title.name)">{{title.name}}</div>
                            </Option>
                        </Select>

                        首付:
                        <Select v-model="model3" class="selector">
                            <Option v-for="title in firstPay" v-bind:key="title.id">
                                <div @click="fpay(title.price)">{{title.price}}</div>
                            </Option>
                        </Select>

                        月供:
                        <Select v-model="model4" class="selector">
                            <Option v-for="title in monthPay" v-bind:key="title.id">
                                <div @click="mpay(title.price)">{{title.price}}</div>
                            </Option>
                        </Select> 

                        剩余时间(月):
                        <Select v-model="model3" class="selector">
                            <Option v-for="title in times" v-bind:key="title.id">
                                <div @click="time(title.name)">{{title.name}}</div>
                            </Option>
                        </Select>

                        全款:
                        <Select v-model="model4" class="selector">
                            <Option v-for="title in fullpay" v-bind:key="title.id">
                                <div @click="fullpays(title.price)">{{title.price}}</div>
                            </Option>
                        </Select>               
           
                </Card>
            </Col>

                
    

            <Col span = "17">
            <h1 class = 'title'>筛选结果</h1><hr><br>
            <Dropdown trigger="click" class = "sort">
                            <a>
                                 排序
                                <Icon type="ios-arrow-down"></Icon>
                            </a>
                            <DropdownMenu slot="list" v-for="title in sorts" v-bind:key="title.id">
                                <div @click="sortL(title.id)" class="each-sort">{{title.name}}</div>
                            </DropdownMenu>
                        </Dropdown><div class = "gap"></div>

           <div>
                <Row :gutter="16">
                        <Col class = "layout-carinfo-col" span="6" v-for="i in sortedList" v-bind:key = "i.car_id">
                            
                            <Card>
                                <div @click = "click(i.car_id)">
                                    <Row>
                                        <Col span='24'><img src = '../../assets/bmw/m4-1.jpeg'></Col>
                                        <Col span='24'>
                                            <div class = "pic-info">
                                                <Row class = "row2">
                                                    <Col span = "24"><p>{{i.year}} {{i.brand}} {{i.make}}</p></Col>
                                                    <Col span = "24"><p>位置: <span id = "info">Ontario/Toronto</span></p></Col>
                                                    <Col span = "24"><p>首付/月供: <span id = "info">{{i.firstpay}} / {{i.monthpay}}</span></p></Col>
                                                    <Col span = "24"><p>全款: <span id = "info">{{i.fullprice}}</span></p></Col>
                                                    <Col span = "24"><p>剩余时间(月): <span id = "info">{{i.mile}}</span></p></Col>
                                                </Row>
                                            </div>
                                        </Col>
                                    </Row>
                                </div>
                            </Card>
                        </Col>
                </Row>
                </div>
            


            </Col>
            </Row>
</div>







<div v-responsive.md.sm.xs class = "all">

<div class = "selector-all">
            <Row >
                        <Col span="12">
                        品牌:
                        <Select class="selector">
                    
                            <Option v-for="title in brand" v-bind:key="title.id" >
                                <div @click="hotBrand(title.name)">{{title.name}}</div>
                                </Option>

                        </Select>
                        </Col>

                        <Col span="12">
                        类型:
                        <Select class="selector">
                            <Option v-for="title in types" v-bind:key="title.id" >
                                <div @click="type_level(title.name)">{{title.name}}</div>
                            </Option>
                        </Select></Col>
            

                        <Col span="12">
                        首付:
                        <Select class="selector">
                            <Option v-for="title in firstPay" v-bind:key="title.id">
                                <div @click="fpay(title.price)">{{title.price}}</div>
                            </Option>
                        </Select></Col>

                        <Col span="12">
                        月供:
                        <Select class="selector">
                            <Option v-for="title in monthPay" v-bind:key="title.id">
                                <div @click="mpay(title.price)">{{title.price}}</div>
                            </Option>
                        </Select></Col>

                        <Col span="12">
                        剩余时间(月):
                        <Select class="selector">
                            <Option v-for="title in times" v-bind:key="title.id">
                                <div @click="time(title.name)">{{title.name}}</div>
                            </Option>
                        </Select></Col>

                        <Col span="12">
                        全款:
                        <Select class="selector">
                            <Option v-for="title in fullpay" v-bind:key="title.id">
                                <div @click="fullpays(title.price)">{{title.price}}</div>
                            </Option>
                        </Select></Col>


                        <Dropdown trigger="click" class = "sort-sm">
                            <a>
                                 排序
                                <Icon type="ios-arrow-down"></Icon>
                            </a>
                            <DropdownMenu slot="list" v-for="title in sorts" v-bind:key="title.id">
                                <div class="sort-sm-each" @click="sortL(title.id)">{{title.name}}</div>
                            </DropdownMenu>
                        </Dropdown>

                 </Row>
 </div>


           <div>
                <Row>
                    <!--<router-link to = "/singleCar2">-->
                   
                    <Col class = "layout-carinfo-col" span="24" >

                        <div class = "carlist" v-for="i in sortedList" v-bind:key="i.car_id">
                            <div @click = "click(i.car_id)">
                                <Row>
                                    <Col span = "13"><img src = '../../assets/carbrand/e4002.jpg'></Col>
                                    <Col span = "10">
                                        <div class = "pic-info">
                                            <Row class = "row2">
                                            <Col span = "24"><p>{{i.year}} {{i.brand}} {{i.make}}</p></Col>
                                            <Col span = "24"><p>位置: <span id = "info">Ontario/Toronto</span></p></Col>
                                            <Col span = "24"><p>首付/月供: <span id = "info">{{i.firstpay}} / {{i.monthpay}}</span></p></Col>
                                            <Col span = "24"><p>全款: <span id = "info">{{i.fullprice}}</span></p></Col>
                                            <Col span = "24"><p>剩余时间(月): <span id = "info">{{i.monthleft}}</span></p></Col>
                                            </Row>
                                        </div>
                                    </Col>
                                </Row>
                            </div>
                        
                            <divider/>
                            </div>

                    </Col>

                    </Row>
            </div>
            

            </div>



</div>
            

</Content>
</template>

<script>
    export default{
    data(){
        return{
           
            item:[],

            brand:[{id:1, name:'全部'},{id:2,name:'Audi'}, {id:3,name:'Acura'}, {id:4,name:'BMW'}, {id:5,name:'Benz'}, {id:6,name:'Buick'}, {id:7,name:'Cadillac'}, {id:8,name:'Chevrolet'}, {id:9,name:'Chrysler'}, 
                {id:10, name:'Dodge'}, {id:11, name:'Ferrari'}, {id:12, name:'Ford'}, {id:13, name:'GMC'}, {id:14, name:'Honda'}, {id:15, name:'Hyundai'}, {id:16, name:'Infiniti'}, {id:17, name:'Jaguar'}, {id:18, name:'Jeep'}, {id:19, name:'Kia'}, 
                {id:20, name:'Lamborghini'}, {id:21, name:'LandRover'}, {id:22, name:'Lexus'}, {id:23, name:'Lincolin'}, {id:24, name:'Maserati'}, {id:25, name:'Mazada'}, {id:26, name:'MINI'}, {id:27, name:'Mitsubishi'}, 
                {id:28, name:'Nissan'}, {id:29, name:'Porsche'}, {id:30, name:'Ram'}, {id:31, name:'Subaru'}, {id:32, name:'Tesla'}, {id:33, name:'Toyota'}, {id:34, name:'Volkswagen'}, {id:35, name:'Volvo'}],

            types:[
                    {id:1, name:'全部'},
                    {id:2, name:'Sedan'},
                    {id:3, name:'Coupe'},
                    {id:4, name:'SUV'},
                    {id:5, name:'Performance'}
                ],


            firstPay:[
                    {id:1, price:'全部'},
                    {id:2, price:'0-5000'},
                    {id:3, price:'5000-10000'},
                    {id:4, price:'10000-15000'},
                    {id:5, price:'15000-20000'},
                    {id:6, price:'20000-25000'},
                    {id:7, price:'25000-30000'},
                    {id:8, price:'30000以上'}
                ],

            monthPay:[
                    {id:1, price:'全部'},
                    {id:2, price:'0-250'},
                    {id:3, price:'250-500'},
                    {id:4, price:'500-750'},
                    {id:5, price:'750-1000'},
                    {id:6, price:'1000-1500'},
                    {id:7, price:'1500以上'},
                ],

            times:[
                    {id:1, name:'全部'},
                    {id:2, name:'24个月以内'},
                    {id:3, name:'24-36个月'},
                    {id:4, name:'36-48个月'},
                    {id:5, name:'48-60个月'},
                    {id:6, name:'60个月以上'}
                ],

            fullpay:[
                    {id:1, price:'全部'},
                    {id:2, price:'20000以内'},
                    {id:3, price:'20000-40000'},
                    {id:4, price:'40000-60000'},
                    {id:5, price:'60000-80000'},
                    {id:6, price:'80000-100000'},
                    {id:7, price:'100000以上'},
                ],

            
            
            sorts:[
                    {id:1, name:'月供从低到高'},
                    {id:2, name:'月供从高到低'},
                    {id:3, name:'首付从低到高'},
                    {id:4, name:'首付从高到低'},
                ],



                filter:{
                    brand:"",
                    type_level:"",
                    fpay:"0-100000",
                    mpay:"0-10000",

                    time:"0-100",
                    fullpays:"0-1000000",

                    sortL:1
            }
        }
    },


    created(){
        this.axios.get('http://localhost:8888/newCar.php',{

      }).then((response)=>{
          this.item = JSON.parse(JSON.stringify(response.data));
          console.log(response.status);
          console.log(this.item);
      })
    },

    methods:{


      hotBrand(name){
          if(name == "全部"){
              this.filter.brand = ''
          }else{
          this.filter.brand = name
          }
         console.log(this.filter.brand)
      },
      type_level(t){
          if(t == "全部"){
            this.filter.type_level = ''
          }else{
          this.filter.type_level = t
          }
      },
      fpay(p){
          if(p == "全部"){
            this.filter.fpay = '0-100000'
          }
          else if(p == "30000以上"){
              this.filter.fpay = "30000-100000"
          }
          else{
          this.filter.fpay = p
          }
      },
      mpay(p){
          if(p == "全部"){
            this.filter.mpay = '0-10000'
          }
          else if(p == "1500以上"){
              this.filter.mpay = "1500-10000"
          }
          else{
          this.filter.mpay = p
          }
      },

      time(t){
          if(t == "全部"){
            this.filter.time = '0-100'
          }else if(t == "24个月以内"){
              this.filter.time = '0-24'
          }
          else if(t == "60个月以上"){
              this.filter.time = '60-100'
          }
          else{
              this.filter.time = t
          }
      },

      fullpays(p){
          if(p == "全部"){
            this.filter.fullpays = '0-1000000'
          }else if(p == "20000以内"){
              this.filter.fullpays = '0-20000'
          }
          else if(p == "100000以上"){
              this.filter.fullpays = '100000-1000000'
          }
          else{
            this.filter.fullpays = p
          }
      },
      sortL(a){
          if(a == "全部"){
            this.filter.sortL = ''
          }else{
          this.filter.sortL = a
          }
      },
      
      filterResult(){

      },
      sendMsg(){
        this.$root.Bus.$emit('send',this.items)
      },
       click(uid){
           console.log(uid)
                this.$router.push({
                    path:'singlecar',
                    name:'singlecar',
                    params:{id: uid}})

      },
    },

    computed:{
    filterBrand:function(){
    return this.item.filter((item)=>{
        return item.brand.match(this.filter.brand)
    });
    },
    filterDPx:function(){
    return this.filterBrand.filter((item)=>{
        return item.firstpay >= parseInt(this.filter.fpay.split("-")[0])
          
    });
    },
    filterDPd:function(){
    return this.filterDPx.filter((item)=>{
        return item.firstpay < parseInt(this.filter.fpay.split("-")[1])
    });
    },
    filterCType:function(){
    return this.filterDPd.filter((item)=>{
      return item.type.match(this.filter.type_level)
    });
    },
    filterMx:function(){
    return this.filterCType.filter((item)=>{
        return item.monthpay >= parseInt(this.filter.mpay.split("-")[0])      
    });
    },
    filterMd:function(){
    return this.filterMx.filter((item)=>{
        return item.monthpay < parseInt(this.filter.mpay.split("-")[1])
    });
    },

    filterT1:function(){
    return this.filterMd.filter((item)=>{
        return item.monthleft >= parseInt(this.filter.time.split("-")[0])      
    });
    },
    filterT2:function(){
    return this.filterT1.filter((item)=>{
        return item.monthleft < parseInt(this.filter.time.split("-")[1])    
    });
    },

    filterFp1:function(){
    return this.filterT2.filter((item)=>{
        return item.fullprice >= parseInt(this.filter.fullpays.split("-")[0])      
    });
    },
    filterFp2:function(){
    return this.filterFp1.filter((item)=>{
        return item.fullprice < parseInt(this.filter.fullpays.split("-")[1])
    });
    },



    sortedList:function(){
        switch(this.filter.sortL){
            case 1: return this.filterFp2.sort((a,b)=>a.firstpay-b.firstpay);break;
            case 2: return this.filterFp2.sort((a,b)=>a.firstpay-b.firstpay).reverse();break
            case 3: return this.filterFp2.sort((a,b)=>a.monthpay-b.monthpay);break;
            case 4: return this.filterFp2.sort((a,b)=>a.monthpay-b.monthpay).reverse();break;
        }
    }

   
    }
    }
</script>

<style scoped>
a {
    color: #808080;
  }
  
/*large screen*/
.everything{
    width:100%;
    margin:auto;

    margin-top:10px;
    margin-bottom:13%;
}

.layout-shaixuan{

    margin-bottom:1%;
    text-align:left;

}

.selector{
margin-bottom:5%;
}

.title{
    text-align:center;
}
.sort{
    float:right;

}

.each-sort{
    margin-bottom:10%;
}

.gap{
    margin-top:2%;
    width:100%;
}






/*car list*/
.aaa{

    background-color:white;
}

.layout-carinfo-col{
    margin-bottom:2%;
}



.pic{
    height:0;
    padding-top:75%;
    border:1px solid black;
    font-size:1rem;
}


.pic-info{
    margin-left:0;
    margin-top:3%;
    height:30%;
    padding-bottom: 10%;
}


.flex{
    font:2rem;
}


.row1{
    text-align:left;
    font-size:1rem;
    background-color:#010b13;
    border-radius:5px;
    color:white;
    float:left;

}











/*small screen*/
.all{
    width:95%;
    margin:0 auto;
    margin-top:2%;
    margin-bottom:20%;
}

.selector-all{
    margin-bottom: 5%;
}

.selector{
margin-bottom:5%;
padding:3%;
}

.title{
    text-align:center;
    font-size:1.25rem;
    font-weight:400;
}
.sort{
    float:right;
}
.gap{
    width:100%;
    padding-bottom:2%;
}




/*car list*/
.aaa{

    background-color:white;
}

.layout-carinfo-col{
    margin-bottom:2%;
}


.carlist{
    width:95%;
    margin:0 auto;
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

.sort-sm-each{
    margin-bottom:10%;
    
}

a{
    text-decoration:none;
}


</style>