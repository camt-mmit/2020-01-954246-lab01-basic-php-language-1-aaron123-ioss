<?php
printf("Input your score: ");
fscanf(STDIN, "%f", $score);
if($score >= 80) $grade = "A";
else if($score >= 70) $grade = "B";
else if($score >= 60) $grade = "C";
else if($score >= 50) $grade = "D";
else $grade = "F";
printf("You got %s\n", $grade);