<template>
<Layout>
    <Content v-responsive.lg.xl>
            <headerlg></headerlg>
            <!--收货地址<hr>-->

            <div class = "selectAll-lg">
                <div class="demo-tabs-style">
                    <Tabs type="card">
                        <TabPane label="我的转Lease" ><myCar></myCar></TabPane>
                        <TabPane label="我的二手车转卖" ><myCar2></myCar2></TabPane>
                    </Tabs>
                </div>
            </div>
    </Content>






    <Content v-responsive.md.sm.xs>
            <headersm></headersm>

            <div class = "selectAll">
                <div class="demo-tabs-style">
                    <Tabs type="card">
                        <TabPane label="我的转Lease" ><myCar></myCar></TabPane>
                        <TabPane label="我的二手车转卖" ><myCar2></myCar2></TabPane>
                    </Tabs>
                </div>
            </div>




            <!--<div class='test1'>
            <div class='everything'>
                <div class='first'>    
                    <h4>收货地址</h4><hr><br>
                    <u @click = "address()">+添加收货地址</u>
                </div>
                <div class='second'>    
                    <h4>订单详情</h4><hr><br>

                <div class='each-sm'>
                    <Row>
                    <br>
                    <Col span="24" >
                        <div class = "carlist" v-for = "item4 in random4" v-bind:key = "item4.item_id">
                            <div @click = "click4(item4.item_id)">
                                            <Row >
                                                    <Col span="8" ><img src = '../assets/wallpaper/cheshi.jpg'></Col>
                                                    <Col span='8'>
                                                        <div class = "pic-info">
                                                            <Row>
                                                            <Col span = "24"><p id = "name">{{item4.name}}</p></Col>
                                                            <Col span = "24"><p id = "name">qty:{{item4.qty}}</p></Col>
                                                            <Col span = "24"><p id = "price">price: {{item4.price}}</p></Col>
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
            </div>-->
    </Content>

</Layout>
</template>


<script>
import headerlg from '@/components/headerlg';
import headersm from '@/components/headersm';
import myCar from '@/components/userMain/myCar';
import myCar2 from '@/components/userMain/myCar2.vue'

export default {
    components:{

            'headerlg':headerlg,
            'headersm':headersm,
            'myCar':myCar,
            'myCar2':myCar2
        },
    
    data(){
        return{


        }

    },

   
    
}
</script>

<style>
.selectAll{
    width:95%;
    margin:0 auto;
    margin-top:15%;
}

.selectAll-lg{
    width:95%;
    margin:0 auto;
    margin-top:70px;
}





</style>

