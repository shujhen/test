<template>
  <QrcodeReader :paused="paused" @decode="onDecode">
    <div class="decoded-content">{{ content }}</div>
    <!-- <div class="validation-notice">
        <div v-if="validating">
            Long validation in progress...
        </div>

        <div v-else-if="isValid">
            {{ content }}
        </div>

        <div v-else>
            This is NOT a URL!
        </div>
    </div> -->

    
  </QrcodeReader>
  
</template>

<script>
import { QrcodeReader } from 'vue-qrcode-reader';

export default {
    components: { QrcodeReader },

    data () {
        return {
        content: '未讀取...',
        paused: false,
        // isValid: false,
        // validating: false,
        }
    },

    methods: {
        onDecode (content) {
            // app.seen = false;
            // if(content.length === 13){
            //     $.ajax({
            //         url:'inventorydetails/getdata/' + content,
            //         method: 'post',
            //         data: {
            //             in_number: "",
            //             p_number: content,
            //             _token: ""
            //         },
            //         success: function (response) {
            //             if(response == 'NotFound'){
            //                 alert('無此商品');
            //                 this.content = '未讀取...';
            //                 this.paused = false;
            //             }else{
            //                 responseArray = response.split("|");
            //             }
            //         },
            //         error: function (jqXHR, exception) {
            //             var msg = '';
            //             if (jqXHR.status === 0) {
            //                 msg = 'Not connect.Verify Network.';
            //             } else if (jqXHR.status == 404) {
            //                 msg = 'Requested page not found. [404]';
            //             } else if (jqXHR.status == 500) {
            //                 msg = 'Internal Server Error [500].';
            //             } else if (exception === 'parsererror') {
            //                 msg = 'Requested JSON parse failed.';
            //             } else if (exception === 'timeout') {
            //                 msg = 'Time out error.';
            //             } else if (exception === 'abort') {
            //                 msg = 'Ajax request aborted.';
            //             } else {
            //                 msg = 'Uncaught Error.' + jqXHR.responseText;
            //             }
            //             alert(msg + '網頁出了問題，請通知相關人員處理');
            //         },
            //     });
            // }
            this.content = content;
            this.paused = true;
            // this.validating = true;
            window.setTimeout(() => {
                this.content = '未讀取...';
                this.paused = false;
            }, 3000);
        },
    }
}
</script>

<style scoped>
.decoded-content {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  max-width: 100%;

  padding: 0px 20px;
  color: #fff;
  font-weight: bold;
  padding: 10px;
  background-color: rgba(0,0,0,.5);
}
</style>
