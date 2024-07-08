<?php
    session_start();
    if(isset($_SESSION['user'])){
        echo $_SESSION['user'];
    
?>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VITAP Grade Calculator</title>
    <link rel="icon" type="image/png" href="/assets/image-5.jpg" />
    <link rel="stylesheet" href="./styles.css" />
  </head>
<body>
    <?php
if(isset($_POST['logout'])):
    session_unset();
    session_destroy();
    header("Location: login.php");
endif;
?>
<navbar class="roboto-slab">
      <div class="navbar">
        <div class="links">
          <a href="./home.php" class="home">Home</a>
          <a href="./cgpa.php" class="cgpa">CGPA</a>
        </div>
        <div class="toggle-btn">
          <input type="checkbox" id="checkbox" />
          <label for="checkbox" class="toggle-label">
            <span class="toggle-ball"></span>
          </label>
        </div>
      </div>
    </navbar>
    <div class="h1 roboto-slab">
      <h1>VIT GPA CALCULATOR</h1>
    </div>
    <div class="container roboto-slab" id="container">
      <div class="item" id="item-1">
        <label for="COURSE">Course</label>
        <select class="grade-select roboto-slab">
          <option selected>Grade</option>
          <option value="S">S</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
        </select>
        <select class="credits-select roboto-slab">
          <option selected>Credits</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="6">6</option>
          <option value="12">12</option>
        </select>
      </div>
      <div class="item">
        <label for="COURSE">Course</label>
        <select class="grade-select roboto-slab">
          <option selected>Grade</option>
          <option value="S">S</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
        </select>
        <select class="credits-select roboto-slab">
          <option selected>Credits</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="6">6</option>
          <option value="12">12</option>
        </select>
      </div>
      <div class="item">
        <label for="COURSE">Course</label>
        <select class="grade-select roboto-slab">
          <option selected>Grade</option>
          <option value="S">S</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
        </select>
        <select class="credits-select roboto-slab">
          <option selected>Credits</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="6">6</option>
          <option value="12">12</option>
        </select>
      </div>
      <div class="item">
        <label for="COURSE">Course</label>
        <select class="grade-select roboto-slab">
          <option selected>Grade</option>
          <option value="S">S</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
        </select>
        <select class="credits-select roboto-slab">
          <option selected>Credits</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="6">6</option>
          <option value="12">12</option>
        </select>
      </div>
      <div class="item">
        <label for="COURSE">Course</label>
        <select class="grade-select roboto-slab">
          <option selected>Grade</option>
          <option value="S">S</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
        </select>
        <select class="credits-select roboto-slab">
          <option selected>Credits</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="6">6</option>
          <option value="12">12</option>
        </select>
      </div>
      <div class="item">
        <label for="COURSE">Course</label>
        <select class="grade-select roboto-slab">
          <option selected>Grade</option>
          <option value="S">S</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
        </select>
        <select class="credits-select roboto-slab">
          <option selected>Credits</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="6">6</option>
          <option value="12">12</option>
        </select>
      </div>
      <div class="item">
        <label for="COURSE">Course</label>
        <select class="grade-select roboto-slab">
          <option selected>Grade</option>
          <option value="S">S</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
        </select>
        <select class="credits-select roboto-slab">
          <option selected>Credits</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="6">6</option>
          <option value="12">12</option>
        </select>
      </div>
      <div class="item">
        <label for="COURSE">Course</label>
        <select class="grade-select roboto-slab">
          <option selected>Grade</option>
          <option value="S">S</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
        </select>
        <select class="credits-select roboto-slab">
          <option selected>Credits</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="6">6</option>
          <option value="12">12</option>
        </select>
      </div>
      <div class="item">
        <label for="COURSE">Course</label>
        <select class="grade-select roboto-slab">
          <option selected>Grade</option>
          <option value="S">S</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
        </select>
        <select class="credits-select roboto-slab">
          <option selected>Credits</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="6">6</option>
          <option value="12">12</option>
        </select>
      </div>
      <div class="item" id="">
        <label for="COURSE">Course</label>
        <select class="grade-select roboto-slab">
          <option selected>Grade</option>
          <option value="S">S</option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
          <option value="F">F</option>
        </select>
        <select class="credits-select roboto-slab">
          <option selected>Credits</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="6">6</option>
          <option value="12">12</option>
        </select>
      </div>
      <button id="btn" class="roboto-slab">Calculate</button>
    </div>


 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <button type="sub" name="logout">Logout</button>
 </form>
    <script src="./index.js"></script>
    <script src="./toggle.js"></script>
    </body>
    </html>
<?php }else{
        echo "<br>You need to <a href='login.php'>Login</a>First to Access the Page!!";   
}