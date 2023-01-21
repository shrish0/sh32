function togglehide(btn,para)
{
    if(para.style.display == "none"){
        para.style.display="block"
        btn.innerHTML="hide"
    }
        else{
            btn.innerHTML="for detail"
        para.style.display="none"
    }
}