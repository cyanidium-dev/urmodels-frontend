﻿<?php
$genderFieldset = "Gender: ";
$first_nameFieldset = "First_Name: ";
$last_nameFieldset = "Last Name: ";
$Date_of_BirthFieldset = "Date of Birth: ";
$parents_nameFieldset = "Parents name: ";
$parents_phoneFieldset = "Parents phone: ";
$Contact_NumberFieldset = "Contact Number: ";
$CityFieldset = "City: ";
$CountryFieldset = "Country: ";
$HeightFieldset = "Height: ";
$BustFieldset = "Bust: ";
$WaistFieldset = "Waist: ";
$HipsFieldset = "Hips: ";
$Shoes_sizeFieldset = "Shoes size: ";
$Hair_colorFieldset = "Hair color: ";
$Eyes_colorFieldset = "Eyes color: ";
$photo_HeadshotFieldset = "Photo Headshot: ";
$photo_min_lengthFieldset = "Photo min length: ";
$photo_profileFieldset = "Photo profile: ";
$photo_full_lengthFieldset = "Photo full length: ";
$instFieldset = "Instagram: ";
$tgFieldset = "Telegram: ";

$botToken = "7015438809:AAHGAoDbtgLBCLG9-X2oxKvEqfIwjXCmxH8";

$chatID = "-4199673025";

$redirectURL = "form.php";

$gender = $_POST['gender'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$Date_of_Birth = $_POST['Date_of_Birth'];
$parents_name = $_POST['parents_name'];
$parents_phone = $_POST['parents_phone'];
$Contact_Number = $_POST['Contact_Number'];
$City = $_POST['City'];
$Country = $_POST['Country'];
$Height = $_POST['Height'];
$Bust = $_POST['Bust'];
$Waist = $_POST['Waist'];
$Hips = $_POST['Hips'];
$Shoes_size = $_POST['Shoes_size'];
$Hair_color = $_POST['Hair_color'];
$Eyes_color = $_POST['Eyes_color'];
$photo_Headshot = $_POST['photo_Headshot'];
$photo_min_length = $_POST['photo_min_length'];
$photo_profile = $_POST['photo_profile'];
$photo_full_length = $_POST['photo_full_length'];
$inst = $_POST['inst'];
$tg = $_POST['tg'];

$message = urlencode(
    "$genderFieldset $gender\n" .
    "$first_nameFieldset $first_name\n" .
    "$last_nameFieldset $last_name\n" .
    "$Date_of_BirthFieldset $Date_of_Birth\n" .
    "$parents_nameFieldset $parents_name\n" .
    "$parents_phoneFieldset $parents_phone\n" .
    "$Contact_NumberFieldset $Contact_Number\n" .
    "$CityFieldset $City\n" .
    "$CountryFieldset $Country\n" .
    "$HeightFieldset $Height\n" .
    "$BustFieldset $Bust\n" .
    "$WaistFieldset $Waist\n" .
    "$HipsFieldset $Hips\n" .
    "$Shoes_sizeFieldset $Shoes_size\n" .
    "$Hair_colorFieldset $Hair_color\n" .
    "$Eyes_colorFieldset $Eyes_color\n" .
    "$photo_HeadshotFieldset $photo_Headshot\n" .
    "$photo_min_lengthFieldset $photo_min_length\n" .
    "$photo_profileFieldset $photo_profile\n" .
    "$photo_full_lengthFieldset $photo_full_length\n" .
    "$instFieldset $inst\n" .
    "$tgFieldset $tg"
);

$telegramURL = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=$message";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $telegramURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);

if ($result) {
    header("Location: $redirectURL");
    exit();
} else {
    echo "An error occurred while sending the application.";
}

if ($sendToTelegram) {
    header("Location: form.php?name=$name&phone=$phone");
    echo '<p class="success">Thank you for sending your message!</p>';
    return true;
} else {
    echo '<p class="fail"><b>Error. Message not sent!</b></p>';
}
