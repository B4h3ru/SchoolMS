<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All classroom </title>
    <style>
     body { 
       background-color: #e8f4fc;
       padding:0;
        }
     .navbar{
        display: flex;
        background-color: #333;
        padding:10;
     }    
     .navbar button:hover {
        background-color: #575757;
        border-radius: 5px;
     }
     .content{
        text-align:center;
        margin:20px;
        max-width: 600px;
        background-color: #d2ecf9;
        border-radius: 10px;
        padding:20px;
    }
    .content h1{
        color:#333;
        margin-bottom:20px;
    }
    .student-list li{
        display:flex;
        align-items: center;
        border-radius: 5px;
        

    }
    .footer{
            text-align: center;
            padding:10px;
            background-color: #333;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            width:100%;
        }
    </style>
</head>
<body>
   <div class="navbar">
        <button>Home</button>
        <button>Add activity</button>
        <button>view activity</button>
        <button>Message</button>
        <button>Announce</button>
        <button>Setting</button>
   </div> 
   <div class="content">
    <h1>All classroom Students</h1>
    <ul class="students-list">
        <li>
            <div class="avater"></div>
            <span>Student name</span>
        </li> 
         <li>  
            <div class="avater"></div>
            <span>Student name</span>
         </li>       
        
        <li>
          <div class="avater"></div>
         <span>Student name</span>
                
         </li>
          </ul>
           </div>
           <div class="footer">
            @2024.All rights reserved.
        </div>
</body>
</html>  

