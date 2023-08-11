<!DOCTYPE html>
<html>
    <head>
    
 <link rel="stylesheet" href="./css/app.css" >
  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;

    
}
body{
    background-color: grey;
}
input, button {
    appearance: none;
    border: none;
    outline: none;
    background: none;
}
input{
    display: block;
    width: 100%;
    background-color: greenyellow;
    padding: 12px 16px;
    font-size: 18px;
    color: #888;

}
.app {
    display: flex;
    flex-direction: column;
    height: 100vh;

}
header{
    display: flex;
    padding-top: 128px;
    padding-bottom: 32px;
    background-color: lightcoral;
    background-image: linear-gradient(to bottom,lightcoral ,lightcoral);
    align-items: center;
    justify-content: flex-end;
    flex-direction: column;
    box-shadow: 0px 6px 12px rgba(0, 0, 0,0.15);
    padding-left: 16px;
    padding-right: 16px;
}
#user:focus{
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.25);

}
h1{
    color: antiquewhite;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 16px;
}

#user{
    border-radius: 8px;
    transition: 0.4s;
    text-align: center;
}
#messages{
    flex: 1 1 0%;
    overflow: scroll;
    padding: 16px;
}
.message{
    display: block;
    width: 100%;
    border-radius: 99px;
    background-color:greenyellow;
    padding: 8px 16px;
    box-shadow:0px 6px 12px rgba(0, 0, 0, 0.15) ;
    font-weight: 400;
    margin-bottom: 16px;
}
.message strong{
    color: blue;
    font-weight: 600;


}
#message_foem{
    display: flex;
}
#message_input {
    flex: 1 1 0%;
}
#message_send{
    appearance: none;
    background-color:blueviolet;
    padding: 4px 8px;
    color: #FFF;
    text-transform: uppercase;
}
  </style>

</head>
    <body>
    <div class="app">
                    <header>
                        <h1>Talk's Now Doctors</h1>
                        <input type="text" name="username" id="username" placeholder="Enter name"/>


                    </header>
                    <div id="messages" ></div>
                    <form id="messageform">
                        <input type="text" name="message" id="message_input" placeholder="type messsage" />

                        <button type="submit" id="message_send" >Send Message</button>

                    </form>
                </div>
                <script >
                    
  
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



                   
                    
const messageElement =document.getElementById('messages');
const username_input =document.getElementById('username');

const message_input =document.getElementById('message_input');

const message_form =document.getElementById('messageform');

let url =window.location;
let urlNew =new URL(url);
let username =urlNew.searchParams.get('name');
letwindow.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

messageform.addEventListener('submit',function(e){
    e.preventDefault();
    

    if (message_input.value !='') {
        axios({
            method:'post',
            url:'/send_message',
            data:{
                username:username,
                message:message_input.value
            }
        })
       
    }
    window.Echo.Channel('laravelchat')
    .listen('.chatting', (res)=>{
        messageElement.innerHTML += '<div class="username"><strong>'+ res.username + ':</strong>'+ res.message + '</div>';
});
message_input.value='';
  
})



//window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
/*
const apps = new Vue({
    el: '#app',
});

import axios from 'axios';
import { has } from 'lodash';
import { createApp } from 'vue';
import chat from './components/Chat.vue';
const app =createApp({});
app.component('chat',chat);
app.mount("#app");*/

                </script>
     
                </div>
           
    </body>
</html>
              
