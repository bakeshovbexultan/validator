<?php

class Validator {


	public function validateEmail ($email) {
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		} else {
			return false;
		}
	}

	public function validatePhoneNumber ($phoneNumber) {
		if (strlen($phoneNumber) == 12) {
			$phoneNumber = substr($phoneNumber, 1);
			return ctype_digit($phoneNumber);
		} else {
			return false;
		}
	}

	public function validatePassword ($password) {
		$strong = 0;

		if (strlen($password) >= 6) {
		    $strong += 1;
		}
		if (strlen($password) >= 12) {
		    $strong += 1;
		}
		if (preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password)) {
		    $strong += 1;
		}
		if (preg_match('/[0-9]/', $password)) {
		    $strong += 1;
		}

		if ($strong >= 3) {
			return true;
		} else {
			return false;
		}
	}

	public function validateDate ($date) {
		$date = date_parse_from_format("d.m.Y", $date);
		return checkdate($date['month'], $date['day'], $date['year']);
	}
}