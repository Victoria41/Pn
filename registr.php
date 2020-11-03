<?php
include('layouts/header.php')
?>

        <div class="row regist">
            <div class="col-md-4">
                <form action="../mail.php" method ="POST">
                    <div class="form-group row">
                        <label for="name" class="col-sm-4 col-form-label">Անուն Ազգանուն</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name = "name" >
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="bday" class="col-sm-4 col-form-label">Ծննդյան ամսաթիվ</label>
                        <div class="col-sm-8">
                          <input type="date"  class="form-control"  name = "bday">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="vocation" class="col-sm-4 col-form-label">Զինվորական կոչում</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control"  name = "vocation">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-sm-4 col-form-label"  name = "position">Վերջին պաշտոնը</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="start" class="col-sm-4 col-form-label">Ծառայության սկիզբ</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control"  name = "start">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="end" class="col-sm-4 col-form-label">Ծառայության ավարտ</label>
                        <div class="col-sm-8">
                            <input type="date"  class="form-control"  name = "end">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="phone" class="col-sm-4 col-form-label">Հեռախոս</label>
                      <div class="col-sm-8">
                        <input  type= "text" class="form-control"  name = "phone">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control"  name = "email">
                      </div>
                    </div>
                    <button type="submit">send</button>
                  </form>
            </div>

        </div>
       
    <div>

    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>