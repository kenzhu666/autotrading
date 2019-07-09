<template>
<Content class='all'>
<div class = "everything" v-responsive.lg.xl>
    <Row>
        <div>
            <Col span="4">
        <Card class = "layout-shaixuan">   
                
            <h2>产品筛选</h2><Divider />
       
                        <Checkbox class="selector" v-model="all">全部</Checkbox>
                        <Checkbox class="selector" v-model="latest">新品上架</Checkbox>
                        <Checkbox class="selector" v-model="discount">优惠折扣</Checkbox>
                        <Checkbox class="selector" v-model="yongpin">用品类</Checkbox>
                        <Checkbox class="selector" v-model="xiangxun">香薰类</Checkbox>
                        <Checkbox class="selector" v-model="jichao">极潮车饰</Checkbox>
                        <Checkbox class="selector" v-model="jijian">极简车饰</Checkbox>

               
           
                </Card>
                </Col>
                </div>
          

                

            <Col span = "19" class = "col">
                <Divider orientation="left"><h2 class = 'title'>新品上架</h2></Divider>
                <Row :gutter = '18'>
                    <Col v-responsive.lg.xl class = "layout-carinfo-col" span="6">
                    <router-link to = "/singleItem">
                    <div class = "items">
                        <Row >
                                <Col span="24"><div class = "pic"></div></Col>
                                    <div class = "pic-info">
                                        <Row>
                                        <Col span = "24"><p id = "name">名称</p></Col>
                                        <Col span = "24"><p id = "price">价格</p></Col>
                                        </Row>
                                    </div>
                        </Row>
                        
                        </div>
                        </router-link>
                    </Col>

                    <Col v-responsive.lg.xl class = "layout-carinfo-col" span="6">
                    <div class = "items">
                        <Row >
                                <Col span="24"><div class = "pic"></div></Col>
                                    <div class = "pic-info">
                                        <Row>
                                        <Col span = "24"><p id = "name">名称</p></Col>
                                        <Col span = "24"><p id = "price">价格</p></Col>
                                        </Row>
                                    </div>
                        </Row>
                        
                        </div>
                    </Col>
                </Row>
            </Col>


            <Col span = "19" class = "col">
                <Divider orientation="left"><h2 class = 'title'>优惠折扣</h2></Divider>
                <Row :gutter = '18'>
                    <Col v-responsive.lg.xl class = "layout-carinfo-col" span="6">
                    <div class = "items">
                        <Row >
                                <Col span="24"><div class = "pic"></div></Col>
                                    <div class = "pic-info">
                                        <Row>
                                        <Col span = "24"><p id = "name">名称</p></Col>
                                        <Col span = "24"><p id = "price">价格</p></Col>
                                        </Row>
                                    </div>
                        </Row>
                        </div>
                    </Col>
                </Row>
            </Col>

            <Col span = "19" class = "col">
                <Divider orientation="left"><h2 class = 'title'>用品类</h2></Divider>
                <Row :gutter = '18'>
                    <Col v-responsive.lg.xl class = "layout-carinfo-col" span="6">
                    <div class = "items">
                        <Row >
                                <Col span="24"><div class = "pic"></div></Col>
                                    <div class = "pic-info">
                                        <Row>
                                        <Col span = "24"><p id = "name">名称</p></Col>
                                        <Col span = "24"><p id = "price">价格</p></Col>
                                        </Row>
                                    </div>
                        </Row>
                        </div>
                    </Col>
                </Row>
            </Col>

            <Col span = "19" class = "col">
                <Divider orientation="left"><h2 class = 'title'>香薰类</h2></Divider>
                <Row :gutter = '18'>
                    <Col v-responsive.lg.xl class = "layout-carinfo-col" span="6">
                    <div class = "items">
                        <Row >
                                <Col span="24"><div class = "pic"></div></Col>
                                    <div class = "pic-info">
                                        <Row>
                                        <Col span = "24"><p id = "name">名称</p></Col>
                                        <Col span = "24"><p id = "price">价格</p></Col>
                                        </Row>
                                    </div>
                        </Row>
                        </div>
                    </Col>
                </Row>
            </Col>

            <Col span = "19" class = "col">
                <Divider orientation="left"><h2 class = 'title'>极潮车饰</h2></Divider>
                <Row :gutter = '18'>
                    <Col v-responsive.lg.xl class = "layout-carinfo-col" span="6">
                    <div class = "items">
                        <Row >
                                <Col span="24"><div class = "pic"></div></Col>
                                    <div class = "pic-info">
                                        <Row>
                                        <Col span = "24"><p id = "name">名称</p></Col>
                                        <Col span = "24"><p id = "price">价格</p></Col>
                                        </Row>
                                    </div>
                        </Row>
                        </div>
                    </Col>
                </Row>
            </Col>

            <Col span = "19" class = "col">
                <Divider orientation="left"><h2 class = 'title'>极简车饰</h2></Divider>
                <Row :gutter = '18'>
                    <Col v-responsive.lg.xl class = "layout-carinfo-col" span="6">
                    <div class = "items">
                        <Row >
                                <Col span="24"><div class = "pic"></div></Col>
                                    <div class = "pic-info">
                                        <Row>
                                        <Col span = "24"><p id = "name">名称</p></Col>
                                        <Col span = "24"><p id = "price">价格</p></Col>
                                        </Row>
                                    </div>
                        </Row>
                        </div>
                    </Col>
                </Row>
            </Col>
        </Row>
</div>















<div class="everything" v-responsive.md.sm.xs>

<hr>
            <Row class='selectorRow-sm'>
                <Col span='12'>
                        <Dropdown trigger="click" class="selector-sm1">
                            <a>
                                <h3>筛选</h3>

                            </a>
                            <DropdownMenu class="selector" slot="list" >
                                <DropdownItem v-for="i in types" :key="i.id">
                                     <div @click="type(i.type)">
                                         {{i.type}}
                                    </div>
                                </DropdownItem>
                            </DropdownMenu>
                        </Dropdown></Col>


                        <Col span='12'>
                        <Dropdown trigger="click" class="selector-sm2">
                            <a href="javascript:void(0)">
                                <h3>排序</h3>
                            </a>
                            <DropdownMenu v-model="model" class="selector" slot="list">
                                <DropdownItem v-for="i in list" :value="i.type" :key="i.value">{{i.type}}</DropdownItem>
                            </DropdownMenu>
                        </Dropdown></Col>
            </Row>


<Row>
    <hr><br>


    <br>

    <Col span = "24" class = "col">
    <p id = "name">{{filter.types}}</p>
                <Row :gutter = '24'>
                    
                    <Col class = "layout-carinfo-col" span="12" v-for="i in filtertypes" :key="i.item_id">
                            <div class = "items" @click = "click(i.item_id)">
                            <Row >

                                    <Col span="24" ><div class = "pic"></div></Col>
                                        <div class = "pic-info">
                                            <Row>
                                            <Col span = "24"><p id = "name">{{i.name}}</p></Col>
                                            <Col span = "24"><p id = "price">{{i.price}}</p></Col>
                                            </Row>
                                        </div>
                            </Row>
                            </div>
                    </Col>

                </Row>
    </Col>
    
<!--
    <Col span = "24" class = "col">
                <Divider orientation="left"><h4 class = 'title'>优惠折扣</h4></Divider>
                <Row :gutter = '24'>
                    <Col class = "layout-carinfo-col" span="12">
                    <div class = "items">
                        <Row >
                                <Col span="24"><div class = "pic"></div></Col>
                                    <div class = "pic-info">
                                        <Row>
                                        <Col span = "24"><p id = "name">名称</p></Col>
                                        <Col span = "24"><p id = "price">价格</p></Col>
                                        </Row>
                                    </div>
                        </Row>
                        </div>
                    </Col>
                
                </Row>
    </Col>


    <Col span = "24" class = "col">
                <Divider orientation="left"><h4 class = 'title'>用品类</h4></Divider>
                <Row :gutter = '24'>
                    <Col class = "layout-carinfo-col" span="12">
                    <div class = "items">
                        <Row >
                                <Col span="24"><div class = "pic"></div></Col>
                                    <div class = "pic-info">
                                        <Row>
                                        <Col span = "24"><p id = "name">名称</p></Col>
                                        <Col span = "24"><p id = "price">价格</p></Col>
                                        </Row>
                                    </div>
                        </Row>
                        </div>
                    </Col>
                
                </Row>
    </Col>

    <Col span = "24" class = "col">
                <Divider orientation="left"><h4 class = 'title'>香薰类</h4></Divider>
                <Row :gutter = '24'>
                    <Col class = "layout-carinfo-col" span="12">
                    <div class = "items">
                        <Row >
                                <Col span="24"><div class = "pic"></div></Col>
                                    <div class = "pic-info">
                                        <Row>
                                        <Col span = "24"><p id = "name">名称</p></Col>
                                        <Col span = "24"><p id = "price">价格</p></Col>
                                        </Row>
                                    </div>
                        </Row>
                        </div>
                    </Col>
                
                </Row>
    </Col>

    <Col span = "24" class = "col">
                <Divider orientation="left"><h4 class = 'title'>极潮车饰</h4></Divider>
                <Row :gutter = '24'>
                    <Col class = "layout-carinfo-col" span="12">
                    <div class = "items">
                        <Row >
                                <Col span="24"><div class = "pic"></div></Col>
                                    <div class = "pic-info">
                                        <Row>
                                        <Col span = "24"><p id = "name">名称</p></Col>
                                        <Col span = "24"><p id = "price">价格</p></Col>
                                        </Row>
                                    </div>
                        </Row>
                        </div>
                    </Col>
                
                </Row>
    </Col>

    <Col span = "24" class = "col">
                <Divider orientation="left"><h4 class = 'title'>极简车饰</h4></Divider>
                <Row :gutter = '24'>
                    <Col class = "layout-carinfo-col" span="12">
                    <div class = "items">
                        <Row >
                                <Col span="24"><div class = "pic"></div></Col>
                                    <div class = "pic-info">
                                        <Row>
                                        <Col span = "24"><p id = "name">名称</p></Col>
                                        <Col span = "24"><p id = "price">价格</p></Col>
                                        </Row>
                                    </div>
                        </Row>
                        </div>
                    </Col>
                
                </Row>
    </Col>-->
                
</Row>

</div>

    </Content>




    
</template>

<script>
    export default{
        data(){
            return{
                item:[],

          

                types:[
                    {id:'', type:'全部'},
                    {id:'新品上架', type:'新品上架'},
                    {id:'优惠折扣', type:'优惠折扣'},
                    {id:'用品类', type:'用品类'},
                    {id:'香薰类', type:'香薰类'},
                    {id:'极潮车饰', type:'极潮车饰'},
                    {id:'极简车饰', type:'极简车饰'}
                ],

                filter:{
                    names:"",
                    types:""
                }

            }
        },

        created(){
            this.axios.get('http://localhost:8888/store.php',{

        }).then((response)=>{
            this.item = JSON.parse(JSON.stringify(response.data));
            console.log(response.status);
            console.log(this.item);
        })
        },


        methods:{
       
          type(name){
            if(name == "全部"){
                this.filter.types = ''
            }else{
            this.filter.types = name
            }
            },
            
            click(uid){
                console.log(uid)
                    this.$router.push({
                        path:'singleItem',
                        name:'singleItem',
                        params:{id: uid}})
            }     
        },
        computed:{
            filtertypes:function(){
            return this.item.filter((item)=>{
                return item.type.match(this.filter.types)
            });
            }
        }

        

}
</script>

<style scoped>
.border{
    width:50%;
    border-left:1px solid black;
}
a{
    color:black;
}
.everything{
    width:90%;
    margin:auto;
    margin-top:70px;
}

.layout-shaixuan{

    margin-bottom:1%;
    text-align:left;

}

.selector{
margin-bottom:5%;
width:100%;
}


.selector-sm1{
    text-align:center;
    margin:5% 0 5% 0;
    width:100%;
}

.selector-sm2{
    text-align:center;
    margin:5% 0 5% 0;
    width:100%;
}

.selector-sm1{
    border-right:1px solid black;
}




.title{
    text-align:center;
}








/*car list*/
.col{
    float:right;
}
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
    margin-top:3%;
    height:30%;
    padding-left:1%;
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
    padding:3%;
}



.row2 p{
    margin-top:3%;
    float:left;
    font-size:0.75rem;
}


#name{
    margin-top:2%;
    margin-bottom:2%;
}

img{
   width:100%;
}

.a{
    color:#515a6e;
}

</style>