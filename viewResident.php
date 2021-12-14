<?php
    session_start();
    $name = $_SESSION['name'];
    $purok = $_SESSION['purok'];
    $position = $_SESSION['position'];
    $image = $_SESSION['imageLocation'];

    $viewIdNumber = $_SESSION['viewIdNumber'];
    $viewLastName = $_SESSION['viewLastName'];
    $viewFirstName = $_SESSION['viewFirstName'];
    $viewMiddleName = $_SESSION['viewMiddleName'];
    $viewAlias = $_SESSION['viewAlias'];
    $viewMonth = $_SESSION['viewMonth'];
    $viewDay = $_SESSION['viewDay'];
    $viewYear = $_SESSION['viewYear'];
    $viewPOB = $_SESSION['viewPOB'];
    $viewGender = $_SESSION['viewGender'];
    $viewCivilStatus = $_SESSION['viewCivilStatus'];
    $viewVoterStatus = $_SESSION['viewVoterStatus'];
    $viewIfActive = $_SESSION['viewIfActive'];
    $viewReligion = $_SESSION['viewReligion'];
    $viewNationality = $_SESSION['viewNationality'];
    $viewOccupation = $_SESSION['viewOccupation'];
    $viewSector = $_SESSION['viewSector'];
    $viewCityAddress = $_SESSION['viewCityAddress'];
    $viewProvAddress = $_SESSION['viewProvAddress'];
    $viewPurok = $_SESSION['viewPurok'];
    $viewEmail = $_SESSION['viewEmail'];
    $viewMobileNumberA = $_SESSION['viewMobileNumberA'];
    $viewMobileNumberB = $_SESSION['viewMobileNumberB'];
    $viewHomeNumberA = $_SESSION['viewHomeNumberA'];
    $viewHomeNumberB = $_SESSION['viewHomeNumberB'];
    $viewResidentType = $_SESSION['viewResidentType'];
    $viewResidentStatus = $_SESSION['viewResidentStatus'];
    $viewEncoder = $_SESSION['viewEncoder'];
    $viewEncoderPosition = $_SESSION['viewEncoderPosition'];
    $viewImage = $_SESSION['viewImageLocation'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Resident Info</title>
        <link rel="icon" href="./assets/images/logo.png">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"/>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
        <link rel='stylesheet' href='./assets/css/viewResident.css'>
        <link rel="stylesheet" href="./assets/css/main.css">
    </head>
    <body>
        <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
            <div class="sidebar-header d-flex align-items-center px-3 py-4">
            <?php
            echo "<img class='rounded-pill img-fluid border-2' width='25%' src=" .  $image . " alt='Official's Image'>"
            ?>
            <div class="ms-2">
                <h5 class="fs-6 mb-0">
                <a class="text-decoration-none headName" href="viewUser.php"> &nbsp; <?php echo $name; ?></a>
                </h5>
                <p class="mt-1 mb-0 headPlace"> &nbsp; <?php echo $position ?></p>
                <p class="mt-1 mb-0 headPlace"> &nbsp; <?php echo $purok ?></p>
            </div>
            </div>
            <ul class="categories list-unstyled">
            <li><i class="fa fa-home sideIcons"></i><a href="dashboard.php"> Dashboard</a></li>
            <li><i class="fa fa-user sideIcons"></i><a href="viewUser.php"> My Profile</a></li>
            <li><i class="fa fa-list sideIcons"></i><a href="residents.php"> Residents List</a></li>
            <li><i class="fa fa-user-plus sideIcons"></i><a href="registration.php"> Register Resident</a></li>
            <li><i class="fa fa-plus sideIcons"></i><a href="registerOfficial.php"> Register Official</a></li>
            <li><i class="fa fa-power-off sideIcons"></i><a href="index.php"> Logout</a></li>
            </ul>
        </aside>

    <section>
        <div class="container mt-5">
            <form name="residents" method="POST" action="./database/database.php" enctype="multipart/form-data">
                <div class="row welcome mb-2">
                    <div class="col-md-12">
                        <div class="content rounded-3 p-3 col-md-12">
                            <h1>Registered Resident Form</h1>
                            <p>Resident ID No.: <?php echo $viewIdNumber; ?> 
                            <input type='hidden' name='resID' value='<?php echo $viewIdNumber?>'></p>
                            <p>Image Location: <?php echo $viewImage; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <h4>Basic Information</h4>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="row">
                            <div class="row mb-2">
                                <?php echo '<img src='. $viewImage . ' alt="Resident Image">'?>
                            </div>
                            <div class="col-md-6 p-1">                                
                                <input type="file" name="viewResident" accept="image/*" capture="camera">
                            </div>
                        </div>                     
                    </div>
                    <div class="col-md-10">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                <input class="form-control form-control-lg" type="text" id="lName" value="<?php echo $viewLastName ?>" name="lastName" placeholder="Last Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" readonly>
                                <label class="form-label" for="lName">LAST NAME</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                <input class="form-control form-control-lg" type="text" id="fName" value="<?php echo  $viewFirstName ?>" name="firstName" placeholder="First Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" readonly>
                                <label class="form-label" for="fName">FIRST NAME</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                <input class="form-control form-control-lg" type="text" id="mName" value="<?php echo  $viewMiddleName ?>" name="middleName" placeholder="Middle Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" readonly>
                                <label class="form-label" for="mName">MIDDLE NAME</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                <input class="form-control form-control-lg" type="text" id="alias" value="<?php echo  $viewAlias ?>" name="alias" placeholder="alias" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" readonly>
                                <label class="form-label" for="alias">ALIAS</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            
                            <div class="col-md-3 pt-3">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <p>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <H6>BIRTHDATE:
                                        </H6>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <select class="form-control form-control-lg p-2 pt-3" id="bMonth" name="bMonth" readonly> 
                                        <option selected disabled>--SELECT--</option>
                                        <option value="01"  <?php echo ($viewMonth=='01')?('selected'):(''); ?> >January</option>
                                        <option value="02" <?php echo ($viewMonth=='02')?('selected'):(''); ?> >February</option>
                                        <option value="03" <?php echo ($viewMonth=='03')?('selected'):(''); ?> >March</option>
                                        <option value="04" <?php echo ($viewMonth=='04')?('selected'):(''); ?> >April</option>
                                        <option value="05" <?php echo ($viewMonth=='05')?('selected'):(''); ?> >May</option>
                                        <option value="06" <?php echo ($viewMonth=='06')?('selected'):(''); ?> >June</option>
                                        <option value="07" <?php echo ($viewMonth=='07')?('selected'):(''); ?> >July</option>
                                        <option value="08" <?php echo ($viewMonth=='08')?('selected'):(''); ?> >August</option>
                                        <option value="09" <?php echo ($viewMonth=='09')?('selected'):(''); ?> >September</option>
                                        <option value="10" <?php echo ($viewMonth=='10')?('selected'):(''); ?> >October</option>
                                        <option value="11" <?php echo ($viewMonth=='11')?('selected'):(''); ?> >November</option>
                                        <option value="12" <?php echo ($viewMonth=='12')?('selected'):(''); ?> >December</option>
                                    </select>
                                    <label class="form-label" for="bMonth">MONTH</label>    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <select class="form-control form-control-lg p-2 pt-3" id="bDay" name="bDay" readonly>
                                        <option selected disabled>--SELECT--</option>
                                        <option value="01" <?php echo ($viewDay=='01')?('selected'):(''); ?> >01</option>
                                        <option value="02" <?php echo ($viewDay=='02')?('selected'):(''); ?> >02</option>
                                        <option value="03" <?php echo ($viewDay=='03')?('selected'):(''); ?> >03</option>
                                        <option value="04" <?php echo ($viewDay=='04')?('selected'):(''); ?> >04</option>
                                        <option value="05" <?php echo ($viewDay=='05')?('selected'):(''); ?> >05</option>
                                        <option value="06" <?php echo ($viewDay=='06')?('selected'):(''); ?> >06</option>
                                        <option value="07" <?php echo ($viewDay=='07')?('selected'):(''); ?> >07</option>
                                        <option value="08" <?php echo ($viewDay=='08')?('selected'):(''); ?> >08</option>
                                        <option value="09" <?php echo ($viewDay=='09')?('selected'):(''); ?> >09</option>
                                        <option value="10" <?php echo ($viewDay=='10')?('selected'):(''); ?> >10</option>
                                        <option value="11" <?php echo ($viewDay=='11')?('selected'):(''); ?> >11</option>
                                        <option value="12" <?php echo ($viewDay=='12')?('selected'):(''); ?> >12</option>
                                        <option value="13" <?php echo ($viewDay=='13')?('selected'):(''); ?> >13</option>
                                        <option value="14" <?php echo ($viewDay=='14')?('selected'):(''); ?> >14</option>
                                        <option value="15" <?php echo ($viewDay=='15')?('selected'):(''); ?> >15</option>
                                        <option value="16" <?php echo ($viewDay=='16')?('selected'):(''); ?> >16</option>
                                        <option value="17" <?php echo ($viewDay=='17')?('selected'):(''); ?> >17</option>
                                        <option value="18" <?php echo ($viewDay=='18')?('selected'):(''); ?> >18</option>
                                        <option value="19" <?php echo ($viewDay=='19')?('selected'):(''); ?> >19</option>
                                        <option value="20" <?php echo ($viewDay=='20')?('selected'):(''); ?> >20</option>
                                        <option value="21" <?php echo ($viewDay=='21')?('selected'):(''); ?> >21</option>
                                        <option value="22" <?php echo ($viewDay=='22')?('selected'):(''); ?> >22</option>
                                        <option value="23" <?php echo ($viewDay=='23')?('selected'):(''); ?> >23</option>
                                        <option value="24" <?php echo ($viewDay=='24')?('selected'):(''); ?> >24</option>
                                        <option value="25" <?php echo ($viewDay=='25')?('selected'):(''); ?> >25</option>
                                        <option value="26" <?php echo ($viewDay=='26')?('selected'):(''); ?> >26</option>
                                        <option value="27" <?php echo ($viewDay=='27')?('selected'):(''); ?> >27</option>
                                        <option value="28" <?php echo ($viewDay=='28')?('selected'):(''); ?> >28</option>
                                        <option value="29" <?php echo ($viewDay=='29')?('selected'):(''); ?> >29</option>
                                        <option value="30" <?php echo ($viewDay=='30')?('selected'):(''); ?> >30</option>
                                        <option value="31" <?php echo ($viewDay=='31')?('selected'):(''); ?> >31</option>
                                    </select>
                                    <label class="form-label" for="bDay">DAY</label>
                                </div> 
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <select class="form-control form-control-lg p-2 pt-3" id="bYear" name="bYear" readonly>
                                        <option selected disabled>--SELECT--</option>
                                        <option value="2003" <?php echo ($viewYear=='2003')?('selected'):(''); ?> >2003</option>
                                        <option value="2002" <?php echo ($viewYear=='2002')?('selected'):(''); ?> >2002</option>
                                        <option value="2001" <?php echo ($viewYear=='2001')?('selected'):(''); ?> >2001</option>
                                        <option value="2000" <?php echo ($viewYear=='2000')?('selected'):(''); ?> >2000</option>
                                        <option value="1999" <?php echo ($viewYear=='1999')?('selected'):(''); ?> >1999</option>
                                        <option value="1998" <?php echo ($viewYear=='1998')?('selected'):(''); ?> >1998</option>
                                        <option value="1997" <?php echo ($viewYear=='1997')?('selected'):(''); ?> >1997</option>
                                        <option value="1996" <?php echo ($viewYear=='1996')?('selected'):(''); ?> >1996</option>
                                        <option value="1995" <?php echo ($viewYear=='1995')?('selected'):(''); ?> >1995</option>
                                        <option value="1994" <?php echo ($viewYear=='1994')?('selected'):(''); ?> >1994</option>
                                        <option value="1993" <?php echo ($viewYear=='1993')?('selected'):(''); ?> >1993</option>
                                        <option value="1992" <?php echo ($viewYear=='1992')?('selected'):(''); ?> >1992</option>
                                        <option value="1991" <?php echo ($viewYear=='1991')?('selected'):(''); ?> >1991</option>
                                        <option value="1990" <?php echo ($viewYear=='1990')?('selected'):(''); ?> >1990</option>
                                        <option value="1989" <?php echo ($viewYear=='1989')?('selected'):(''); ?> >1989</option>
                                        <option value="1988" <?php echo ($viewYear=='1988')?('selected'):(''); ?> >1988</option>
                                        <option value="1987" <?php echo ($viewYear=='1987')?('selected'):(''); ?> >1987</option>
                                        <option value="1986" <?php echo ($viewYear=='1986')?('selected'):(''); ?> >1986</option>
                                        <option value="1985" <?php echo ($viewYear=='1985')?('selected'):(''); ?> >1985</option>
                                        <option value="1984" <?php echo ($viewYear=='1984')?('selected'):(''); ?> >1984</option>
                                        <option value="1983" <?php echo ($viewYear=='1983')?('selected'):(''); ?> >1983</option>
                                        <option value="1982" <?php echo ($viewYear=='1982')?('selected'):(''); ?> >1982</option>
                                        <option value="1981" <?php echo ($viewYear=='1981')?('selected'):(''); ?> >1981</option>
                                        <option value="1980" <?php echo ($viewYear=='1980')?('selected'):(''); ?> >1980</option>
                                        <option value="1979" <?php echo ($viewYear=='1979')?('selected'):(''); ?> >1979</option>
                                        <option value="1978" <?php echo ($viewYear=='1978')?('selected'):(''); ?> >1978</option>
                                        <option value="1977" <?php echo ($viewYear=='1977')?('selected'):(''); ?> >1977</option>
                                        <option value="1976" <?php echo ($viewYear=='1976')?('selected'):(''); ?> >1976</option>
                                        <option value="1975" <?php echo ($viewYear=='1975')?('selected'):(''); ?> >1975</option>
                                        <option value="1974" <?php echo ($viewYear=='1974')?('selected'):(''); ?> >1974</option>
                                        <option value="1973" <?php echo ($viewYear=='1973')?('selected'):(''); ?> >1973</option>
                                        <option value="1972" <?php echo ($viewYear=='1972')?('selected'):(''); ?> >1972</option>
                                        <option value="1971" <?php echo ($viewYear=='1971')?('selected'):(''); ?> >1971</option>
                                        <option value="1970" <?php echo ($viewYear=='1970')?('selected'):(''); ?> >1970</option>
                                        <option value="1969" <?php echo ($viewYear=='1969')?('selected'):(''); ?> >1969</option>
                                        <option value="1968" <?php echo ($viewYear=='1968')?('selected'):(''); ?> >1968</option>
                                        <option value="1967" <?php echo ($viewYear=='1967')?('selected'):(''); ?> >1967</option>
                                        <option value="1966" <?php echo ($viewYear=='1966')?('selected'):(''); ?> >1966</option>
                                        <option value="1965" <?php echo ($viewYear=='1965')?('selected'):(''); ?> >1965</option>
                                        <option value="1964" <?php echo ($viewYear=='1964')?('selected'):(''); ?> >1964</option>
                                        <option value="1963" <?php echo ($viewYear=='1963')?('selected'):(''); ?> >1963</option>
                                        <option value="1962" <?php echo ($viewYear=='1962')?('selected'):(''); ?> >1962</option>
                                        <option value="1961" <?php echo ($viewYear=='1961')?('selected'):(''); ?> >1961</option>
                                        <option value="1960" <?php echo ($viewYear=='1960')?('selected'):(''); ?> >1960</option>
                                        <option value="1959" <?php echo ($viewYear=='1959')?('selected'):(''); ?> >1959</option>
                                        <option value="1958" <?php echo ($viewYear=='1958')?('selected'):(''); ?> >1958</option>
                                        <option value="1957" <?php echo ($viewYear=='1957')?('selected'):(''); ?> >1957</option>
                                        <option value="1956" <?php echo ($viewYear=='1956')?('selected'):(''); ?> >1956</option>
                                        <option value="1955" <?php echo ($viewYear=='1955')?('selected'):(''); ?> >1955</option>
                                        <option value="1954" <?php echo ($viewYear=='1954')?('selected'):(''); ?> >1954</option>
                                        <option value="1953" <?php echo ($viewYear=='1953')?('selected'):(''); ?> >1953</option>
                                        <option value="1952" <?php echo ($viewYear=='1952')?('selected'):(''); ?> >1952</option>
                                        <option value="1951" <?php echo ($viewYear=='1951')?('selected'):(''); ?> >1951</option>
                                        <option value="1950" <?php echo ($viewYear=='1950')?('selected'):(''); ?> >1950</option>
                                        <option value="1949" <?php echo ($viewYear=='1949')?('selected'):(''); ?> >1949</option>
                                        <option value="1948" <?php echo ($viewYear=='1948')?('selected'):(''); ?> >1948</option>
                                        <option value="1947" <?php echo ($viewYear=='1947')?('selected'):(''); ?> >1947</option>
                                        <option value="1946" <?php echo ($viewYear=='1946')?('selected'):(''); ?> >1946</option>
                                        <option value="1945" <?php echo ($viewYear=='1945')?('selected'):(''); ?> >1945</option>
                                        <option value="1944" <?php echo ($viewYear=='1944')?('selected'):(''); ?> >1944</option>
                                        <option value="1943" <?php echo ($viewYear=='1943')?('selected'):(''); ?> >1943</option>
                                        <option value="1942" <?php echo ($viewYear=='1942')?('selected'):(''); ?> >1942</option>
                                        <option value="1941" <?php echo ($viewYear=='1941')?('selected'):(''); ?> >1941</option>
                                        <option value="1940" <?php echo ($viewYear=='1940')?('selected'):(''); ?> >1940</option>
                                        <option value="1939" <?php echo ($viewYear=='1939')?('selected'):(''); ?> >1939</option>
                                        <option value="1938" <?php echo ($viewYear=='1938')?('selected'):(''); ?> >1938</option>
                                        <option value="1937" <?php echo ($viewYear=='1937')?('selected'):(''); ?> >1937</option>
                                        <option value="1936" <?php echo ($viewYear=='1936')?('selected'):(''); ?> >1936</option>
                                        <option value="1935" <?php echo ($viewYear=='1935')?('selected'):(''); ?> >1935</option>
                                        <option value="1934" <?php echo ($viewYear=='1934')?('selected'):(''); ?> >1934</option>
                                        <option value="1933" <?php echo ($viewYear=='1933')?('selected'):(''); ?> >1933</option>
                                        <option value="1932" <?php echo ($viewYear=='1932')?('selected'):(''); ?> >1932</option>
                                        <option value="1931" <?php echo ($viewYear=='1931')?('selected'):(''); ?> >1931</option>
                                        <option value="1930" <?php echo ($viewYear=='1930')?('selected'):(''); ?> >1930</option>
                                        <option value="1929" <?php echo ($viewYear=='1929')?('selected'):(''); ?> >1929</option>
                                        <option value="1928" <?php echo ($viewYear=='1928')?('selected'):(''); ?> >1928</option>
                                        <option value="1927" <?php echo ($viewYear=='1927')?('selected'):(''); ?> >1927</option>
                                        <option value="1926" <?php echo ($viewYear=='1926')?('selected'):(''); ?> >1926</option>
                                        <option value="1925" <?php echo ($viewYear=='1925')?('selected'):(''); ?> >1925</option>
                                        <option value="1924" <?php echo ($viewYear=='1924')?('selected'):(''); ?> >1924</option>
                                        <option value="1923" <?php echo ($viewYear=='1923')?('selected'):(''); ?> >1923</option>
                                        <option value="1922" <?php echo ($viewYear=='1922')?('selected'):(''); ?> >1922</option>
                                        <option value="1921" <?php echo ($viewYear=='1921')?('selected'):(''); ?> >1921</option>
                                        <option value="1920" <?php echo ($viewYear=='1920')?('selected'):(''); ?> >1920</option>
                                        <option value="1919" <?php echo ($viewYear=='1919')?('selected'):(''); ?> >1919</option>
                                        <option value="1918" <?php echo ($viewYear=='1918')?('selected'):(''); ?> >1918</option>
                                        <option value="1917" <?php echo ($viewYear=='1917')?('selected'):(''); ?> >1917</option>
                                        <option value="1916" <?php echo ($viewYear=='1916')?('selected'):(''); ?> >1916</option>
                                        <option value="1915" <?php echo ($viewYear=='1915')?('selected'):(''); ?> >1915</option>
                                        <option value="1914" <?php echo ($viewYear=='1914')?('selected'):(''); ?> >1914</option>
                                        <option value="1913" <?php echo ($viewYear=='1913')?('selected'):(''); ?> >1913</option>
                                        <option value="1912" <?php echo ($viewYear=='1912')?('selected'):(''); ?> >1912</option>
                                        <option value="1911" <?php echo ($viewYear=='1911')?('selected'):(''); ?> >1911</option>
                                        <option value="1910" <?php echo ($viewYear=='1910')?('selected'):(''); ?> >1910</option>
                                        <option value="1909" <?php echo ($viewYear=='1909')?('selected'):(''); ?> >1909</option>
                                        <option value="1908" <?php echo ($viewYear=='1908')?('selected'):(''); ?> >1908</option>
                                        <option value="1907" <?php echo ($viewYear=='1907')?('selected'):(''); ?> >1907</option>
                                        <option value="1906" <?php echo ($viewYear=='1906')?('selected'):(''); ?> >1906</option>
                                        <option value="1905" <?php echo ($viewYear=='1905')?('selected'):(''); ?> >1905</option>
                                        <option value="1904" <?php echo ($viewYear=='1904')?('selected'):(''); ?> >1904</option>
                                        <option value="1903" <?php echo ($viewYear=='1903')?('selected'):(''); ?> >1903</option>
                                        <option value="1902" <?php echo ($viewYear=='1902')?('selected'):(''); ?> >1902</option>
                                        <option value="1901" <?php echo ($viewYear=='1901')?('selected'):(''); ?> >1901</option>
                                        <option value="1900" <?php echo ($viewYear=='1900')?('selected'):(''); ?> >1900</option>
                                    </select>
                                <label class="form-label" for="bYear">YEAR</label>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" rows="3" type="text" id="pob" value="<?php echo  $viewPOB?>" name="pob" placeholder="pob" readonly>
                            <label for="pob">PLACE OF BIRTH</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <select class="form-control form-control-lg p-2 pt-3" id="gender" name="gender" readonly>
                                <option selected disabled>--SELECT--</option>
                                <option value="Male" <?php echo ($viewGender=='Male')?('selected'):(''); ?> >Male</option>
                                <option value="Female" <?php echo ($viewGender=='Female')?('selected'):(''); ?> >Female</option>
                            </select>
                            <label class="form-label" for="gender">GENDER</label>    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <select class="form-control form-control-lg p-2 pt-3" id="cStatus" name="cStatus" required>
                                <option selected disabled>--SELECT--</option>
                                <option value="Single" <?php echo ($viewCivilStatus=='Single')?('selected'):(''); ?> >Single</option>
                                <option value="Married" <?php echo ($viewCivilStatus=='Married')?('selected'):(''); ?> >Married</option>
                                <option value="Widowed" <?php echo ($viewCivilStatus=='Widowed')?('selected'):(''); ?> >Widowed</option>
                                <option value="Separated" <?php echo ($viewCivilStatus=='Separated')?('selected'):(''); ?> >Separated</option>
                            </select>
                            <label class="form-label" for="cStatus">CIVIL STATUS</label>    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control form-control-lg p-2 pt-3" id="vStatus" name="vStatus" required>
                                        <option selected disabled>--SELECT--</option>
                                        <option value="Yes" <?php echo ($viewVoterStatus=='Yes')?('selected'):(''); ?> >Yes</option>
                                        <option value="No" <?php echo ($viewVoterStatus=='No')?('selected'):(''); ?> >No</option>
                                    </select>
                                    <label class="form-label" for="vStatus">VOTER'S STATUS</label>    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control form-control-lg p-2 pt-3" id="voteActive" name="voteActive" required>
                                        <option selected disabled>--SELECT--</option>
                                        <option value="active" <?php echo ($viewIfActive=='active')?('selected'):(''); ?> >ACTIVE</option>
                                        <option value="inactive" <?php echo ($viewIfActive=='inactive')?('selected'):(''); ?> >INACTIVE</option>
                                    </select>
                                    <label class="form-label" for="cStatus">IF YES:</label>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="text" id="religion" value="<?php echo  $viewReligion ?>" name="religion" placeholder="religion" required>
                            <label for="religion">RELIGION/BELIEF</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="text" id="nationality" value="<?php echo  $viewNationality ?>" name="nationality" placeholder="nationality" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
                            <label for="nationality">NATIONALITY</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="text" id="occupation" value="<?php echo  $viewOccupation ?>" name="occupation" placeholder="occup" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
                            <label for="occupation">OCCUPATION</label>
                        </div>    
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-control form-control-lg p-2 pt-3" id="sector" name="sector" required>
                                <option selected disabled>--SELECT--</option>
                                <option value="Private" <?php echo ($viewSector=='Private')?('selected'):(''); ?> >Private</option>
                                <option value="Public" <?php echo ($viewSector=='Public')?('selected'):(''); ?> >Public</option>
                                <option value="Government" <?php echo ($viewSector=='Government')?('selected'):(''); ?> >Government</option>
                                <option value="Unemployed" <?php echo ($viewSector=='Unemployed')?('selected'):(''); ?> >Unemployed</option>
                                <option value="OSY" <?php echo ($viewSector=='OSY')?('selected'):(''); ?> >Out of School Youth(OSY)</option>
                                <option value="OSC" <?php echo ($viewSector=='OSC')?('selected'):(''); ?> >Out of Children(OSY)</option>
                                <option value="PWD" <?php echo ($viewSector=='PWD')?('selected'):(''); ?> >Person with Disability(PWD)</option>
                                <option value="SC" <?php echo ($viewSector=='SC')?('selected'):(''); ?> >Senior Citizen(SC)</option>
                                <option value="OFW" <?php echo ($viewSector=='OFW')?('selected'):(''); ?> >Overseas Filipino Worker(OFW)</option>
                                <option value="SP" <?php echo ($viewSector=='SP')?('selected'):(''); ?> >Solo Parent</option>
                                <option value="Indigenous" <?php echo ($viewSector=='Indigenous')?('selected'):(''); ?> >Indigenous</option>
                                <option value="Others" <?php echo ($viewSector=='Others')?('selected'):(''); ?> >Others</option>
                            </select>
                            <label class="form-label" for="sector">SECTOR</label>    
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <h4>
                        Contact Information
                    </h4>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" rows="3" type="text" id="cityAdd" value="<?php echo  $viewCityAddress ?>" name="cityAdd" placeholder="cityAdd" required>
                            <label for="cityAdd">CITY ADDRESS</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" rows="3" type="text" id="provAdd" value="<?php echo  $viewProvAddress ?>" name="provAdd" placeholder="provAdd" required>
                            <label for="provAdd">PROVINCIAL ADDRESS</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="text" id="purok" name="purok" placeholder="Purok" value="<?php echo $viewPurok ?>">
                            <label class="form-label" for="purok">PUROK</label>    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="text" id="email" value="<?php echo  $viewEmail ?>" name="email" placeholder="email" required>
                            <label class="form-label" for="email">E-MAIL ADDRESS</label>    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="number" id="mNumOne" value="<?php echo  $viewMobileNumberA ?>" name="mNumOne" placeholder="mNumOne" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" required>
                            <label class="form-label" for="mNumOne">MOBILE NUMBER 1</label>    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="number" id="mNumTwo" name="mNumTwo" value="<?php echo  $viewMobileNumberB ?>" placeholder="mNumTwo" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" required>
                            <label class="form-label" for="mNumTwo">MOBILE NUMBER 2</label>    
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="number" id="hNumOne" value="<?php echo  $viewHomeNumberA ?>" name="hNumOne" placeholder="hNumOne" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" required>
                            <label class="form-label" for="hNumOne">HOME NUMBER 1</label>    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="number" id="hNumTwo" value="<?php echo  $viewHomeNumberB ?>" name="hNumTwo" placeholder="hNumTwo" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" required>
                            <label class="form-label" for="hNumTwo">HOME NUMBER 2</label>    
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <h4>
                        Registration Details
                    </h4>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-control form-control-lg p-2 pt-3" id="resType" name="resType" required>
                            <option selected disabled>--SELECT--</option>
                            <option value="native" <?php echo ($viewResidentType=='native')?('selected'):(''); ?> >Native</option>
                            <option value="rentee" <?php echo ($viewResidentType=='rentee')?('selected'):(''); ?> >Rentee</option>
                            </select>
                            <label class="form-label" for="cStatus">RESIDENT TYPE</label>    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-control form-control-lg p-2 pt-3" id="resStat" name="resStat" required>
                            <option selected disabled>--SELECT--</option>
                            <option value="active" <?php echo ($viewResidentStatus=='active')?('selected'):(''); ?> >ACTIVE</option>
                            <option value="inactive" <?php echo ($viewResidentStatus=='inactive')?('selected'):(''); ?>>INACTIVE</option>
                            <option value="deceased" <?php echo ($viewResidentStatus=='deceased')?('selected'):(''); ?>>DECEASED</option>
                            </select>
                            <label class="form-label" for="cStatus">RESIDENT STATUS</label>    
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <button type="submit" name="btnSaveEdit" class="btn bg-gradient btn-success border-1 border-dark btn-block btn-large">SAVE CHANGES</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    </body>
</html>