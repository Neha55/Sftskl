
 <?php
session_start();

//$_SESSION['rno']=$_POST['rollno'];
?>
<html>
<head>

<script type='text/javascript' src='jquery.js'></script>
	<link href='calendar2.css' rel='stylesheet' type='text/css'>
<script type='text/javascript'>
            var getDatee = new Date();
            var monthe = getDatee.getMonth();
            var yeare = getDatee.getFullYear();
            var day = getDatee.getDate(); 
            function isEmpty(val){
               return (val === undefined || val == null || val.length <= 0) ? true : false;
            }
            
            function prev()
            {
            	monthe = monthe-1;
                if(monthe < 0)
        	{
        	    yeare = yeare-1;	
                    monthe = 11;
                }
                dispCal(monthe, yeare);
                return false;
            }
            
            function next()
            {
            	monthe = monthe+1;
                if(monthe > 11)
        	{
        	    yeare = yeare+1;	
                    monthe = 0;
                }
                dispCal(monthe, yeare);
                return false;
            }
            
            function daysInMonth(monthe, yeare)
            {
                return 32 - new Date(yeare, monthe, 32).getDate();
            }

            function getElementPosition(arrName,arrItem){
                for(var pos=0; pos<arrName.length; pos++ ){
                    if(arrName[pos]==arrItem){
                        return pos;
                    }
                }
            }
            
            function setVal(getDat){
                $('#sel').val(getDat);
                $('#calendar').hide();
            }
            
            function dispCal(mon,yea){
		var ar = new Array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
                var chkEmpty = isEmpty(mon);
                var n,days,calendar,startDate,newYea,setvale,i;
                if(chkEmpty != true){
                    mon = mon+1;
                    n = ar[mon-1];
                    n += " "+yea;
                    newYea = yea;
                    days = daysInMonth((mon-1),yea);
                    startDate = new Date(ar[mon-1]+" 1"+","+parseInt(yea));
                }else{
                    mon = getElementPosition(ar,ar[getDatee.getMonth()]);
                    n = ar[getDatee.getMonth()];
                    n += " "+yeare;
                    newYea = yeare;
                    days = daysInMonth(mon,yeare);
                    startDate = new Date(ar[mon]+" 1"+","+parseInt(yeare));
                }
                
                var startDay = startDate.getDay();
                var startDay1 = startDay;
                while(startDay> 0){
                   calendar += "<td></td>";  
                   startDay--;
                }                
                i = 1;
                while (i <= days){
                  if(startDay1 > 6){
                      startDay1 = 0;  
                      calendar += "</tr><tr>";  
                  }  
                  mon = monthe+1;
                  setvale = i+","+n;
		  if(i == day && newYea==yeare && mon==monthe){
		    calendar +="<td class='thisday' onclick='setVal(\""+i+"-"+mon+"-"+newYea+"\")'>"+i+"</td>";
                  }else{  
                    calendar +="<td class='thismon' onclick='setVal(\""+i+"-"+mon+"-"+newYea+"\")'>"+i+"</td>";   
                  }
		  startDay1++;  
                  i++;  
                }
		    calendar +="<td><a style='font-size: 9px; color: #efefef; font-family: arial; text-decoration: none;' href='http://www.hscripts.com'>&copy;h</a></td>";   
		
                $('#calendar').css('display','block');
                $('#month').html(n);
                var test = "<tr class='weekdays'><td>Sun</td><td>Mon</td><td>Tue</td><td>Wed</td><td>Thu</td><td>Fri</td><td>Sat</td></tr>";  
                test += calendar;
		$('#dispDays').html(test);
            }
</script>
<link rel="stylesheet" type="text/css" href="n.css">
</head>

<body>
<?php
	$u1=$_SESSION['u'];
	echo "you are logged in as"." ".$u1." ";?>

<div id="wrapper">
   
	<form name="Activity updates " class="login-form" action="f2_sy.php" method="post">
	
		<div class="header">
		<h1>Activity updates</h1>
		<span>Fill out the Roll Number and Date below regarding activity details of student.</span>
		</div>
	
		<div class="content">
		Rollno<input name="rollno" type="number"  style="margin-left:62px;" placeholder="rollno" pattern="[0-9]{1}{2}" title="Enter Roll Number" 				        required="required" onMouseOver="check('rollno')"  />
        <div class=""></div>
		
        Date<input id='sel' name='date'  style="margin-left:71px;" readonly='readonly' required='required' title="choose date" />
		
	<img src='calendar.png' onclick='dispCal()' style='cursor: pointer; vertical-align: middle;' />
      <table class='calendar' id='calendar' border=0 cellpadding=0 cellspacing=0>
            <tr class='monthdisp'>
                <td class='navigate' align='left'><img src='previous.png' onclick='return prev()' /></td>
                <td align='center' id='month'></td>
                <td class='navigate' align='right'><img src='next.png' onclick='return next()' /></td>
                </tr>
            <tr>
                <td colspan=3>
                    <table id='dispDays' border=0 cellpadding=4 cellspacing=4>                        
                    </table>                    
                </td>
            </tr>
        </table>
        <div class="date-icon"></div>
        </div>       
    	<div class="footer">
		<input type="submit" name="submit" value="Next" class="button" align="middle"  />
		
		</div>
 </form>
  </div>
 
</body>
</html>