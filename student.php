<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Anurag</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="homepage.jsp">
                    <img alt="Brand" style="max-width:42px;" src=" llb12.jpg    ">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        
                            <li><a class="nav-link" href="homepage.jsp">Home</a></li>
                            <li><a class="nav-link" href="about.jsp">About us</a></li>
                            <li><a class="nav-link" href="homepage.jsp">Online Books</a></li>
                            <li><a class="nav-link" href="homepage.jsp">Book Issue</a></li>
                            <li><a class="nav-link" href="homepage.jsp">Return Book</a></li>
                       
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Dropdown
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item"  data-toggle="modal" data-target="#stuloginModal" href="#">Student Login</a>
                                      <a class="dropdown-item"  data-toggle="modal" data-target="#teachloginModal" href="#">Teacher Login</a>
                                      <a class="dropdown-item"  data-toggle="modal" data-target="#loginModal" href="#">Admin Login</a>
                                      <a class="dropdown-item" href="homepage.jsp">Home</a>
                                      <div class="dropdown-divider"></div>
                                      
                                    </div>
                                  </li>
                        <li><a class="nav-link" href="contact.jsp">Contact me</a></li>
                    </ul>
                    <span class="navbar-text mr-4">
                        <div class="form-inline">
                        <form  method="get" action="/search" >
                            <input name="query" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-danger my-2 my-sm-0 ml-2" type="submit">Search</button>
                            
                        </form>
                    
    
    
                        </div>
                    </span>
                     <button type="submit" class="btn btn-danger my-2 my-sm-0 ml-2" data-toggle="modal" data-target="#loginModal">Admin Login</button>
                    <button type="submit" class="btn btn-danger my-2 my-sm-0 ml-2" data-toggle="modal" data-target="#signupModal">Admin Signup</button>
                    
                </div>
              
           
        </nav>
       
    
    
     <!-- page contact -->
     <div class="container">
     <h1>Student Registration</h1>
     <hr>
     <form  name="student" method="post" action="adminvalidate.php">
  <div class="form-row">
    <div class="form-group col-md-4">
         <label for="name">Name</label>
         <input type="text" class="form-control" id="signupname" required placeholder="Enter your Name" name="stuname">
     </div> 
     <div class="form-group col-md-4">
         <label for="name">Libid</label>
         <input type="text" class="form-control" id="signupname" required placeholder="Enter your Libid" name="libid">
     </div> 
     <div class="form-group col-md-4">
         <label for="name">Registration</label>
         <input type="text" class="form-control" id="signupname" required placeholder="Enter your Regid" name="regno">
     </div> 
      
    <div class="form-group col-md-6">
        <label for="uname">Username</label>
        <input type="text" class="form-control" id="uname" required placeholder="Enter your username" name="uname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" required placeholder="Password" name="pname">
    </div>
    <div class="form-group col-md-3 ">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4"required placeholder="email" name="email">
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Branch</label>
      <select id="inputState" class="form-control" name="branch">
        <option selected>Choose...</option>
        <option>Computer Science</option>
        <option>Electronics & Communication</option>
        <option>Information Technology</option>
        <option>Mechanical</option>
        <option>Civil</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Semester</label>
      <select id="inputState" class="form-control" name="semester">
        <option selected>Choose...</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="inputState">Year of Adm</label>
      <select id="inputState" class="form-control" name="yearofadm">
        <option selected>Choose...</option>
        <option>2000-05</option>
        <option>2005-10</option>
        <option>2010-15</option>
        <option>2015-20</option>
        <option>2020-25</option>
        <option>2025-30</option>

      </select>
    </div>

    
    
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" required placeholder="1234 Main St" name="address">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" required placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">
        <option selected>Choose...</option>
        <option>AndraPradesh</option>
        <option>ArunchalPradesh</option>
        <option>Assam</option>
        <option>Bihar</option>
        <option>Chhattisgarh</option>
        <option>Goa</option>
        <option>Gujarat</option>
        <option>Haryana</option>
        <option>HimachalPradesh</option>
        <option>Jammu and Kashmir</option>
        <option>Jharkhand</option>
        <option>Karnataka</option>
        <option>kerala</option>
        <option>MadhyaPradesh</option>
        <option>Maharashtra</option>
        <option>Rajasthan</option>
        <option>Sikkim</option>
        <option>Uttarakhand</option>
        <option>Tripura</option>
        <option>UttarPradesh</option>
        <option>Punjab</option>
        <option>Odisha</option>

      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" name="zip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <br>
  <button type="submit" class="btn btn-outline-primary">Sign in</button>
</form>
</div><br>
<button type="button" class="btn btn-secondary btn-lg btn-block ">Copyright &copy; 2019 - All Rights Reserved for EOS LIBRARY-</button>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>