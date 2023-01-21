function togglehide(btn,para)
{
    if(para.style.display == "block"){
        btn.innerHTML="for detail"
    para.style.display="none"
}
else{
            para.style.display="block"
            btn.innerHTML="hide"
    }
}