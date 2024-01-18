// شاشة التحميل
/*
 فترة تحميل الصفحة شاشة التحميل ستظهر حسب الموجود في 
 css
 وبمجرد ما ينتهي تحميل الصفحة سيتم تنفيذ الفنكشن 
لأيقاف عرض شاشة التحميل
*/ 
var loader = document.getElementById("preloader");
window.onload = function()
{
    loader.style.display = "none";

}
//
/*
الفنكشن هدفها اختيار ايدي عشوائي لإختيار كوفي أو مطعم بشكل عشوائي وذلك عن طريق استخدام الراندوم
و من ثم إضافة تنسيق على العنصر المختار ثم تعطيل الزر 
*/  
function oneClickC()
{
    var array=["c1","c2","c3","c4"];
    var y= array[Math.floor(Math.random()*array.length)];
    var x = document.getElementById(y); 
    x.style.border=" #714c4c solid 5px";
    x.style.padding="10px 20px";
    document.getElementById("bt").disabled = true; 
} 
/*
الفنكشن هدفها اختيار ايدي عشوائي لإختيار كوفي أو مطعم بشكل عشوائي وذلك عن طريق استخدام الراندوم
و من ثم إضافة تنسيق على العنصر المختار ثم تعطيل الزر 
*/   
function oneClickR()
{
    var array=["r1","r2","r3","r4"];
    var y= array[Math.floor(Math.random()*array.length)];
    var x = document.getElementById(y);
    x.style.border=" #435a52 solid 5px";
    x.style.padding="10px 20px";
    document.getElementById("bt").disabled = true;

} 



