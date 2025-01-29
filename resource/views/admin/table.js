const studentt=document.getElementById('stuedntTable');
const teacherr=document.getElementById('teacherTable');
const babysitterr=document.getElementById('babysitterTable');
const adminn=document.getElementById('adminTable');

function student(){
       
            studentt.style.display='block';
            teacherr.style.display='none';  
            babysitterr.style.display='none';
            adminn.style.display='none';
        
}
function teacher(){
       
    studentt.style.display='none';
    teacherr.style.display='block';  
    babysitterr.style.display='none';
    adminn.style.display='none';

}
function babysitter(){
       
    studentt.style.display='none';
    teacherr.style.display='none';  
    babysitterr.style.display='block';
    adminn.style.display='none';

}
function admin(){
       
    studentt.style.display='none';
    teacherr.style.display='none';  
    babysitterr.style.display='none';
    adminn.style.display='block';

}
