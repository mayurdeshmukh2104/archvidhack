<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Credit Card - Pure CSS - Flat Design</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.payment.css">
</head>

<body>

  
<div id="area">
  <div class="master-card">
    <div class="card">
      <div class="title">CREDIT / DEBIT CARD</div>
      <div class="input-number"><span class="title-number">CARD NUMBER</span>
        <div class="inputs-number">
          <input type="text" maxlength="4" name="number-card" placeholder="0000" required="required"/>
          <input type="text" maxlength="4" name="number-card" placeholder="0000" required="required"/>
          <input type="text" maxlength="4" name="number-card" placeholder="0000" required="required"/>
          <input type="text" maxlength="4" name="number-card" placeholder="0000" required="required"/>
        </div>
        <div class="selects-date selecters">
          <div class="day-select"><span>MONTH</span>
            <select id="dates">
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
              <option value="">4</option>
              <option value="">5</option>
              <option value="">6</option>
              <option value="">7</option>
              <option value="">8</option>
              <option value="">9</option>
              <option value="">10</option>
              <option value="">11</option>
              <option value="">12</option>
            </select>
          </div>
          <div class="year-select"><span>YEAR</span>
            <select id="dates">
              <option value="">18</option>
              <option value="">19</option>
              <option value="">20</option>
              <option value="">21</option>
              <option value="">22</option>
              <option value="">23</option>
              <option value="">24</option>
              <option value="">25</option>
              <option value="">26</option>
            </select>
          </div>
        </div>
      </div>
      <div class="mark-gold">
        <div class="round">
          <div class="circles">
            <div class="circle-1"> </div>
            <div class="circle-2"> </div>
          </div>
        </div>
      </div>
      <div class="name">
        <div class="secret-area">
          <span><input type="text" name="nameperson" required="required" placeholder="Name on your Card"></span>
        </div>
      </div>
    </div>
    <div class="card-back">
      <div class="tire"></div>
      <div class="secret-area">
        <input type="text" maxlength="3" name="number-card" placeholder="000" required="required"/>
      </div>
      <div class="chip-card"></div>
    </div>
  </div>
  <div class="button-sent">
    <button id="back">BACK</button>
    <button id="continue">CONTINUE</button>
  </div>
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
