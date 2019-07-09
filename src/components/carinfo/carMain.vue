<template>
    <div class="layout">
        <Layout>
            
            

            <Content v-responsive.lg.xl>
                <headerlg></headerlg>
                


                <div class = "selectAll-lg">
                    <div class="demo-tabs-style">
                        <Tabs type="card">
                            <TabPane label="热卖新车" ><shaixuan></shaixuan></TabPane>
                        </Tabs>
                    </div>
                </div>
                
                
            </Content>











            <Content v-responsive.md.sm.xs>
                <headersm></headersm>
            
                <div class = "selectAll">
                    <div class="demo-tabs-style">
                        <Tabs type="card">
                            <TabPane label="热卖新车" ><shaixuan></shaixuan></TabPane>
                        </Tabs>
                    </div>
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

import shaixuan from '@/components/carinfo/shaixuan';






    export default{

        components:{
            'headerlg':headerlg,
            'headersm':headersm,
            'shaixuan':shaixuan,
            'footer1':footer1,

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


</style>
