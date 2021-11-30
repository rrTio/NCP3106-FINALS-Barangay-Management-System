<?php
    session_start();
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
        <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
        <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
        <img
            class="rounded-pill img-fluid"
            width="65"
            src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance"
            alt="">
        <div class="ms-2">
            <h5 class="fs-6 mb-0">
                <a class="text-decoration-none headName" href="#"> &nbsp; <?php echo $_SESSION['name']?></a>
            </h5>
            <p class="mt-1 mb-0 headPlace"> &nbsp; <?php echo $_SESSION['position']?></p>
            <p class="mt-1 mb-0 headPlace"> &nbsp; <?php echo $_SESSION['purok']?></p>
        </div>
    </div>
    <ul class="categories list-unstyled">
        <li><i class="fa fa-home sideIcons"></i><a href="dashboard.php"> Dashboard</a></li>
        <li><i class="fa fa-list sideIcons"></i><a href="residents.php"> Residents List</a></li>
        <li><i class="fa fa-user-plus sideIcons"></i><a href="registration.php"> Register Resident</a></li>
        <li><i class="fa fa-users sideIcons"></i><a href="viewUser.php"> Accounts</a></li>
        <li><i class="fa fa-plus sideIcons"></i><a href="registerOfficial.php"> Add Personnel</a></li>
        <li><i class="fa fa-file sideIcons"></i><a href="#"> Documents</a></li>
        <li><i class="fa fa-power-off sideIcons"></i><a href="index.php"> Logout</a></li>
    </ul>
    </aside>

    <section>
        <div class="container mt-5">
            <form name="residents" method="POST" action="./database/database.php">
                <div class="row welcome mb-2">
                    <div class="col-md-12">
                        <div class="content rounded-3 p-3 col-md-12">
                            <h1>Registered Resident Form</h1>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <h4>Basic Information</h4>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="row mb-2">
                            <img src="E:\xammp\htdocs\NCP3106-FINALS\assets\images\blankpic.jpg" width="180" height="170">
                        </div>
                        <div class="row">
                            <div class="col-md-6 p-1">
                                <button name="btnBrowse" class="btn btn-primary btn-block btn-medium">
                                <i class="fa fa-file sideIcon">&nbsp;BROWSE</i></button>
                            </div>
                            <div class="col-md-6 p-1">
                                <button name="btnCamera" type="file" class="btn btn-primary btn-block btn-medium">
                                <i class="fa fa-camera sideIcon">&nbsp;CAMERA</i></button>
                            </div>
                        </div>                     
                    </div>
                    <div class="col-md-10">
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                <input class="form-control form-control-lg" type="text" id="lName" name="lastName" placeholder="Last Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
                                <label class="form-label" for="lName">LAST NAME</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                <input class="form-control form-control-lg" type="text" id="fName" name="firstName" placeholder="First Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
                                <label class="form-label" for="fName">FIRST NAME</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                <input class="form-control form-control-lg" type="text" id="mName" name="middleName" placeholder="Middle Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
                                <label class="form-label" for="mName">MIDDLE NAME</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                <input class="form-control form-control-lg" type="text" id="alias" name="alias" placeholder="alias" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
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
                                    <select class="form-control form-control-lg p-2 pt-3" id="bMonth" name="bMonth" required>
                                        <option selected disabled>--SELECT--</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <label class="form-label" for="bMonth">MONTH</label>    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <select class="form-control form-control-lg p-2 pt-3" id="bDay" name="bDay" required>
                                        <option selected disabled>--SELECT--</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    <label class="form-label" for="bDay">DAY</label>
                                </div> 
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <select class="form-control form-control-lg p-2 pt-3" id="bYear" name="bYear" required>
                                    <option selected disabled>--SELECT--</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                    <option value="1922">1922</option>
                                    <option value="1921">1921</option>
                                    <option value="1920">1920</option>
                                    <option value="1919">1919</option>
                                    <option value="1918">1918</option>
                                    <option value="1917">1917</option>
                                    <option value="1916">1916</option>
                                    <option value="1915">1915</option>
                                    <option value="1914">1914</option>
                                    <option value="1913">1913</option>
                                    <option value="1912">1912</option>
                                    <option value="1911">1911</option>
                                    <option value="1910">1910</option>
                                    <option value="1909">1909</option>
                                    <option value="1908">1908</option>
                                    <option value="1907">1907</option>
                                    <option value="1906">1906</option>
                                    <option value="1905">1905</option>
                                    <option value="1904">1904</option>
                                    <option value="1903">1903</option>
                                    <option value="1902">1902</option>
                                    <option value="1901">1901</option>
                                    <option value="1900">1900</option>
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
                            <input class="form-control form-control-lg" rows="3" type="text" id="pob" name="pob" placeholder="pob" required>
                            <label for="pob">PLACE OF BIRTH</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="form-floating">
                            <select class="form-control form-control-lg p-2 pt-3" id="gender" name="gender" required>
                                <option selected disabled>--SELECT--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label class="form-label" for="gender">GENDER</label>    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <select class="form-control form-control-lg p-2 pt-3" id="cStatus" name="cStatus" required>
                                <option selected disabled>--SELECT--</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
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
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                    <label class="form-label" for="vStatus">VOTER'S STATUS</label>    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-control form-control-lg p-2 pt-3" id="voteActive" name="voteActive" required>
                                        <option selected disabled>--SELECT--</option>
                                        <option value="active">ACTIVE</option>
                                        <option value="inactive">INACTIVE</option>
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
                            <input class="form-control form-control-lg" type="text" id="religion" name="religion" placeholder="religion" required>
                            <label for="religion">RELIGION/BELIEF</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="text" id="nationality" name="nationality" placeholder="nationality" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
                            <label for="nationality">NATIONALITY</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="text" id="occupation" name="occupation" placeholder="occup" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" required>
                            <label for="occupation">OCCUPATION</label>
                        </div>    
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-control form-control-lg p-2 pt-3" id="sector" name="sector" required>
                                <option selected disabled>--SELECT--</option>
                                <option value="Private">Private</option>
                                <option value="Public">Public</option>
                                <option value="Government">Government</option>
                                <option value="Unemployed">Unemployed</option>
                                <option value="OSY">Out of School Youth(OSY)</option>
                                <option value="OSC">Out of Children(OSY)</option>
                                <option value="PWD">Person with Disability(PWD)</option>
                                <option value="SC">Senior Citizen(SC)</option>
                                <option value="OFW">Overseas Filipino Worker(OFW)</option>
                                <option value="SP">Solo Parent</option>
                                <option value="Indigenous">Indigenous</option>
                                <option value="Others">Others</option>
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
                            <input class="form-control form-control-lg" rows="3" type="text" id="cityAdd" name="cityAdd" placeholder="cityAdd" required>
                            <label for="cityAdd">CITY ADDRESS</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" rows="3" type="text" id="provAdd" name="provAdd" placeholder="provAdd" required>
                            <label for="provAdd">PROVINCIAL ADDRESS</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-2">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="text" id="purok" name="purok" placeholder="Purok" value="<?php echo $_SESSION['purok']; ?>" readonly>
                            <input type="hidden" name="encoder" value="<?php echo $name ?>" readonly>
                            <input type="hidden" name="encoderPosition" value="<?php echo $position ?>" readonly>
                            <label class="form-label" for="purok">PUROK</label>    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="text" id="email" name="email" placeholder="email" required>
                            <label class="form-label" for="email">E-MAIL ADDRESS</label>    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="number" id="mNumOne" name="mNumOne" placeholder="mNumOne" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" required>
                            <label class="form-label" for="mNumOne">MOBILE NUMBER 1</label>    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="number" id="mNumTwo" name="mNumTwo" placeholder="mNumTwo" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" required>
                            <label class="form-label" for="mNumTwo">MOBILE NUMBER 2</label>    
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="number" id="hNumOne" name="hNumOne" placeholder="hNumOne" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" required>
                            <label class="form-label" for="hNumOne">HOME NUMBER 1</label>    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input class="form-control form-control-lg" type="number" id="hNumTwo" name="hNumTwo" placeholder="hNumTwo" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" required>
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
                            <option value="native">Native</option>
                            <option value="rentee">Rentee</option>
                            </select>
                            <label class="form-label" for="cStatus">RESIDENT TYPE</label>    
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-control form-control-lg p-2 pt-3" id="resStat" name="resStat" required>
                            <option selected disabled>--SELECT--</option>
                            <option value="active">ACTIVE</option>
                            <option value="inactive">INACTIVE</option>
                            <option value="deceased">DECEASED</option>
                            </select>
                            <label class="form-label" for="cStatus">RESIDENT STATUS</label>    
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <button type="submit" name="btnRegisterResident" class="btn btn-primary btn-block btn-large">REGISTER NEW RESIDENT</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    </body>
</html>