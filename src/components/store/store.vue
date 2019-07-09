<template>
    <div class="layout">
        <Layout>
            
            <headersm v-responsive.md.sm.xs></headersm>
            <headerlg v-responsive.lg.xl></headerlg>

            <Content>
                <storeShaixuan></storeShaixuan>
                
                
            </Content>

            
            <Footer class = "layout-footer-center"><footer1></footer1></Footer>

        </Layout>
            
    </div>    
</template>


<script>
import headerlg from '@/components/headerlg';
import headersm from '@/components/headersm';
import storeShaixuan from '@/components/store/storeShaixuan.vue';
import footer1 from '@/components/footer1';


    export default{

        components:{
            'storeShaixuan':storeShaixuan,
            'footer1':footer1,
            'headerlg':headerlg,
            'headersm':headersm
        },

        data(){
            return{
                
            }
        }
    }
</script>


<style scoped>
    .layout{
    position: relative;
    border-radius: 4px;
    overflow: hidden;
    padding-bottom:10%;
    background-color:white;
    }

.layout-footer-center{
    text-align: center;
    background-image:url('../../assets/wallpaper/car-background.jpg');
    background-size: 100% 100%;
    color:#A9A9A9;
}

</style>
