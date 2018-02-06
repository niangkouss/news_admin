export function getRemote(url,postData,okFun,errFun) {
    $.ajax({
        type:"POST",
        url:url,
        cache:false,
        dataType:'json',
        data:postData,
        success:function (data,textStatus) {
            if(data && data.ret ==1){
                okFun(data);
            }
        },
        error:function () {
            errFun();
        }
    });
}