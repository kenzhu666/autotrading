<template>
<Content>


<div v-responsive.lg.xl class = "all">

    <Row :gutter="16">
        <Col span="5">
        <Card class = "layout-shaixuan-lg">   
                
            <h2>快速筛选</h2><Divider />
       
                        品牌:
                        <Select v-model="model2" class="selector-lg">
                            <Option v-for="title in brand" v-bind:key="title.id" >
                                <div @click="hotBrand(title.name)">{{title.name}}</div>
                            </Option>
                        </Select>

                        类型:
                        <Select v-model="model2" class="selector-lg">
                            <Option v-for="title in types" v-bind:key="title.id" >
                                <div @click="type_level(title.name)">{{title.name}}</div>
                            </Option>
                        </Select>

                        首付:
                        <Select v-model="model3" class="selector-lg">
                            <Option v-for="title in firstPay" v-bind:key="title.id">
                                <div @click="fpay(title.price)">{{title.price}}</div>
                            </Option>
                        </Select>

                        月供:
                        <Select v-model="model4" class="selector-lg">
                            <Option v-for="title in monthPay" v-bind:key="title.id">
                                <div @click="mpay(title.price)">{{title.price}}</div>
                            </Option>
                        </Select>  

                        剩余月份:
                        <Select v-model="model3" class="selector-lg">
                            <Option v-for="title in monthleft" v-bind:key="title.id">
                                <div @click="monthl(title.name)">{{title.name}}</div>
                            </Option>
                        </Select>

                        剩余公里数:
                        <Select v-model="model4" class="selector-lg">
                            <Option v-for="title in mileft" v-bind:key="title.id">
                                <div @click="milel(title.name)">{{title.name}}</div>
                            </Option>
                        </Select>               
           
                </Card>
            </Col>

                
    

            <Col span = "18">
            <h1 class = 'title-lg'>转接LEASE</h1><hr><br>
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
                        <Col v-responsive.lg.xl class = "layout-carinfo-col" span="6" v-for= "i in filtermile2" v-bind:key = "i.car_id">
                            
                            <Card>
                                <div @click = "click(i.car_id)">
                                    <Row>
                                        <Col span='24'><img src = '../../assets/carbrand/e4002.jpg'></Col>
                                        <Col span='24'>
                                            <div class = "pic-info-lg">
                                                <Row class = "row2-lg">
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
                            </Card>
                        </Col>
                </Row>
                </div>
            





                <!--<Page :total = sortedList.length :page_size="16" on-change = "change"/>

                <nav>
                    <ul class="pagination">
                    <li :class="{'disabled': current == 1}"><a href="javascript:;" @click="setCurrent(current - 1)"> « </a></li>
                    <li :class="{'disabled': current == 1}"><a href="javascript:;" @click="setCurrent(1)"> 首页 </a></li>
                    <li v-for="p in grouplist" v-bind:key = "p.id" :class="{'active': current == p.val}">
                        <a href="javascript:;" @click="setCurrent(p.val)"> {{ p.text }} </a>
                    </li>
                    <li :class="{'disabled': current == page}"><a href="javascript:;" @click="setCurrent(page)"> 尾页 </a></li>
                    <li :class="{'disabled': current == page}"><a href="javascript:;" @click="setCurrent(current + 1)"> »</a></li>
                    </ul>
                </nav>-->

            </Col>
            </Row>

</div>







<div v-responsive.md.sm.xs class = "all-sm">

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
                        剩余月份:
                        <Select class="selector">
                            <Option v-for="title in monthleft" v-bind:key="title.id">
                                <div @click="monthl(title.name)">{{title.name}}</div>
                            </Option>
                        </Select></Col>

                        <Col span="12">
                        剩余公里数:
                        <Select class="selector">
                            <Option v-for="title in mileft" v-bind:key="title.id">
                                <div @click="milel(title.name)">{{title.name}}</div>
                            </Option>
                        </Select></Col>
                 </Row>

                 <Dropdown trigger="click" class = "sort-sm">
                            <a>
                                 排序
                                <Icon type="ios-arrow-down"></Icon>
                            </a>
                            <DropdownMenu slot="list" v-for="title in sorts" v-bind:key="title.id">
                                <div class="each-sort" @click="sortL(title.id)">{{title.name}}</div>
                            </DropdownMenu>
                        </Dropdown>
 </div>

    


           <div>
                <Row>
                    <!--<router-link to = "/singleCar2">-->
                   
                    <Col class = "layout-carinfo-col" span="24" >
                        
                        <div class = "carlist" v-for="i in filtermile2" v-bind:key="i.car_id">
                            <div @click = "click(i.car_id)">
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
                    {id:5, name:'Jeep'},
                    {id:6, name:'Performance'}
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

             monthleft:[
                    {id:1, name:'全部'},
                    {id:2, name:'12个月以内'},
                    {id:3, name:'12-24个月'},
                    {id:4, name:'24-36个月'},
                    {id:5, name:'36-48个月'},
                    {id:6, name:'48个月及以上'},
                ],

            mileft:[
                    {id:1, name:'全部'},
                    {id:2, name:'12000以内'},
                    {id:3, name:'12000-36000'},
                    {id:4, name:'36000-60000'},
                    {id:5, name:'60000及以上'},
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
                monthl:"0-48",
                milel:"0-1000000",
                sortL:1
            }
        }
    },

    created(){
        this.axios.get('http://localhost:8888/zhuanlease.php',{

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
              this.filter.monthl = "30000-100000"
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
              this.filter.monthl = "1500-10000"
          }
          else{
          this.filter.mpay = p
          }
      },
      monthl(p){
          if(p == "全部"){
            this.filter.monthl = '0-100'
          }
          else if(p == "12个月以内"){
              this.filter.monthl = "0-12"
          }
          else if(p == "48个月及以上"){
              this.filter.monthl = "48-100"
          }
          else{
          this.filter.monthl = p
          }
      },
      milel(t){
          if(t == "全部"){
            this.filter.milel = '0-1000000'
          }else if(t == "12000以内"){
              this.filter.milel = "0-12000"
          }else if(t == "60000及以上"){
              this.filter.milel = "60000-1000000"
          }
          else{
          this.filter.milel = t
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
                    path:'singleCar2',
                    name:'singleCar2',
                    params:{id: uid}})

      }
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
    filterLtx:function(){
    return this.filterMd.filter((item)=>{
        return item.monthleft >= parseInt(this.filter.monthl.split("-")[0])      
    }); 
    },
    filterLtd:function(){
    return this.filterLtx.filter((item)=>{
        return item.monthleft < parseInt(this.filter.monthl.split("-")[1])      
    });   
    },
    filtermile:function(){
    return this.filterLtd.filter((item)=>{
        return item.mileleft >= parseInt(this.filter.milel.split("-")[0])      
    }); 
    },
    filtermile2:function(){
    return this.filtermile.filter((item)=>{
        return item.mileleft < parseInt(this.filter.milel.split("-")[1])      
    });   
    },

    sortedList:function(){
        switch(this.filter.sortL){
            case 1: return this.filtermile2.sort((a,b)=>a.firstpay-b.firstpay);break;
            case 2: return this.filtermile2.sort((a,b)=>a.firstpay-b.firstpay).reverse();break
            case 3: return this.filtermile2.sort((a,b)=>a.monthpay-b.monthpay);break;
            case 4: return this.filtermile2.sort((a,b)=>a.monthpay-b.monthpay).reverse();break;
        }
    }
   
    }
    }
</script>

<style scoped>

/*small screen*/
.all-sm{
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
    font-size:1rem;
    font-weight:400;
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










/*large */
/*分页*/
  .pagination {
    overflow: hidden;
    display: table;
    margin: 0 auto;
    /*width: 100%;*/
    height: 50px;
}
 .pagination li {
    float: left;
    height: 30px;
    border-radius: 5px;
    margin: 3px;
    color: #808080;
}
 .pagination li 
  :hover {
    background: #000;
}
  a {
    color: #808080;
  }


 .pagination li a {
    display: block;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    font-size: 12px;
    border-radius: 5px;
    text-decoration: none
  }


  .active {
    background: #000;
}
 .active a {
    color: #808080;
  }






.all{
    margin-bottom:13%;
}

.all h1{
    font-size:1.25rem;
    margin-bottom:1%;
}

h2{
    font-size:1.1rem;
}


.everything-lg{
    width:100%;
    margin:auto;
    background-color:white;
    margin-top:10px;
}

.layout-shaixuan-lg{

    margin-bottom:1%;
    text-align:left;

}

.selector-lg{
margin:2% 0 15% 0;
}

.title-lg{
    text-align:center;
}
.sort{
    float:right;
}
.gap{
    width:100%;
    padding-bottom:5%;
}






/*car list*/
.aaa{

    background-color:white;
}

.layout-carinfo-col{
    margin-bottom:2%;
}



.pic-lg{
    height:0;
    padding-top:75%;
    border:1px solid black;
    font-size:1rem;
}


.pic-info-lg{
    margin-left:0;
    margin-top:3%;
    height:30%;
    padding-bottom: 10%;
}



.row1-lg{
    text-align:left;
    font-size:1rem;
    background-color:#010b13;
    border-radius:5px;
    color:white;
    float:left;

}



.row2-lg p{
    margin-top:3%;
    float:left;
    font-size:0.75rem;
}


.sort-sm{
    margin:2% 0 5% 0;
    float:right;
}

</style>