<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        body 
        {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            box-sizing: border-box;
        }
        #email-send 
        {
            width: 100%;
            height: auto;
            margin: 0;
            padding: 25px 15px;
            color: black;
            font-size: 20px !important;
        }
    </style>

</head>
<body>

    <section id="email-send">

        <img src="https://assets.website-files.com/5daaade3e3e3f04da71daa8e/60c9d40039e3533cb7d9373f_GIFs%20in%20Emails.gif" style="width: 100%; height: 300px;">

        <address>
            <p><b>Name :</b>{{$data["name"]}}</p>
            <p><b>FirstName :</b>{{$data["fname"]}}</p>
            <p><b>Lastname :</b>{{$data["lname"]}}</p>
            <p><b>Email :</b>{{$data["email"]}}</p>
            <p><b>Phone :</b>{{$data["phone"]}}</p>
            <p><b>Message :</b>{{$data["message"]}}</p>
            <p>For More informations contact  on : 9998003879 </p>
            <p>For More informations Email us on : <a href="mailto:bkpandey.pandey@gmail.com">bkpandey.pandey@gmail.com</a> </p>
            <p><b>Our Office Address :</b>1st Floor, Aditya Complex, Jalaram 2 Street Number 2,<br> above Sbi Bank, nr. Indira Circle, <br>Jala Ram Nagar, Rajkot, Gujarat 360005</p>
        </address>
    
    </section>
    
</body>
</html>