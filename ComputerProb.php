<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color: #00a260">
    <form action="ComputerProb.php" method="POST">
    <center>
        <h1 style = "background-color: #999999">Mathematical Quiz</h1>
	    <table border="9">
		    <tr>
                <td style = "background-color: #dafaca">1. 10 + 10</td>
			    <td><input type="text" name="q1" placeholder = "Input your Answer here"></td>
                <td>
                    <?php  if(isset($_POST['submit'])){ //trigger when button got clicked
                        $qans1 = $_POST['q1']; //declare variable value
                        $sum = 10 + 10; // equation
                        if ($qans1 == $sum){ //condition if answer is correct
                            echo 'Correct';
                        }elseif ($qans1 == ""){ //condition if user input empty box
                            echo 'Input Answer First';
                        }
                        else{
                                echo 'Corrent Answer is ' . $sum; //if user enter wrong answer
                            }
                    }
                    ?>
                </td>
		    </tr>
		    <tr>
			    <td style = "background-color: #dafaca">2. 6 / 3</td>
			    <td><input type="text" name="q2" placeholder = "Input your Answer here"></td>
                <td>
                    <?php  if(isset($_POST['submit'])){ 
                        $qans2 = $_POST['q2']; 
                        $div = 6 / 3;
                        if ($qans2 == $div){
                            echo 'Correct';
                        }elseif ($qans2 == ""){
                            echo 'Input Answer First';
                        }
                        else{
                                echo 'Corrent Answer is ' . $div;
                            }
                    }
                    ?>
                </td>
		    </tr>
    	    <tr>
			    <td style = "background-color: #dafaca">3. 78 + 100</td>
			    <td><input type="text" name="q3" placeholder = "Input your Answer here"></td>
                <td>
                    <?php  if(isset($_POST['submit'])){ 
                        $qans3 = $_POST['q3']; 
                        $sum = 78 + 100;
                        if ($qans3 == $sum){
                            echo 'Correct';
                        }elseif ($qans3 == ""){
                            echo 'Input Answer First';
                        }
                        else{
                                echo 'Corrent Answer is ' . $sum;
                        }
                    }
                    ?>
                </td>
		    </tr>
    	    <tr>
			    <td style = "background-color: #dafaca">4. 90 - 76</td>
			    <td><input type="text" name="q4" placeholder = "Input your Answer here"></td>
                <td>
                    <?php  if(isset($_POST['submit'])){ 
                        $qans4 = $_POST['q4']; 
                        $diff = 90 - 76;
                        if ($qans4 == $diff){
                            echo 'Correct';
                        }elseif ($qans4 == ""){
                            echo 'Input Answer First';
                        }
                        else{
                                echo 'Corrent Answer is ' . $diff;
                            }
                    }
                    ?>
                </td>
		    </tr>
    	    <tr>
			    <td style = "background-color: #dafaca">5.  40 x 67 </td>
			    <td><input type="text" name="q5" placeholder = "Input your Answer here"></td>
                <td>
                    <?php  if(isset($_POST['submit'])){ 
                        $qans5 = $_POST['q5'];
                        $pro = 40 * 67; 
                        if ($qans5 == $pro){
                            echo 'Correct';
                        }elseif ($qans5 == ""){
                            echo 'Input Answer First';
                        }
                        else{
                                echo 'Corrent Answer is ' . $pro;
                            }
                    }
                    ?>
                </td>
		    </tr>
            <tr>
			    <td style = "background-color: #dafaca">6. 71 + 67 </td>
			    <td><input type="text" name="q6" placeholder = "Input your Answer here"></td>
                <td>
                    <?php  if(isset($_POST['submit'])){ 
                        $qans6 = $_POST['q6']; 
                        $sum = 71 + 67;
                        if ($qans6 == $sum){
                            echo 'Correct';
                        }elseif ($qans6 == ""){
                            echo 'Input Answer First';
                        }
                        else{
                                echo 'Corrent Answer is ' . $sum;
                            }
                    }
                    ?>
                </td>
		    </tr>
            <tr>
			    <td style = "background-color: #dafaca">7. 89/2 </td>
			    <td><input type="text" name="q7" placeholder = "Input REMAINDER"></td>
                <td>
                    <?php  if(isset($_POST['submit'])){ 
                        $qans7 = $_POST['q7']; 
                        $quo = 89 % 2;
                        if ($qans7 == $quo){
                            echo 'Correct';
                        }elseif ($qans7 == ""){
                            echo 'Input Answer First';
                        }
                        else{
                                echo 'Corrent Answer is ' . $quo;
                            }
                    }
                    ?>
                </td>
		    </tr>
            <tr>
			    <td style = "background-color: #dafaca">8. 100/20 </td>
			    <td><input type="text" name="q8" placeholder = "Input your Answer here"></td>
                <td>
                    <?php  if(isset($_POST['submit'])){ 
                        $qans8 = $_POST['q8']; 
                        $quo = 100 / 20;
                        if ($qans8 == $quo){
                            echo 'Correct';
                        }elseif ($qans8 == ""){
                            echo 'Input Answer First';
                        }
                        else{
                                echo 'Corrent Answer is ' . $quo;
                            }
                        }
                    ?>
                </td>
		    </tr>
            <tr>
			    <td style = "background-color: #dafaca">9. 49/2 </td>
			    <td><input type="text" name="q9" placeholder = "Input REMAINDER"></td>
                <td>
                    <?php  if(isset($_POST['submit'])){ 
                        $qans9 = $_POST['q9']; 
                        $quo = 49 / 2;
                        if ($qans9 == $quo){
                            echo 'Correct';
                        }elseif ($qans9 == ""){
                            echo 'Input Answer First';
                        }
                        else{
                                echo 'Corrent Answer is ' . $quo;
                            }
                        }
                    ?>
                </td>
		    </tr>
            <tr>
			    <td style = "background-color: #dafaca">10. 78 - 21</td>
			    <td><input type="text" name="q10" placeholder = "Input your Answer here"></td>
                <td>
                    <?php  if(isset($_POST['submit'])){ 
                        $qans10 = $_POST['q10']; 
                        $diff = 78 - 21;
                        if ($qans10 == $diff){
                            echo 'Correct';
                        }elseif ($qans10 == ""){
                            echo 'Input Answer First';
                        }
                        else{
                                echo 'Corrent Answer is ' . $diff;
                            }
                    }
                    ?>
                </td>
		    </tr>
    	    <tr>
			    <td colspan="2">
                    <center>
			        <input type="submit" name="submit" value="Submit">
				    <input type="reset" name="clear">
                    <td>
                    <?php

                        if(isset($_POST['submit'])){
                        
                            $totalCorrect = 0;
                            if ($qans1 == "20") { $totalCorrect++; }
                            if ($qans2 == "2") { $totalCorrect++; }
                            if ($qans3 == "178") { $totalCorrect++; }
                            if ($qans4 == "14") { $totalCorrect++; }
                            if ($qans5 == "2680") { $totalCorrect++; }
                            if ($qans6 == "138") { $totalCorrect++; }
                            if ($qans7 == "1") { $totalCorrect++; }
                            if ($qans8 == "5") { $totalCorrect++; }
                            if ($qans9 == "24.5") { $totalCorrect++; }
                            if ($qans10 == "57") { $totalCorrect++; }
                            
                            echo "$totalCorrect / 10 correct</div>";
                            if ($totalCorrect >= 5){
                                echo ' = Passed';
                            }else{
                                    echo ' = Failed';
                                }
                            }
                        ?>
                    </td>
                    <center>
			    </td>
		    </tr>
	    </table>
    </center>
</body>
</html>