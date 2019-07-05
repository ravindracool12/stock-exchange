@extends("layouts.admin")

@section('content')


<section style="margin-top: 50px;">
<div class="container">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>S.N</th>
        <!-- <th>Date</th> -->
        <th>User Id</th>
        <th>Member Name </th>
        <th>Mobile</th>
        <!-- <th>User type</th>
        <th>Remember token</th>
        <th>Created at</th> -->
      </tr>
    </thead>
    <tbody>

    	<?php $i=1; ?>
    	<!-- $sno=1; -->
    	@foreach($clients as $cli)

      <tr>
        <td>{{$i}}</td>
        <!-- <td>{{15/04/2019}}</td> -->
        <td>{{$cli->email}}</td>
        <td>{{$cli->name}}</td>
        
        <td>{{$cli->mobile}}</td>
       <!--  <td>{{$cli->tokennumber}}</td>
        <td>{{$cli->sponsorid}}</td> -->
    </tr>

     <?php $i++; ?>
        @endforeach  

        <!-- <td>32</td> -->
        
      <!-- </tr>
       <tr>
        <td>2</td>
        <td>15/04/2019</td>
        <td>shivam@1234</td>
        <td>Shivam jha</td>
        
        <td>$354</td>
      </tr>
       <tr>
        <td>3</td>
        <td>15/04/2019</td>
        <td>shivam@1234</td>
        <td>Shivam jha</td>
        
        <td>$354</td>
      </tr>
       <tr>
        <td>4</td>
        <td>15/04/2019</td>
        <td>shivam@1234</td>
        <td>Shivam jha</td>
        
        <td>$354</td>
      </tr>
       <tr>
        <td>5</td>
        <td>15/04/2019</td>
        <td>shivam@1234</td>
        <td>Shivam jha</td>
        
        <td>$354</td>
      </tr>
       <tr>
        <td>6</td>
        <td>15/04/2019</td>
        <td>shivam@1234</td>
        <td>Shivam jha</td>
        
        <td>$354</td>
      </tr>
       <tr>
        <td>7</td>
        <td>15/04/2019</td>
        <td>shivam@1234</td>
        <td>Shivam jha</td>
        
        <td>$354</td>
      </tr>
       <tr>
        <td>8</td>
        <td>15/04/2019</td>
        <td>shivam@1234</td>
        <td>Shivam jha</td>
        
        <td>$354</td>
      </tr>
       <tr>
        <td>9</td>
        <td>15/04/2019</td>
        <td>shivam@1234</td>
        <td>Shivam jha</td>
        
        <td>$354</td>
      </tr>
       <tr>
        <td>10</td>
        <td>15/04/2019</td>
        <td>shivam@1234</td>
        <td>Shivam jha</td>
        
        <td>$354</td>
      </tr> -->
    </tbody>
  </table>
</div>
</section>


@endsection