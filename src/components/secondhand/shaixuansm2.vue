<template>
<Content v-responsive.md.sm.xs>

<div class = "all">
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
                        年份:
                        <Select class="selector">
                            <Option v-for="title in years" v-bind:key="title.id">
                                <div @click="year(title.name)">{{title.name}}</div>
                            </Option>
                        </Select></Col>

                        <Col span="12">
                        价格:
                        <Select class="selector">
                            <Option v-for="title in price" v-bind:key="title.id">
                                <div @click="ppay(title.price)">{{title.price}}</div>
                            </Option>
                        </Select></Col>

                        <Dropdown trigger="click" class = "sort-sm">
                            <a>
                                 排序
                                <Icon type="ios-arrow-down"></Icon>
                            </a>
                            <DropdownMenu slot="list" v-for="title in sorts" v-bind:key="title.id">
                                <div class="each-sort" @click="sortL(title.id)">{{title.name}}</div>
                            </DropdownMenu>
                        </Dropdown>
                 </Row>
 </div>

    


           





           <div>
                <Row>
                    <!--<router-link to = "/singleCar2">-->
                   
                    <Col class = "layout-carinfo-col" span="24" >
                        
                        <div class = "carlist" v-for="i in filterDPd" v-bind:key="i.car_id">
                            <div @click = "click(i.car_id)">
                                <Row>
                                    <Col span = "13"><img src = '../../assets/bmw/m4-1.jpeg'></Col>
                                    <Col span = "10">
                                        <div class = "pic-info">
                                            <Row class = "row2">
                                            <Col span = "24"><p>{{i.years}} {{i.brand}} {{i.make}}</p></Col>
                                            <Col span = "24"><p>位置: <span id = "info">{{i.city}}</span></p></Col>
                                            <Col span = "24"><p>价格: <span id = "info">{{i.price}}</span></p></Col>
                                            <Col span = "24"><p>已有公里数: <span id = "info">{{i.mile}}</span></p></Col>
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

            years:[
                    {id:1, name:'全部'},
                    {id:2, name:'2015'},
                    {id:3, name:'2016'},
                    {id:4, name:'2017'},
                    {id:5, name:'2018'},
                    {id:6, name:'2019'}
            ],


            price:[
                    {id:1, price:'全部'},
                    {id:2, price:'0-10000'},
                    {id:3, price:'10000-20000'},
                    {id:4, price:'20000-30000'},
                    {id:5, price:'30000-40000'},
                    {id:6, price:'40000-50000'},
                    {id:7, price:'50000以上'}
                ],

            sorts:[
                    {id:1, name:'价格从低到高'},
                    {id:2, name:'价格从高到低'},
                    {id:3, name:'公里数从低到高'},
                    {id:4, name:'公里数从高到低'},
                ],


                filter:{
                brand:"",
                type_level:"",
                year:"",
                ppay:"0-200000",

                sortL:1
            }
        }
    },

    created(){
        this.axios.get('http://localhost:8888/secondhand.php',{

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
      },
      type_level(t){
          if(t == "全部"){
            this.filter.type_level = ''
          }else{
          this.filter.type_level = t
          }
      },

      year(t){
          if(t == "全部"){
            this.filter.year = ''
          }else{
          this.filter.year = t
          }
      },

      ppay(p){
          if(p == "全部"){
            this.filter.ppay = '0-200000'
          }
          else if(p == "50000以上"){
              this.filter.ppay = "50000-200000"
          }
          else{
          this.filter.ppay = p
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
                    path:'secondhanddetail',
                    name:'secondhanddetail',
                    params:{id: uid}})

      }
    },

    computed:{
    filterBrand:function(){
    return this.item.filter((item)=>{
        return item.brand.match(this.filter.brand)
    });
    },

    filterCType:function(){
    return this.filterBrand.filter((item)=>{
      return item.types.match(this.filter.type_level)
    });
    },

    filterCYear:function(){
    return this.filterCType.filter((item)=>{
      return item.years.match(this.filter.year)
    });
    },

    filterDPx:function(){
    return this.filterCYear.filter((item)=>{
        return item.price >= parseInt(this.filter.ppay.split("-")[0])
          
    });
    },
    filterDPd:function(){
    return this.filterDPx.filter((item)=>{
        return item.price < parseInt(this.filter.ppay.split("-")[1])
    });
    },

    sortedList:function(){
        switch(this.filter.sortL){
            case 1: return this.filterDPd.sort((a,b)=>a.price-b.price);break;
            case 2: return this.filterDPd.sort((a,b)=>a.price-b.price).reverse();break;
            case 3: return this.filterDPd.sort((a,b)=>a.mile-b.mile);break;
            case 4: return this.filterDPd.sort((a,b)=>a.mile-b.mile).reverse();break;
      
        }
    },

   
    }
    }
</script>

<style scoped>


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


.sort-sm{
    float:right;
}

.each-sort{
    margin-bottom:10%;
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

a{
    color:#808080;
}

</style>