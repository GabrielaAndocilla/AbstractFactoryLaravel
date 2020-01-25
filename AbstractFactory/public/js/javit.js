var piz1=0;
var piz2=0;
var piz3=0;
var hambur1=0;
var hambur2=0;
var hambur3=0;
var alit1=0;
var alit2=0;
var alit3=0;

function mandar(){
    document.getElementById("PP").disabled=false;
    document.getElementById("Hw").disabled=false;
    document.getElementById("Pjam").disabled=false;
    document.getElementById("Cheese").disabled=false;
    document.getElementById("Mush").disabled=false;
    document.getElementById("Chick").disabled=false;
    document.getElementById("Apic").disabled=false;
    document.getElementById("Abro").disabled=false;
    document.getElementById("Abbq").disabled=false;

}
function ordenar(n){
    switch(n) {
        case 0:
            piz1++;
            document.getElementById("PP").value = piz1;            
            break;
        case 1:
            if(piz1<=0){
                piz1=0;
            }else{
                piz1--;
            }
            document.getElementById("PP").value = piz1;            
            break;
        case 2:
            piz2++;
            document.getElementById("Hw").value = piz2;            
            break;
        case 3:
            if(piz2<=0){
                piz2=0;
            }else{
                piz2--;
            }
            document.getElementById("Hw").value = piz2;            
            break;
        case 4:
            piz3++;
            document.getElementById("Pjam").value = piz3;            
            break;
        case 5:
            if(piz3<=0){
                piz3=0;
            }else{
                piz3--;
            }
            document.getElementById("Pjam").value = piz3;            
            break;  
        case 6:
            hambur1++;
            document.getElementById("Cheese").value = hambur1;            

            break;
        case 7:
            if(hambur1<=0){
                hambur1=0;
            }else{
                hambur1--;
            }
            document.getElementById("Cheese").value = hambur1;   
            break;
        case 8:
            hambur2++;
            document.getElementById("Mush").value = hambur2
            break;
        case 9:
            if(hambur2<=0){
                hambur2=0;
            }else{
                hambur2--;
            }
            document.getElementById("Mush").value = hambur2;   
            break;
        case 10:
            hambur3++;
            document.getElementById("Chick").value = hambur3
            break;
        case 11:
            if(hambur3<=0){
                hambur3=0;
            }else{
                hambur3--;
            }
            document.getElementById("Chick").value = hambur3;   
            break;
        case 12:
            alit1++;
            document.getElementById("Apic").value = alit1;
            break;
        case 13:
            if(alit1<=0){
                alit1=0;
            }else{
                alit1--;
            }
            document.getElementById("Apic").value = alit1;   
            break;
        case 14:
            alit2++;
            document.getElementById("Abro").value = alit2
            break;
        case 15:
            if(alit2<=0){
                alit2=0;
            }else{
                alit2--;
            }
            document.getElementById("Abro").value = alit2;   
            break;
        case 16:
            alit3++;
            document.getElementById("Abbq").value = alit3;
            break;
        case 17:
            if(alit3<=0){
                alit3=0;
            }else{
                alit3--;
            }
            document.getElementById("Abbq").value = alit3;   
            break;
    } 
}