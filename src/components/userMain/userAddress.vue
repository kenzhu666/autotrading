<template>
<Layout>
    <Content v-responsive.lg.xl>
            <headerlg></headerlg>
    </Content>






    <Content v-responsive.md.sm.xs>
            <headersm></headersm>

            <div class='everything'>
                <div class='first'>
                    收货人姓名: <Input v-model="value" placeholder="输入收货人姓名..." />
                    手机号码: <Input v-model="value" placeholder="输入手机号码..." />
                    所在地区: <Input v-model="value" placeholder="省" /> <Input v-model="value" placeholder="市" />
                    详细地址: <Input v-model="value" placeholder="输入详细地址信息..." /> 
                    邮政编码: <Input v-model="value" placeholder="输入六位数字邮政编码..." />    



                </div>
            </div>
    </Content>

</Layout>
</template>


<script>
import headerlg from '@/components/headerlg';
import headersm from '@/components/headersm';

export default {
    components:{

            'headerlg':headerlg,
            'headersm':headersm
        },
    
    data(){
        return{

        }

    }
    
}
</script>

<style>
.everything{
    width:90%;
    margin:0 auto;
    margin-top:15%;
}

.first h4{
    margin-bottom:2%;
    text-align:left;
}



</style>

