<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>digonal nav</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
 
html, body {
  height: 100%;
}
* {
  box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body {
   font-family: 'Roboto Condensed', sans-serif;
  line-height: 1.7;
  perspective-origin: 0% 50%;
  perspective: 800px;
  background: #21212d;
    
}
nav, main {
  transition: transform 150ms ease-out;
}
nav {
  z-index: 100;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  width: 16em;
  background-color: #353441;
  transform: translateX(-16em);
}
nav.menu-active {
  transform: translateX(0);
}
nav.menu-hover {
  transform: translateX(-15em);
}
nav h1 {
  z-index: 100;
  display: block;
  position: absolute;
  top: 0;
  right: -65px;
  height: 60px;
  width: 65px;
  line-height: 60px;
  font-size: 0.8em;
  font-weight: 300;
  letter-spacing: 1px;
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  background-color: #353441;
  cursor: pointer;
}
nav h1:hover {
  color: #353441;
  background: #fff;
}
nav ul {
  margin: 0;
  padding: 0;
}
nav li {
  display: inline-block;
  padding: 0 1em;
  width: 100%;
  height: 60px;
  color: #9dc6d1;
  line-height: 60px;
  background-color: #353441;
    transition: all 0.5s ease-in;
}
nav li:nth-of-type(2n) {
  background-color: #3a3947;
}
nav li:hover {
  background: ORANGERED;
    color: white;
     
}
main {
  z-index: 0;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  display: flex;
  background-repeat: no-repeat;
  overflow: scroll;
  background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url(mapo5.jpg);
  transform-origin: 0% 50%;
  align-items: center;
  background-size: cover;
}
main:after {
  content: '';
  display: block;
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: linear-gradient(to right, transparent, rgba(33, 33, 45, .5));
  visibility: hidden;
  opacity: 0;
  transition: opacity 150ms ease-out, visibility 0s 150ms;
}
main.menu-active {
  border-radius: 0.001px;
  transform: translateX(16em) rotateY(15deg);
}
main.menu-active:after {
  visibility: visible;
  opacity: 1;
  transition: opacity 150ms ease-out, visibility 0s;
}
main.menu-hover {
  border-radius: 0.001px;
  transform: translateX(1em) rotateY(1deg);
}
main section {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  padding: 1em 4em;
  max-width: 1000px;
  overflow: auto;
  background-color: rgba(255, 255, 255, .5);
}
section h1 {
  font-weight: 800;
  text-transform: uppercase;
  font-size: 2em;
}
section p {
  display: inline-block;
  margin: 16px 0;
}

    </style>
</head>
<body>
    <nav class="menu-activea">
  <h1>Menu</h1>
  <ul>
    <li><a href="../homepage.php"> Home</a></li>
    <li><a href="../fir.php"> File Complaint</a></li>
    <li><a href="../criminal.php">Search complain</a></li>
    <li><a href="../employee.php"> Employees</a></li>
    <li><a href="../criminaltable.php">Criminal</a></li>
    <li><a href="../index.php">Log out</a></li>
  </ul>
</nav>
<main>
  <section>
      <div class="container">
          <font color = "Brown"><h1>Indian Penal Codes</h2></font>
          <font size="4"><p>The Indian Penal Code (IPC) is the official criminal code of India. It is a comprehensive code intended to cover all substantive <br> aspects of criminal law.</p></font>
          <style>           
          tr:nth-child(even){
          background: rgb(218, 213, 213);
          }
          </style>
          <table class="table table-hover">
            <thead>
              
              <tr>
                <th>Chapter</th>
                <th>Sections Covered</th>
                <th>Classification of Offences</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Chapter 1</td>
                <td>Sections 1 to 5</td>
                <td>Introduction</td>
              </tr>

              <tr>
                <td>Chapter 2</td>
                <td>Sections 6 to 52</td>
                <td>General Explanations</td>
              </tr>

              <tr>
                <td>Chapter 3</td>
                <td>Sections 53 to 75</td>
                <td>of Punishments</td>
              </tr>

              <tr>
                <td>Chapter 4</td>
                <td>Sections 76 to 106</td>
                <td>Right of Private Defence</td>
              </tr>

              <tr>
                <td>Chapter 3</td>
                <td>Sections 53 to 75</td>
                <td>of Punishments</td>
              </tr>
          
              <tr>
                <td>Chapter 3</td>
                <td>Sections 53 to 75</td>
                <td>of Punishments</td>
              </tr>
            
              <tr>
                <td>Chapter 3</td>
                <td>Sections 53 to 75</td>
                <td>of Punishments</td>
              </tr>  
            
              <tr>
                <td>Chapter 3</td>
                <td>Sections 53 to 75</td>
                <td>of Punishments</td>
              </tr>
            
              <tr>
                <td>Chapter 3</td>
                <td>Sections 53 to 75</td>
                <td>of Punishments</td>
              </tr>
      
              <tr>
                <td>Chapter 3</td>
                <td>Sections 53 to 75</td>
                <td>of Punishments</td>
              </tr>
    
              <tr>
                <td>Chapter 3</td>
                <td>Sections 53 to 75</td>
                <td>of Punishments</td>
              </tr>
  
              <tr>
                <td>Chapter 3</td>
                <td>Sections 53 to 75</td>
                <td>of Punishments</td>
              </tr>

              <tr>
                  <td>Chapter 3</td>
                  <td>Sections 53 to 75</td>
                  <td>of Punishments</td>
                </tr>
              
                <tr>
                  <td>Chapter 3</td>
                  <td>Sections 53 to 75</td>
                  <td>of Punishments</td>
                </tr>  
              
                <tr>
                  <td>Chapter 3</td>
                  <td>Sections 53 to 75</td>
                  <td>of Punishments</td>
                </tr>
              
                <tr>
                  <td>Chapter 3</td>
                  <td>Sections 53 to 75</td>
                  <td>of Punishments</td>
                </tr>
        
                <tr>
                  <td>Chapter 3</td>
                  <td>Sections 53 to 75</td>
                  <td>of Punishments</td>
                </tr>
      
                <tr>
                  <td>Chapter 3</td>
                  <td>Sections 53 to 75</td>
                  <td>of Punishments</td>
                </tr>
    
                <tr>
                  <td>Chapter 3</td>
                  <td>Sections 53 to 75</td>
                  <td>of Punishments</td>
                </tr>
            </tbody>
          </table>
        </div>
     
  </section>
</main>
<script>
    (function() {

  var nav = $('nav'),
    menu = $('nav h1'),
    main = $('main'),
  	open = false,
  	hover = false;

  menu.on('click', function() {
		open = !open ? true : false;
    nav.toggleClass('menu-active');
    main.toggleClass('menu-active');
    nav.removeClass('menu-hover');
    main.removeClass('menu-hover');
    console.log(open);
  });
  menu.hover( 
    function() {
      if (!open) {
      	nav.addClass('menu-hover');
      	main.addClass('menu-hover');
      }
    }, function() {
      nav.removeClass('menu-hover');
      main.removeClass('menu-hover');
    }
  );

})();
    
</script>
</body>
</html>