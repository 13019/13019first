/**
 * Created by xuzheng on 15/10/20.
 */
//js ajax 用于异步传输
var xmlHttp;
 function s_xmlhttprequest(){
     if(window.ActiveXObject){
         xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');

     }else if(window.xmlhttprequest){
         xmlhttp = new XMLHttpRequest();
     }
 }
