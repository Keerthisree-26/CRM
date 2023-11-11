<?php
include('sidebar.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1">

 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 

 

 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 

<script src="https://kit.fontawesome.com/4a71d2502b.js" crossorigin="anonymous"></script>
    <!---materail-icons-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  </head>
  <body>
    <div class="grid-container">
      <!--header-->
      <header class="header">
        <div class="menu-icons" onclick="openSidebar()">
          <span class="material-symbols-outlined"> menu </span>
          <span class="material-symbols-outlined"> search </span>
        </div>
        <div class="header-left"></div>
        <div class="header-right">
          <span class="material-symbols-outlined"> notifications</span>
          <span class="material-symbols-outlined"> mail </span>
          <span class="material-symbols-outlined"> person </span>
        </div>
      </header>
      <!--header-end-->
      <!--sidebar-->
      <div class="sidebar">

 

       

 

    <div class="sidebar-menu">

 

        <h1> Main </h1>  

 

        <ul>

 

            <li>

 

            <a href="dashboard.php" class="active">

 

            <span class="fa-solid fa-house fa-sm" style="color: #217273;"></span>

 

            <span class="names">Dashboard</span>

 

            </a>

 

            </li>

 

            <li>

 

          <a href="leads.php" class="active">

 

          <span class="fa-solid fa-list-check fa-sm" style="color: #217273;"></span>

 

          <span class="names">Leads</span>

 

          </a>

 

          </li>

 

          <li>

 

          <a href="" class="active">

 

          <span class="fa-solid fa-address-book fa-sm" style="color: #217273;"></span>

 

          <span class="names">Staff</span>

 

          </a>

 

          </li>  

 

          <li>

 

          <a href="" class="active">

 

        <span class="fa-solid fa-diagram-project fa-sm" style="color: #217273;"></span>

 

        <span class="names">Contacts</span>

 

        </a>

 

        </li>

 

        <li>

 

        <a href="" class="active">

 

        <span class="fa-solid fa-bug fa-sm" style="color: #217273;"></span>

 

        <span class="names">Help</span>

 

        </a>

 

        </li>

 

       

 

        <li>

 

        <a href="" class="active">

 

        <span class="fa-solid fa-bars fa-sm" style="color: #217273;"></span>

 

        <span class="names">Settings</span>

 

         </a>

         </a>
         <a href="logout.php" class="active">

 

<span class="fa fa-sign-out" style="color: #217273;"></span>



<span class="names">Log out</span>



 </a>

         </li>

 

         </ul>

 

         </div>

 

         </div>
      <!-- End sidebar-->
      <!--Main -->
      <main class="main-container">
        <div class="main-title">
            <h2>DASHBOARD</h2>
        </div>

          <div class="main-cards">

            <div class="card">
              <div class="card-inner">
                <h3>Product</h3>
                <span class="material-symbols-outlined"> inventory_2 </span>
              </div>
              <h1>249</h1>
            </div>

            <div class="card">
              <div class="card-inner">
                <h3>Categories</h3>
                <span class="material-symbols-outlined"> category </span>
              </div>
              <h1>249</h1>
            </div>

            <div class="card">
              <div class="card-inner">
                <h3>Customers</h3>
                <span class="material-symbols-outlined"> group </span>
              </div>
              <h1>1500</h1>
            </div>
            
            <div class="card">
              <div class="card-inner">
                <h3>Alert</h3>
                <span class="material-symbols-outlined"> notification_important </span>
              </div>
              <h1>56</h1>
            </div>
          </div>
        
        <div class="charts">
            <div class="charts-card">
                 <h2 class="chart-title"> Top 5 products</h2>
                 <div id="bar-chart"></div>
            </div>
            
            <div class="charts-card">
                <h2 class="chart-title"> Purchases and sales</h2>
                <div id="area-chart"></div>
           </div>
           
        </div>
      </main>
      <!--Main End-->
    </div>
    <!----sCRIPTS-->
    <!--apex-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.js" integrity="sha512-HctQcT5hnI/elQck4950pvd50RuDnjCSGSoHI8CNyQIYVxsUoyJ+gSQIOrll4oM/Z7Kfi7WCLMIbJbiwYHFCpA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!--custom-->

    <script src="script.js"></script>
  </body>
</html>