<template>
<Content v-responsive.lg.xl>
    <div class = "everything">
    <Row :gutter="16">
        <Col span="5">
        <Card>   
                
            <h2>快速筛选</h2><Divider />
       
                        品牌:
                        <Select class="selector">
                            <Option v-for="title in brand" v-bind:key="title.id" >
                                <div @click="hotBrand(title.name)">{{title.name}}</div>
                            </Option>
                        </Select>

                        类型:
                        <Select class="selector">
                            <Option v-for="title in types" v-bind:key="title.id" >
                                <div @click="type_level(title.name)">{{title.name}}</div>
                            </Option>
                        </Select>

                        年份:
                        <Select class="selector">
                            <Option v-for="title in years" v-bind:key="title.id">
                                <div @click="year(title.name)">{{title.name}}</div>
                            </Option>
                        </Select>

                        价格:
                        <Select class="selector">
                            <Option v-for="title in price" v-bind:key="title.id">
                                <div @click="ppay(title.price)">{{title.price}}</div>
                            </Option>
                        </Select>               
           
                </Card>
            </Col>

                
    

            <Col span = "18">
            <h1 class = 'title'>全款二手车</h1><hr><br>
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
                        <Col class = "layout-carinfo-col" span="6" v-for="i in filterDPd" v-bind:key = "i.car_id">
                            
                            <Card>
                                <div @click = "click(i.car_id)">
                                    <Row>
                                        <Col span='24'><img src = '../../assets/bmw/m4-1.jpeg'></Col>
                                        <Col span='24'>
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

      },


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
.everything{
    text-align:left;
}

h1{
    font-size:1.25rem;
    margin-bottom:1%;
}

h2{
    font-size:1.1rem;
}



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








.everything{
    width:100%;
    margin:auto;
    margin-top:10px;
    margin-bottom:13%;
}



.selector{
    text-align:left;
    margin:2% 0 15% 0;
}


.sort{
    text-align:center;
    float:right;
}

.each-sort{
    margin-bottom:10%;
}

.gap{
    margin-top:5%;
    width:100%;
}





/*car list*/


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



.row2 p{
    margin-top:3%;
    float:left;
    font-size:0.75rem;
}




img{
   width:100%;
}



</style>