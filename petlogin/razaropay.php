
<html>
<head>
    <title>razraopay</title>
    <style type="text/css">
        
        *{
    margin: 0;
    padding: 0;

}
body{
            background-color: #eab393;
        }

div.main{
    width: 400px;
    margin: 100px auto 0px auto;

}
h2{
    text-align: center;
    padding: 20px;
    font-family: sans-serif;
    color:rgb(17, 16, 16);
}
div.razaropay{
    background-color: #feeffe;
    width:100%;
    height:400px;
    font-size: 18px;
    border-radius: 10px;
    border:1px #ff7c30;
    box-shadow: 2px,2px,15px
    rgba(0,0,0,0.3);
    color:#fff;

}
form#razaropay{
    margin:40px;

}
label{
    font-family: sans-serif;
    font-size: 18px;
    font-style:italic;

}
input#name{
    width:300px;
    border:1px solid #ddd;
    border-radius: 3px;
    outline:0;
    padding: 7px;
    margin-bottom: 20px;
    background-color: #fff;
    box-shadow: inset 1px 1px 5px
    rgba(0,0,0,0.3);
}
input#amount{
    width:300px;
    border:1px solid #ddd;
    border-radius: 3px;
    outline:0;
    padding: 7px;
    background-color: #fff;
    box-shadow: inset 1px 1px 5px
    rgba(0,0,0,0.3);
}
input#button1{
    width:100px;
    border:none;
    border-radius: 3px;
    padding: 7px;
    margin-top: 70px;
    margin-right: 50px;
    margin-left: 20px;
    font-size: 16px;
    font-family: sans-serif;
    font-weight: 600;
    background-color: 
    #ff7c30;
    color:#fff;
    cursor:pointer;
}
input#button2{
    width:100px;
    border:none;
    margin-top: 70px;
    border-radius: 3px;
    padding: 7px;
    font-size: 16px;
    font-family: sans-serif;
    font-weight: 600;
    background-color: 
    #ff7c30;
    color:#fff;
    cursor:pointer;
}

   </style>

</head>
<body>
 <div class="main">
      <div class="razaropay">
        <h2>payment</h2> 
        <form id="razaropay" method="post">

    <input type="text" name="name" placeholder="enter name" id="name"><br><br>
    <input type="text" name="amount" placeholder="enter amount to be paid" id="amount"><br><br>
    <input type="button" id="button1" value="pay now" onclick="makepayment()"><input type="button" id="button2" value="close" >
    
               

   

       

</form>
</div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="../petlogin/razaropay.js"></script>
</html>


