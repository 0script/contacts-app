const addcontactbutton=docu
const header=document.querySelector('#top-div');

addcontactbutton.addEventListener('click',addContactForm());

console.log('javascript');

function addContactForm(){

    console.log('click');
    let xmlhttp=new XMLHttpRequest();

    xmlhttp.onreadystatechange=()=>{
        if(this.readyState==4 && this.status==200){
            const formcontainer=document.createElement('div');
            //at this stage we get the response as text
            formcontainer.innerHTML=this.responseText;
            console.log(this.responseText);
            header.after(formcontainer);
        }
    }
    xmlhttp.open("GET", "add.php?getcontactform=form", true);
    xmlhttp.send();
}