<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chatbot</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Get your own code at fontawesome.com-->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <!-- Custom CSS -->
        <link href="chatbot2Style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .checked {
                color: orange;
            }
            .thumbnail{
                margin-left:30px;
                margin-top:10px;
            }
    </style>
    </head>
    <body>
        <div class="thumbnail col-sm-3">
            <img src="img/person1.jpg" style="border-radius:50%;" height="150" width="150">
            <center>
                <h3>Ramesh</h3>
                <p> Psycologist </p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </center>
            <p>My task here, is to work for the betterment of my clients' well-being. I have a deep understanding of crisis situations, whether they're associated with achieving a goal or becoming a better version of yourself. I firmly believe that working collaboratively with the client can fetch more effective and everlasting results. I want people to know that it is completely alright to speak out about what they are going through. After all, we all go through one agony or another, and it's completely alright to ask for help in trying times. I am here to give my 100% attention to the clients without any judgement and empower them for a better future.</p>
        </div>
        <div class="popup" id="chat">
            <div class="title">
                <h3 style="text-align:center;margin-top:-50px;padding-top:20px;">Connect with your mentor</h3>
            </div>
                <div class="form">
                    <div class="bot-inbox">
                        <div class="bot-pic">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="msg">
                            <p>Hello there, how can I help you?</p>
                        </div>
                    </div>
                </div>
                <div class="text-area">
                    <div class="input-data">
                        <input id="data" type="text" placeholder="Type something here..." required>
                        <button id="btn">Send</button>
                    </div>
                </div>
        </div>
    <script>
        $(document).ready(function(){
            $("#btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox"><div class="msg"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                $.ajax({
                    url: 'chatbotmsg.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $reply = '<div class="bot-inbox"><div class="bot-pic"><i class="fas fa-user"></i></div><div class="msg"><p>'+ result +'</p></div></div>';
                        $(".form").append($reply);
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    </body>
</html>
