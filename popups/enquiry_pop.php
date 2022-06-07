
  <style>
        .popupForm
        {
            position: fixed;
            left: 0;
            top: 0;
            width:75%;
            height: 75%;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0);
            visibility: hidden;
            opacity: 0;
            transition: all 1s ease;
           
        }
        .popupForm.show{
            background-color: rgba(0, 0, 0, 0);
            visibility: visible;
            opacity: 1;
            
        }
        .popupForm .box
        {
            background-color: #fff;
            width: 75%;
            position: absolute;
            left: 75%;
            top: 75%;
            transform: translate(-50%,-50%);
            display: flex;
            flex-wrap: wrap;
            opacity: 0;
            margin-left: 50px;
            transition: all 1s ease;
            border: 1px solid #000;
           
        }
        .popupForm.show .box
        {
            opacity: 1;
            margin-left: 0;
        }
        .popupForm .box .image-area{
        
            flex: 0 0 50%;
            max-width: 50%;
            position: relative;
            overflow: hidden;
            padding: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .popupForm .box .image-area h1{
            font-size: 30px;
            color: white;
        }
        
        .popupForm .box .image-area .img{
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-image: url('./img/3735354.jpg');
            background-size: cover;
            background-position: center;
            animation: zoomInOut 7s linear infinite;
            z-index: -1;
        
        }
              
        .popupForm .box .form{
            
            flex: 0 0 50%;
            max-width: 50%;
            padding: 40px 30px;
           
        }
        .popupForm .box .form h1{
        color: #000;
        font-size: 30px;
        margin: 0 0 30px;
        
        }
        .popupForm .box .form .form-control{
        height: 45px;
        margin-bottom: 30px ;
        width: 80%;
        border: none;
        border-radius: 0px;
        font-size: 15px;
        background-color: #fff !important;
        border-bottom: 2px solid #B0B3B9;
        }
        
        .popupForm .box .form .form-control:focus
        {
            outline: none;
        
        }
        .popupForm .box .form .popup-btn{
          color: #fff;
          font-size: 16px;
          padding: 12px 35px;
          border-radius: 50px;
          display: inline-block;
          border: 0;
          outline: 0;
          box-shadow: 0px 4px 20px 0px #2a2a2ca6;
          background-image: linear-gradient(135deg, #3d3d3d 10%, #313530 100%);
        
        }
        button:hover {
          background-image: linear-gradient(135deg, #18056e 10%, #207ffc 100%) !important;
}
        .popupForm .box .form .popup-btn:focus{
            outline: none;
        }
        .popupForm .box .form .close{
            position: absolute;
            right: 10px;
            top: 0px;
            font-size: 30px;
            cursor: pointer;
        }
       
        
        /* RESPONSIVE POPUP---------------------------------- */
        @media (max-width:767px) {
            .popupForm .box{
                width: calc(100% - 30px);
            }
            .popupForm .box .image-area{
                display: none;
            }
            .popupForm .box .form{
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        
        
        </style>
<!--- Enquiry Popup Start --->
<div class="popupForm">
        <div class="box">
            <div class="image-area">
                <div class="img">
               
                </div>
            </div>
            <div class="form">
                <div class="close">&times;</div>
                <h1>Looking for something?</h1>
                <h3>Tell us your Requirements...</h3>
                <form >
                    <div class="form-group">
                        
                        <input type="text" placeholder="Product/Service Name" class="form-control"> 

                    </div>
                    <div class="form-group">
                        
                        <input type="text" placeholder="Your Name" class="form-control"> 
                    </div>
                    <div class="form-group">
                        
                        <input type="text" placeholder="Phone Number" class="form-control"> 
                    </div>
                   <button type="button" class="popup-btn">Submit</button>
                </form>
            </div>
        </div>
</div>
<!--- Enquiry Popup End --->
<script>
const popupForm = document.querySelector(".popupForm");
const close = document.querySelector(".close");
window.addEventListener("load",function(){
    showPopup();
})
function showPopup(){
    const timeLimit = 1//in seconds;
    let i=0;
    const timer = setInterval(function()
    {i++;
        if(i == timeLimit){
            clearInterval(timer)
            popupForm.classList.add("show");
        }
    console .log(i);
    },1000);
}
close.addEventListener("click",function(){
    popupForm.classList.remove("show");

})
</script>