
<head>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    
    font-family: 'Montserrat', sans-serif;
}

.faq{
    padding: 50px;
}

.faq h1{
    
    text-align: center;
    font-size: 50px;
    margin-bottom: 50px;
}

.questions-container{
    max-width: 500px;
    margin: 0 auto;

}

.question button{
    width: 100%;
    background-color: #e7dcd3;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px;
    border:none; outline: none;
    font-size: 16px;
    color: #321831;
    font-weight: 700;
    cursor: pointer;
    border-bottom: 1px solid #321831;
}

.question button i{
    transform: rotate(180deg);
    transition: all 0.3s;
   
}

.question p{
    background-color: #feb98a;
    font-size: 14px;
    max-height: 0;
    opacity: 0;
    line-height: 1.6;
    overflow: hidden;
    transition: all 0.3s;
}

.question p.show{
    max-height: 200px; 
    opacity: 1;
    padding: 20px;
}

.question button i.rotate{
    transform: none;
}



</style>
</head>
<br/><br/><br/><br/>
<section class="faq">
    <div class="container">
        <h1 class="section-heading">Frequently Asked Questions</h1>
    </div>

    <div class="questions-container">
        <div class="question">
            <button>
                <span>How can I book service request?</span>
                <i class="fas fa-chevron-up"></i>
            </button>
            <p>You can book services via website www.handyfix.com or calling to customer care- 09610 222 111.</p>
        </div>
        <div class="question">
            <button>
                <span>How to place an order on the Website?</span>
                <i class="fas fa-chevron-up"></i>
            </button>
            <p>It is very easy; just select the area, service, date, time for service and its done.</p>
        </div>
        <div class="question">
            <button>
                <span>Can I reschedule/Cancel a job booked?</span>
                <i class="fas fa-chevron-up"></i>
            </button>
            <p>Give a call to our customer service helpline numbers- 09610 222 111. Please visit our cancellation policy to know about more.</p>
        </div>
        <div class="question">
            <button>
                <span>How will I know that Handy Fix have received my order?</span>
                <i class="fas fa-chevron-up"></i>
            </button>
            <p>After you complete the checkout process, a confirmation with order number will appear on your screen detailing your final order. You will also receive the confirmation via sms and email from Handy Fix
            </p>
        </div>

        <div class="question">
            <button>
                <span>What are the modes of payment?</span>
                <i class="fas fa-chevron-up"></i>
            </button>
            <p>You can select Cash on Delivery (COD) as the payment option or through B-kash, Rocket and Sure cash.</p>
        </div>


        <div class="question">
            <button>
                <span>In which Areas Handy Fix is operational?</span>
                <i class="fas fa-chevron-up"></i>
            </button>
            <p>Handy Fix is serving whole Dhaka City. Soon Handy Fix will be launched there services in all Divisional cities of Bangladesh.</p>
        </div>

        <div class="question">
            <button>
                <span>What are your work timings?</span>
                <i class="fas fa-chevron-up"></i>
            </button>
            <p>Handy Fix services are available from 8 am to 8 pm. Handy Fix also provide services in any Emergency.</p>
        </div>
    </div>


</section>


<script type="text/javascript">
const buttons = document.querySelectorAll('button');


buttons.forEach( button =>{
    button.addEventListener('click',()=>{
        const para = button.nextElementSibling;
        const icon = button.children[1];

        para.classList.toggle('show');
        icon.classList.toggle('rotate');
    })
} )
</script>

