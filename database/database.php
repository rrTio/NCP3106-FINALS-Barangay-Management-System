<?php
include_once('connection.php');

if (isset($_POST['btnLogin'])) {
    $adminUsername = $_POST['username'];
    $adminPassword = $_POST['password'];
    $loginQuery = "SELECT * FROM officials where (email = '$adminUsername' OR username = '$adminUsername') AND officialPassword = '$adminPassword';";
    $login = mysqli_query($conn, $loginQuery);
    
    if ($adminUsername == "admin" && $adminPassword == "admin") {
        $name = "ADMIN NAME";
        $purok = "ADMIN PUROK";
        $position = "ADMIN POSITION";        
        $imageLocation = "../assets/images/sample.jpg";
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['purok'] = $purok;
        $_SESSION['position'] = $position;
        $_SESSION['imageLocation'] = $imageLocation;
        header("Location: ../registerOfficial.php");
    }

    else if (mysqli_num_rows($login) == 1) {
        while ($dashboard = mysqli_fetch_assoc($login)) {
            $name = $dashboard['nameAlias'];
            $position = $dashboard['position'];
            $purok = $dashboard['purok'];
            $image = $dashboard['imageLocation'];
        }
        session_start();
        $_SESSION['imageLocation'] = $image;
        $_SESSION['name'] = $name;
        $_SESSION['position'] = $position;
        $_SESSION['purok'] = $purok;
        header("Location: ../dashboard.php");
    }

    else{
        echo '<script> alert("Error credentials"); </script>';
        header("Location: ../index.php");
    }

}

if (isset($_POST['btnChangePass'])) {
    $username = $_POST['uName'];
    $password = $_POST['newPsswrd'];
    $changePassword = "UPDATE officials SET (username = '$username' OR email = '$username') AND officialPassword = '$password';";
    mysqli_query($conn, $changePassword);
    header("Location: ../index.php");
}

########################################################################################################################################################################################## REGISTRATION

if (isset($_POST['btnRegisterResident'])) {
    $residentID = date("Y") . "-" . substr(hexdec(uniqid()), 12) . date("s");
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $alias = $_POST['alias'];
    $birthMonth = $_POST['bMonth'];
    $birthDay = $_POST['bDay'];
    $birthYear = $_POST['bYear'];
    $placeOfBirth = $_POST['pob'];
    $gender = $_POST['gender'];
    $civilStatus = $_POST['cStatus'];
    $voterStatus = $_POST['vStatus'];
    $ifActive = $_POST['voteActive'];
    $religion = $_POST['religion'];
    $nationality = $_POST['nationality'];
    $occupation = $_POST['occupation'];
    $sector = $_POST['sector'];
    $cityAddress = $_POST['cityAdd'];
    $provAddress = $_POST['provAdd'];
    $purok = $_POST['purok'];
    $email = $_POST['email'];
    $mobileNumberA = $_POST['mNumOne'];
    $mobileNumberB = $_POST['mNumTwo'];
    $houseNumberA = $_POST['hNumOne'];
    $houseNumberB = $_POST['hNumTwo'];
    $residentType = $_POST['resType'];
    $residentStatus = $_POST['resStat'];
    
    $file = $_FILES['imageResident'];
    $fileName = $_FILES['imageResident']['name'];
    $fileTmpName = $_FILES['imageResident']['tmp_name'];
    $fileError = $_FILES['imageResident']['error'];
    $fileType = $_FILES['imageResident']['type'];

    $fileExt = explode('.', $fileName);
    $fileExtension = strtolower(end($fileExt));
    $allow = array('jpg', 'jpeg', 'png');

    if(in_array($fileExtension, $allow)){
        $fileNameNew = strtolower($residentID.$lastName) . '.' . $fileExtension;
        $filePath = './assets/images/residents/'.$fileNameNew;
        $sendToDirectory = '../assets/images/residents/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $sendToDirectory);
    }

    $encoder = $_POST['encoder'];
    $encoderPosition = $_POST['encoderPosition'];
    $encoderPurok = $_POST['encoderPurok'];
    $event = "Registered resident ";
    $timezone = date_default_timezone_set('Asia/Manila');
    $date = date("Y-m-d");
    $time = date("h:i:s A");
    $timestamp = date("Y-m-d h:i:s A");
    $transactionID = "RR-".date("Ymdhis");
    $residentFullName = $lastName.', '.$firstName.' '.$middleName;

    $insertToResident = "INSERT INTO residents (dateRegistered, timeRegistered, residentID, nameFirst, nameMiddle, nameLast, nameAlias, birthMonth, birthDay, birthYear, placeOB, gender, civilStatus, voterStatus, ifActive, religion, nationality, occupation, sector, cityAddress, provAddress, purok, email, mobileNumberA, mobileNumberB, homeNumberA, homeNumberB, residentType, residentStatus, encoder, encoderPosition, imageLocation)
        VALUES ('$date','$time','$residentID','$firstName', '$middleName', '$lastName', '$alias', '$birthMonth', '$birthDay', '$birthYear', '$placeOfBirth', '$gender', '$civilStatus', '$voterStatus', '$ifActive', '$religion', '$nationality', '$occupation', '$sector', '$cityAddress', '$provAddress', '$purok', '$email', '$mobileNumberA', '$mobileNumberB', '$houseNumberA', '$houseNumberB', '$residentType', '$residentStatus', '$encoder', '$encoderPosition', '$filePath');";
    
    $insertToLogs = "INSERT INTO logs (log_date, log_time, log_timestamp, log_event, log_transactionID, log_encoder, log_encoderPosition, log_personID, log_personName, log_purok)
                                VALUES ('$date','$time','$timestamp', '$event', '$transactionID', '$encoder', '$encoderPosition', '$residentID', '$residentFullName', '$encoderPurok');";

    mysqli_query($conn, $insertToResident);
    mysqli_query($conn, $insertToLogs);
    header("Location: ../residents.php");
}

if (isset($_POST['btnRegisterOfficial'])) {
    $idNumber = date("Y") . "-" . substr(hexdec(uniqid()), 12) . date("s");
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $alias = $_POST['alias'];
    $birthMonth = $_POST['bMonth'];
    $birthDay = $_POST['bDay'];
    $birthYear = $_POST['bYear'];
    $placeOfBirth = $_POST['pob'];
    $gender = $_POST['gender'];
    $civilStatus = $_POST['cStatus'];
    $position = $_POST['brgyPosition'];
    $cityAddress = $_POST['cityAdd'];
    $provAddress = $_POST['provAdd'];
    $purok = $_POST['purok'];
    $mobileNumberA = $_POST['mNumOne'];
    $mobileNumberB = $_POST['mNumTwo'];
    $houseNumberA = $_POST['hNumOne'];
    $houseNumberB = $_POST['hNumTwo'];
    $username = $_POST['uName'];
    $email = $_POST['email'];
    $password = $_POST['psswrd'];

    $file = $_FILES['official'];
    $fileName = $_FILES['official']['name'];
    $fileTmpName = $_FILES['official']['tmp_name'];
    $fileError = $_FILES['official']['error'];
    $fileType = $_FILES['official']['type'];

    $fileExt = explode('.', $fileName);
    $fileExtension = strtolower(end($fileExt));
    $allow = array('jpg', 'jpeg', 'png');

    if(in_array($fileExtension, $allow)){
        $fileNameNew = strtolower($idNumber.$lastName) . '.' . $fileExtension;
        $filePath = './assets/images/officials/'.$fileNameNew;
        $sendToDirectory = '../assets/images/officials/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $sendToDirectory);
    }

    $encoder = $_POST['encoder'];
    $encoderPosition = $_POST['encoderPosition'];
    $encoderPurok = $_POST['encoderPurok'];
    $event = "Registered official ";
    $timezone = date_default_timezone_set('Asia/Manila');
    $date = date("Y-m-d");
    $time = date("h:i:s A");
    $timestamp = date("Y-m-d h:i:s A");
    $transactionID = "RO-".date("Ymdhis");
    $officialFullName = $lastName.', '.$firstName.' '.$middleName;

    $insertToOfficials = "INSERT INTO officials (idNumber, nameLast, nameFirst, nameMiddle, nameAlias, birthMonth, birthDay, birthYear, placeOB, gender, civilStatus, position, cityAddress, provAddress, purok, mobileNumberA, mobileNumberB, homeNumberA, homeNumberB, email, username, officialPassword, imageLocation)
    VALUES ('$idNumber','$lastName','$firstName','$middleName','$alias','$birthMonth','$birthDay','$birthYear','$placeOfBirth','$gender','$civilStatus','$position','$cityAddress','$provAddress','$purok','$mobileNumberA','$mobileNumberB','$houseNumberA','$houseNumberB','$email','$username','$password', '$filePath');";

    $insertToLogs = "INSERT INTO logs (log_date, log_time, log_timestamp, log_event, log_transactionID, log_encoder, log_encoderPosition, log_personID, log_personName, log_purok)
                                VALUES ('$date','$time','$timestamp', '$event', '$transactionID', '$encoder', '$encoderPosition', '$idNumber', '$officialFullName', '$encoderPurok');";

    mysqli_query($conn, $insertToOfficials);
    mysqli_query($conn, $insertToLogs);
    header("Location: ../dashboard.php");
}

########################################################################################################################################################################################## VIEWING

if (isset($_POST['btnView'])) {
    $getID = $_POST['btnView'];

    $getQuery = "SELECT * FROM officials WHERE idNumber = '$getID';";
    $getOfficial = mysqli_query($conn, $getQuery);
    if (mysqli_num_rows($getOfficial) > 0) {
        while ($view = mysqli_fetch_assoc($getOfficial)) {
            $viewIdNumber = $view['idNumber'];
            $viewLastName = $view['nameLast'];
            $viewFirstName = $view['nameFirst'];
            $viewMiddleName = $view['nameMiddle'];
            $viewAlias = $view['nameAlias'];
            $viewMonth = $view['birthMonth'];
            $viewDay = $view['birthDay'];
            $viewYear = $view['birthYear'];
            $viewPOB = $view['placeOB'];
            $viewGender = $view['gender'];
            $viewCivilStatus = $view['civilStatus'];
            $viewPosition = $view['position'];
            $viewCityAddress = $view['cityAddress'];
            $viewProvAddress = $view['provAddress'];
            $viewPurok = $view['purok'];
            $viewMobileNumberA = $view['mobileNumberA'];
            $viewMobileNumberB = $view['mobileNumberB'];
            $viewHomeNumberA = $view['homeNumberA'];
            $viewHomeNumberB = $view['homeNumberB'];
            $viewEmail = $view['email'];
            $viewUsername = $view['username'];
            $viewPassword = $view['officialPassword'];
            $viewImage = $view['imageLocation'];
        }

        session_start();
        $_SESSION['getID'] = $viewIdNumber;
        $_SESSION['getLastName'] = $viewLastName;
        $_SESSION['getFirstName'] = $viewFirstName;
        $_SESSION['getMiddleName'] = $viewMiddleName;
        $_SESSION['getAlias'] = $viewAlias;
        $_SESSION['getMonth'] = $viewMonth;
        $_SESSION['getDay'] = $viewDay;
        $_SESSION['getYear'] = $viewYear;
        $_SESSION['getPOB'] = $viewPOB;
        $_SESSION['getGender'] = $viewGender;
        $_SESSION['getCivilStatus'] = $viewCivilStatus;
        $_SESSION['getPosition'] = $viewPosition;
        $_SESSION['getCity'] = $viewCityAddress;
        $_SESSION['getProv'] = $viewProvAddress;
        $_SESSION['getPurok'] = $viewPurok;
        $_SESSION['getMobileA'] = $viewMobileNumberA;
        $_SESSION['getMobileB'] = $viewMobileNumberB;
        $_SESSION['getHomeA'] = $viewHomeNumberA;
        $_SESSION['getHomeB'] = $viewHomeNumberB;
        $_SESSION['getEmail'] = $viewEmail;
        $_SESSION['getUsername'] = $viewUsername;
        $_SESSION['getPassword'] = $viewPassword;
        $_SESSION['viewImage'] = $viewImage;
        header("Location: ../viewUser.php");
        //session results to viewUser.php
    }
}

if (isset($_POST['btnViewResident'])) {
    $getResidentID = $_POST['btnViewResident'];

    $getQuery = "SELECT * FROM residents WHERE residentID = '$getResidentID';";
    $getResidents = mysqli_query($conn, $getQuery);
    if (mysqli_num_rows($getResidents) > 0) {
        while ($view = mysqli_fetch_assoc($getResidents)) {
            $viewIdNumber = $view['residentID'];
            $viewLastName = $view['nameLast'];
            $viewFirstName = $view['nameFirst'];
            $viewMiddleName = $view['nameMiddle'];
            $viewAlias = $view['nameAlias'];
            $viewMonth = $view['birthMonth'];
            $viewDay = $view['birthDay'];
            $viewYear = $view['birthYear'];
            $viewPOB = $view['placeOB'];
            $viewGender = $view['gender'];
            $viewCivilStatus = $view['civilStatus'];
            $viewVoterStatus = $view['voterStatus'];
            $viewIfActive = $view['ifActive'];
            $viewReligion = $view['religion'];
            $viewNationality = $view['nationality'];
            $viewOccupation = $view['occupation'];
            $viewSector = $view['sector'];
            $viewCityAddress = $view['cityAddress'];
            $viewProvAddress = $view['provAddress'];
            $viewPurok = $view['purok'];
            $viewEmail = $view['email'];
            $viewMobileNumberA = $view['mobileNumberA'];
            $viewMobileNumberB = $view['mobileNumberB'];
            $viewHomeNumberA = $view['homeNumberA'];
            $viewHomeNumberB = $view['homeNumberB'];
            $viewResidentType = $view['residentType'];
            $viewResidentStatus = $view['residentStatus'];
            $viewEncoder = $view['encoder'];
            $viewEncoderPosition = $view['encoderPosition'];
            $viewImage = $view['imageLocation'];
        }
        session_start();
        $_SESSION['viewIdNumber'] = $viewIdNumber;
        $_SESSION['viewLastName'] = $viewLastName;
        $_SESSION['viewFirstName'] = $viewFirstName;
        $_SESSION['viewMiddleName'] = $viewMiddleName;
        $_SESSION['viewAlias'] = $viewAlias;
        $_SESSION['viewMonth'] = $viewMonth;
        $_SESSION['viewDay'] = $viewDay;
        $_SESSION['viewYear'] = $viewYear;
        $_SESSION['viewPOB'] = $viewPOB;
        $_SESSION['viewGender'] = $viewGender;
        $_SESSION['viewCivilStatus'] = $viewCivilStatus;
        $_SESSION['viewVoterStatus'] = $viewVoterStatus;
        $_SESSION['viewIfActive'] = $viewIfActive;
        $_SESSION['viewReligion'] = $viewReligion;
        $_SESSION['viewNationality'] = $viewNationality;
        $_SESSION['viewOccupation'] = $viewOccupation;
        $_SESSION['viewSector'] = $viewSector;
        $_SESSION['viewCityAddress'] = $viewCityAddress;
        $_SESSION['viewProvAddress'] = $viewProvAddress;
        $_SESSION['viewPurok'] = $viewPurok;
        $_SESSION['viewEmail'] = $viewEmail;
        $_SESSION['viewMobileNumberA'] = $viewMobileNumberA;
        $_SESSION['viewMobileNumberB'] = $viewMobileNumberB;
        $_SESSION['viewHomeNumberA']  = $viewHomeNumberA;
        $_SESSION['viewHomeNumberB'] = $viewHomeNumberB;
        $_SESSION['viewResidentType'] = $viewResidentType;
        $_SESSION['viewResidentStatus'] = $viewResidentStatus;
        $_SESSION['viewEncoder'] = $viewEncoder;
        $_SESSION['viewEncoderPosition'] = $viewEncoderPosition;
        $_SESSION['viewImageLocation'] = $viewImage;
        header("Location: ../viewResident.php");
    }
}

########################################################################################################################################################################################## EDITING

if (isset($_POST['btnEditOfficial'])) {
    $idNumber = $_POST['idNumber'];
    $civilStatus = $_POST['cStatus'];
    $position = $_POST['brgyPosition'];
    $cityAddress = $_POST['cityAdd'];
    $provAddress = $_POST['provAdd'];
    $purok = $_POST['purok'];
    $mobileNumberA = $_POST['mNumOne'];
    $mobileNumberB = $_POST['mNumTwo'];
    $homeNumberA = $_POST['hNumOne'];
    $homeNumberB = $_POST['hNumTwo'];
    $username = $_POST['uName'];
    $email = $_POST['email'];
    $password = $_POST['psswrd'];

    $time = date("dmY-hisA");

    $file = $_FILES['viewOfficial'];
    $fileName = $_FILES['viewOfficial']['name'];
    $fileTmpName = $_FILES['viewOfficial']['tmp_name'];
    $fileError = $_FILES['viewOfficial']['error'];
    $fileType = $_FILES['viewOfficial']['type'];

    $fileExt = explode('.', $fileName);
    $fileExtension = strtolower(end($fileExt));
    $allow = array('jpg', 'jpeg', 'png');

    if(in_array($fileExtension, $allow)){
        $fileNameNew = strtolower($idNumber.$lastName."_".$time) . '.' . $fileExtension;
        $filePath = './assets/images/officials/'.$fileNameNew;
        $sendToDirectory = '../assets/images/officials/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $sendToDirectory);
    }

    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $timezone = date_default_timezone_set('Asia/Manila');
    $time = date("dmY-hisA");
    $encoder = $_POST['encoder'];
    $encoderPosition = $_POST['encoderPosition'];
    $encoderPurok = $_POST['encoderPurok'];
    $event = "Updated official ";
    $timezone = date_default_timezone_set('Asia/Manila');
    $date = date("Y-m-d");
    $time = date("h:i:s A");
    $timestamp = date("Y-m-d h:i:s A");
    $transactionID = "UO-".date("Ymdhis");
    $officialFullName = $lastName.', '.$firstName.' '.$middleName;

    $editQuery = "UPDATE officials 
    SET civilStatus = '$civilStatus', 
    position = '$position',
    cityAddress = '$cityAddress',
    provAddress = '$provAddress',
    purok = '$purok',
    mobileNumberA = '$mobileNumberA',
    mobileNumberB = '$mobileNumberB',
    homeNumberA = '$homeNumberA',
    homeNumberB = '$homeNumberB',
    username = '$username',
    officialPassword = '$password',
    imageLocation = '$filePath'
    WHERE idNumber = '$idNumber';";

    $insertToLogs = "INSERT INTO logs (log_date, log_time, log_timestamp, log_event, log_transactionID, log_encoder, log_encoderPosition, log_personID, log_personName, log_purok)
                                VALUES ('$date','$time','$timestamp', '$event', '$transactionID', '$encoder', '$encoderPosition', '$idNumber', '$officialFullName', '$encoderPurok');";


    mysqli_query($conn, $editQuery);
    mysqli_query($conn, $insertToLogs);
    header("Location: ../dashboard.php");
}

if (isset($_POST['btnSaveEdit'])) {
    $idNumber = $_POST['resID'];
    $lastName = $_POST['lastName'];
    $civilStatus = $_POST['cStatus'];
    $voterStatus = $_POST['vStatus'];
    $voteActive = $_POST['voteActive'];
    $religion = $_POST['religion'];
    $nationality = $_POST['nationality'];
    $occupation = $_POST['occupation'];
    $sector = $_POST['sector'];
    $cityAddress = $_POST['cityAdd'];
    $provAddress = $_POST['provAdd'];
    $purok = $_POST['purok'];
    $email = $_POST['email'];
    $mobileNumberA = $_POST['mNumOne'];
    $mobileNumberB = $_POST['mNumTwo'];
    $homeNumberA = $_POST['hNumOne'];
    $homeNumberB = $_POST['hNumTwo'];
    $residentType = $_POST['resType'];
    $residentStatus = $_POST['resStat'];

    $file = $_FILES['viewResident'];
    $fileName = $_FILES['viewResident']['name'];
    $fileTmpName = $_FILES['viewResident']['tmp_name'];
    $fileError = $_FILES['viewResident']['error'];
    $fileType = $_FILES['viewResident']['type'];

    $fileExt = explode('.', $fileName);
    $fileExtension = strtolower(end($fileExt));
    $allow = array('jpg', 'jpeg', 'png');

    if(in_array($fileExtension, $allow)){
        $fileNameNew = strtolower($idNumber.$lastName."-".$time) . '.' . $fileExtension;
        $filePath = './assets/images/residents/'.$fileNameNew;
        $saveToDirectory = '../assets/images/residents/'.$fileNameNew;
        move_uploaded_file($fileTmpName, $saveToDirectory);
    }

    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $timezone = date_default_timezone_set('Asia/Manila');
    $time = date("dmY-hisA");
    $encoder = $_POST['encoder'];
    $encoderPosition = $_POST['encoderPosition'];
    $encoderPurok = $_POST['encoderPurok'];
    $event = "Updated resident ";
    $timezone = date_default_timezone_set('Asia/Manila');
    $date = date("Y-m-d");
    $time = date("h:i:s A");
    $timestamp = date("Y-m-d h:i:s A");
    $transactionID = "UR-".date("Ymdhis");
    $residentFullName = $lastName.', '.$firstName.' '.$middleName;

    $insertToLogs = "INSERT INTO logs (log_date, log_time, log_timestamp, log_event, log_transactionID, log_encoder, log_encoderPosition, log_personID, log_personName, log_purok)
                                VALUES ('$date','$time','$timestamp', '$event', '$transactionID', '$encoder', '$encoderPosition', '$idNumber', '$residentFullName', '$encoderPurok');";


    $editQuery = "UPDATE residents 
    SET civilStatus = '$civilStatus', 
    voterStatus = '$voterStatus', 
    ifActive = '$voteActive', 
    religion = '$religion', 
    nationality = '$nationality', 
    occupation = '$occupation', 
    sector = '$sector', 
    cityAddress = '$cityAddress', 
    provAddress = '$provAddress', 
    purok = '$purok', 
    email = '$email', 
    mobileNumberA = '$mobileNumberA', 
    mobileNumberB = '$mobileNumberB', 
    homeNumberA = '$homeNumberA',
    homeNumberB = '$homeNumberB',
    residentType = '$residentType', 
    residentStatus = '$residentStatus', 
    imageLocation = '$filePath'
    WHERE residentID = '$idNumber';";

    mysqli_query($conn, $editQuery);
    mysqli_query($conn, $insertToLogs);

    header("Location: ../residents.php");
}

########################################################################################################################################################################################## DELETION

if (isset($_POST['btnDelete'])) {
    $getID = $_POST['btnDelete'];
    
    $encoder = $_POST['getEncoder'];
    $encoderPosition = $_POST['getPosition']; 
    $encoderPurok = $_POST['getPurok'];

    $selectOfficial = "SELECT * FROM officials WHERE idNumber = '$getID';";
    $getInfo = mysqli_query($conn, $selectOfficial);
    if(mysqli_num_rows($getInfo) == 1){
        while($data = mysqli_fetch_assoc($getInfo)){
            $lastName = $data['nameLast'];
            $firstName = $data['nameFirst'];
            $middleName = $data['nameMiddle'];
        }
        $event = "Deleted official ";
        $timezone = date_default_timezone_set('Asia/Manila');
        $date = date("Y-m-d");
        $time = date("h:i:s A");
        $timestamp = date("Y-m-d h:i:s A");
        $transactionID = "DO-".date("Ymdhis");
        $residentFullName = $lastName.', '.$firstName.' '.$middleName;

        $insertToLogs = "INSERT INTO logs (log_date, log_time, log_timestamp, log_event, log_transactionID, log_encoder, log_encoderPosition, log_personID, log_personName, log_purok)
                                VALUES ('$date','$time','$timestamp', '$event', '$transactionID', '$encoder', '$encoderPosition', '$getID', '$residentFullName', '$encoderPurok');";
        mysqli_query($conn, $insertToLogs);
    }

    $deleteOfficial = "DELETE FROM officials WHERE idNumber = '$getID';";
    mysqli_query($conn, $deleteOfficial);
    
    header("Location: ../dashboard.php");
}

if (isset($_POST['btnDeleteResident'])) {
    $getID = $_POST['btnDeleteResident'];

    $encoder = $_POST['encoder'];
    $encoderPosition = $_POST['encoderPosition']; 
    $encoderPurok = $_POST['encoderPurok'];

    $selectResident = "SELECT * FROM residents WHERE residentID = '$getID';";
    $getInfo = mysqli_query($conn, $selectResident);
    if(mysqli_num_rows($getInfo) == 1){
        while($data = mysqli_fetch_assoc($getInfo)){
            $lastName = $data['nameLast'];
            $firstName = $data['nameFirst'];
            $middleName = $data['nameMiddle'];
        }
        $event = "Deleted resident ";
        $timezone = date_default_timezone_set('Asia/Manila');
        $date = date("Y-m-d");
        $time = date("h:i:s A");
        $timestamp = date("Y-m-d h:i:s A");
        $transactionID = "DR-".date("Ymdhis");
        $residentFullName = $lastName.', '.$firstName.' '.$middleName;

        $insertToLogs = "INSERT INTO logs (log_date, log_time, log_timestamp, log_event, log_transactionID, log_encoder, log_encoderPosition, log_personID, log_personName, log_purok)
                                VALUES ('$date','$time','$timestamp', '$event', '$transactionID', '$encoder', '$encoderPosition', '$getID', '$residentFullName', '$encoderPurok');";
        mysqli_query($conn, $insertToLogs);
    }

    

    $deleteResident = "DELETE FROM residents WHERE residentID = '$getID';";
    mysqli_query($conn, $deleteResident);
    header("Location: ../residents.php");
}


########################################################################################################################################################################################## DOWNLOAD

if(isset($_POST['btnDownloadResidency'])){
    $getId = $_POST['btnDownloadResidency'];

    $getQuery = "SELECT * FROM residents WHERE residentID = '$getId';";
    $getResidents = mysqli_query($conn, $getQuery);
    if (mysqli_num_rows($getResidents) > 0) {
        while ($view = mysqli_fetch_assoc($getResidents)) {
            $viewIdNumber = $view['residentID'];
            $viewLastName = $view['nameLast'];
            $viewFirstName = $view['nameFirst'];
            $viewMiddleName = $view['nameMiddle'];
            $viewAlias = $view['nameAlias'];
            $viewCivilStatus = $view['civilStatus'];
            $viewNationality = $view['nationality'];
            $viewPurok = $view['purok'];
            $viewGender = $view['gender'];
            $viewCityAddress = $view['cityAddress'];
            $viewResidentType = $view['residentType'];
            $viewEncoder = $view['encoder'];
            $viewEncoderPosition = $view['encoderPosition'];
            $viewImageLocation = $view['imageLocation'];
        }

        session_start();
        $_SESSION['PDFIdNumber'] = $viewIdNumber;
        $_SESSION['PDFLastName'] = $viewLastName;
        $_SESSION['PDFFirstName'] = $viewFirstName;
        $_SESSION['PDFMiddleName'] = $viewMiddleName;
        $_SESSION['PDFAlias'] = $viewAlias;
        $_SESSION['PDFCivilStatus'] = $viewCivilStatus;
        $_SESSION['PDFNationality'] = $viewNationality;
        $_SESSION['PDFResidentType'] = $viewResidentType;
        $_SESSION['PDFEncoder'] = $viewEncoder;
        $_SESSION['PDFEncoderPosition'] = $viewEncoderPosition;
        $_SESSION['PDFPurok'] = $viewPurok;
        $_SESSION['PDFGender'] = $viewGender;
        $_SESSION['PDFCityAddress'] = $viewCityAddress;

        $encoder = $_POST['encoder'];
        $encoderPosition = $_POST['encoderPosition'];
        $encoderPurok = $_POST['encoderPurok'];

        $firstName = $_POST['firstName'];
        $middleName = $_POST['middleName'];
        $timezone = date_default_timezone_set('Asia/Manila');
        $time = date("dmY-hisA");
        $encoder = $_POST['encoder'];
        $encoderPosition = $_POST['encoderPosition'];
        $encoderPurok = $_POST['encoderPurok'];
        $event = "Downloaded Certificate of Residency ";
        $timezone = date_default_timezone_set('Asia/Manila');
        $date = date("Y-m-d");
        $time = date("h:i:s A");
        $timestamp = date("Y-m-d h:i:s A");
        $transactionID = "DLCR-".date("Ymdhis");
        $residentFullName = $viewLastName.', '.$viewFirstName.' '.$viewMiddleName;

        $log = "INSERT INTO logs (log_date, log_time, log_timestamp, log_event, log_transactionID, log_encoder, log_encoderPosition, log_personID, log_personName, log_purok) 
        VALUES('$date','$time', '$timestamp', '$event', '$transactionID', '$encoder', '$encoderPosition', '$getId', '$residentFullName', '$encoderPurok');";
        mysqli_query($conn, $log);
        header("Location: ../certificateResidency.php");
    }
    
}

if(isset($_POST['btnDownloadClearance'])){
    $getId = $_POST['btnDownloadClearance'];
    $getQuery = "SELECT * FROM residents WHERE residentID = '$getId';";
    $getResidents = mysqli_query($conn, $getQuery);
    if (mysqli_num_rows($getResidents) > 0) {
        while ($view = mysqli_fetch_assoc($getResidents)) {
            $viewIdNumber = $view['residentID'];
            $viewLastName = $view['nameLast'];
            $viewFirstName = $view['nameFirst'];
            $viewMiddleName = $view['nameMiddle'];
            $viewAlias = $view['nameAlias'];
            $viewMonth = $view['birthMonth'];
            $viewDay = $view['birthDay'];
            $viewYear = $view['birthYear'];
            $viewPurok = $view['purok'];
            $viewResidentType = $view['residentType'];
            $viewResidentStatus = $view['residentStatus'];
            $viewEncoder = $view['encoder'];
            $viewEncoderPosition = $view['encoderPosition'];
            $viewImageLocation = $view['imageLocation'];
        }

        session_start();
        $_SESSION['PDFIdNumber'] = $viewIdNumber;
        $_SESSION['PDFLastName'] = $viewLastName;
        $_SESSION['PDFFirstName'] = $viewFirstName;
        $_SESSION['PDFMiddleName'] = $viewMiddleName;
        $_SESSION['PDFAlias'] = $viewAlias;
        $_SESSION['PDFMonth'] = $viewMonth;
        $_SESSION['PDFDay'] = $viewDay;
        $_SESSION['PDFYear'] = $viewYear;
        $_SESSION['PDFResidentType'] = $viewResidentType;
        $_SESSION['PDFResidentStatus'] = $viewResidentStatus;
        $_SESSION['PDFEncoder'] = $viewEncoder;
        $_SESSION['PDFEncoderPosition'] = $viewEncoderPosition;
        $_SESSION['PDFPurok'] = $viewPurok;
        $_SESSION['PDFImageLocation'] = $viewImageLocation;

        $encoder = $_POST['encoder'];
        $encoderPosition = $_POST['encoderPosition'];
        $encoderPurok = $_POST['encoderPurok'];
        $timezone = date_default_timezone_set('Asia/Manila');
        $time = date("dmY-hisA");
        $encoder = $_POST['encoder'];
        $encoderPosition = $_POST['encoderPosition'];
        $encoderPurok = $_POST['encoderPurok'];
        $event = "Downloaded Barangay Clearance ";
        $timezone = date_default_timezone_set('Asia/Manila');
        $date = date("Y-m-d");
        $time = date("h:i:s A");
        $timestamp = date("Y-m-d h:i:s A");
        $transactionID = "DLBC-".date("Ymdhis");
        $residentFullName = $viewLastName.', '.$viewFirstName.' '.$viewMiddleName;

        $log = "INSERT INTO logs (log_date, log_time, log_timestamp, log_event, log_transactionID, log_encoder, log_encoderPosition, log_personID, log_personName, log_purok) 
        VALUES('$date','$time', '$timestamp', '$event', '$transactionID', '$encoder', '$encoderPosition', '$getId', '$residentFullName', '$encoderPurok');";
        mysqli_query($conn, $log);
        header("Location: ../barangayClearance.php");
    }
}