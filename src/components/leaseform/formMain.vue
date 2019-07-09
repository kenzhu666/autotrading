<template>
    <div class="layout">
        <Layout>
            
            

            <Content v-responsive.lg.xl>
                <headerlg></headerlg>
                <div class = "selectAll-lg">
                    <Tabs type="card">
                        <TabPane label="转lease" ><leaseform></leaseform></TabPane>
                        <TabPane label="卖二手车" ><secondhandform></secondhandform></TabPane>
                    </Tabs>
                </div>
               
                
                
            </Content>











            <Content v-responsive.md.sm.xs :style="{margin: '0 auto', width: '100%'}">
                <headersm></headersm>
                
                <div class = "selectAll">
                    <Tabs type="card">
                        
                            <TabPane label="转lease" ><leaseform></leaseform></TabPane>
                            <TabPane label="卖二手车" ><secondhandform></secondhandform></TabPane>
                            
                    </Tabs>
                    <!--
                    <Row>
                        <Col span='12'><Button exact-active-class="haha" v-on:click="component = 'leaseCar'"></Button></Col>
  
                        <Col span='12'><Button exact-active-class="haha" v-on:click="component = 'shaixuansm2'">买二手车</Button></Col>
                        <keep-alive>
                            <component v-bind:is="component"></component>
                        </keep-alive>
                        
                    </Row>-->
                </div>
               

            </Content>
            
            <footer1></footer1>

        </Layout>
            
    </div>    
</template>


<script>
import headerlg from '@/components/headerlg';
import headersm from '@/components/headersm';
import footer1 from '@/components/footer1';


import leaseform from '@/components/leaseform/leaseform.vue';
import secondhandform from '@/components/leaseform/secondhandform.vue';



    export default{

        components:{
            'headerlg':headerlg,
            'headersm':headersm,

            'leaseform':leaseform,
            'secondhandform':secondhandform,


        },

        data(){
            return{

            }
    }
    }
</script>


<style scoped>
    .layout{
    border: 1px solid #d7dde4;
    position: relative;
    border-radius: 4px;
    overflow: hidden;
    padding-bottom:10%;
    }

.layout-footer-center{
    text-align: center;
    background-image:url('../../assets/wallpaper/car-background.jpg');
    background-size: 100% 100%;
    color:#A9A9A9;
}



ul{
    text-align:left;
    color:purple;
}


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
