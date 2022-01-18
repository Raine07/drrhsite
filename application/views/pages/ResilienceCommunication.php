<link rel="stylesheet" href="<?php echo base_url("/assets/css/Resilience Communication.css"); ?>" />

<h1 id = "page_name">
    
    ASSESSMENT

</h1>

<div class="container_main">

    <div class="assessment_choice">

        <div class="option_one_not">
            <a class="one" href="http://localhost/codeigniter/index.php/assessment">Hotel Information</a>
        </div>

        <div class="option_two_not">
            <a class="two">Risk Profiling</a>
        </div>

        <div class="option_three_not">
            <a class="three">Inventory</a>
        </div>
        
        <div class="option_four_not">
            <a class="four" href="http://localhost/codeigniter/index.php/aprm">Asset protection and Risk Management</a>
        </div>  

        <div class="option_five_not">
            <a class="five" href="http://localhost/codeigniter/index.php/enterprise_cont">Enterprise Continuity</a>
        </div> 

        <div class="option_six_not">
            <a class="six" href="http://localhost/codeigniter/index.php/DRR">Disaster Risk Reduction<br></a>
        </div>       

        <div class="option_seven_not">
            <a class="seven" href="http://localhost/codeigniter/index.php/CnOM">Crisis & Opportunity Management</a>
        </div> 

        <div id="current_choice">
            <a class="eight" href="http://localhost/codeigniter/index.php/ResilienceCommunication">Resilience Communication</a>
        </div> 

        <div class="option_nine_not">
            <a class="nine" href="http://localhost/codeigniter/index.php/FinalStep">Final Step</a> 
        </div>

    </div>



    <div class="left-col-aprm">
        <h1 id="ar_text">Risk Communication</h1>

        <form class="ap_form">

            <label for="file-1-RC">Do you have a Risk Communication plan in place? </label>
            <input class="file-1-RC-in" type="file" id="file-1-RC" name="file-1-RC">

        </form>


    </div>

    <div class="right-col-aprm">
        <h1 id="ar_text">Crisis Communication</h1>

        <form class="rm_form">

            <label for="file-2-CM">Do you have a Crisis Communication plan in place? </label>
            <input class="file-2-CM-in" type="file" id="file-2-CM" name="file-2-CM">

        </form>


    </div>

    <a class="button" id="prev_butt" value="Previous" href="http://localhost/codeigniter/index.php/CnOM">Previous<a>
    <input id="sav_butt" type="button" value="Save">
    <a class="button" id="nex_butt" value="Next" href="http://localhost/codeigniter/index.php/FinalStep">Next<a>
    
</div>