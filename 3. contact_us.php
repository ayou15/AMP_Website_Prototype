<?php

include("header.php");
?>
<body>
<div id='wrapper'>
<?php include("nav-bar.php"); ?>

    <div class="text_content">
        <h1> <strong> CONTACT US </strong></h1> <br />
        <h2>We Would Love To Hear From You..</h2>
	</div>

<div id='content'>

    <div class="contact_first_block">
        <table class="contact_table">
            <tr>
                <td class="contact_table_1">
                    <ul id="contact_table_1_text">
                        <li><strong> --------------- <strong class="dot">Address</strong>   ------------------</strong><br />
                            &nbsp;  <strong class="dot">~</strong> 2nd Floor, Nelson Mandela Square,<br /> 
                            &nbsp;   West Tower,Sandton City, South Africa,<br />
                            &nbsp;   1739.<br /> </li> 
                        <li><strong> --------------- <strong class="dot">Location</strong> -----------------</strong><br />
                            &nbsp;  <strong class="dot">~</strong> -26.105404<br /> 
                            &nbsp;   28.052682<br /> </li>
                        <li><strong> --------------- <strong class="dot">Contact</strong>  ------------------</strong><br />
                            &nbsp;  <strong class="dot">~</strong> Sims Unsure<br /> 
                            &nbsp;  <strong class="dot">~</strong> General Info<br /> </li>
                        <li><strong> ---------------  <strong class="dot">Phone  Us</strong>  -----------------</strong><br />
                            &nbsp;  <strong class="dot">~</strong> 011 967 7654<br /> 
                            &nbsp;  <strong class="dot">~</strong> 011 987 5646<br /> </li>
                        <li><strong> ---------------  <strong class="dot">E-mail Us</strong>  -----------------</strong>&nbsp;<br />
                            &nbsp;  <strong class="dot">~</strong> sims@gmail.com<br /> 
                            &nbsp;  <strong class="dot">~</strong> bob@gmail.com</li>
                    </ul>
                </td>
                <td class="contact_table_1_right"> 
                     <iframe  class="contact_table_1_right_frame" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Monash+South+Africa,+Roodepoort,+Gauteng,+South+Africa&amp;aq=1&amp;oq=monash+south+a&amp;sll=37.0625,-95.677068&amp;sspn=54.665451,135.263672&amp;ie=UTF8&amp;hq=Monash+South+Africa,+Roodepoort,+Gauteng,+South+Africa&amp;t=m&amp;ll=-26.084776,27.877824&amp;spn=0.006295,0.006295&amp;output=embed"></iframe>                </td>
            </tr>
        </table> 
        <div class="contact_table_2">
         
         <form action="#" method="post"> 
     <div>
        <label for="name"><strong>Name: </strong></label>
        <input type="text" value="Plz Enter Your Full Name" id="name" />
    </div>
    <div>
        <label for="mail"><strong>E-mail: </strong></label>
        <input type="email" value="Plz Enter Your @Email" id="mail" />
    </div>
    <div>
        <label for="place"><strong>Your Area:</strong></label>
        <select id="Area">
           <option value="Delport">Delport</option>
           <option value="Munsieville">Munsieville</option>
           <option value="Krugersdorp">Krugersdorp</option>
           <option value="Other">Other</option>
         </select>
    </div>
    <div>
    <label for="sex"><strong>Your Sex:</strong></label>
         <select id="Sex">
         <option value="Male"> Male </option>
         <option value="Female"> Female </option>
         </select>
      </div>
      <div>
        <label for="msg"><strong>Message:</strong></label>
        <textarea  id="msg"></textarea>
    </div>
    
        <button type="submit"><strong>Submit</strong></button>
    
         </form>
         
         </div>
        <h2>Location</h2>
           <ul>
             <li><strong>Address:</strong> 144 Peter Road, Roodepoort, 1724</li>
             <li><strong>Phone:</strong> 011 950 4000</li>
           </ul>
       
    </div>
    </div>
        
    
	






<?php include("footer.php"); ?>
</div>	
</body>
</html>