<?php

function ValidateName($name) {
    if (trim($name) != "") {
        return "";
    } else {

        $nameError = "Name cannot be blank";
        return $nameError;
    }
}

function ValidatePostalCode($postCode) {
    if (trim($postCode) != "") {
        $postCodeRegEx = "/[a-z][0-9][a-z]\s*[0-9][a-z][0-9]/i";
        if (preg_match($postCodeRegEx, $postCode) != 1) {
            return "Postal code must be in the form of  XnX nXn";
        }
    } else {
        return "Postal code cannot be blank";
    }

    return "";
}

function ValidatePhone($phone) {
    if (trim($phone) != "") {

        $phoneRegExp = "/[2-9][0-9]{2}-[2-9][0-9]{2}-[0-9]{4}/";
        if (preg_match($phoneRegExp, $phone) != 1) {

            $invalidPhoneNumError = "Phone number must be in the form of nnn-nnn-nnnn";
            return $invalidPhoneNumError;
        }
        return "";
    } else {
        $phoneError = "Phone number cannot be blank";
        return $phoneError;
    }
    return "";
}

function ValidateEmail($email) {
    if (trim($email) != "") {

        $emailRegEx = "/\w(\.\w+)*@\w+(\.\w+)*\.\w{2,4}/";
        if (preg_match($emailRegEx, $email) != 1) {

            $invalidEmailError = "Email must be in the form of aaa@xxx.yyy";
            return $invalidEmailError;
        }

        return "";
    } else {
        $emailError = "Email can not be blank";
        return $emailError;
    }
}
?>