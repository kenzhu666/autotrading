<template>
    <div class="layout">
        <Layout>
            
            

            <Content v-responsive.lg.xl>
                <headerlg></headerlg>
                <div class = "selectAll-lg">
                    <Tabs type="card">
                        <TabPane label="低价转lease" ><leaseCar></leaseCar></TabPane>
                        <TabPane label="买二手车" ><shaixuan2></shaixuan2></TabPane>
                    </Tabs>
                </div>
               
                
                
            </Content>











            <Content v-responsive.md.sm.xs :style="{margin: '0 auto', width: '100%'}">
                <headersm></headersm>
                
                <div class = "selectAll">
                    <Tabs type="card">
                        
                            <TabPane label="低价转lease" ><leaseCar></leaseCar></TabPane>
                            <TabPane label="买二手车" ><shaixuansm2></shaixuansm2></TabPane>
                            
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


import shaixuan2 from '@/components/secondhand/shaixuan2.vue';
import shaixuansm2 from '@/components/secondhand/shaixuansm2.vue';
import leaseCar from '@/components/secondhand/leaseCar.vue';



    export default{

        components:{
            'headerlg':headerlg,
            'headersm':headersm,
            'shaixuan2':shaixuan2,
            'shaixuansm2':shaixuansm2,
            'leaseCar':leaseCar,
            'footer1':footer1

        },

        data(){
            return{

            }
    }
    }
</script>


<style scoped>




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

.demo-tabs-style > .ivu-tabs.ivu-tabs-card > .ivu-tabs-bar .ivu-tabs-tab-active{

    background:rgba(119,136,153,0.6);
   color:white;
   

}
</style>
