<template>
        <Layout>
            <Content v-responsive.lg.xl>
                <div class='lg'>
                    <Row class='part'>
                        <h1 id="title">基本信息</h1><hr>
                        <Row :gutter='36'>
                            <Col span='6' class='col'>
                            <p>年份</p>
                                <Input v-model="years" placeholder="请输入..."/>
                            </Col>

            
                            <Col span='6' class='col'>
                            <p>品牌</p>
                                    <Select
                                        v-model="brand"
                                        filterable
                                        remote
                                        :clearable="true"
                                        :remote-method="remoteMethod1"
                                        :loading="loading1"
                                        >
                                        <Option v-for="(option, index) in options1" :value="option.value" :key="index">{{option.label}}</Option>
                                    </Select>
                            </Col>

                            
                            <Col span='6' class='col'>
                            <p>型号</p>
                                <Input v-model="make" placeholder="请输入..."/>
                            </Col>

                            <Col span='6' class='col'>
                            <p>颜色</p>
                                <Input v-model="color" placeholder="请输入..."/>
                            </Col>

                            
                            <Col span='6' class='col'>
                            <p>已有公里数</p>
                                <Input v-model="mile" placeholder="请输入..."/>
                            </Col>
                            </Row>
                    </Row>



                    <Row class='part'>
                        <h1 id="title">高级信息</h1><hr>
                        <Row :gutter='36'>
                            <Col span='6' class='col'>
                            <p>车身类型</p>
                                <Select v-model='selectTypes'>
                                    <Option v-for="item in types" :key="item.id">
                                        <div @click='typeList(item.name)'>{{ item.name }}</div>
                                    </Option>
                                </Select>
                            </Col>

            
                            <Col span='6' class='col'>
                            <p>变速箱</p>
                                <Select v-model='selectBiansuxiang'>
                                    <Option v-for="item in biansuxiang" :key="item.id">
                                        <div @click='biansuxiangList(item.name)'>{{ item.name }}</div>
                                    </Option>
                                </Select>
                            </Col>

                            
                            <Col span='6' class='col'>
                            <p>燃油类型</p>
                                <Select v-model='selectGas'>
                                    <Option v-for="item in gas" :key="item.id">
                                        <div @click='gasList(item.name)'>{{ item.name }}</div>
                                    </Option>
                                </Select>
                            </Col>

                            
                            <Col span='6' class='col'>
                            <p>驱动模式</p>
                                <Select v-model='selectAutos'>
                                    <Option v-for="item in autos" :key="item.id">
                                        <div @click='autoList(item.name)'>{{ item.name }}</div>
                                    </Option>
                                </Select>
                            </Col>

                            <Col span='6' class='col'>
                            <p>座位数 </p>
                                <Input v-model="seats" placeholder="请输入..."/>
                            </Col>

                            
                            <Col span='6' class='col'>
                            <p>VIN NO </p>
                                <Input v-model="vin" placeholder="请输入..."/>
                            </Col></Row>
                    </Row>




                    <Row class='part'>
                        <h1 id="title">价格信息</h1><hr>
                            <Row :gutter='36'>
                                
                                <Col span='6' class='col'>
                                <p>预计售价$ </p>
                                    <Input v-model="price" placeholder="请输入..."/>
                                </Col>

                            </Row>
                    </Row>


                    <Row class='part'>
                        <h1 id="title">配置选项</h1><hr>
                        <Row :gutter='36'>
                            <Col span='12' class='col'> 
                            <Select v-model="selectConfig" multiple>
                                <Option v-for="item in config" :value="item.name" :key="item.id">
                                        <div @click='configList(item.name)'>{{ item.name }}</div>
                                </Option>
                            </Select>
                            </Col>
                        </Row>
                    </Row>


                    <Row class='part'>
                        <h1 id="title">联系方式</h1><hr>
                         <Row :gutter='36'>
                      
                                <Col span='6' class='col'>
                                <p>联系人 </p>
                                    <Input v-model="person" placeholder="请输入..."/>
                                </Col>

                                
                                <Col span='6' class='col'>
                                <p>联系电话 </p>
                                    <Input v-model="phone" placeholder="请输入..."/>
                                </Col>

                                <Col span='6' class='col'>
                                <p>验车日期 </p>
                                    <Input v-model="meetDate" placeholder="请输入..."/>
                                </Col>

                                <Col span='6' class='col'>
                                <p>偏好时间 </p>
                                    <Input v-model="meetTime" placeholder="请输入..."/>
                                </Col>
                    

                                <Col span='6' class='col'>
                                <p>验车地点 </p>
                                    <Input v-model="address" placeholder="请输入..."/>
                                </Col>

                                <Col span='6' class='col'>
                                <p>城市 </p>
                                    <Input v-model="city" placeholder="请输入..."/>
                                </Col>

                                <Col span='6' class='col'>
                                <p>邮编(选填) </p>
                                    <Input v-model="postal" placeholder="请输入..."/>
                                </Col>


                                <Col span="24" class='col'>
                                    <p>详细介绍(选填) </p>
                                     <Input v-model="comment" type="textarea" :autosize="{minRows: 5,maxRows: 5}" placeholder="请输入..."></Input>
                                </Col>
                            </Row>
                    </Row>

                    <Button @click='submitData();'>提交表单</Button>



                </div>
                            
            </Content>













            <Content v-responsive.md.sm.xs class='sm'>

                <div class='sm'>
                    <Row class='part-sm'>
                        <h1 id="title-sm">基本信息</h1><hr>
                        <Row :gutter='36'>
                            
                            <Col span='12' class='col-sm'>
                            <p>年份</p>
                                <Input v-model="years" placeholder="请输入..."/>
                            </Col>

            
                            <Col span='12' class='col-sm'>
                            <p>品牌</p>
                                    <Select
                                        v-model="brand"
                                        filterable
                                        remote
                                        :clearable="true"
                                        :remote-method="remoteMethod1"
                                        :loading="loading1">
                                        <Option v-for="(option, index) in options1" :value="option.value" :key="index">{{option.label}}</Option>
                                    </Select>
                            </Col>

                            
                            <Col span='12' class='col-sm'>
                            <p>型号</p>
                                <Input v-model="make" placeholder="请输入..."/>
                            </Col>

                            <Col span='12' class='col-sm'>
                            <p>颜色</p>
                                <Input v-model="color" placeholder="请输入..."/>
                            </Col>

                            
                            <Col span='12' class='col-sm'>
                            <p>已有公里数</p>
                                <Input v-model="mile" placeholder="请输入..."/>
                            </Col>
                            </Row>
                    </Row>



                    <Row class='part-sm'>
                        <h1 id="title-sm">高级信息</h1><hr>
                        <Row :gutter='36'>
                            <Col span='12' class='col-sm'>
                            <p>车身类型</p>
                                <Select v-model='selectTypes'>
                                    <Option v-for="item in types" :key="item.id">
                                        <div @click='typeList(item.name)'>{{ item.name }}</div>
                                    </Option>
                                </Select>
                            </Col>

            
                            <Col span='12' class='col-sm'>
                            <p>变速箱</p>
                                <Select v-model='selectBiansuxiang'>
                                    <Option v-for="item in biansuxiang" :key="item.id">
                                        <div @click='biansuxiangList(item.name)'>{{ item.name }}</div>
                                    </Option>
                                </Select>
                            </Col>

                            
                            <Col span='12' class='col-sm'>
                            <p>燃油类型</p>
                                <Select v-model='selectGas'>
                                    <Option v-for="item in gas" :key="item.id">
                                        <div @click='gasList(item.name)'>{{ item.name }}</div>
                                    </Option>
                                </Select>
                            </Col>

                            
                            <Col span='12' class='col-sm'>
                            <p>驱动模式</p>
                                <Select v-model='selectAutos'>
                                    <Option v-for="item in autos" :key="item.id">
                                        <div @click='autoList(item.name)'>{{ item.name }}</div>
                                    </Option>
                                </Select>
                            </Col>

                            <Col span='12' class='col-sm'>
                            <p>座位数 </p>
                                <Input v-model="seats" placeholder="请输入..."/>
                            </Col>

                            
                            <Col span='12' class='col-sm'>
                            <p>VIN NO </p>
                                <Input v-model="vin" placeholder="请输入..."/>
                            </Col></Row>
                    </Row>




                    <Row class='part-sm'>
                        <h1 id="title-sm">价格信息</h1><hr>
                        <Row :gutter='36'>

                                <Col span='12' class='col-sm'>
                                <p>预计售价$ </p>
                                    <Input v-model="price" placeholder="请输入..."/>
                                </Col>

                            </Row>
                    </Row>


                    <Row class='part-sm'>
                        <h1 id="title-sm">配置选项</h1><hr>
                        <Row :gutter='36'>

                            <Col span='24' class='col-sm'> 
                            <Select v-model="selectConfig" multiple>
                                <Option v-for="item in config" :value="item.name" :key="item.id">
                                        <div @click='configList(item.name)'>{{ item.name }}</div>
                                </Option>
                            </Select>
                            </Col>

                        </Row>
                    </Row>


                     <Row class='part-sm'>
                        <h1 id="title-sm">联系方式</h1><hr>

                            <Row :gutter='36' class='part-sm'>

                                <Col span='12' class='col-sm'>
                                <p>联系人 </p>
                                    <Input v-model="person" placeholder="请输入..."/>
                                </Col>

                                
                                <Col span='12' class='col-sm'>
                                <p>联系电话 </p>
                                    <Input v-model="phone" placeholder="请输入..."/>
                                </Col>

                                <Col span='12' class='col-sm'>
                                <p>验车日期 </p>
                                    <Input v-model="meetDate" placeholder="请输入..."/>
                                </Col>

                                <Col span='12' class='col-sm'>
                                <p>偏好时间 </p>
                                    <Input v-model="meetTime" placeholder="请输入..."/>
                                </Col>
                
                        

                                <Col span='12' class='col-sm'>
                                <p>验车地点 </p>
                                    <Input v-model="address" placeholder="请输入..."/>
                                </Col>

                                <Col span='12' class='col-sm'>
                                <p>城市 </p>
                                    <Input v-model="city" placeholder="请输入..."/>
                                </Col>

                                <Col span='12' class='col-sm'>
                                <p>邮编(选填) </p>
                                    <Input v-model="postal" placeholder="请输入..."/>
                                </Col>
                                
                                <Col span="24" class='col-sm'>
                                    <p>详细介绍(选填) </p>
                                     <Input v-model="comment" type="textarea" :autosize="{minRows: 5,maxRows: 5}" placeholder="请输入..."></Input>
                                </Col>
                                
                                
                                
                                </Row>
                                
                             


                    </Row>

                 
                                
                    

                    <Button class = "leaseb" @click='submitData();'>提交表单</Button>



                </div>

            </Content>



            
            <footer1></footer1>

        </Layout>

</template>


<script>
import axios from 'axios';
import footer1 from '@/components/footer1';

import { uploadImgToBase64 } from '@/utils' // 导入本地图片转base64的方法


    export default{

        components:{
            'footer1':footer1

        },

        data(){
            return{
                brand:'',
                loading1: false,
                options1: [],
                brandlist: ['Audi', 'Acura', 'BMW', 'Benz', 'Buick', 'Cadillac', 'Chevrolet', 'Chrysler', 
                'Dodge', 'Ferrari', 'Ford', 'GMC', 'Honda', 'Hyundai', 'Infiniti', 'Jaguar', 'Jeep', 'Kia', 
                'Lamborghini', 'LandRover', 'Lexus', 'Lincolin', 'Maserati', 'Mazada', 'MINI', 'Mitsubishi', 
                'Nissan', 'Porsche', 'Ram', 'Subaru', 'Tesla', 'Toyota', 'Volkswagen', 'Volvo'],


                years:'',
                color:'',
                make:'',
                mile:'',

                types:[
                    {id:1, name:'Sedan'},
                    {id:2, name:'Coupe'},
                    {id:3, name:'SUV'},
                    {id:4, name:'Performance'}
                ],

                biansuxiang:[
                    {id:1, name:'auto'},
                    {id:2, name:'手动'}
                ],

                gas:[
                    {id:1, name:'gas'},
                    {id:2, name:'柴油'},
                    {id:3, name:'电动'},
                    {id:4, name:'油电混合'}
                ],

                config: [
                    {id:1, name:'普通天窗'},
                    {id:2, name:'全景天窗'},
                    {id:3, name:'皮质座椅'},
                    {id:4, name:'加热座椅'},
                    {id:5, name:'制冷座椅'},
                    {id:6, name:'倒车摄像头'},
                    {id:7, name:'倒车雷达'},
                    {id:8, name:'盲点探测'},
                    {id:9, name:'加热方向盘'},
                    {id:10, name:'无钥进入'},
                    {id:11, name:'无钥启动'},
                    {id:12, name:'360度全景探测'},
                    {id:13, name:'高级音响'}
                ],

                

                autos:[
                    {id:1, name:'front'},
                    {id:2, name:'后驱'},
                    {id:3, name:'四驱'}
                ],

                selectTypes:'',
                selectBiansuxiang:'',
                selectGas:'',
                selectAutos:'',
                selectConfig:'',


                typeValue:'',
                biansuxiangValue:'',
                gasValue:'',
                autoValue:'',
                configvalue:'',


                seats:'',
                vin:'',
                
                price:'',

                person:'',
                phone:'',
                meetDate:'',
                meetTime:'',

                address:'',
                city:'',
                postal:'',
                comment:'',

                userId: localStorage.uid


                /*single:{
                    config: '普通天窗,全景天窗,皮质座椅,加热座椅,制冷座椅,倒车摄像头,倒车雷达,盲点探测,加热方向盘,无钥进入,无钥启动,360度全景探测,高级音响'
                }*/
            }
        },



        methods:{
            remoteMethod1 (query) {
                if (query !== '') {
                    this.loading1 = true;
                    setTimeout(() => {
                        this.loading1 = false;
                        const brandlist = this.brandlist.map(item => {
                            return {
                                value: item,
                                label: item
                            };
                        });
                        this.options1 = brandlist.filter(item => item.label.toLowerCase().indexOf(query.toLowerCase()) > -1);
                    }, 200);
                } else {
                    this.options1 = [];
                }
            },

            typeList(t){
                this.typeValue = t;
            },

            biansuxiangList(b){
                this.biansuxiangValue = b;
            },

            gasList(g){
                this.gasValue = g;
            },

            autoList(a){
                this.autoValue = a;
            },

            configList(itemName){
                    this.configvalue += itemName + ", ";
            },


           submitData(){
            let postData = this.$qs.stringify({
                years:this.years,
                brand:this.brand,
                color:this.color,
                make:this.make,
                mile:this.mile,


                typeValue:this.typeValue,
                biansuxiangValue:this.biansuxiangValue,
                gasValue:this.gasValue,
                autoValue:this.autoValue,




                seats:this.seats,
                vin:this.vin,
                configvalue:this.configvalue,
                price:this.price,
               

                person:this.person,
                phone:this.phone,

                meetDate:this.meetDate,
                meetTime:this.meetTime,

                address:this.address,
                city:this.city,
                postal:this.postal,
                comment:this.comment,



                userId:this.userId,
                submit:'submit'


        });



        console.log(postData);
        this.axios({method: 'post', url:'http://localhost:8888/post.php', data:postData})
        .then(res => {
            console.log(res.data);
           });
           this.$Message.success("success!");

        }
        }
    }
</script>


<style scoped>
.lg{
    width:90%;
    margin:0 auto;
    margin-top:2%;

}

.part{
    margin-bottom:6%;
}

.col{
    margin-top:3%;
}

#title{
    text-align:left;
}


p{
    margin-bottom:1%;
}

.price{
    width:60%;
}

.special{
    margin-bottom:3%;
}





/*small screen*/

.sm{
    width:95%;
    margin:0 auto;
    margin-top:2%;

}

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

.leaseb{
    margin-bottom:5%;
}

</style>
