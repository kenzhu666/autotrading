<template>
    <Content>
        <input class="file" name="file" type="file" accept="image/png,image/gif,image/jpeg" @change="update"/> 
    </Content>
</template>

<script>
import axios from 'axios';

    export default{
        data(){

        },

        methods:{
        update(e){
    let file = e.target.files[0];
    let d = new Date();
    let type = file.name.split('.');
    let tokenParem = {
      'putPolicy':'{\"name\":\"$(fname)\",\"size\":\"$(fsize)\",\"w\":\"$(imageInfo.width)\",\"h\":\"$(imageInfo.height)\",\"hash\":\"$(etag)\"}',
      'key':'orderReview/'+d.getFullYear()+'/'+(d.getMonth()+1)+'/'+d.getDate()+'/'+d.valueOf()+'.'+type[type.length-1],
      'bucket':this.domain,//七牛的地址，这个是你自己配置的（变量）
    };
    let param = new FormData(); //创建form对象
    param.append('chunk','0');//断点传输
    param.append('chunks','1');
    param.append('file',file,file.name)
    console.log(param.get('file')); //FormData私有类对象，访问不到，可以通过get判断值是否传进去
    let config = {
     headers:{'Content-Type':'multipart/form-data'}
    };
   //先从自己的服务端拿到token
    this.axios.post(api.uploadToken,qs.stringify(tokenParem))
     .then(response=>{
       this.token = response.data.uploadToken;
       param.append('token',this.token);
       if(this.images.length>8){
         alert('不能超过9张');
         return;
       }
       this.uploading(param,config,file.name);//然后将参数上传七牛
       return;
     })
  },
  uploading(param,config,pathName){
   this.axios.post('http://upload.qiniu.com/',param,config)
    .then(response=>{
     console.log(response.data);
     let localArr = this.images.map((val,index,arr)=>{
      return arr[index].localSrc;
     })
     if(!~localArr.indexOf(pathName)){
      this.images.push({'src':this.showUrl+response.data.key,'localSrc':pathName});
     }else{
       alert('已上传该图片');
     }
    })
  },  
        }  
    
    }
  
</script>
