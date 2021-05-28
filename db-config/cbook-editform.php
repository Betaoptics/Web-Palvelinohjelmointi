<title>cbook-editform.php</title>
<link rel="stylesheet" href="tyyli.css" type="text/css">

<div id='container'>
  <?php include('navbar.php');?>
  <?php echo blank_form();?>
</div>


<?php
/*******************  PHP-toiminnot ******** ***********/

/*******************  Tyhjä lomake  ********************/
function edit_form() {

    require_once("/home/M3268/Web-Palvelinohjelmointi/db-config/CustomerDb.php");
    $customerObj = new CustomersDb();
    
    $errMsg = '';
    $success = 0;

    // Datan vastaanotto
    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    
    if ($id != 0) {
        $customer = $customerObj->getCustomer($id);
    }
    
    
    $form = <<<EndOfForm
    <h3>Lisää asiakas</h3>

    <div class="boxi">
    <form action="cbook-save.php" method="post">
       Nimi<br>
      <input type="text" name="name" value="$customer->name"><br>
      Syntymäpäivä<br>
      <input type="text" name="birth_date" value="$customer->birth_date"><br><br>
      <input type="submit" name="nappi" value="Tallenna">
    </form>
    </div>
EndOfForm;

    return $form;
}