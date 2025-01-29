<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <style>
        body{
           background-color:#e8f4fc;
        }
        .navbar{
            display: flex;
            background-color: #333;
            padding:10px;
            justify-content:space-around;
        }
        .navbar button:hover{
            border: radius 5px;
        }
        .content{
            margin:20px;
            max-width:600px;
            padding:20px;
            border-radius:10px;
        }
        .chat-box{
            background-color:white;
            border:2px;
            border-radius:10px;
            padding:10px;
            height:300px;
            overflow-y:auto;
            margin-bottom: 20px;
        }
        .message{
            border:2px;
            padding:10px;
            margin:10px;
            max-width: 70%;
        }
        .message.sent{
           text-align: right;

        }
       .input-container input{
        flex:1;
        padding: 10px;
        border:1px;
        border-radius:5px;
        font-size:16px;
       }
    .input-container button{ 
       
        padding: 10px;
       border-radius:5px;
        cursor: pointer;
    }
    .input-container button:hover{
         background-color: red;
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
        <div class="chat-box">
            <div class="message received">Mis, is there class friday 5,on 5th and 6th class?</div>
            <div class="message sent">yes,there is class</div>
            <div class="message received">ok</div>
            </div>
            <div class="input-container">
                <input type="text" placeholder="write message">
                <button>send</button>
            </div>
        </div>
        <div class="footer">
            @2024.All rights reserved.
        </div>
</body>
</html>