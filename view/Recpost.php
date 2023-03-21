<?php
include_once dirname(__DIR__) . "/controller/ControllerCandidat.php";
    $Cont = new ControllerCandidat();
    $Cont->setChoix();

    
    $candidats = $Cont->getsCandidats();;

// loop through the results and do something with each row


?>

<?php
include_once dirname(__DIR__) . "/controller/ControllerRecruter.php";
    $Cont = new ControlleR();
    $Cont->setParam();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://form.taxi/design/css/ft-form-styles-v3.css">
    <title>Document</title>
    <!-- BoxIcons v2.1.2 -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <!-- Roboto Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- CSS File -->
    <style>
        body{
            display: flex;
            flex-direction: row;

            font-family: sans-serif;

            height: 100vh;
        }
        body form {
            background: #f0edfa url('https://form.taxi/design/img/SampleForm-Divider2.svg') bottom no-repeat;
            background-size: 100% auto;
            padding: 20px 50px;
            border-radius:10px;
        }
        #ft-form .btns{
            text-align:center;
        }
    .sidebar {
    width: 120px;
    backdrop-filter: blur(6px);
    background: rgba(10, 10, 10, .65);
    box-shadow: 0 8px 32px rgb(2, 4, 24);
    border-right: 2px solid rgba(255, 255, 255, .09);
    transition: .4s ease-in-out;
}
.sidebar.open {
    width: 360px;
}
.sidebar .logo {
    width: 100%;
    height: 240px;
    padding: 40px 0;
    display: grid;
    align-items: center;
    justify-items: center;
}
.sidebar .logo img {
    width: 56px;
    transition: .4s;
}
.sidebar.open .logo img {
    width: 96px;
}
.sidebar .logo h3 {
    color: #fff;
    font-size: 36px;
    margin-top: 12px;
    font-variant: small-caps;
    pointer-events: none;
    scale: 0;
    opacity: 0;
}
.sidebar.open .logo h3 {
    scale: 1;
    opacity: 1;
    transition: .4s;
    transition-delay: .2s;
}
.sidebar .nav-title {
    color: #dadada;
    margin: 40px 0 18px;
    pointer-events: none;
    opacity: 0;
}
.sidebar.open .nav-title {
    opacity: 1;
    transition: .4s;
    transition-delay: .2s;
}
.sidebar nav {
    padding: 0 30px;
}
.sidebar nav .nav-item {
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    border-radius: 4px;
    width: 100%;
    height: 56px;
    padding: 0 16px;
    margin: 8px 0;
    color: #fff;
    transition: .3s;
}
.sidebar nav .nav-item.active {
    background: #ff328e !important;
}
.sidebar nav .nav-item:hover {
    background: rgba(255, 255, 255, .1);
}
.sidebar nav .nav-item i {
    font-size: 26px;
}
.sidebar nav .nav-item span {
    font-size: 18px;
    margin-left: 8px;
    opacity: 0;
    pointer-events: none;
}
.sidebar.open nav .nav-item span {
    opacity: 1;
    pointer-events: visible;
    transition: .4s;
    transition-delay: .2s;
}
.sidebar.open hr {
    opacity: 1;
    transition: .4s;
}
.sidebar .toggle {
    cursor: pointer;
    position: absolute;
    color: #fff;
    top: 180px;
    right: -20px;
    font-size: 38px;
    line-height: 50%;
    text-align: center;
    border-radius: 50%;
    padding: 2px 0 2px 2px;
    background: linear-gradient(
        90deg,
        transparent 50%,
        rgba(10, 10, 10, .65) 50%
    );
}
.sidebar.open .toggle {
    transform: translateY(45px);
}
.sidebar .toggle i {
    transition: .4s linear;
}
.sidebar.open .toggle i {
    transform: rotateY(180deg);
}
a {
    
    text-decoration: none;
    color: #fff;
    display: flex;
    width: 100%;
    flex-direction: row;
}
    </style>
</head>
<body>
   <div class="sidebar">
        <div class="toggle">
            <i class="bx bx-chevron-right"></i>
        </div>
        <div class="logo">
            <img src="https://cdn-icons-png.flaticon.com/512/1251/1251840.png" alt="...">
            <h3> <?php echo $_SESSION["nom"]." ". $_SESSION["prenom"]  ?>  </h3>
        </div>
        <nav>
            <div class="nav-title">
                MENU
            </div>
            <ul>
                <li class="nav-item active">
                    <a href="./dashboard.php">
                        <i class="bx bxs-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./userprofile.php">
                        <i class='bx bxs-user-detail'></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#/chat">
                        <i class='bx bx-chat' ></i>
                        <span>Chat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#/poste">
                        <i class="bx bxs-bell"></i>
                        <span>Poste</span>
                    </a>
                </li>    
            </ul>
        </nav>
    </div>
  <div class="container">

  
    <form action="" id="ft-form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
      
      <fieldset>
        <legend>Information post de Travaille:</legend>
        <div class="two-cols">
          <label>
            Nom de votre Entreprise *
            <input type="text" name="nom-entreprise" required>
          </label>
          <label>
            Nombre d'employes de votre Entreprise *
            <input type="text" name="nombre-employes" required>
          </label>
        </div>
        <div class="two-cols">
          <label>
            Titre de poste *
            <input type="text" name="poste-titre">
          </label>
          <label>
            Telephone de Entreprise:
            <input type="tel" name="telephone-entreprise">
          </label>
        </div>
        
        <div class="two-cols">
          <label>
            Nombre de personnes volez vous
            <input type="text" name="nombre-personne">
          </label>
          <label>
            Ville
            <input type="text" name="City">
          </label>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description de poste</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
        </div>
      </fieldset>
      <div class="btns">
        <input type="text" name="_gotcha" value="" style="display:none;">
        <input type="submit" value="Submit application">
      </div>
    </form>
  </div> 
  
  
  <script>
        const sidebar = document.querySelector('.sidebar');
        const navItems = document.querySelectorAll('nav .nav-item');
        const toggle = document.querySelector('.sidebar .toggle');
toggle.addEventListener('click', () => {
    if (sidebar.className === 'sidebar')
        sidebar.classList.add('open');
    else
        sidebar.classList.remove('open');
});
navItems.forEach(navItem => {
    navItem.addEventListener('click', () => {
        navItems.forEach(navItem => {
            navItem.classList.remove('active');
        });
        navItem.classList.add('active');
    });
});
    </script>
</body>
</html>
