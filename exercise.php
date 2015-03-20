<?php

	function ExerciseTitle($id)
	{
		switch($id)
		{
			case 1: return EXERCISE_NAME_1;
			case 2: return EXERCISE_NAME_2;
			case 3: return EXERCISE_NAME_3;
			case 4: return EXERCISE_NAME_4;
		}
		return UNDEF;
	}
	
	function ExercisePrefix($id)
	{
		switch($id)
		{
			case 2: return '';
			case 4: return '';
		}
		return 'x';
	}
	
	function ExercisePostfix($id)
	{
		switch($id)
		{
			case 2: return ' min';
			case 4: return ' min';
		}
		return '';
	}
	
	function ExerciseDescription($id)
	{
		switch($id)
		{
			case 1: return EXERCISE_DESC_1;
			case 2: return EXERCISE_DESC_2;
			case 3: return EXERCISE_DESC_3;
			case 4: return EXERCISE_DESC_4;
		}
		return 'Title undefined';
	}
	
	function GoalDescription($id)
	{
		switch($id)
		{
			case 1: return GOAL1;
			case 2: return GOAL2;
			case 3: return GOAL3;
			case 4: return GOAL4;
		}
		return 'Title undefined';
	}
	
	function GoalKey($id)
	{
		switch($id)
		{
			case 1: return GOALKEY1;
			case 2: return GOALKEY2;
			case 3: return GOALKEY3;
			case 4: return GOALKEY4;
		}
		return 'Title undefined';
	}
	
?>