document.addEventListener("DOMContentLoaded",(function(){const e=document.getElementById("ajax-filter");console.log("ajax filter: ",e);const t=document.querySelector(".card-container"),n=e.querySelector("select"),o=n.getAttribute("data-type");console.log(o),n.addEventListener("change",(e=>{fetch(ajaxurl+"?action=ajaxfilter",{method:"POST",headers:{"Content-Type":"application/json"},body:JSON.stringify({cat:e.target.value,dataType:o})}).then((e=>e.text())).then((e=>{e&&(t.innerHTML=e),console.log("response: ",e),console.log(o)})).catch((e=>{console.log(e)}))}))}));