@extends("layouts.home")

@section("title" , "deposits page | Html convesion")
<section style="margin-bottom: 30px">

<div class="container mt-3">
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
  
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#deposit">DEPOSIT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#withdraw">WITHDRAW</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
  
    <div id="deposit" class="container tab-pane active"><br>
       <!-- <div class="container" style="padding-left: -1px">            -->
          <table class="table table-striped" style="width: 94%">
            <thead>
              <tr>
                <th>Method</th>
                <th></th>
                <th>Currency</th>
                <th>Min. amount</th>
                <th>Commission</th>
                <th>Processing time</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="images/buttons/3.png" width="100" height="30"></td>
                <td>Neteller</td>
                <td>EUR,GBP<br>
                    RUB,USD</td>
                <td>2 EUR/ GBP/ USD<br>
                   60 RUB</td>  
                <td>0 USD</td>
                <td>0-3 days</td>   
                <td><button class="btn">withdraw</button></b></td> 
              </tr>
              <tr>
                <td><img src="images/buttons/3.png" width="100" height="30"></td>
                <td>Neteller</td>
                <td>EUR,GBP<br>
                    RUB,USD</td>
                <td>2 EUR/ GBP/ USD<br>
                   60 RUB</td>
                <td>0 USD</td> 
                <td>0-3 days</td>   
                <td><button class="btn">withdraw</button></b></td>
              </tr>
              <tr>
                <td><img src="images/buttons/3.png" width="100" height="30"></td>
                <td>Neteller</td>
                <td>EUR,GBP<br>
                    RUB,USD</td>
                <td>2 EUR/ GBP/ USD<br>
                   60 RUB</td> 
                <td>0 USD</td> 
                <td>0-3 days</td> 
                <td><button class="btn">withdraw</button></b></td>    
              </tr>
            </tbody>
          </table>
     </div> 
    <div id="withdraw" class="container tab-pane fade"><br>
      <table class="table table-striped" style="width: 94%">
            <thead>
              <tr>
                <th>Method</th>
                <th></th>
                <th>Currency</th>
                <th>Min. amount</th>
                <th>Commission</th>
                <th>Processing time</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><img src="images/buttons/3.png" width="100" height="30"></td>
                <td>Neteller</td>
                <td>EUR,GBP<br>
                    RUB,USD</td>
                <td>2 EUR/ GBP/ USD<br>
                   60 RUB</td>  
                <td>0 USD</td>
                <td>0-3 days</td>   
                <td><button class="btn">withdraw</button></b></td> 
              </tr>
              <tr>
                <td><img src="images/buttons/3.png" width="100" height="30"></td>
                <td>Neteller</td>
                <td>EUR,GBP<br>
                    RUB,USD</td>
                <td>2 EUR/ GBP/ USD<br>
                   60 RUB</td>
                <td>0 USD</td> 
                <td>0-3 days</td>   
                <td><button class="btn">withdraw</button></b></td>
              </tr>
              <tr>
                <td><img src="images/buttons/3.png" width="100" height="30"></td>
                <td>Neteller</td>
                <td>EUR,GBP<br>
                    RUB,USD</td>
                <td>2 EUR/ GBP/ USD<br>
                   60 RUB</td> 
                <td>0 USD</td> 
                <td>0-3 days</td> 
                <td><button class="btn">withdraw</button></b></td>    
              </tr>
            </tbody>
          </table>
      
    </div>
  </div>
</div>


</section>