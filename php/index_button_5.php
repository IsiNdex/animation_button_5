<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    background: #e0e5ec;
  }
  h1 {
    position: relative;
    text-align: center;
    color: #353535;
    font-size: 50px;
    font-family: "Cormorant Garamond", serif;
  }
  
  p {
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    text-align: center;
    font-size: 18px;
    color: #676767;
  }
  .frame {
    width: 90%;
    margin: 40px auto;
    text-align: center;
  }
  button {
    margin: 20px;
  }
  .custom-btn {
    width: 130px;
    height: 40px;
    color: #fff;
    border-radius: 5px;
    padding: 10px 25px;
    font-family: 'Lato', sans-serif;
    font-weight: 500;
    background: transparent;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
     box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
     7px 7px 20px 0px rgba(0,0,0,.1),
     4px 4px 5px 0px rgba(0,0,0,.1);
    outline: none;
  }
  
  .btn-5 {
    width: 130px;
    height: 40px;
    line-height: 42px;
    padding: 0;
    border: none;
    background: rgb(255,27,0);
  background: linear-gradient(0deg, rgba(255,27,0,1) 0%, rgba(251,75,2,1) 100%);
  }
  .btn-5:hover {
    color: #f0094a;
    background: transparent;
     box-shadow:none;
  }
  .btn-5:before,
  .btn-5:after{
    content:'';
    position:absolute;
    top:0;
    right:0;
    height:2px;
    width:0;
    background: #f0094a;
    box-shadow:
     -1px -1px 5px 0px #fff,
     7px 7px 20px 0px #0003,
     4px 4px 5px 0px #0002;
    transition:400ms ease all;
  }
  .btn-5:after{
    right:inherit;
    top:inherit;
    left:0;
    bottom:0;
  }
  .btn-5:hover:before,
  .btn-5:hover:after{
    width:100%;
    transition:800ms ease all;
  }
    </style>
</head>
<body>

     <div class="frame">
      <button class="custom-btn btn-5"><span>Read More</span></button>
     </div>
     

</body>
</html>